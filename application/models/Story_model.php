<?php
 
class Story_model extends MY_Model
{

    var $_table = "stories" ,
        $primary_key = "StoryId";

    var $before_create = ['prop_data_before_create'];
    var $before_update = ['prop_data_before_update'];

    var $_public_fields = [ "StoryId" , "StoryTitle","Image",'BannerImage','MoreImage','ShortDescription',"Description" ,"YoutubeUrl"   ] ;

}