<?php
include_once APPPATH."modules/admin/core/MY_Controller.php" ;

class Publication extends MY_Controller
{
    var $page = "publication";

    function __construct()
    {
        parent::__construct();
        $this->load->model('publication_model','model');
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
        $this->form_validation->set_rules("form[PublicationTitle]","Publication Title","required");
        $this->_form($d,$PackageId,['image'=>'MoreImage','youtube'=>'YoutubeUrl']);
    }

    function crop($data){
        $this->load->library('image_lib', []);
        $this->image_lib->clear();
    }




}