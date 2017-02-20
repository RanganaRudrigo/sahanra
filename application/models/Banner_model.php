<?php

/**
 * Created by PhpStorm.
 * User: Gowtham
 * Date: 1/23/2017
 * Time: 12:56 PM
 */
class Banner_model extends MY_Model
{ 
    var $_table = "banner" ,
        $primary_key = "BannerId";

    var $before_create = ['prop_data_before_create'];
    var $before_update = ['prop_data_before_update'];

    var $_public_fields = [ "BannerId" , "BannerFor","Title","Image","ShortDescription" ] ;


}