<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'pages/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/*
    START ADMIN SECTION
*/    
$route['admin'] = 'admin/dashboard';
$route['admin/login'] = 'admin/users/login';

/* product */
$route['admin/feature/product'] = 'admin/feature/product';
$route['admin/feature/addProduct'] = 'admin/feature/add_product';
$route['admin/feature/product/pages/{$id}'] = 'admin/feature/index';

/* service */
$route['admin/service'] = 'admin/feature/service';

/*
    END ADMIN SECTION
*/    

/*
    START PUBLIC SECTION
*/    
$route['contact'] = 'public/contact';
$route['about'] = 'public/about';
$route['product'] = 'public/product';
$route['feature'] = 'public/feature';
/*
    END PUBLIC SECTION
*/   
