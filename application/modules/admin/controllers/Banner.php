<?php

include_once APPPATH."modules/admin/core/MY_Controller.php" ;

class Banner extends MY_Controller
{
    var $page = "banner";

    function __construct()
    {
        parent::__construct();
        $this->load->model('Banner_model','model');
        $this->controller =  get_class();
    }

    function index($BannerId=0){

        if($BannerId){
            $this->obj = $this->model->get($BannerId) ;
        }else
            $this->obj = $this->model->get_all_fields() ;
        $d = [
            'page' => "$this->page/form" ,
            'records' => $this->model->get_all() ,
            'obj' => $this->obj ,
            'bannerFor' => [
                1 => 'Tour' ,
                2 => 'Destination' ,
                3 => 'Gallery' ,
                4 => 'About Us' ,
                5 => 'Contact Us' ,
                6 => 'Testimonial' ,
                7 => 'About Srilanka' ,
                8 => 'Tailor Made Holiday' ,
                9 => 'Special Offer' ,
            ]
        ];
        $this->_form($d,$BannerId);
    }


    function _form(&$d,$_id=0){
        
        $this->form_validation->set_rules("form[Title]","Banner Name","required");
        $this->form_validation->set_rules("form[Image]","Banner Name","required");

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
                $this->session->set_flashdata('notification', ["alert"=>"success","text"=>'<strong> Banner Successfully '.(!$_id?"Created.":"Updated.").'</strong>']);
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
        $config['maintain_ratio'] = TRUE;
        $config['width'] = 120;
        $this->image_lib->initialize($config);
        $this->image_lib->resize();
        $this->image_lib->clear();
    }




}