<?php
defined('BASEPATH') OR exit('No direct script access allowed');



$route['register'] = "Users/register";
$route['login'] = "Users/login";

$route['jobs'] = 'jobs/index';



$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;



