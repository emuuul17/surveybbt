<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'home/index';
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
$route['admin/feature/service'] = 'admin/feature/service';
$route['admin/feature/addService'] = 'admin/feature/add_service';
$route['admin/feature/service/pages/{$id}'] = 'admin/feature/index';

/* banner */
$route['admin/settings/banner'] = 'admin/settings/banner';
$route['admin/settings/addBanner'] = 'admin/settings/add_banner';
$route['admin/settings/banner/pages/{$id}'] = 'admin/settings/index';

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
$route['sasaran'] = 'public/target';
$route['sasaran/show/(:any)'] = 'public/target/show/$1';
$route['tim'] = 'public/team';
$route['foto'] = 'public/gallery';
$route['home'] = 'public/home';
$route['jadwal'] = 'public/schedule';
$route['jadwalBulan'] = 'public/schedule/getMonth';
$route['register'] = 'public/register';
$route['customer'] = 'public/customer';
