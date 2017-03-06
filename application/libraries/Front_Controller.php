<?php

/**
 * Created by PhpStorm.
 * User: Gowtham
 * Date: 5/4/2016
 * Time: 3:34 PM
 */
class Front_Controller extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('text'); 
    }

    function view($page,$data=[]){

        if(!isset($this->download))
            $this->load->model('download_model','download');
        if(!isset($this->news))
            $this->load->model('news_model','news');

        $data['footer'] = [
            'downloads' => $this->download->order_by("OrderNo")->limit(6)->get_all() ,
            'news' => $this->news->order_by("OrderNo")->limit(3)->get_all()
        ] ;

        $this->load->view($page,$data);
    }


}