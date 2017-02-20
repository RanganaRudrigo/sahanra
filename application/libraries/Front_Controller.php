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
        if(!isset($this->tour))
            $this->load->model('tours_model','tour');
        if(!isset($this->destination))
            $this->load->model('destinations_model','destination');
        if(!isset($this->testimonial))
            $this->load->model('testimonial_model','testimonial');
        
        $d =[ 
            'tours' => $this->tour->select('TourTitle,TourId')->order_by('OrderNo')->limit(10)->get_all(),
            'destinations' => $this->destination->select('DestinationTitle,DestinationId')->order_by('OrderNo')->limit(10)->get_all(),
            'testimonials' => $this->testimonial->select('TestimonialTitle,TestimonialId,Image,ShortDescription')->order_by('OrderNo')->limit(3)->get_all(),
        ] ;

        $data['footer'] = $d ;

        $this->load->view($page,$data);
    }


}