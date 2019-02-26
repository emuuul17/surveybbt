<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'pages/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['admin'] = 'admin/dashboard';
$route['admin/login'] = 'admin/users/login';

$route['contact'] = 'public/contact';
$route['product'] = 'public/product';
