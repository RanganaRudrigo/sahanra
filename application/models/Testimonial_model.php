<?php

 
class Testimonial_model  extends MY_Model
{

    var $_table = "testimonial" ,
        $primary_key = "TestimonialId";

    var $before_create = ['prop_data_before_create'];
    var $before_update = ['prop_data_before_update'];

    var $_public_fields = [ "TestimonialId" , "TestimonialTitle","Image","ShortDescription" ,"Description" , "ModifiedDate"  ] ;

}