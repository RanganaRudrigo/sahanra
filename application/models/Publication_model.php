<?php
 
class Publication_model  extends MY_Model
{

    var $_table = "publications" ,
        $primary_key = "PublicationId";

    var $before_create = ['prop_data_before_create'];
    var $before_update = ['prop_data_before_update'];

    var $_public_fields = [ "PublicationId" , "PublicationTitle","Image",'BannerImage','MoreImage','ShortDescription',"Description" ,"YoutubeUrl"   ] ;

}