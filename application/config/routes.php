<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "landing";
$route['404_override'] = '';

$route['sign_up'] = 'user_general/sign_up';
$route['login'] = 'user_general/login';
$route['logout'] = 'user_general/logout';
$route['account_settings'] = 'user_general/account_settings';
$route['upload_avatar'] = 'user_general/upload_avatar';
$route['change_password'] = 'user_general/change_password';
$route['change_info'] = 'user_general/change_info';
$route['forgot_password'] = 'user_general/forgot_password';

$route['admin/(:any)'] = 'dashboard/admin_panel/$1';

$route['create_class'] = 'classes/create_class';

$route['create_course'] = 'courses/create_course';

/* End of file routes.php */
/* Location: ./application/config/routes.php */