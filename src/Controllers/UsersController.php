<?php

namespace Company\Name;

use Dominik\CMS\Engine;

class UsersController extends DashboardController
//DOROBIĆ KOMUNIKATY
//DOROBIĆ WIDOKI
//DROBIĆ JOINA ról PRZY WYBIERANIU all users i WHERE rola nie = 1 (sadmin)
{
    
    public function view($dir, $var_arr = array())
    {
        $menu_arr = [
            'users_menu' => 'active-link',
            'news_menu' => ''
        ];
        $arr = array_merge($menu_arr,$var_arr);
        return parent::view($dir, $arr);
    }
    
    public function users_list() //jeżeli post wywołaj post_add_user
    {
        $users_obj = new Users;
        $user_id = '';
        if(isset($_POST['inputLogin']))
        {
            if($user_id = $users_obj->store()){
                $this->alert_success('Pomyślnie dodano użytkownika :'.$_POST['inputLogin']);
            }
            else{
                $this->alert_danger($users_obj->error);
            }
        }

        $users = $users_obj->all();
        return $this->view('dashboard/users/users',[
            'users' => $users,
            'users_id' => $user_id
                ]);
    }
    
    public function status_switch($user_id)
    {
        $users_obj = new Users($user_id);
        $user = $users_obj->single();
        $users_obj->change_status($user['status']);
        return $this->view('dashboard/users/list');
    }
    
    public function get_edit_user($user_id)
    {
        //jeżeli jest post to odpalić post_edit
        $users_obj = new Users($user_id);
        $user = $users_obj->single();
        return $this->view('dashboard/users/edit_user',['user' => $user]);
    }
    
    public function post_edit_user($user_id)
    {
        $users_obj = new Users($user_id);
        $users_obj->change();
        $user = $users_obj->single();
        return $this->view('dashboard/users/edit_user',['user' => $user]);
    }
    
    public function get_change_password($user_id)
    {
        //jeżeli jest post to odpalić post_edit
        $users_obj = new Users($user_id);
        $user = $users_obj->single();
        return $this->view('dashboard/users/edit_pwd',['user' => $user]);
    }
    
    public function post_change_password($user_id)
    {
        $users_obj = new Users($user_id);
        $users_obj->change_pwd();
        $user = $users_obj->single();
        return $this->view('dashboard/users/edit_pwd',['user' => $user]);
    }
}