<?php
//require 'config.php';
include 'route.php';
require_once DIR_ENGINE.'Auth.php';
require_once DIR_ENGINE.'Controller.php';
require_once DIR_ENGINE.'Model.php';
require_once DIR_ENGINE.'Auth.php';
include DIR_CONTROLLER.'MainController.php';
include DIR_CONTROLLER.'SiteController.php';
include DIR_CONTROLLER.'DashboardController.php';
include DIR_CONTROLLER.'UsersController.php';
include DIR_CONTROLLER.'NewsController.php';
include DIR_MODEL.'Validator.php';
include DIR_MODEL.'Authorize.php';
include DIR_MODEL.'Users.php';

$route = new Route();
//1 - sadmin - nie ma go na liście w bazie
//2 - admin
//3 - editor

/*
$route->add('/nopermissions', function(){
    echo '<p>Nie masz wystarczających uprawnień do wejścia na tą stronę</p>
    <p><a href="'.$_SERVER['HTTP_REFERER'].'">Poprzednia strona</a></p>
    <p><a href="'.APP_URI.'">Główna</a></p>';
});
 * 
 */
$route->add('/404', 'Company\Name\MainController@page_not_found');
$route->add('/nopermissions', 'Company\Name\MainController@access_denied');

//defaultowy widok logina
//$route->add('/login', 'Dominik\CMS\Engine\Controller@login');
$route->add('/login', 'Company\Name\MainController@login');
$route->add('/logout', AUTH_CLASS.'@logout');

$route->add('/', 'Company\Name\SiteController@index');
$route->add('/about/{var}/second/{var2}', 'Company\Name\SiteController@about');

$news_permissions = 'all';
$route->add('/news', 'Company\Name\NewsController@news',$news_permissions);

$users_permissions = 'all';
$route->add('/users', 'Company\Name\UsersController@users_list',$users_permissions);
//$route->add('/users/add', 'Company\Name\UsersController@users_list',$users_permissions);
$route->add('/users/status/{user_id}', 'Company\Name\UsersController@status_switch',$users_permissions);
$route->add('/users/edit/{user_id}', 'Company\Name\UsersController@get_edit_user',$users_permissions);
$route->add('/users/password/{user_id}', 'Company\Name\UsersController@users_list',$users_permissions);
//$route->add('/dashboard', 'Company\Name\MainController@dashboard', '1,2');

/*
echo '<pre>';
print_r($route);
*/
$route->submit();