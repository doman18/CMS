<?php

namespace Company\Name;

use Dominik\CMS\Engine;

class Authorize extends Engine\Model implements Engine\Auth
{
    public $user;
    
    public function is_logged()
    {
        if($_SESSION['login']) //czy zalogowany
        {
            return true;
        }
        return false;     
    }
    
    public function has_permissions($scope) {
        //czy role
        $query = $this->mysqli->query('SELECT id FROM '.DB_USERS_ROLES_TABLE.' WHERE '.DB_UR_USER_COLUMN.' = "'.$_SESSION['login'].'" AND WHERE '.DB_UR_ROLE_COLUMN.' IN ('.$scope.')');

        if ($query->num_rows > 0)
        {
            return true;
        }
        return false;
    }
    
    public function logout()
    {
        // remove all session variables
        session_unset();
        // destroy the session
        session_destroy(); 
        return header('location: '.APP_URI.'login');
    }
    
    public function log_in()
    {
        $form_name = strip_tags($_POST['f_name']);
        $form_pwd = strip_tags($_POST['f_password']);
        $query = $this->mysqli->query('SELECT id FROM users WHERE name = '.$form_name);
       
        if ($query->num_rows > 0)
        {
            $user = $query->fetch_assoc();
            if(password_verify($form_pwd, $user['password']))    
            {
                $_SESSION["login"] = $user['id'];
                return true;
            }
            else{
                $this->error = "Niepoprawne hasło. Być może masz wciśnięty klawisz Caps Lock.";
            }
        }
        else{
            $this->error = "Nie ma takiego użytkownika";
        }
        return false;
    }

}