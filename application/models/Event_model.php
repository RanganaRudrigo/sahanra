<?php

class Event_model extends MY_Model
{

    var $_table = "events" ,
        $primary_key = "EventId";

    var $before_create = ['prop_data_before_create'];
    var $before_update = ['prop_data_before_update'];
    
    var $_public_fields = [ "EventId" , "EventTitle","Image",'BannerImage','MoreImage','ShortDescription',"Description" ,"YoutubeUrl"   ] ;

}