<?php
 
class Career_model extends MY_Model
{
    var $_table = "career" ,
        $primary_key = "CareerId";

    var $before_create = ['prop_data_before_create'];
    var $before_update = ['prop_data_before_update'];

    var $_public_fields = [ "CareerId" , "CareerTitle","Image","Url","DownloadFile",'ShortDescription',"Description"    ] ;
} 