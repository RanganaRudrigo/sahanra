<?php
 
class product_model extends MY_Model
{

    var $_table = "products" ,
        $primary_key = "ProductId";

    var $before_create = ['prop_data_before_create'];
    var $before_update = ['prop_data_before_update'];

    var $_public_fields = [ "ProductId" , "ProductTitle","Image",'BannerImage','MoreImage','ShortDescription',"Description" ,"YoutubeUrl"   ] ;

}