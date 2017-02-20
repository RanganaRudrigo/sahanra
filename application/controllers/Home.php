<?php

class Home extends Front_Controller
{

    function index(){
 
    }
 
    function contact(){

        $this->form_validation->set_rules("f_name","First Name","required");
        $this->form_validation->set_rules("email","Email","required|valid_email");
        $this->form_validation->set_rules("message","Message","required|min_length[20]");

        if( $this->form_validation->run() ) {
            $this->load->library('curl');
            $this->curl->create("https://www.google.com/recaptcha/api/siteverify");
            $this->curl->post([
                    'secret' => '6Lf8HBMUAAAAAJ00deAQIL3U_JfgEh8v3D7-1Vi5' ,
                    'response' => $this->input->post('g-recaptcha-response')
                ]
            );
            $response = json_decode($this->curl->execute()) ;
            if($response->success){
                $f_name = $_POST['f_name'];
                $l_name = $_POST['l_name'];
                $email = $_POST['email'];
                $number = $_POST['number'];
                $message = $_POST['message'];
                $formcontent=" From: $f_name"." "."$l_name \n email: $email \n Message: $message";
                $recipient = EMAIL;
                $subject = "Add Your Subject Here";
                $mailheader = "From: $email \r\n";
                mail($recipient, $subject, $formcontent, $mailheader) ;

                $this->session->set_flashdata('notification', ["alert"=>"success","text"=>'<strong> Thank you. We will contact you shortly </strong>']);
                redirect(current_url());
            }


        }else{
            if($this->input->post()) {
                $this->session->set_flashdata('notification', ["alert"=>"danger","text"=> validation_errors() ]);
            }
        }
        $this->load->model('Banner_model','banner');
        $d['banner'] = $this->banner->order_by('BannerId',"Desc")->get_by(['BannerFor'=>5]);
        
        $this->view('contact_us',$d);
    }
 

    function error_404(){
        $this->view('404');
    }
 

}