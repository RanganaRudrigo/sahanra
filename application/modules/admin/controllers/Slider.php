<?php

include_once APPPATH."modules/admin/core/MY_Controller.php" ;

class Slider extends MY_Controller
{
    var $page = "slider";

    function __construct()
    {
        parent::__construct();
        $this->load->model('Slider_model','model');
        $this->controller =  get_class();
    }

    function index($SliderId=0){
        if($SliderId){
            $this->obj = $this->model->get($SliderId) ;
        }else
            $this->obj = $this->model->get_all_fields() ;
        $d = [
            'page' => "$this->page/form" ,
            'records' => $this->model->order_by('OrderNo')->get_all() ,
            'obj' => $this->obj
        ];
        $this->form_validation->set_rules("form[SliderTitle]","Slider Name","required");
        $this->form_validation->set_rules("form[Image]","Slider Name","required");
        $this->_form($d,$SliderId,[]);
    }



    function crop($data){
        $this->load->library('image_lib', []);
        $this->image_lib->clear();
    }



}