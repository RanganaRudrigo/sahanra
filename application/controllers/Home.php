<?php

class Home extends Front_Controller
{

    function index(){

        redirect(base_url('en'));
        // Slider 
        $this->load->model('slider_model','slider');
        $d['sliders'] = $this->slider->order_by('OrderNo')->get_all();
        
        // Success stories
        $this->load->model('story_model','story');
        $d['stories'] = $this->story->order_by('OrderNo')->get_all();

        // Latest 2 News
        $this->load->model('news_model','news');
        $d['news'] = $this->news->order_by('OrderNo')->limit(2)->get_all();

        // Testimonials
        $this->load->model('testimonial_model','testimonial');
        $d['testimonials'] = $this->testimonial->order_by('OrderNo')->get_all();

        $this->view('index',$d);
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

    function overview_and_objectives(){

        $this->view('about/overview_and_objectives');
    }

    function Chairman_Message(){

        $this->view('about/Chairman_Message');
    }
    
    function Board_of_Directors(){

        $this->view('about/Board_of_Directors');
    }

    function Our_Subsidiaries(){

        $this->view('about/Our_Subsidiaries');
    }

    function Milestones(){

        $this->view('about/Milestones');
    }

    function CSR(){
        $this->load->model('csr_model','csr');
        $d['csrs'] = $this->csr->order_by('OrderNo')->get_all() ;
        $this->view('about/CSR',$d);
    }

    function Product_And_Services(){
        $this->load->model('product_model','product');
        $d['products'] = $this->product->order_by('OrderNo')->get_all() ;
        $this->view('products',$d);
    }


    function Partners(){
        $this->view('Partners');
    }

    function Success_Stories(){
        $this->load->model('story_model','story');
        $d['stories'] = $this->story->order_by('OrderNo')->get_all() ;
        $this->view('Success_Stories',$d);
    }
    function Success_Stories_detail($_id){
        $this->load->model('story_model','story');
        $d['story'] = $this->story->get($_id) ;
        if(is_object($d['story'])){
            $d['stories'] = $this->story->order_by('OrderNo')->get_many_by(['StoryId!='=>$_id]) ;
            $this->view('Success_Stories_detail',$d);
        }else{
            show_404();
        }
    }


    function error_404(){
        $this->view('404');
    }
 

}