<?php

namespace Company\Name;

use Dominik\CMS\Engine;

class Users extends Engine\Model
{
    public $id;
    public $error = false;
    
    public function __construct($id = null) {
        parent::__construct();
        if($id != null)  $this->id = $id;
    }
    
    private function hash_it($string) //tylko do tworzenia, nie do sprawdzania
    {
        $options = [
        'cost' => 11,
        'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
        ];
        return password_hash($string, PASSWORD_BCRYPT, $options);
    }
    
    public function all()
    {
        return $this->get('SELECT * FROM '.DB_USERS_TABLE);
    }
    
    public function single()
    {
       return $this->first('SELECT * FROM '.DB_USERS_TABLE.' WHERE id = '.$this->id);
    }
    
    public function store()
    {
        //login(max 20),password(wszystko, max 20),status,add_date,edit_date
        //wstawienie użytkownika
        //nadanie wybranych praw
        var_dump($_POST);
        die();
        
        if(!Engine\Model::valid_post())
        {
            return false;
        }
        
        if(!Engine\Model::in_between($_POST['inputLogin'], 4, 20))
        {
            $this->error = 'Login może zawierać od 4 do 20 znaków';
            return false;
        }
        
        $query_user = "INSERT INTO ".DB_USERS_TABLE." (".DB_LOGIN_COLUMN.",".DB_PWD_COLUMN.",status,add_date,edit_date) VALUES (".$_POST['inputLogin'].",".$this->hash_it($_POST['inputPassword']).",1,".date('Y-m-d').",".date('Y-m-d').")";
        if($user_id = $this->insert($query_user)){
            $query_role = "INSERT INTO ".DB_USERS_ROLES_TABLE." (".DB_UR_USER_COLUMN.",".DB_UR_ROLE_COLUMN.") VALUES (".$user_id.",".$_POST['inputRole'].")";
            if($this->insert($query_role)) return $user_id;
        }
        return false;
    }
    
    public function change()
    {
        
        $query_user = "UPDATE ".DB_USERS_TABLE." SET ".DB_LOGIN_COLUMN."='".$_POST['inputLogin']."' WHERE id=".$this->id;
        if($this->update($query_user)){
            $query_role = "UPDATE ".DB_USERS_ROLES_TABLE." SET ".DB_UR_ROLE_COLUMN."='".$_POST['inputRole']."' WHERE ".DB_UR_USER_COLUMN_COLUMN."=".$this->id;
            if($this->update($query_role)) return $user_id;
        }
        return false;
    }
    
    public function change_pwd()
    {
        $query = "UPDATE ".DB_USERS_TABLE." SET ".DB_PWD_COLUMN."='".$this->hash_it($_POST['f_new_pwd'])."' WHERE id=".$this->id;
        if($this->update($query)){
            return true;
        }
        return false;
    }
    
    public function change_status($status)
    {
        $status = $status ? '0' : '1';
        $query = "UPDATE ".DB_USERS_TABLE." SET status='".$status."' WHERE id=".$this->id;
        if($this->update($query)){
            return true;
        }
        return false;
    }

}
