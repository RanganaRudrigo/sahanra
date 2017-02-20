<?php


class Gallery_model extends MY_Model
{

    var $_table = "galleries" ,
        $primary_key = "GalleryId";

    var $before_create = ['prop_data_before_create'];
    var $before_update = ['prop_data_before_update'];

    var $_public_fields = [ "GalleryId" , "GalleryTitle","Image",'BannerImage','MoreImage','ShortDescription',"Description" ,"YoutubeUrl"   ] ;

}