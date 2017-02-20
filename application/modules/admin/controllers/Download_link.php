<?php
include_once APPPATH."modules/admin/core/MY_Controller.php" ;

class Download_link extends MY_Controller
{
    var $page = "download";

    function __construct()
    {
        parent::__construct();
        $this->load->model('download_model','model');
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
        $this->form_validation->set_rules("form[DownloadTitle]","Download Title","required");
        $this->form_validation->set_rules("DownloadFile","Download File","required");
        $this->_form($d,$PackageId);
    }

    function _form(&$d, $_id = 0, $more = array())
    {
        if( $this->form_validation->run() ) {

            $post = $this->input->post('form') ;

            $config['upload_path'] =  FCPATH.'media/img/';
            $config['allowed_types'] = 'pdf|doc|docx';
            $config['max_size'] = '30000';
            $config['file_name'] = time();

            $this->load->library('upload', $config);
            if ( $this->upload->do_upload('DownloadFile')) {
                $data = $this->upload->data();
                $post['DownloadFile'] = $data['file_name'];
            }

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
            redirect(base_url("admin/".$this->controller.($_id?"/index/$_id":"") ));
        }else{
            if($this->input->post()){
                $d['obj'] = (object)$this->input->post('form');
                $this->session->set_flashdata('notification', ["alert"=>"danger","text"=> validation_errors() ]);
            }
        }

        $this->view($d);
    }



}