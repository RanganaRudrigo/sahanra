<?php
defined('BASEPATH') OR exit('No direct script access allowed');


define('ABOUT_US',"tn/About-Us/Overview_And_Objectives");
define('ABOUT_US_CHAIRMAN',"tn/About-Us/Chairman_Message");
define('ABOUT_US_BOARD_DIRECTORS',"tn/About-Us/Board_of_Directors");
define('ABOUT_US_OUR_SUBSIDIARIES',"tn/About-Us/Our_Subsidiaries");
define('ABOUT_US_MILESTONES',"tn/About-Us/Milestones");
define('ABOUT_US_CSR',"tn/About-Us/CSR");

define('PRODUCT_SERVICES',"tn/Product_And_Services");
define('PARTNERS',"tn/Partners");
define('SUCCESS_STORIES',"tn/Success_Stories");
define('NEWS',"tn/News");
define('EVENTS',"tn/Events");
define('GALLERY',"tn/Gallery");
define('PUBLICATION',"tn/Publication");
define('TESTIMONIAL',"tn/Testimonial");
define('PRIVACY_POLICY',"tn/Privacy_Policy");
define('CAREER',"tn/Career");
define('CONTACT_US',"tn/Contact-Us");
define('HOME',"tn/");

$route['default_controller'] = 'home';

$route['404_override'] = 'home/error_404';
$route['translate_uri_dashes'] = FALSE;
 
$route[ABOUT_US] = 'home/overview_and_objectives';
$route[ABOUT_US_CHAIRMAN] = 'home/Chairman_Message';
$route[ABOUT_US_BOARD_DIRECTORS] = 'home/Board_of_Directors';
$route[ABOUT_US_OUR_SUBSIDIARIES] = 'home/Our_Subsidiaries';
$route[ABOUT_US_MILESTONES] = 'home/Milestones';
$route[ABOUT_US_CSR] = 'home/CSR';
$route[PRODUCT_SERVICES] = 'home/Product_And_Services';
$route[PARTNERS] = 'home/Partners';
$route[SUCCESS_STORIES] = 'home/Success_Stories';
$route[SUCCESS_STORIES."/(.+)/(.+)"] = 'home/Success_Stories_detail/$2';
$route[PUBLICATION] = 'home/Publication';
$route[CONTACT_US] = 'home/contact';
