<?php

namespace Company\Name;

use Dominik\CMS\Engine;

class SiteController extends MainController
{
    public function index()
    {
        $zmienna = 'INDEX';
        $tablica_zmiennych = [
            'zmienna' => $zmienna
        ];
        
        return $this->view('index',$tablica_zmiennych);
    }
    
    public function about($zmienna1,$zmienna2)
    {
        $zmienna = 'O NAS';
        $tablica_zmiennych = [
            'zmienna' => $zmienna,
            'zmienna1' => $zmienna1,
            'zmienna2' => $zmienna2
        ];
        //var_dump($tablica_zmiennych);die();
        
        return $this->view('about',$tablica_zmiennych);
    }
}
