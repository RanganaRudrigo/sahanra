<?php

class Download_model extends MY_Model
{
    var $_table = "download" ,
        $primary_key = "DownloadId";

    var $before_create = ['prop_data_before_create'];
    var $before_update = ['prop_data_before_update'];

    var $_public_fields = [ "DownloadId" , "DownloadTitle", "DownloadFile"  ] ;
}