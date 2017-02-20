<?php


class Destinations_model  extends MY_Model
{

    var $_table = "destinations" ,
        $primary_key = "DestinationId";

    var $before_create = ['prop_data_before_create'];
    var $before_update = ['prop_data_before_update'];

    var $_public_fields = [ "DestinationId" , "DestinationTitle","BannerImage","Image","Description" ,"ShortDescription" ,"Map" ,"MoreImage" ] ;

}