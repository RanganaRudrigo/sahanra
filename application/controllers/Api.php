<?php

/**
 * Created by PhpStorm.
 * User: Gowtham
 * Date: 1/25/2017
 * Time: 3:10 PM
 */
class Api extends REST_Controller
{

    function get_province_by_country_id_get(){

        $province = $this->db->from('zone')->select('name,zone_id')->where('country_id',$this->get('country_id'))->get()->result();
        $this->response($province);
    }

    function subscribe_get(){ 
        if($this->get('Email')) {
            $this->form_validation->set_data($this->get());
            $this->form_validation->set_rules('Email','Email','valid_email|is_unique[subscribe.Email]');
            if($this->form_validation->run()){
                $this->db->insert('subscribe',$this->get());
                $this->response(['hasError'=>false]);
            }else{
                $this->response(['hasError'=>true,'Error'=> form_error('Email') ]);
            }
        }
    }

    function uploaded_images_get(){
        $extensions = array('jpg', 'jpeg', 'png', 'gif');
        $dir = FCPATH.'media/img/thumbs' ;
        $d['images'] = [];
        if ($dh = opendir($dir)) {
            while (($file = readdir($dh)) !== false) {
                if (in_array(pathinfo($file, PATHINFO_EXTENSION),$extensions ) && is_file($dir . "/" . $file)) {
                    $d['images'][] = $file;
                }
            }
        }
        $this->response( array_reverse($d['images']) );
    }

}