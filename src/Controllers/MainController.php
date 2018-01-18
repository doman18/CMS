<?php

namespace Company\Name;

use Dominik\CMS\Engine;

class MainController extends Engine\Controller
{
    public function page_not_found()
    {
        return $this->view('404');
    }
    
    public function access_denied()
    {
        return $this->view('403');
    }
        
    public function login()
    {
        if(isset($_POST["sub"])) {
            $auth = new Name\Authorize();
            if($auth->log_in()){
                return $this->redirect('news');
            }
            else {
                $this->alert_danger($auth->error);
            }
        }
        return $this->view('login');
    }
    
    public function alert_success($msg)
    {
        $this->alerts[] = [
        'type' => 'sucess',
        'msg' => $msg
        ];
    }
    
    public function alert_info($msg)
    {
        $this->alerts[] = [
        'type' => 'info',
        'msg' => $msg
        ];
    }
    
        public function alert_warning($msg)
    {
        $this->alerts[] = [
        'type' => 'warning',
        'msg' => $msg
        ];
    }
    
        public function alert_danger($msg)
    {
        $this->alerts[] = [
        'type' => 'danger',
        'msg' => $msg
        ];
    }
}