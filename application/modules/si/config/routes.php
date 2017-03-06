<?php
defined('BASEPATH') OR exit('No direct script access allowed');


define('ABOUT_US',"si/About-Us/Overview_And_Objectives");
define('ABOUT_US_CHAIRMAN',"si/About-Us/Chairman_Message");
define('ABOUT_US_BOARD_DIRECTORS',"si/About-Us/Board_of_Directors");
define('ABOUT_US_OUR_SUBSIDIARIES',"si/About-Us/Our_Subsidiaries");
define('ABOUT_US_MILESTONES',"si/About-Us/Milestones");
define('ABOUT_US_CSR',"si/About-Us/CSR");

define('PRODUCT_SERVICES',"si/Product_And_Services");
define('PARTNERS',"si/Partners");
define('SUCCESS_STORIES',"si/Success_Stories");
define('NEWS',"si/News");
define('EVENTS',"si/Events");
define('GALLERY',"si/Gallery");
define('PUBLICATION',"si/Publication");
define('TESTIMONIAL',"si/Testimonial");
define('PRIVACY_POLICY',"si/Privacy_Policy");
define('CAREER',"si/Career");
define('CONTACT_US',"si/Contact-Us");
define('HOME',"si/");

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
