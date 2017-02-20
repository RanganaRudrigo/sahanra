<?php
 
class Home extends CI_Controller
{
    function index(){ 
        if($this->session->has_userdata('user') == FALSE){
            $d['error'] ="";
            $this->form_validation->set_rules('username','','required');
            $this->form_validation->set_rules('password','','required|sha1');
            if($this->form_validation->run()){
                 $this->load->model('user_model','user');

                $user = $this->user->get_by([
                    'Username' =>  $this->input->post('username') ,
                    'Password' =>  $this->input->post('password')
                ] ) ;

                if(is_object($user)) {
                    $this->session->set_userdata("user",$user);
                    if($this->session->userdata('url'))
                        redirect($this->session->userdata('url'));
                    redirect(base_url('admin'));
                }else{
                    $d['error'] = "Invalid Username or Password" ;
                }
            }
            $this->load->view('login',$d);
        }else{
            if($this->session->has_userdata('url'))
                redirect($this->session->userdata('url'));
            $this->controller = 'Home'; 

            $this->load->view('dashboard',["user"=> $this->session->userdata('user') ]);
        }
    }

    function logout(){
        $this->session->sess_destroy();
        echo json_encode(['logout'=>true]);
    }

    function subscribe(){
        ob_start();
        $this->load->library('table');
        $query = $this->db->query('SELECT * FROM subscribe');
        $this->table->set_heading('#', 'Email');
        echo $this->table->generate($query);
        $content = ob_get_contents();
        ob_clean();
        header("Content-type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=subscribe.xls");
        echo $content;
        exit();
    }
  
}