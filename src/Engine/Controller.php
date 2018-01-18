<?php

namespace Dominik\CMS\Engine;

use Twig_Loader_Filesystem;
use Twig_Environment;

abstract class Controller 
{
    public $alerts = false;
    /* dodanie alertu w kontrolerach
     * this->alerts[] = [
     * 'type' => 'sucess',
        'msg' => 'Pomyślnie dodano użytkownika'
        ];
     */
    
    public function redirect($url)
    {
        return header('location: '.$url);
    }
    
    public function view($dir,$var_arr = array())
    {
        $menu_arr = [
            'APP_URI' => APP_URI,
            'APP_NAME' => APP_NAME,
            'alerts' => $this->alerts
        ];
        $arr = array_merge($menu_arr,$var_arr);
        $loader = new Twig_Loader_Filesystem(DIR_TEMPLATE);
        $twig = new Twig_Environment($loader, array(
            'cache' =>DIR_VIEW,
        ));
        $extension = '.html.php';
        echo $twig->render($dir.$extension,$arr);
        return;
    }
    
    public function login()
    {
        return $this->redirect(APP_URI.'login');
    }
    
    public function in_uri($string)
    {
        if(preg_match("#$string#", $_GET['uri'])) return true;
        return false;
    }
}