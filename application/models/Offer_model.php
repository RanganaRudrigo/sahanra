<?php

 
class Offer_model extends MY_Model
{
    var $_table = "offer" ,
        $primary_key = "OfferId";

    var $before_create = ['prop_data_before_create'];
    var $before_update = ['prop_data_before_update'];

    var $_public_fields = [ "OfferId" , "OfferTitle", "Discount","Image","Url",'ShortDescription',"Description"    ] ;

}