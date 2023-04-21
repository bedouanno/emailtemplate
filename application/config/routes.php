<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

$route['search/keyword/(:any)'] = 'ajaxcontroller/search_keyword/$1';
$route['ajax'] = 'ajaxcontroller/do_ajax_post';
$route['ajaxse'] = 'ajaxcontroller/do_ajax_post_se';
$route['create_tag'] = 'ajaxcontroller/do_create_tag';
$route['ajax-tags/(:any)'] = 'ajaxcontroller/do_ajax_tags/$1';
$route['get-category'] = 'ajaxcontroller/get_ajax_category';
$route['tags-json/(:any)'] = 'ajaxcontroller/get_ajax_tag/$1';
$route['get-tags-template/(:any)'] = 'ajaxcontroller/get_tags_template/$1';
$route['delete-tag/(:any)/(:any)'] = 'ajaxcontroller/delete_tag_ajax/$1/$2';


// TEMPLATES routes
$route['email-templates'] = 'templates/index';
$route['email-templates/view/(:any)'] = 'templates/view/$1';
$route['email-templates/create'] = 'templates/create';
$route['email-templates/(:any)/edit'] = 'templates/edit/$1';

$route['email-templates/delete/(:any)'] = 'templates/delete_template/$1';

// TAGS routes
$route['tags'] = 'tags/index';
$route['tag/(:any)/view'] = 'tags/view/$1';

// PUBLIC VIEW
$route['view/tags'] = 'viewer/view_tags';
$route['tag/(:any)/templates'] = 'viewer/view_tag/$1';
$route['search'] = 'viewer/search';

// Main routes
$route['logout'] = 'login/logout';
$route['login'] = 'login';
$route['home'] = 'main/index';
$route['default_controller'] = 'viewer/index';
$route['404_override'] = 'main/error_page';
$route['translate_uri_dashes'] = FALSE;
