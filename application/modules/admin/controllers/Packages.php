<?php

include_once APPPATH."modules/admin/core/MY_Controller.php" ;

class Packages extends MY_Controller
{

    var $page = "packages";

    function __construct()
    {
        parent::__construct();
        $this->load->model('packages_model','model');
        $this->controller =  get_class();
    }

    function index($PackageId=0){
        if($PackageId){
            $this->obj = $this->model->get($PackageId) ;
        }else
            $this->obj = $this->model->get_all_fields() ;
        $d = [
            'page' => "$this->page/form" ,
            'records' => $this->model->order_by('OrderNo')->get_all() ,
            'obj' => $this->obj
        ];
        $this->_form($d,$PackageId);
    }
    function _form(&$d,$_id=0){



        $this->form_validation->set_rules("form[PackageTitle]","Package Name","required");

        if( $this->form_validation->run() ) {

            $post = $this->input->post('form') ;
            $this->db->trans_begin();
            if($_id){
                $this->model->update($_id,$post);
            }else{
                $this->model->insert($post);
            }

            if ($this->db->trans_status() === FALSE)  {
                $this->db->trans_rollback();
                $this->session->set_flashdata('notification', ["alert"=>"danger","text"=>'<strong> '.(!$_id?"Creation.":"Update.").' Failure !!! </strong>']);
            }
            else  {
                $this->session->set_flashdata('notification', ["alert"=>"success","text"=>'<strong> Event Successfully '.(!$_id?"Created.":"Updated.").'</strong>']);
                $this->db->trans_commit();
            }
            redirect(base_url("admin/".$this->controller));
        }

        $this->view($d);
    }

    function delete($_id=0){
        $this->model->delete($_id);
        redirect(base_url("admin/$this->controller"));
    }

    function reorder()
    {
        foreach ($this->input->post('row')  as $OrderNo => $id ){
            $this->model->update($id, ['OrderNo'=>$OrderNo+1]);
        }
    }

}