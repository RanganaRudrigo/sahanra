<?php
defined('BASEPATH') OR exit('No direct script access allowed');


define('ABOUT_US',"en/About-Us/Overview_And_Objectives");
define('ABOUT_US_CHAIRMAN',"en/About-Us/Chairman_Message");
define('ABOUT_US_BOARD_DIRECTORS',"en/About-Us/Board_of_Directors");
define('ABOUT_US_OUR_SUBSIDIARIES',"en/About-Us/Our_Subsidiaries");
define('ABOUT_US_MILESTONES',"en/About-Us/Milestones");
define('ABOUT_US_CSR',"en/About-Us/CSR");

define('PRODUCT_SERVICES',"en/Product_And_Services");
define('PARTNERS',"en/Partners");
define('SUCCESS_STORIES',"en/Success_Stories");
define('NEWS',"en/News");
define('EVENTS',"en/Events");
define('GALLERY',"en/Gallery");
define('PUBLICATION',"en/Publication");
define('TESTIMONIAL',"en/Testimonial");
define('PRIVACY_POLICY',"en/Privacy_Policy");
define('CAREER',"en/Career");
define('CONTACT_US',"en/Contact-Us");
define('HOME',"en/");

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
