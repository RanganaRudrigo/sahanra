<?php

include_once APPPATH."modules/admin/core/MY_Controller.php" ;

class Upload extends MY_Controller {


    var $page = "upload";

    function __construct()
    {
        parent::__construct();
        $this->controller =  get_class();
    }
    
    function index(){
        $extensions = array('jpg', 'jpeg', 'png', 'gif');

        $d['page'] = 'upload/uploader';
        $dir = FCPATH.'media/img/thumbs' ;
        if ($dh = opendir($dir)) {
            while (($file = readdir($dh)) !== false) {
                if (in_array(pathinfo($file, PATHINFO_EXTENSION),$extensions ) && is_file($dir . "/" . $file)) {
                    $d['images'][] = $file;
                }
            }
        }
        $d['images'] = array_reverse($d['images']);
        $this->view($d);
    }

    function delete_image(){

        //       remove thumbs image
       unlink('./media/img/thumbs/'.$this->input->get('img'));

        //       remove original image
//     unlink('./media/img/'.$this->input->get('img'));

    }



}