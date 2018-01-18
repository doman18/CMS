<?php

namespace Dominik\CMS\Engine;

abstract class Model
{
    protected $mysqli;
    protected $error = false;
    
    public function __construct() {
        $this->mysqli = new \mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD, DATABASE_NAME);
        if ($this->mysqli->connect_errno) {
            echo "Błąd bazy danych " . $this->mysqli->connect_error;
            return false;
        }
    }
    /* chyba nie trzeba zamykać a może narobić szkód
    public function __destruct() {
        $this->mysqli->close();
        return null;
    }
    */
    
    public function get($query)
    {
        if ($results = $this->mysqli->query($query)) {
            $rows = array();
            /* fetch associative array */
            while ($rows[] = $results->fetch_array()) {
                ;
            }
            /* free result set */
            $results->free();
            return $rows;
        }
        else{
            $this->error = $this->mysqli->error;
            return false;
        } 
    }
    
    public function first($query)
    {
        if ($result = $this->mysqli->query($query))
        {
            $return = $result->fetch_assoc();
            $result->free();
            return $return;
            
        }
        $this->error = $this->mysqli->error;
        return false;
    }
    
    public function insert($query)
    {
        if ($this->mysqli->query($query) === TRUE) {
            return $this->mysqli->insert_id;
        } else {
            $this->error = $this->mysqli->error;
            return false;
        }
    }
    
    public function update($query)
    {
        return $this->mysqli->query($query);
    }
    
    public function delete($query)
    {
        
    }
}

