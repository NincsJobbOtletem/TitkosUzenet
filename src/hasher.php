<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Hexer{
  protected $username;   
  protected $password;
  protected $expireklick;
    
  function __construct($username,$password){  
    $this->username = $username;
    $this->password = $password;
    $this->expireklick = $expireklick;
  }
  protected function hasher($username){
    echo hash('ripemd160',$username);
    }
  


public function run(){

$row = $this->backseparate();



return $row;
}

}



?>