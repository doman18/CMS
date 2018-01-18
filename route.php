<?php

class Route
{
    private $_routes = array();
    
    public function add($uri, $method, $scope = 'all')
    {
        $this->_routes[trim($uri,'/')] = array(
            'method' => $method,
            'scope' => $scope
        );
        
        return true;
    }
    
    public function submit() 
    {
        //die();
        $uriGetParam = isset($_GET['uri']) ? $_GET['uri']: '';
        
        //var_dump($uriGetParam);
        $page_exists = 0;
        foreach($this->_routes as $key => $value)
        {
            $key = preg_replace("#\{\w+\}#",'(\w+)',str_replace('/','\/',$key));
            //var_dump($value,$uriGetParam);

            if(preg_match("#^$key$#", $uriGetParam,$results))
            {
                //var_dump($key); die();
                array_shift($results); //nie przypisuje się do zmiennej - przypisze tylko wywalany element a nie resztę która zostaje
               $params = $results;
                //var_dump($results);
                $page_exists = 1;
                if($value['scope'] === 'all'){
                    setcookie('back', $uriGetParam, time() + (3600), APP_URI);
                    return $this->go_route($value['method'],$params);
                }
                else
                {
                    $auth = new AUTH_CLASS;
                     if ($auth->is_logged())
                     {
                         if ($auth->has_permissions($value['scope']))
                        {
                             setcookie('back', $uriGetParam, time() + (3600), APP_URI); // 86400 = 1 day
                             return $this->go_route($value['method'],$params);
                        }
                        else
                        {
                             return header('location: '.APP_URI.'nopermissions');
                        }

                     }
                     else
                     {
                         //przekierowanie do loginu
                        return header('location: '.APP_URI.'login');
                     }
                }

            }
        }

        if(!$page_exists){
            return header('location: '.APP_URI.'404');
        }

    }

    private function go_route($route,$params = null)//dorobić walidatory istnienia metod z routingów
    {
        session_start();
        if(is_string($route))
        {
            $action = explode('@', $route);
            $controller = new $action[0];
            call_user_func_array(array($controller, $action[1]),$params);
        }
        else {
            call_user_func($route);
        }

    }
}