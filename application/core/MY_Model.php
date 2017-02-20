<?php
/**
 * A base model with a series of CRUD functions (powered by CI's query builder),
 * validation-in-model support, event callbacks and more.
 *
 * @link http://github.com/jamierumbelow/codeigniter-base-model
 * @copyright Copyright (c) 2012, Jamie Rumbelow <http://jamierumbelow.net>
 */

require_once  APPPATH."core/Base_Model.php" ;

class MY_Model extends Base_Model
{

    protected $soft_delete = TRUE;
    protected $soft_delete_key = 'IsDeleted';

    /**
     * Select the database connection from the group names defined inside the database.php configuration file or an
     * array.
     */
    protected $_database_connection = NULL;

    protected $_private_fields = ['CreatedBy','CreatedDate','ModifiedBy','ModifiedDate','IsDeleted'];
    protected $_public_fields = [];
    private $field_flag = false ;
    /** relationships variables */
    public $has_one = array();
    /** end relationships variables */

    protected $field_names = '';

    public function __construct()
    {
        parent::__construct();
        $this->_set_connection();
        $this->_fetch_table();
        $this->_get_field_name();
        array_walk($this->_public_fields, 'array_prefix', $this->_table );
    }



    /**
     * public function on($connection_group = NULL)
     * Sets a different connection to use for a query
     * @param $connection_group = NULL - connection group in database setup
     * @return obj
     */
    public function on($connection_group = NULL)
    {
        if(isset($connection_group))
        {
            $this->_database->close();
            $this->load->database($connection_group);
            $this->_database = $this->db;
        }
        return $this;
    }

    /**
     * public function reset($connection_group = NULL)
     * Resets the connection to the default used for all the model
     * @return obj
     */
    public function reset()
    {
        if(isset($connection_group))
        {
            $this->_database->close();
            $this->_set_connection();
        }
        return $this;
    }

    /**
     * public funciton fields($fields)
     * does a select() of the $fields
     * @param $fields the fields needed
     * @return $this
     */
    public function select($fields = NULL,$validate=TRUE)
    {
        $this->field_flag = true ;
        if(isset($fields))
        {
            $fields = (is_array($fields)) ? implode(',',$fields) : $fields;
            $this->_database->select($fields,$validate);
        }
        return $this;
    }

    /**
     * private function _fetch_table()
     *
     * Sets the table name when called by the constructor
     *
     */
    private function _fetch_table()
    {
        if (!isset($this->table))
        {
            $this->table = $this->_get_table_name(get_class($this));
        }
    }

    private function _get_table_name($model_name)
    {
        $this->load->helper('inflector');
        $table_name = plural(preg_replace('/(_m|_model)?$/', '', strtolower($model_name)));
        return $table_name;
    }

    /**
     * private function _set_connection()
     *
     * Sets the connection to database
     */
    private function _set_connection()
    {
        isset($this->_database_connection) ? $this->load->database($this->_database_connection) : $this->load->database();
        $this->_database = $this->db;
    }


    /*
     * custom function by : gowtham
     * */
    /** TABLE Fields NAME */
    private function _get_field_name(){
        $this->field_names = (array)$this->db->list_fields($this->_table);
        foreach ($this->field_names as $key => $field){
            $this->field_names[$field] = "";
            unset($this->field_names[$key] );
        } 
    }

    public function get_all_fields(){
        return (object) $this->field_names ;
    }

    public function get_field_name(){
        return (object)array_diff_key($this->field_names, array_flip($this->_private_fields) );
    }

    /** START RELATIONSHIPS */
    function join($table=""){

        if(!empty($this->has_one[$table])) {

            $option = $this->has_one[$table]  ;

            $model = $option['model']."_model" ;

            $this->load->model($option['model'],$model);

            $this->_database->join($this->$model->table(),
                "{$this->$model->table()}.{$this->$model->getPrimaryKey()} = {$this->_table}.{$option['primary_key']}" , $option['join'] );

            if(isset($option['fields'])) {
                $option['fields'] = explode(',',$option['fields']);
                array_walk($option['fields'], 'array_prefix',$this->$model->table() );
                $this->_database->select(  implode(",", $option['fields'] )  );
            }

            if(isset($option['join_model'])) {
                foreach ($option['join_model'] as $join ){
                    $this->$model->join($join);
                }
            }

        }

        return $this;
    }

    /** END RELATIONSHIPS */

    function group_by($where=[]){
        $this->_database->group_by($where);
        return $this;
    }

    function prop_data_before_create($data){
        $data['CreatedBy'] = $this->session->userdata("user")->UserId ;
        $data['CreatedDate'] = date("Y-m-d H:i:s");
        $data['ModifiedBy'] = $this->session->userdata("user")->UserId ;
        $data['ModifiedDate'] = date("Y-m-d H:i:s");
        $data['IsDeleted'] = 0 ;
        return $data;
    }
    
    function prop_data_before_update($data){
        $data['ModifiedBy'] = $this->session->userdata("user")->UserId ;
        $data['ModifiedDate'] = date("Y-m-d H:i:s");
        return $data;
    }

    function replace($data){
        if( empty($data) ) return false;
        if(count(  array_filter($data,'is_array') )>0){
            set_time_limit(30);
            foreach ($data as $row ){
                $this->_database->replace($this->_table,$row);
            }
            return true ;
        }else{
            return $this->_database->replace($this->_table,$data)  ;
        }


    }

    /**
     * @return mixed
     */
    public function getPrimaryKey()
    {
        return $this->primary_key;
    }

    public function getPublic(){ 
        return  (is_array($this->_public_fields )) ?
            implode(",", $this->_public_fields ) : $this->_public_fields ;
    }
    public function getAllFields(){ 
        $field = $this->db->list_fields($this->_table) ;
        array_walk($field , 'array_prefix', $this->_table );
        return  implode(",", $field ) ;
    }


    function get_by()
    {
        if(!$this->field_flag){
            $this->select($this->getPublic());
        }
        $where = func_get_args();
        $this->_set_where($where);
        return parent::get_by([]); // TODO: Change the autogenerated stub
    }

    function  get_many_by()
    {
        if(!$this->field_flag){
            $this->select($this->getPublic());
        }
        $where = func_get_args();
        $this->_set_where($where);
        return parent::get_all(); // TODO: Change the autogenerated stub
    }

    function get_all()
    {
        if(!$this->field_flag){
            $this->select($this->getPublic());
        }
        return parent::get_all(); // TODO: Change the autogenerated stub
    }


}
