<?php

class bd{
    
public $conn;  

public function conectar(){

require('clases/config.php');

$this->conn=new PDO('mysql:host='.$servidor.';dbname='.$basedatos, $usuario, $clave,array(PDO::ATTR_PERSISTENT => true));
    
              }
    
public function desconectar(){
    
$this->conn=null;
    
    }

}

?>