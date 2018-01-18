<?php

namespace Company\Name;

use Dominik\CMS\Engine;

class Validator extends Engine\Model
{
    public $errors = array();
    public $rules;
    public $all_good = true;
     
    public function __construct($rules_array) {
        $this->rules = $rules_array;
    }
    
    public function all_input_valid()
    {
        foreach($_POST as $key => $value)
        {
            if(!Engine\Model::valid_string('Pole '.$key, $value))
            {
                $this->errors = ucfirst($name).' zawiera niedozwolone znaki. ';
                return false;
            }
        }
        return true;
    }
    
    /**
    private function walidacja()
    {
        $rules = array(
        'name' => 'required',
        'password' => 'required|min:8',
        'email' => 'required|email|unique:users'
        );
        
        $validator = new Validator($rules);
        
        if ($validator->validate())
        {
            //wprowadź dane do bazy
        }
        else{
            return false;
        }
    }
     * //w kontrolerze zwrócenie errorów do widoku
     *  return redirect('post/create')
                        ->withErrors($validator)
                        ->withInput(); 
     * 
     *
     * @var type 
     */
    
    public function validate()
    {
        foreach($this->rules as $input_name => $rules_string) //'inputName => required|rule1|rule2|rule3:parameter1,parameter2'
        {
            
            if(isset($_POST[$input_name]) && $_POST[$input_name] != 'required'){ //jeżeli istnieje i w warunkach nie ma podanego tylko required
                $input_value = $_POST[$input_name];
                $_rules = explode('|', $rules_string); //{[0] => required, [1] => rule1,[2] => rule2,[3] => rule3:parameter1,parameter2}
                if(strpos($rules_string, 'required')) unset($_rules['required']); //{[0] => rule1,[1] => rule2,[2] => rule3:parameter1,parameter2}
                    foreach($_rules as $rule)
                    {
                        $_param_arr = array();
                        $_param_arr[] = $input_name; //inputName
                        //{[0] => inputName}
                        $function = $rule;

                        if(strpos($rule, ':')) //rule3:parameter1,parameter2
                        {
                            $_func_params = explode(':', $rule);// {[0] => rule3,[1] => parameter1,parameter2}
                            $function = $_func_params['0'];
                            $_params = explode(',',$_func_params[1]);// {[0] => parameter1,[1] => parameter2}

                            $_param_arr = array_merge($_param_arr,$_params);//{[0] => inputName,[1] => parameter1,[2] => parameter2}
                        }
                        if(!call_user_func_array(array($this, 'obj_'.$function), $_param_arr))
                        {
                            $this->all_good = false;
                        }
                    }
                
            }
            else{
                if(strpos($rules_string, 'required'))
                {
                    $this->errors[$input_name] = "Pole ".$input_name." jest wymagane.";
                    $this->all_good = false;
                }
            }
            
        }
        return $this->all_good;
    }
    
    /*======= WALIDATORY ==============
     * Statyczne metody zwracają prawdę lub fałsz
     * Używane jako osobne funkcje gdy nie chcemy tworzyć obiektu lub gdy chcemy
     * mieć własne error msg
     * Metody chronione są związane z obiektem.
     * 
     *      */
    
    static function valid_string($str)
    {
        $string = stripslashes($str); //wywala ukośniki
        $string = preg_replace('/\s+/', '', $string); //wywala wszystkie białe znaki
        return $str == strip_tags($string) ? $string : false; //wywala wszystkie tagi HTML i PHP i sprawdza czy rezultat wszystkich operacji jest taki jak oryginał
    }
    
    protected function obj_valid_string($input_name)
    {
        if(!self::valid_string($_POST[$input_name]))
        {
            $this->errors[$input_name] = 'Wartość pola '.$input_name." zawiera niepoprawne znaki. Nie używaj spacji, ukośników ani tagów html i php";
            return false;
        }
        return $_POST[$input_name];
    }
    
    static function numeric($value)
    {
       return is_numeric($value);
    }
    
    protected function obj_numeric($input_name)
    {
        if(!self::numeric($_POST[$input_name]))
        {
            $this->errors[$input_name] = 'Wartość pola '.$input_name." powinna być liczbą";
            return false;
        }
        return $_POST[$input_name];
    }
    
    
    static function min($input_value,$min)
    {
        if(is_numeric($input_value))
            return $input_value >= $min;
        else
            return strlen($input_value)>= $min;
    }
    
    protected function obj_min($input_name,$min)
    {
        if(!self::min($_POST[$input_name],$min))
        {
            $this->errors[$input_name] = 'Wartość lub liczba znaków pola '.$input_name." powinna być większa lub równa ".$min;
            return false;
        }
        return $_POST[$input_name];
    }
    
    static function max($input_value,$max)
    {
        if(is_numeric($input_value))
            return $input_value <= $max;
        else
            return strlen($input_value) <= $max;
    }
    
    protected function obj_max($input_name,$max)
    {
        if(!self::max($_POST[$input_name],$max))
        {
            $this->errors[$input_name] = 'Wartość lub liczba znaków pola '.$input_name." powinna być mniejsza lub równa ".$max;
            return false;
        }
        return $_POST[$input_name];
    }
            
    static function in_between($input_value,$min,$max)
    {
        if(is_numeric($input_value))
            return ($input_value<=$max && $input_value>=$min);
        else
            return (strlen($input_value)<=$max && strlen($input_value)>=$min);
    }
    
    protected function obj_in_between($input_name,$min,$max)
    {
        if(!self::in_between($_POST[$input_name],$min,$max))
        {
            $this->errors[$input_name] = "Wartość lub liczba znaków pola ".$input_name." powinna być większa lub równa ".$min." i mniejsza lub równa ".$max;
            return false;
        }
        return $_POST[$input_name];
    }
    
    static function unique($input_value, $table_name, $column_name )
    {
        //'email' => 'unique:users,email_address,10' ignore id
        //'email' => 'unique:users,email_address, id <> 2,account_id = 1' gdzie unique jest według 2 i więcej kolumn
       // $query = "SELECT * FROM users WHERE email_address = string AND id <> NULL AND account_id = string2 ";
       
        $args = func_get_args();
        $query = 'SELECT * FROM '.$args[1].' WHERE '.$args[2].' = '.$args[0];
        if(func_num_args()>3) //gdy wywołane przez forward_static_call_array()
        {
            foreach(array_slice($args, 3) as $segment)
            {
                $query .= ' AND '.$segment;
            }
        }
        $result = $this->mysqli->query($query);
        return !boolvar($result->num_rows);
    }
    
    protected function obj_unique($input_name, $table_name, $column_name )
    {
        $args = func_get_args();
        $args[0] = $_POST[$args[0]]; //zmiana nazwy pola na jego wartość
        if(!self::unique($args))
        {
            $this->errors[$input_name] = 'W tabeli '.$table_name." w kolumnie ".$column_name." już istnieje taka wartość";
            return false;
        }
        return $_POST[$input_name];
    }
  
}