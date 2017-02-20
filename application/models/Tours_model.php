<?php


class Tours_model  extends MY_Model
{

    var $_table = "tours" ,
        $primary_key = "TourId";

    var $before_create = ['prop_data_before_create'];
    var $before_update = ['prop_data_before_update'];

    var $_public_fields = [ "TourId" ,  "PackageId" ,
        "TourTitle","Image","ShortDescription",'DestinationCovered' ,"BannerImage",
        "Price","Discount","NoOdPack","Days","Nights","TourDays",
        "Description" , "MoreImage" ] ;

}