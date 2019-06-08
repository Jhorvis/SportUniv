<?php

class Conexion{
    protected $enlace;

    public function conectar(){
        require("clases/config.php");
        $this->enlace= new mysqli($servidor,
                $usuario,$clave,$basedatos);
      
              if (mysqli_connect_errno()){
        echo "Hay error de conexion: ".
           mysqli_connect_error();
        exit();
        }
    }
    
}


class auditoria extends Conexion{
    
   function __construct() {
       $this->conectar();
   }
    public function insauditoria($nivel,$usuario,$accion,$descripcion,$servidor){
       $stmt=$this->enlace->prepare("INSERT INTO `auditoria` (`nivel`, `usuario`, `accion`, `descripcion`, `servidor`, `fecha`, `hora` ) 
                                      VALUES (?,?,?,?,?, CURDATE(), CURTIME())" );

        $stmt->bind_param('sssss',$nivel,$usuario,$accion,$descripcion,$servidor);
        $stmt->execute();
        $retorno =(isset($stmt->insert_id))? $stmt->insert_id : 0; 
        $stmt->close();   	 
        return $retorno;    

    }    
    
 
 
      public function  auditoria(){
     
        $stmt=$this->enlace->prepare("SELECT * FROM `auditoria` ORDER BY `auditoria`.`id` DESC");
  
       $stmt->execute();
        $resultado=$stmt->get_result();
        return($resultado);
        $stmt->close();   
    }
    
   
}
 



