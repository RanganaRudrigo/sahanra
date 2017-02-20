<?php

include_once APPPATH."modules/admin/core/MY_Controller.php" ;

class Tours extends MY_Controller
{
    var $page = "tour";

    function __construct()
    {
        parent::__construct();
        $this->load->model('Tours_model','model');
        $this->controller =  get_class();
    }

    function index($TourId=0){
        $this->load->model('Destinations_model','Destination');
        if($TourId){
            $this->obj = $this->model->get($TourId) ;
            if(count(json_decode($this->obj->DestinationCovered)) > 0 ) {
                $this->obj->destinations = $this->Destination
                    ->select('DestinationId as id , DestinationTitle as text')
                    ->order_by(" FIELD(DestinationId, ".implode(json_decode($this->obj->DestinationCovered),",")." ) ",NULL , FALSE )
                    ->get_many_by(['DestinationId' =>json_decode($this->obj->DestinationCovered) ]);
            } 
        }else
            $this->obj = $this->model->get_all_fields() ;

        $this->load->model('packages_model','package');
        $d = [
            'page' => "$this->page/form" ,
            'records' => $this->model->order_by('OrderNo')->get_all() ,
            'packages' => $this->package->order_by('OrderNo')->get_all() ,
            'obj' => $this->obj
        ];
        $this->_form($d,$TourId);
    }

    function days($TourId){
        $Tour = $this->model->select("TourId,TourTitle , Days , TourDays ")->get($TourId);
        $d = [
            'page' => "$this->page/days" ,
            'tour' => $Tour ,
        ];
        if($this->input->post()){
            $this->model->update($TourId,['TourDays'=> json_encode($this->input->post('TourDays')) ]);
            redirect(current_url());
        }
        $this->view($d);
    }


    function _form(&$d,$_id=0){

        $this->form_validation->set_rules("form[TourTitle]","Tour Name","required");
        $this->form_validation->set_rules("form[Image]","Tour Name","required");

        if( $this->form_validation->run() ) {

            $post = $this->input->post('form') ;
            $post['MoreImage'] = json_encode($this->input->post('image'));
            $post['DestinationCovered'] = json_encode( $this->input->post('DestinationCovered') );
             
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
                $this->session->set_flashdata('notification', ["alert"=>"success","text"=>'<strong> Tour Successfully '.(!$_id?"Created.":"Updated.").'</strong>']);
                $this->db->trans_commit();
            }
            redirect(current_url());
        }

        $this->view($d);
    }

    function delete($_id=0){
        $this->model->delete($_id);
        redirect(base_url("admin/$this->controller"));
    }

    function crop($data){
        $this->load->library('image_lib', []);
        $this->image_lib->clear();
    }

    function resize($data){
        $config = array();
        $config['image_library'] = 'gd2';
        $config['source_image'] = $data['full_path'];
        $config['create_thumb'] = FALSE;
        $config['new_image'] = FCPATH.'media/img/thumbs/'.$data['file_name'];
        $config['maintain_ratio'] = FALSE;
        $config['width'] = 270;
        $config['height'] = 240;
        $this->image_lib->initialize($config);
        $this->image_lib->resize();
        $this->image_lib->clear();
    }

    function reorder()
    {
        foreach ($this->input->post('row')  as $OrderNo => $id ){
            $this->model->update($id, ['OrderNo'=>$OrderNo+1]);
        }
    }


}