<?php

class Csr_model extends MY_Model
{

    var $_table = "csr" ,
        $primary_key = "CSRId";

    var $before_create = ['prop_data_before_create'];
    var $before_update = ['prop_data_before_update'];

    var $_public_fields = [ "CSRId" , "CSRTitle","Image",'BannerImage','MoreImage','ShortDescription',"Description" ,"YoutubeUrl"   ] ;

}