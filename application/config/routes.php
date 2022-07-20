<?php
defined('BASEPATH') or exit('No direct script access allowed');


$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['about-us'] = 'home/aboutus';
$route['photo-gallery'] = 'home/gallery';
$route['our-projects'] = 'home/ourprojects';
$route['our-services'] = 'home/ourservices';
$route['contact-us'] = 'home/contactus';
$route['disclaimer'] = 'home/disclaimer';

$route['blogdetails/(:any)/(:any)'] = 'home/blog/$1/$2';
$route['viewservice/(:any)/(:any)'] = 'home/view_services/$1/$2';
