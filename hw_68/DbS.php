<?php

class Database{
    private $db;
    public function __construc($cs, $user,$password,$options){
        
           $this-> cs = $cs;  
    $this->user=$user;  
    $this->password = $password;
        $this->options=$options; 
       //$this->db = new PDO($cs, $user, $password, $options);
    }

    
    public function getDb() {
        return Database;
    }
    }
  // $Database1=new Database( "mysql:host=localhost;dbname=seforim","seforim",'1234',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    
    
    

    


?>