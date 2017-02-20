<?php

include_once APPPATH."modules/admin/core/MY_Controller.php" ;

class Events extends MY_Controller
{
    var $page = "events";

    function __construct()
    {
        parent::__construct();
        $this->load->model('event_model','model');
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
        $this->form_validation->set_rules("form[EventTitle]","Event Title","required");
        $this->_form($d,$PackageId,['image'=>'MoreImage','youtube'=>'YoutubeUrl']);
    }

    function crop($data){
        $this->load->library('image_lib', []);
        $this->image_lib->clear();
    }



}