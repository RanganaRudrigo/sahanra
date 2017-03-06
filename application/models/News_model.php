<?php
 
class News_model  extends MY_Model
{

    var $_table = "news" ,
        $primary_key = "NewsId";

    var $before_create = ['prop_data_before_create'];
    var $before_update = ['prop_data_before_update'];

    var $_public_fields = [ "NewsId" , "NewsTitle","NewsDate","Image",'BannerImage','MoreImage','ShortDescription',"Description" ,"YoutubeUrl"   ] ;

}