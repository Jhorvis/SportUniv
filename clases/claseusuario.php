<?php

 @session_start();
 

require_once("clases/conexion.php");
class Usuarios extends bd{

    function __construct(){
        $this->conectar();        
        }    
      function __destruct(){
        $this->desconectar();        
        }
        
 
      
    
    public function ActualizarArticulo($idarticulos){

    $emprestar = $_POST ['emprestar'];
    $existencia = $_POST ['existencia'];

    $em = $existencia - $emprestar;


    $sentencia=$this->conn->prepare("
                                   UPDATE articulos
                                   SET idarticulos = :idarticulos,
                                   existencia = '$em'
                                   WHERE  idarticulos = :idarticulos
                         
                                   ");
    $sentencia->bindParam(':idarticulos',$idarticulos);

    $sentencia->execute();
    
    }
   
    public function actualizanombretorneo($idtorneo, $nombretorneo){


    $sentencia=$this->conn->prepare("
                                   UPDATE registorneo
                                   SET idtorneo = :idtorneo,
                                   nombretorneo = :nombretorneo
                                   WHERE  idtorneo = :idtorneo
                         
                                   ");
    $sentencia->bindParam(':idtorneo',$idtorneo);
     $sentencia->bindParam(':nombretorneo',$nombretorneo);


    $sentencia->execute();
    
    }
    public function actualizaequitorneo($idtorneo, $cantidadequipos){


    $sentencia=$this->conn->prepare("
                                   UPDATE registorneo
                                   SET idtorneo = :idtorneo,
                                   cantidaequi = :cantidaequi
                                   WHERE  idtorneo = :idtorneo
                         
                                   ");
    $sentencia->bindParam(':idtorneo',$idtorneo);
     $sentencia->bindParam(':cantidaequi',$cantidadequipos);


    $sentencia->execute();
    
    }

    public function actualizafasetorneo($idtorneo, $fase){


    $sentencia=$this->conn->prepare("
                                   UPDATE registorneo
                                   SET idtorneo = :idtorneo,
                                   fase1 = :fase1
                                   WHERE  idtorneo = :idtorneo
                         
                                   ");
    $sentencia->bindParam(':idtorneo',$idtorneo);
     $sentencia->bindParam(':fase1',$fase);


    $sentencia->execute();
    
    }


    public function actualizaposeliminatoria($idtorneo){


    $sentencia=$this->conn->prepare("UPDATE tablaposicion
                                   SET torneo = :idtorneo,
                                   eliminatorias = 'Cuartos de final'
                                   WHERE  (torneo = :idtorneo) and
                                   (pos = 1) or (pos = 2) or (pos = 3) or 
                                   (pos = 4) or (pos = 5) or (pos = 6) or 
                                   (pos = 7) or (pos = 8)
                         
                                   ");
    $sentencia->bindParam(':idtorneo',$idtorneo);
    


    $sentencia->execute();
    
    }



    public function actualizaposeliminatoria2($idtorneo){


    $sentencia=$this->conn->prepare("UPDATE tablaposicion
                                   SET torneo = :idtorneo,
                                   eliminatorias = ''
                                   WHERE  (torneo = :idtorneo) and
                                   (pos = 1) or (pos = 2) or (pos = 3) or 
                                   (pos = 4) or (pos = 5) or (pos = 6) or 
                                   (pos = 7) or (pos = 8)
                         
                                   ");
    $sentencia->bindParam(':idtorneo',$idtorneo);
    


    $sentencia->execute();
    
    }

    public function actualizafinaltorneo($idtorneo, $estatus){


    $sentencia=$this->conn->prepare("
                                   UPDATE registorneo
                                   SET idtorneo = :idtorneo,
                                   estatus = :estatus
                                   WHERE  idtorneo = :idtorneo
                         
                                   ");
    $sentencia->bindParam(':idtorneo',$idtorneo);
     $sentencia->bindParam(':estatus',$estatus);


    $sentencia->execute();
    
    }



    public function actualizaE($nombre, $apellido,$cedula,$telefono,$carrera,$correo,$id){

    

    $sentencia=$this->conn->prepare("
                                   UPDATE estudiante
                                   SET idregistro = :idregistro,
                                   nombre = :nombre,
                                   apellido = :apellido,
                                   cedula = :cedula,
                                   telefono = :telefono,
                                   carrera = :carrera,
                                   correo = :correo
                                   WHERE  idregistro = :idregistro
                         
                                   ");
    $sentencia->bindParam(':nombre',$nombre);
     $sentencia->bindParam(':apellido',$apellido);
      $sentencia->bindParam(':cedula',$cedula);
       $sentencia->bindParam(':telefono',$telefono);
        $sentencia->bindParam(':carrera',$carrera);
         $sentencia->bindParam(':correo',$correo);
          $sentencia->bindParam(':idregistro',$id);


    $sentencia->execute();
    
    }


     public function EliminaE($id){

    

    $sentencia=$this->conn->prepare("DELETE FROM estudiante
                                     WHERE  idregistro = :idregistro
                         
                                   ");
   
          $sentencia->bindParam(':idregistro',$id);


    $sentencia->execute();
    
    }







    
    public function DevolverArticulo($idarticulos){

    $sumar = $_POST ['sumar']; // 
    $emprestar = $_POST ['emprestar'];

    $em = $sumar + $emprestar;


    $sentencia=$this->conn->prepare("
                                   UPDATE articulos
                                   SET idarticulos = :idarticulos,
                                   existencia = '$em'
                                   WHERE  idarticulos = :idarticulos
                         
                                   ");
    $sentencia->bindParam(':idarticulos',$idarticulos);

    $sentencia->execute();
    
    }





    public function DevolverArticuloResto($idarticulos){

    $existencia = $_POST ['existencia']; //articulo emprestado

    $emprestar = $_POST ['emprestar']; // valor a devolver

    $em = $existencia - $emprestar;

    $sentencia=$this->conn->prepare("
                                   UPDATE artiestudiante
                                   SET idarticulos = :idarticulos,
                                   existencia = '$em'
                                   WHERE  idarticulos = :idarticulos
                         
                                   ");
    $sentencia->bindParam(':idarticulos',$idarticulos);

    $sentencia->execute();
    
    }















public function agregarArticuloEstudiante($idarticulos,$articulo,$seriales,$marca,$modelo,$existencia){

$sentencia=$this->conn->prepare("INSERT INTO artiestudiante 
                                  SET idarticulos = :idarticulos,
                                      articulo = :articulo,
                                      seriales = :seriales,
                                      marca = :marca,
                                      modelo = :modelo,
                                      existencia = :existencia
                                      ");
$sentencia->bindParam (':idarticulos',$idarticulos);
$sentencia->bindParam (':articulo',$articulo);
$sentencia->bindParam (':seriales',$seriales);
$sentencia->bindParam (':marca',$marca);
$sentencia->bindParam (':modelo',$modelo);
$sentencia->bindParam (':existencia',$_POST ['emprestar']);
$sentencia->execute();

}








public function ingresapago($mes, $factura, $pago, $cedula,$periodo){

$sentencia=$this->conn->prepare("INSERT INTO pagogym 
                                  SET mes = :mes,
                                      factura = :factura,
									                    pago = :pago,
                                      cedula = :cedula,
                                      periodo = :periodo
                                      ");
$sentencia->bindParam (':mes',$mes);
$sentencia->bindParam (':factura',$factura);
$sentencia->bindParam (':pago',$pago);
$sentencia->bindParam (':cedula',$cedula);
$sentencia->bindParam (':periodo',$periodo);
$sentencia->execute();

}


public function insertardatos($carrera, $torneo){

  $cantidad = 1;

$sentencia=$this->conn->prepare("INSERT INTO estudiantestorneo 
                                  SET carrera = :carrera,
                                      torneo = :torneo,
                                      cantidad = $cantidad
                                      
                                      ");
$sentencia->bindParam (':carrera',$carrera);
$sentencia->bindParam (':torneo',$torneo);



$sentencia->execute();

}





 public function sumaresultado($idarticulos){

    $sumar = $_POST ['sumar']; // 
    $emprestar = $_POST ['emprestar'];

    $em = $sumar + $emprestar;


    $sentencia=$this->conn->prepare("
                                   UPDATE articulos
                                   SET idarticulos = :idarticulos,
                                   existencia = '$em'
                                   WHERE  idarticulos = :idarticulos
                         
                                   ");
    $sentencia->bindParam(':idarticulos',$idarticulos);

    $sentencia->execute();
    
    }





public function actualizaestadistica (){

  $carrera = $_POST ['carrera'];
  $torneo = $_POST ['torneo'];
include 'enlace.php';
  $variable = "SELECT * from estudiantestorneo  WHERE carrera = '$carrera' 
  AND torneo=$torneo";
  $query99 = mysql_query($variable);
  $resultado = mysql_fetch_array($query99);
  $total = $resultado['cantidad'];
  $id = $resultado['idestudiantetorneo'];




  $suma= $total + 1;

$sentencia=$this->conn->prepare("UPDATE estudiantestorneo 
                                  SET idestudiantetorneo =  :idestudiantetorneo,
                                   cantidad = $suma
                                  WHERE idestudiantetorneo =  :idestudiantetorneo
                                  
                                      
                                      ");

$sentencia->bindParam (':idestudiantetorneo',$id);


$sentencia->execute();




}

 public function actualizatabla1($idequipoa){

include 'enlace.php';






$ganadosa = "SELECT * from tablaposicion WHERE idequipo = $idequipoa";
$consulta = mysql_query($ganadosa);
$resultado = mysql_fetch_array($consulta);
$wina = $resultado ['win'];
$playa = $resultado ['play'];
$lossa = $resultado ['loss'];
$golesf = $resultado ['golfavor'];
$golesc = $resultado ['golcontra'];
$difegol = $resultado ['diferenciagol'];
$drawa = $resultado ['draw'];
$puntosa = $resultado ['puntos'];

if ($_POST ['goles_visitante'] == $_POST ['goles_local']){

     $win1 = 0;
     $loss1 = 0;
     $draw1 = 1;
     $puntos1 = 1;

} else {


if ($_POST ['goles_local'] > $_POST ['goles_visitante']){


  $win1 = 1;
  $loss1 = 0;
   $draw1 = 0;
   $puntos1 = 3;

} else {

 $win1 = 0;
  $loss1 = 1;
   $draw1 = 0;
   $puntos1 = 0;


} 


} 


$diferencia = $_POST ['goles_local'] - $_POST ['goles_visitante'];



    $sumarw = $win1 + $wina;
    $sumarl = $loss1 + $lossa;
    $sumarp = $playa + 1;
    $sumardf = $difegol + $diferencia;
    $sumagolesf = $golesf + $_POST ['goles_local'];
    $sumagolesc = $golesc + $_POST ['goles_visitante'];
    $sumaempates = $drawa + $draw1;
    $sumapuntos = $puntosa + $puntos1;
    $sentencia=$this->conn->prepare("
                                   UPDATE tablaposicion
                                   SET idequipo = :idequipo,
                                   play = '$sumarp',
                                   win = '$sumarw',
                                   loss = '$sumarl',
                                   golfavor = '$sumagolesf',
                                   golcontra = '$sumagolesc',
                                   diferenciagol = '$sumardf',
                                   draw = '$sumaempates',
                                   puntos = '$sumapuntos'
                                   WHERE  idequipo = :idequipo
                         
                                   ");
    $sentencia->bindParam(':idequipo',$idequipoa);

    $sentencia->execute();
    
    }

 public function actualizatabla2($idequipob){

include 'enlace.php';
$ganadob = "SELECT * from tablaposicion WHERE idequipo = $idequipob";
$consulta = mysql_query($ganadob);
$resultado = mysql_fetch_array($consulta);
$winb = $resultado ['win'];
$playb = $resultado ['play'];
$lossb = $resultado ['loss'];
$difegolb = $resultado ['diferenciagol'];
$golesfb = $resultado ['golfavor'];
$golescb = $resultado ['golcontra'];
$drawb = $resultado ['draw'];
$puntosb = $resultado ['puntos'];

if ($_POST ['goles_visitante'] == $_POST ['goles_local']){

     $win2 = 0;
     $loss2 = 0;
     $draw2 = 1;
     $puntos2 = 1;

} else {

if ($_POST ['goles_visitante'] > $_POST ['goles_local']){


  $win2 = 1;
  $loss2 = 0;
  $draw2 = 0;
  $puntos2 = 3;
} else {

$win2 = 0;
$loss2 = 1;
$draw2 = 0;
$puntos2 = 0;

} 
}


$diferencia2 = $_POST ['goles_visitante'] - $_POST ['goles_local'];


    $sumarwb = $win2 + $winb;
    $sumarlb = $loss2 + $lossb;
     $sumarpb = $playb + 1;
     $sumardfb = $difegolb + $diferencia2;
     $sumagolesfb = $golesfb + $_POST ['goles_visitante'];
    $sumagolescb = $golescb + $_POST ['goles_local'];
    $sumaempates2 = $drawb + $draw2;
    $sumapuntos2 = $puntosb + $puntos2;

    $sentencia=$this->conn->prepare("
                                   UPDATE tablaposicion
                                   SET idequipo = :idequipo,
                                   play = '$sumarpb',
                                   win = '$sumarwb',
                                   loss = '$sumarlb',
                                   golfavor = '$sumagolesfb',
                                   golcontra = '$sumagolescb',
                                   diferenciagol = '$sumardfb',
                                   draw = '$sumaempates2',
                                   puntos = '$sumapuntos2'
                                   WHERE  idequipo = :idequipo
                         
                                   ");
    $sentencia->bindParam(':idequipo',$idequipob);

    $sentencia->execute();
    
    }
public function actualizatablapos ($idequipoba, $posi){

 $sentencia=$this->conn->prepare("
                                   UPDATE tablaposicion
                                   SET idequipo = :idequipo,
                                   pos = :pos
                                   WHERE  idequipo = :idequipo
                         
                                   ");
  $sentencia->bindParam(':idequipo',$idequipoba);
   $sentencia->bindParam(':pos',$posi);

    $sentencia->execute();
 
}







public function equitabla($equipo_local,$equipo_visitante,$torneo){

$sentencia=$this->conn->prepare("SELECT * from tablaposicion 
                                  WHERE nombrequipo = :equipo_local
                                   OR nombrequipo = :equipo_visitante 
                                       AND torneo = :torneo
                                      ");
$sentencia->bindParam (':equipo_local',$equipo_local);
$sentencia->bindParam (':equipo_visitante',$equipo_visitante);
$sentencia->bindParam (':torneo', $torneo);
$sentencia->execute();
return($sentencia->fetchAll(PDO::FETCH_OBJ)); 
}





public function equitabla1($equipo_local,$torneo){

$sentencia=$this->conn->prepare("SELECT * from tablaposicion 
                                  WHERE nombrequipo = :equipo_local
                                    
                                       AND torneo = :torneo
                                      ");
$sentencia->bindParam (':equipo_local',$equipo_local);
//$sentencia->bindParam (':equipo_visitante',$equipo_visitante);
$sentencia->bindParam (':torneo', $torneo);
$sentencia->execute();
return($sentencia->fetchAll(PDO::FETCH_OBJ)); 
}



public function equitabla2($equipo_visitante,$torneo){

$sentencia=$this->conn->prepare("SELECT * from tablaposicion 
                                  WHERE nombrequipo = :equipo_visitante 
                                       AND torneo = :torneo
                                      ");
//$sentencia->bindParam (':equipo_local',$equipo_local);
$sentencia->bindParam (':equipo_visitante',$equipo_visitante);
$sentencia->bindParam (':torneo', $torneo);
$sentencia->execute();
return($sentencia->fetchAll(PDO::FETCH_OBJ)); 
}





public function agregargoleador($jugagol, $jorna, $gole ,$faltas, $tarjetaa, $tarjetar,$torneo){

$sentencia=$this->conn->prepare("INSERT INTO goleadores 
                                  SET jugador = :jugador,
                                      jornada = :jornada,
                                      goles = :goles,
                                      faltas = :faltas,
                                      tarjetasA = :tarjetasA,
                                      tarjetasR = :tarjetasR,
                                      torneo = :torneo
                                      
                                      ");
$sentencia->bindParam (':jugador',$jugagol);
$sentencia->bindParam (':jornada',$jorna);
$sentencia->bindParam (':goles',$gole);
$sentencia->bindParam (':faltas',$faltas);
$sentencia->bindParam (':tarjetasA',$tarjetaa);
$sentencia->bindParam (':tarjetasR',$tarjetar);
$sentencia->bindParam (':torneo',$torneo);
$sentencia->execute();

}




public function agregarArticulo($articulo,$seriales,$marca,$modelo,$existencia){

$sentencia=$this->conn->prepare("INSERT INTO articulos 
                                  SET articulo = :articulo,
                                      seriales = :seriales,
                                      marca = :marca,
                                      modelo = :modelo,
                                      existencia = :existencia
                                      ");

$sentencia->bindParam (':articulo',$articulo);
$sentencia->bindParam (':seriales',$seriales);
$sentencia->bindParam (':marca',$marca);
$sentencia->bindParam (':modelo',$modelo);
$sentencia->bindParam (':existencia',$existencia);
$sentencia->execute();

}
    public function agregar($nombre,$apellido,$cedula,$telefono,$carrera,$correo){
    
    $sentencia=$this->conn->prepare("
                                   INSERT into estudiante
                                   SET nombre = :nombre,
                                   apellido = :apellido,
                                   cedula = :cedula,
                                   telefono = :telefono,
                                   carrera = :carrera,
                                   correo = :correo
                                   ");
    $sentencia->bindParam(':nombre',$nombre);
    $sentencia->bindParam(':apellido',$apellido);
    $sentencia->bindParam(':cedula',$cedula);
    $sentencia->bindParam(':telefono',$telefono);
    $sentencia->bindParam(':carrera',$carrera);
    $sentencia->bindParam(':correo',$correo);
    $sentencia->execute();
    
    }

  public function ConsultarStatsGym($idstats){
$sentencia=$this->conn->prepare("SELECT * FROM estudiantesgym
                                   WHERE idestugym = :idestugym
                                   ");
$sentencia->bindParam(':idestugym',$idstats);

$sentencia->execute();
    return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }



 public function ConsultarList($cedula){
$sentencia=$this->conn->prepare("
                                   Select * FROM estudiante
                                   WHERE (cedula = :cedula)
                                   ");
$sentencia->bindParam(':cedula',$cedula);
$sentencia->execute();
    return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }


 public function Consultarfactura($cedula){
$sentencia=$this->conn->prepare("
                                   Select * FROM pagogym
                                   WHERE (cedula = :cedula)
                                   ");
$sentencia->bindParam(':cedula',$cedula);
$sentencia->execute();
    return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }









public function Consultarjornada($nombrejornada, $torneo){
$sentencia=$this->conn->prepare("SELECT * FROM regisjornadas
                                   WHERE (nombrejornada = :nombrejornada AND torneo = :torneo) 
                                   ");
$sentencia->bindParam(':nombrejornada',$nombrejornada);
$sentencia->bindParam(':torneo',$torneo);
$sentencia->execute();
    return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }




public function ConsuListaEstudiante($idarticulos){
$sentencia=$this->conn->prepare("SELECT  * FROM artiestudiante
                                   WHERE (idarticulos = :idarticulos or :idarticulos = -1 and existencia >= 1)
                                   ");
$sentencia->bindParam(':idarticulos',$idarticulos);
$sentencia->execute();
    return($sentencia->fetchAll(PDO::FETCH_OBJ));   
}


 public function  articulo(){
     
        $stmt=$this->conn->prepare("SELECT * FROM `articulos` ORDER BY `id` DESC");
  
       $stmt->execute();
        
        return(0);
        $stmt->close();   
    }



public function ConsuLista($idarticulos){
$sentencia=$this->conn->prepare("SELECT  * FROM articulos
                                   WHERE (idarticulos = :idarticulos or :idarticulos = -1)
                                   ");
$sentencia->bindParam(':idarticulos',$idarticulos);
$sentencia->execute();
    return($sentencia->fetchAll(PDO::FETCH_OBJ));   
}







public function ConsuListasDevolcuiones($idarticulos){
$sentencia=$this->conn->prepare("SELECT  * FROM artiestudiante
                                   WHERE (idarticulos = :idarticulos)
                                   ");
$sentencia->bindParam(':idarticulos',$idarticulos);
$sentencia->execute();
    return($sentencia->fetchAll(PDO::FETCH_OBJ));   
}










public function ConsuListase($idarticulos){
$sentencia=$this->conn->prepare("SELECT  * FROM articulos
                                   WHERE (idarticulos = :idarticulos)
                                   ");
$sentencia->bindParam(':idarticulos',$idarticulos);
$sentencia->execute();
    return($sentencia->fetchAll(PDO::FETCH_OBJ));   
}



 public function ConsultarTorneo($nombrequipo){
$sentencia=$this->conn->prepare("
                                   Select * FROM regisjugadore
                                   WHERE (nombrequipo = :nombrequipo )
                                   ");
$sentencia->bindParam(':nombrequipo',$nombrequipo);
$sentencia->execute();
    return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }





public function ConsultarTorneos($nombrequipo){

$sentencia=$this->conn->prepare("
                                   Select * FROM regisjugadore
                                   WHERE (nombrequipo = :nombrequipo)
                                   ");
$sentencia->bindParam(':nombrequipo',$nombrequipo);
$sentencia->execute();
    return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }
 



 public function DatosTorneos($nombrequipo){
$sentencia=$this->conn->prepare("
                                   Select * FROM regisequipo
                                   WHERE (nombrequipo = :nombrequipo)
                                   ");
$sentencia->bindParam(':nombrequipo',$nombrequipo);
$sentencia->execute();
    return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }



 public function DatosJornada($id){
$sentencia=$this->conn->prepare("
                                   Select * FROM regisjornadas
                                   WHERE (id_encuentro = :id_encuentro)
                                   ");
$sentencia->bindParam(':id_encuentro',$id);
$sentencia->execute();
    return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }



public function ConsultarJugadores1($equipo_local){

$sentencia=$this->conn->prepare("
                                   Select * FROM regisjugadore
                                   WHERE (nombrequipo = :nombrequipo)
                                   ");
$sentencia->bindParam(':nombrequipo',$equipo_local);
$sentencia->execute();
    return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }
 
 public function ConsultarJugadores2($equipo_visitante){

$sentencia=$this->conn->prepare("
                                   Select * FROM regisjugadore
                                   WHERE (nombrequipo = :nombrequipo)
                                   ");
$sentencia->bindParam(':nombrequipo',$equipo_visitante);
$sentencia->execute();
    return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }
 







 public function ListadoEquipos($torneo){
$sentencia=$this->conn->prepare("Select * FROM regisequipo
                                   WHERE (torneo = :torneo and estatus = 2)
                                   ");
$sentencia->bindParam(':torneo',$torneo);
$sentencia->execute();
    return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }


 public function ListadoEquipostabla($torneo){
$sentencia=$this->conn->prepare("Select * FROM tablaposicion
                                   WHERE (torneo = :torneo) order by puntos  DESC, diferenciagol DESC, play ASC
                                   ");
$sentencia->bindParam(':torneo',$torneo);
$sentencia->execute();
    return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }





 public function DatosTorneo($nombrequipo){
$sentencia=$this->conn->prepare("
                                   Select * FROM regisequipo
                                   WHERE (nombrequipo = :nombrequipo)
                                   ");
$sentencia->bindParam(':nombrequipo',$nombrequipo);
$sentencia->execute();
    return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }
 



 public function Datos_Equipos($torneo){
$sentencia=$this->conn->prepare("
                                   Select * FROM regisequipo  ORDER BY torneo ASC;

                                   WHERE (torneo = :torneo)
                                   ");
$sentencia->bindParam(':torneo',$torneo);
$sentencia->execute();
    return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }




 
    

 public function  VerificaridTorneo($torneo){
$sentencia=$this->conn->prepare("SELECT * FROM regisequipo
                                    WHERE torneo = :torneo  
                                    ");
$sentencia->bindParam(':torneo',$torneo);
$sentencia->execute();
return($sentencia->fetchAll(PDO::FETCH_OBJ));
}
 




 
 public function  VerificarTorneo($nombrequipo){
$sentencia=$this->conn->prepare("SELECT * FROM regisequipo
                                    WHERE nombrequipo = :nombrequipo  
                                    ");
$sentencia->bindParam(':nombrequipo',$nombrequipo);
$sentencia->execute();
return($sentencia->fetchAll(PDO::FETCH_OBJ));
}




 public function  VerificarCedula($cedula){
$sentencia=$this->conn->prepare("SELECT * FROM estudiante
                                    WHERE cedula = :cedula  
                                    ");
$sentencia->bindParam(':cedula',$cedula);
$sentencia->execute();
return($sentencia->fetchAll(PDO::FETCH_OBJ));
}


 public function  VerificarCedulaINS($cedula){
$sentencia=$this->conn->prepare("SELECT * FROM inscrequipo
                                    WHERE cedula = :cedula  
                                    ");
$sentencia->bindParam(':cedula',$cedula);
$sentencia->execute();
return($sentencia->fetchAll(PDO::FETCH_OBJ));
}



 public function  VerificarJugadores($cedula,$torneo){

$sentencia=$this->conn->prepare("SELECT * FROM regisjugadore
                                    WHERE cedula = :cedula AND torneo = :torneo
                                    ");
$sentencia->bindParam(':cedula',$cedula);
$sentencia->bindParam(':torneo',$torneo);
$sentencia->execute();
return($sentencia->fetchAll(PDO::FETCH_OBJ));
}



 public function  Verificardorsal($torneo, $dorsal, $nombrequipo){

$sentencia=$this->conn->prepare("SELECT * FROM regisjugadore
                                    WHERE torneo = :torneo AND dorsal = :dorsal AND
                                    nombrequipo = :nombrequipo
                                    ");
$sentencia->bindParam(':torneo',$torneo);
$sentencia->bindParam(':dorsal',$dorsal);
$sentencia->bindParam(':nombrequipo',$nombrequipo);
$sentencia->execute();
return($sentencia->fetchAll(PDO::FETCH_OBJ));
}



 public function  Verificarfactura($factura){

$sentencia=$this->conn->prepare("SELECT * FROM pagogym
                                    WHERE factura = :factura 
                                    ");
$sentencia->bindParam(':factura',$factura);

$sentencia->execute();
return($sentencia->fetchAll(PDO::FETCH_OBJ));
}







 public function  verificaresultado($encuentro){

$sentencia=$this->conn->prepare("SELECT * FROM regisresultado
                                    WHERE encuentro = :encuentro
                                    ");
$sentencia->bindParam(':encuentro',$encuentro);
$sentencia->execute();
return($sentencia->fetchAll(PDO::FETCH_OBJ));
}



 public function buscajornada ($nombrejornada,$torneo){
    
    $sentencia=$this->conn->prepare("SELECT * FROM jornadas
                                   WHERE nombrejornada = :nombrejornada  AND torneo = :torneo 
                                    
                                   ");
    $sentencia->bindParam(':nombrejornada',$nombrejornada);
   
    $sentencia->bindParam(':torneo',$torneo);
    
    $sentencia->execute();
    return($sentencia->fetchAll(PDO::FETCH_OBJ));
    }





 public function  VerificarEstudiante($cedula){
$sentencia=$this->conn->prepare("SELECT * FROM estudiante
                                    WHERE cedula = :cedula  
                                    ");
$sentencia->bindParam(':cedula',$cedula);
$sentencia->execute();
return($sentencia->fetchAll(PDO::FETCH_OBJ));
}



 public function  VerificarCorreo($correo){
$sentencia=$this->conn->prepare("SELECT * FROM estudiante
                                    WHERE correo = :correo  
                                    ");
$sentencia->bindParam(':correo',$correo);
$sentencia->execute();
return($sentencia->fetchAll(PDO::FETCH_OBJ));
}
 



 public function  VerificarUsuarioINS($user){
$sentencia=$this->conn->prepare("SELECT * FROM usuario
                                    WHERE user = :user  
                                    ");
$sentencia->bindParam(':user',$user);
$sentencia->execute();
return($sentencia->fetchAll(PDO::FETCH_OBJ));
}
 


public function VerNotificaciones($idequipo){
$sentencia=$this->conn->prepare("SELECT * FROM regisequipo
                                   WHERE idequipo = :idequipo or :idequipo = -1 AND estatus = 0  AND disciplina = 'Futbol Sala'
                                      
                                   ");
$sentencia->bindParam(':idequipo',$idequipo);
$sentencia->execute();
return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }


    public function jornada1($idtorneo){
    $sentencia=$this->conn->prepare("SELECT * from jornadas where torneo = :idtorneo and nombrejornada = '1'  "
                                   
                                   );
    $sentencia->bindParam(':idtorneo',$idtorneo);
     $sentencia->execute();
     return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }
      public function jornada5($idtorneo){
    $sentencia=$this->conn->prepare("SELECT * from jornadas where torneo = :idtorneo and nombrejornada = '5'  "
                                   
                                   );
    $sentencia->bindParam(':idtorneo',$idtorneo);
     $sentencia->execute();
     return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }
  public function jornada9($idtorneo){
    $sentencia=$this->conn->prepare("SELECT * from jornadas where torneo = :idtorneo and nombrejornada = '9'  "
                                   
                                   );
    $sentencia->bindParam(':idtorneo',$idtorneo);
     $sentencia->execute();
     return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }
  public function jornada13($idtorneo){
    $sentencia=$this->conn->prepare("SELECT * from jornadas where torneo = :idtorneo and nombrejornada = '13'  "
                                   
                                   );
    $sentencia->bindParam(':idtorneo',$idtorneo);
     $sentencia->execute();
     return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }

  public function jornada17($idtorneo){
    $sentencia=$this->conn->prepare("SELECT * from jornadas where torneo = :idtorneo and nombrejornada = '17'  "
                                   
                                   );
    $sentencia->bindParam(':idtorneo',$idtorneo);
     $sentencia->execute();
     return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }

 public function jornada2($idtorneo){
    $sentencia=$this->conn->prepare("SELECT * from jornadas where torneo = :idtorneo and nombrejornada = '2'  "
                                   
                                   );
    $sentencia->bindParam(':idtorneo',$idtorneo);
     $sentencia->execute();
     return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }
      public function jornada6($idtorneo){
    $sentencia=$this->conn->prepare("SELECT * from jornadas where torneo = :idtorneo and nombrejornada = '6'  "
                                   
                                   );
    $sentencia->bindParam(':idtorneo',$idtorneo);
     $sentencia->execute();
     return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }
  public function jornada10($idtorneo){
    $sentencia=$this->conn->prepare("SELECT * from jornadas where torneo = :idtorneo and nombrejornada = '10'  "
                                   
                                   );
    $sentencia->bindParam(':idtorneo',$idtorneo);
     $sentencia->execute();
     return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }
  public function jornada14($idtorneo){
    $sentencia=$this->conn->prepare("SELECT * from jornadas where torneo = :idtorneo and nombrejornada = '14'  "
                                   
                                   );
    $sentencia->bindParam(':idtorneo',$idtorneo);
     $sentencia->execute();
     return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }

  public function jornada18($idtorneo){
    $sentencia=$this->conn->prepare("SELECT * from jornadas where torneo = :idtorneo and nombrejornada = '18'  "
                                   
                                   );
    $sentencia->bindParam(':idtorneo',$idtorneo);
     $sentencia->execute();
     return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }


    public function jornada3($idtorneo){
    $sentencia=$this->conn->prepare("SELECT * from jornadas where torneo = :idtorneo and nombrejornada = '3'  "
                                   
                                   );
    $sentencia->bindParam(':idtorneo',$idtorneo);
     $sentencia->execute();
     return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }
      public function jornada7($idtorneo){
    $sentencia=$this->conn->prepare("SELECT * from jornadas where torneo = :idtorneo and nombrejornada = '7'  "
                                   
                                   );
    $sentencia->bindParam(':idtorneo',$idtorneo);
     $sentencia->execute();
     return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }
  public function jornada11($idtorneo){
    $sentencia=$this->conn->prepare("SELECT * from jornadas where torneo = :idtorneo and nombrejornada = '11'  "
                                   
                                   );
    $sentencia->bindParam(':idtorneo',$idtorneo);
     $sentencia->execute();
     return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }
  public function jornada15($idtorneo){
    $sentencia=$this->conn->prepare("SELECT * from jornadas where torneo = :idtorneo and nombrejornada = '15'  "
                                   
                                   );
    $sentencia->bindParam(':idtorneo',$idtorneo);
     $sentencia->execute();
     return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }

  public function jornada19($idtorneo){
    $sentencia=$this->conn->prepare("SELECT * from jornadas where torneo = :idtorneo and nombrejornada = '19'  "
                                   
                                   );
    $sentencia->bindParam(':idtorneo',$idtorneo);
     $sentencia->execute();
     return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }

        public function jornada4($idtorneo){
    $sentencia=$this->conn->prepare("SELECT * from jornadas where torneo = :idtorneo and nombrejornada = '4'  "
                                   
                                   );
    $sentencia->bindParam(':idtorneo',$idtorneo);
     $sentencia->execute();
     return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }
      public function jornada8($idtorneo){
    $sentencia=$this->conn->prepare("SELECT * from jornadas where torneo = :idtorneo and nombrejornada = '8'  "
                                   
                                   );
    $sentencia->bindParam(':idtorneo',$idtorneo);
     $sentencia->execute();
     return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }
  public function jornada12($idtorneo){
    $sentencia=$this->conn->prepare("SELECT * from jornadas where torneo = :idtorneo and nombrejornada = '12'  "
                                   
                                   );
    $sentencia->bindParam(':idtorneo',$idtorneo);
     $sentencia->execute();
     return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }
  public function jornada16($idtorneo){
    $sentencia=$this->conn->prepare("SELECT * from jornadas where torneo = :idtorneo and nombrejornada = '16'  "
                                   
                                   );
    $sentencia->bindParam(':idtorneo',$idtorneo);
     $sentencia->execute();
     return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }

  public function jornada20($idtorneo){
    $sentencia=$this->conn->prepare("SELECT * from jornadas where torneo = :idtorneo and nombrejornada = '20'  "
            
                                 );
    $sentencia->bindParam(':idtorneo',$idtorneo);
     $sentencia->execute();
     return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }


      public function VerNotificacionesbaloncesto ($idequipo){
$sentencia=$this->conn->prepare("SELECT * FROM regisequipo
                                   WHERE idequipo = :idequipo or :idequipo = -1 AND estatus = 0  AND disciplina = 'Baloncesto'
                                      
                                   ");
$sentencia->bindParam(':idequipo',$idequipo);
$sentencia->execute();
return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }

public function VerNotificacionesvoleibol($idequipo){
$sentencia=$this->conn->prepare("SELECT * FROM regisequipo
                                   WHERE idequipo = :idequipo or :idequipo = -1 AND estatus = 0  AND disciplina = 'Voleibol'
                                      
                                   ");
$sentencia->bindParam(':idequipo',$idequipo);
$sentencia->execute();
return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }



public function VerNotificaciones2(){
$sentencia=$this->conn->prepare("SELECT * FROM regisequipo
                                   WHERE estatus = 0 
                                      
                                   ");

$sentencia->execute();
return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }


public function VerNotificacionesUsuario($usuario){
$sentencia=$this->conn->prepare("SELECT * FROM mensajes
                                   WHERE destino = :destino ORDER By idmensaje DESC 
                                      
                                   ");
$sentencia->bindParam(':destino',$usuario);
$sentencia->execute();
return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }



public function VerNotificacionesUsuarioalert($usuario){
$sentencia=$this->conn->prepare("SELECT * FROM mensajes
                                   WHERE destino = :destino AND estatus = 0 
                                      
                                   ");
$sentencia->bindParam(':destino',$usuario);
$sentencia->execute();
return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }






public function VerNotificacionesUsuario2($usuario, $idmensaje){
$sentencia=$this->conn->prepare("SELECT * FROM mensajes
                                   WHERE destino = :destino AND idmensaje = :idmensaje 
                                      
                                   ");
$sentencia->bindParam(':destino',$usuario);
$sentencia->bindParam(':idmensaje',$idmensaje);
$sentencia->execute();
return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }





public function VerConfirmacion($idequipo){
$sentencia=$this->conn->prepare("SELECT * FROM regisequipo
                                   WHERE idequipo = :idequipo 
                                      
                                   ");
$sentencia->bindParam(':idequipo',$idequipo);
$sentencia->execute();
return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }








     
    public function inscrequipoREG($cedula,$nombre,$user,$pass,$nivel){
    
    $sentencia=$this->conn->prepare("
                                   INSERT into usuario
                                   SET 
                                   identidad = :cedula,
                                   nombre = :nombre,
                                   user = :user,
                                   pass = :pass,
                                   nivel = :nivel
                                   ");
    $sentencia->bindParam(':cedula',$cedula);
    $sentencia->bindParam(':nombre',$nombre);
    $sentencia->bindParam(':user',$user);
    $sentencia->bindParam(':pass',$pass);
    $sentencia->bindParam(':nivel',$nivel);
    $sentencia->execute();
    
    }










 
 
    public function PeriodoAcademico($nombreacademico,$fechaini,$fechafina){
    
    $sentencia=$this->conn->prepare("
                                   INSERT into periodo
                                   SET nombreacademico = :nombreacademico,
                                   fechaini = :fechaini,
                                   fechafina = :fechafina
                                   ");
    $sentencia->bindParam(':nombreacademico',$nombreacademico);
    $sentencia->bindParam(':fechaini',$fechaini);
    $sentencia->bindParam(':fechafina',$fechafina);
    $sentencia->execute();
    
    }

 

    public function RegistroTorneo($nombretorneo,$idperiodo,$disciplina,$fechainitorneo,$cantidaequi,$fechafintorneo){
    
    $sentencia=$this->conn->prepare("
                                   INSERT into registorneo
                                   SET nombretorneo = :nombretorneo,
                                   idperiodo = :idperiodo,
                                   disciplina = :disciplina,
                                   fechainitorneo = :fechainitorneo,
                                   cantidaequi = :cantidaequi,
                                   fechafintorneo = :fechafintorneo
                                   ");
    $sentencia->bindParam(':nombretorneo',$nombretorneo);
    $sentencia->bindParam(':idperiodo',$idperiodo);
    $sentencia->bindParam(':disciplina',$disciplina);
    $sentencia->bindParam(':fechainitorneo',$fechainitorneo);
    $sentencia->bindParam(':cantidaequi',$cantidaequi);
    $sentencia->bindParam(':fechafintorneo',$fechafintorneo);
    $sentencia->execute();
    
    }
    
     



public function fPeriodo($idperiodo){
$sentencia=$this->conn->prepare("
                                   Select * FROM periodo
                                   WHERE (idperiodo = :idperiodo or
                                   :idperiodo = -1    )
                                   ");
$sentencia->bindParam(':idperiodo',$idperiodo);
$sentencia->execute();
return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }




 



 

    public function ActualizaReSTATUS($idequipo,$estatus){
    
    $sentencia=$this->conn->prepare("
                                   UPDATE regisequipo
                                   SET idequipo = :idequipo,
                                   estatus = :estatus
                                   WHERE  idequipo = :idequipo
                         
                                   ");
    $sentencia->bindParam(':idequipo',$idequipo);
    $sentencia->bindParam(':estatus',$estatus);

    $sentencia->execute();
    
    }



    public function updatestatsgym($idestugym){

      $sentencia=mysql_query("SELECT * from estudiantesgym
        where idestugym = 7");
         $resultado = mysql_fetch_array($sentencia);
         $cantidadprev = $resultado['cantidad'];

         $cantidad = $cantidadprev + 1;
    
    $sentencia=$this->conn->prepare("UPDATE estudiantesgym
                                   SET idestugym = :idestugym,
                                   cantidad = $cantidad
                                   WHERE idestugym = :idestugym
                         
                                   ");
     $sentencia->bindParam(':idestugym',$idestugym);
    

    $sentencia->execute();
    
    }
  public function updatestatsgymcarr($idestugym){

      $sentencia=mysql_query("SELECT * from estudiantesgymcarrera
        where idestugym = $idestugym");
         $resultado = mysql_fetch_array($sentencia);
         $cantidadprev = $resultado['cantidad'];

         $cantidad = $cantidadprev + 1;
    
    $sentencia=$this->conn->prepare("UPDATE estudiantesgym
                                   SET idestugym = :idestugym,
                                   cantidad = $cantidad
                                   WHERE idestugym = :idestugym
                         
                                   ");
     $sentencia->bindParam(':idestugym',$idestugym);
    

    $sentencia->execute();
    
    }

    public function cargarstatsgym($periodo){
    
    $sentencia=$this->conn->prepare("
                                   INSERT into estudiantesgym
                                   SET periodo = :periodo,
                                   cantidad = 1
                                   
                                   ");

    $sentencia->bindParam(':periodo',$periodo);
    $sentencia->execute();
    
    }
     public function cargarstatsgymcar($carrera){
    
    $sentencia=$this->conn->prepare("
                                   INSERT into estudiantesgymcarrera
                                   SET carrera = :carrera,
                                   cantidad = 1
                                   
                                   ");
        $sentencia->bindParam(':carrera',$carrera);
   
    $sentencia->execute();
    
    }







    public function actualizareliminatorias($idequipoa,$estatus_e,$torneo){
    
    $sentencia=$this->conn->prepare("
                                   UPDATE tablaposicion
                                   SET idequipo = :idequipo,
                                   estatus_e = :estatus
                                   WHERE  idequipo = :idequipo and torneo = :torneo
                         
                                   ");
    $sentencia->bindParam(':idequipo',$idequipoa);
    $sentencia->bindParam(':estatus',$estatus_e);
     $sentencia->bindParam(':torneo',$torneo);
    $sentencia->execute();
    
    }





    public function actualizaestatusmsj($idmensaje, $estatus){
    
    $sentencia=$this->conn->prepare("
                                   UPDATE mensajes
                                   SET idmensaje = :idmensaje,
                                   estatus = :estatus
                                   WHERE  idmensaje = :idmensaje
                         
                                   ");
    $sentencia->bindParam(':idmensaje',$idmensaje);
    $sentencia->bindParam(':estatus',$estatus);

    $sentencia->execute();
    
    }










    public function actualizarestatusencuentro($encuentro,$estatus){
    
    $sentencia=$this->conn->prepare("
                                   UPDATE regisjornadas
                                   SET id_encuentro = :id_encuentro,
                                   estatus = :estatus
                                   WHERE  id_encuentro = :id_encuentro
                         
                                   ");
    $sentencia->bindParam(':id_encuentro',$encuentro);
    $sentencia->bindParam(':estatus',$estatus);

    $sentencia->execute();
    
    }











public function Printf_Futbol($identidad){
 

$sentencia=$this->conn->prepare("SELECT * FROM regisequipo  
                                   WHERE (identidad = :identidad and disciplina = 'Futbol Sala' )
                                   ");
$sentencia->bindParam(':identidad',$identidad);
$sentencia->execute();
return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }




public function Printf_Voleibol($identidad){

$sentencia=$this->conn->prepare("SELECT * FROM regisequipo  
                                   WHERE (identidad = :identidad and disciplina = 'Voleibol')
                                   ");
$sentencia->bindParam(':identidad',$identidad);
$sentencia->execute();
return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }


 



     public function Printf_Baloncesto($identidad){

 $sentencia=$this->conn->prepare("SELECT * FROM regisequipo  
                                   WHERE (identidad = :identidad and disciplina = 'Baloncesto')
                                   ");
$sentencia->bindParam(':identidad',$identidad);
$sentencia->execute();
return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }











    public function VereQUIP($identidad){

 

$sentencia=$this->conn->prepare("SELECT * FROM regisequipo  
                                   WHERE (identidad = :identidad   )
                                   ");
$sentencia->bindParam(':identidad',$identidad);
$sentencia->execute();
return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }





 


public function VereQUIPbaloncesto($identidad){

 

$sentencia=$this->conn->prepare("SELECT * FROM regisequipo  
                                   WHERE (identidad = :identidad and disciplina = 'Baloncesto'  )
                                   ");
$sentencia->bindParam(':identidad',$identidad);
$sentencia->execute();
return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }














public function VereQUIPFutbol($identidad){

 

$sentencia=$this->conn->prepare("SELECT * FROM regisequipo  
                                   WHERE (identidad = :identidad and disciplina = 'Futbol Sala'  )
                                   ");
$sentencia->bindParam(':identidad',$identidad);
$sentencia->execute();
return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }





 











 public function  VerList($torneo ){


$cedu = $_SESSION['identidad'];

$sentencia=$this->conn->prepare("SELECT * FROM regisequipo
                                    WHERE torneo = :torneo  and identidad = $cedu 
                                    ");
$sentencia->bindParam(':torneo',$torneo);
$sentencia->execute();
return($sentencia->fetchAll(PDO::FETCH_OBJ));
}







 public function  verifequipo($torneo,$nombrequipo ){




$sentencia=$this->conn->prepare("SELECT * FROM regisequipo
                                    WHERE torneo = :torneo  and nombrequipo = :nombrequipo 
                                    ");
$sentencia->bindParam(':torneo',$torneo);
$sentencia->bindParam(':nombrequipo',$nombrequipo);
$sentencia->execute();
return($sentencia->fetchAll(PDO::FETCH_OBJ));
}





 





public function VereQUIPVoleibol($identidad){

 

$sentencia=$this->conn->prepare("SELECT * FROM regisequipo  
                                   WHERE (identidad = :identidad and disciplina = 'Voleibol'  )
                                   ");
$sentencia->bindParam(':identidad',$identidad);
$sentencia->execute();
return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }



 
 




    public function VerTorneoBaloncesto($idtorneo){
$sentencia=$this->conn->prepare("SELECT * FROM registorneo  
                                   WHERE (idtorneo = :idtorneo or
                                   :idtorneo = -1 and disciplina = 'Baloncesto'   )
                                   ");
$sentencia->bindParam(':idtorneo',$idtorneo);
$sentencia->execute();
return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }




    public function VerTorneoVoleiboll($idtorneo){
$sentencia=$this->conn->prepare("SELECT * FROM registorneo  
                                   WHERE (idtorneo = :idtorneo or
                                   :idtorneo = -1 and disciplina = 'Voleibol'   )
                                   ");
$sentencia->bindParam(':idtorneo',$idtorneo);
$sentencia->execute();
return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }


 



























    public function VerTorneos($nombrequipo){
$sentencia=$this->conn->prepare("SELECT * FROM regisequipo  
                                   WHERE (nombrequipo = :nombrequipo)
                                   ");
$sentencia->bindParam(':nombrequipo',$nombrequipo);
$sentencia->execute();
return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }











    public function VerTorneo($idtorneo){
$sentencia=$this->conn->prepare("SELECT * FROM registorneo  
                                   WHERE (idtorneo = :idtorneo or
                                   :idtorneo = -1 and disciplina = 'Futbol Sala'   )
                                   ");
$sentencia->bindParam(':idtorneo',$idtorneo);
$sentencia->execute();
return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }










    public function VerTorneoD($idtorneo){
$sentencia=$this->conn->prepare("SELECT * FROM registorneo 
                                   WHERE idtorneo = :idtorneo 
                                   ");
$sentencia->bindParam(':idtorneo',$idtorneo);
$sentencia->execute();
return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }





    public function verificarfase1torneo($idtorneo){
$sentencia=$this->conn->prepare("SELECT * FROM registorneo 
                                   WHERE idtorneo = :idtorneo 
                                   AND fase1 = 0
                                   ");
$sentencia->bindParam(':idtorneo',$idtorneo);
$sentencia->execute();
return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }


    public function verificarfase1torneo2($idtorneo){
$sentencia=$this->conn->prepare("SELECT * FROM registorneo 
                                   WHERE idtorneo = :idtorneo 
                                   AND fase1 = 1
                                   ");
$sentencia->bindParam(':idtorneo',$idtorneo);
$sentencia->execute();
return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }

  public function verificarfasefinal($idtorneo){
$sentencia=$this->conn->prepare("SELECT * FROM registorneo 
                                   WHERE idtorneo = :idtorneo 
                                   AND estatus = 1
                                   ");
$sentencia->bindParam(':idtorneo',$idtorneo);
$sentencia->execute();
return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }
















      public function VerEquipos($identidad){
$sentencia=$this->conn->prepare("
                                   Select * FROM regisequipo
                                   WHERE (identidad = :identidad)
                                   ");
$sentencia->bindParam(':identidad',$identidad);
$sentencia->execute();
return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }






  public function regisequipos($nombrequipo,$coloruni,$telefono,$torneo,$telefonodel,$deleequipo,$identidad,$disciplina,$estatus){
    
    $sentencia=$this->conn->prepare("
                                   INSERT into regisequipo
                                   SET nombrequipo = :nombrequipo,
                                   coloruni = :coloruni,
                                   telefono = :telefono,
                                   torneo = :torneo,
                                   telefonodel = :telefonodel,
                                   deleequipo = :deleequipo,
                                   identidad = :identidad,
                                   disciplina = :disciplina,
                                   estatus = :estatus
                                   ");
    $sentencia->bindParam(':nombrequipo',$nombrequipo);
    $sentencia->bindParam(':coloruni',$coloruni);
    $sentencia->bindParam(':telefono',$telefono);
    $sentencia->bindParam(':torneo',$torneo);
    $sentencia->bindParam(':telefonodel',$telefonodel);
    $sentencia->bindParam(':deleequipo',$deleequipo);
        $sentencia->bindParam(':identidad',$identidad);
        $sentencia->bindParam(':disciplina',$disciplina);
    $sentencia->bindParam(':estatus',$estatus);
    $sentencia->execute();
    
    }
	
public function regisjornadas($nombrejornada,$fechajornada,$torneo,$equipo_local,$equipo_visitante,$dia,$hora){
    
    $sentencia=$this->conn->prepare("
                                   INSERT into regisjornadas
                                   SET nombrejornada = :nombrejornada,
                                   fechajornada = :fechajornada,
                                    torneo = :torneo,
                                    equipo_local = :equipo_local,
                                    equipo_visitante = :equipo_visitante,
                                    dia = :dia,
                                    hora = :hora
                                   ");
    $sentencia->bindParam(':nombrejornada',$nombrejornada);
    $sentencia->bindParam(':fechajornada',$fechajornada);
    $sentencia->bindParam(':torneo',$torneo);
    $sentencia->bindParam(':equipo_local',$equipo_local);
    $sentencia->bindParam(':equipo_visitante',$equipo_visitante);
    $sentencia->bindParam(':dia',$dia);
    $sentencia->bindParam(':hora',$hora);  
    $sentencia->execute();
    
    }
  
public function nuevajornada($nombrejornada,$torneo){
    
    $sentencia=$this->conn->prepare("
                                   INSERT into jornadas
                                   SET nombrejornada = :nombrejornada,
                                    torneo = :torneo
                                    
                                   ");
    $sentencia->bindParam(':nombrejornada',$nombrejornada);
   
    $sentencia->bindParam(':torneo',$torneo);
    
    $sentencia->execute();
    
    }


public function enviarmensaje($origen,$destino,$mensaje,$estatus,$asunto){
    
    $sentencia=$this->conn->prepare("
                                   INSERT into mensajes
                                   SET origen = :origen,
                                    destino = :destino,
                                      mensaje = :mensaje,
                                      asunto = :asunto,
                                      estatus = :estatus,
                                       fecha =  CURDATE(),
                                       hora = CURTIME()

                                   ");
    $sentencia->bindParam(':origen',$origen);
   $sentencia->bindParam(':destino',$destino);
    $sentencia->bindParam(':mensaje',$mensaje);
    $sentencia->bindParam(':estatus',$estatus);
    $sentencia->bindParam(':asunto',$asunto);
    $sentencia->execute();
    }


    public function enviarmensaje2($origen,$destino1,$mensaje,$estatus,$asunto){
    
    $sentencia=$this->conn->prepare("
                                   INSERT into mensajes
                                   SET origen = :origen,
                                    destino = :destino,
                                      mensaje = :mensaje,
                                      asunto = :asunto,
                                      estatus = :estatus,
                                       fecha =  CURDATE(),
                                       hora = CURTIME()

                                   ");
    $sentencia->bindParam(':origen',$origen);
   $sentencia->bindParam(':destino',$destino1);
    $sentencia->bindParam(':mensaje',$mensaje);
    $sentencia->bindParam(':estatus',$estatus);
    $sentencia->bindParam(':asunto',$asunto);
    $sentencia->execute();
    
    }

    public function enviarmensaje3($origen,$destino2,$mensaje,$estatus,$asunto){
    
    $sentencia=$this->conn->prepare("
                                   INSERT into mensajes
                                   SET origen = :origen,
                                    destino = :destino,
                                      mensaje = :mensaje,
                                      asunto = :asunto,
                                      estatus = :estatus,
                                       fecha =  CURDATE(),
                                       hora = CURTIME()

                                   ");
    $sentencia->bindParam(':origen',$origen);
   $sentencia->bindParam(':destino',$destino2);
    $sentencia->bindParam(':mensaje',$mensaje);
    $sentencia->bindParam(':estatus',$estatus);
    $sentencia->bindParam(':asunto',$asunto);
    $sentencia->execute();
    
    }








  public function regisjugadores($nombre,$apellido,$cedula,$telefono,$Edad,$carrera,$dorsal,$torneo,$identidad,$nombrequipo){
    
    $sentencia=$this->conn->prepare("
                                   INSERT into regisjugadore
                                   SET nombre = :nombre,
                                   apellido = :apellido,
                                   cedula = :cedula,
                                   telefono = :telefono,
                                   Edad = :Edad,
                                   carrera = :carrera,
                                   dorsal = :dorsal,
                                   torneo = :torneo,
                                   identidad = :identidad,
                                   nombrequipo = :nombrequipo

                                   ");
    $sentencia->bindParam(':nombre',$nombre);
    $sentencia->bindParam(':apellido',$apellido);
    $sentencia->bindParam(':cedula',$cedula);
    $sentencia->bindParam(':telefono',$telefono);
    $sentencia->bindParam(':Edad',$Edad);
    $sentencia->bindParam(':carrera',$carrera);
    $sentencia->bindParam(':dorsal',$dorsal);
    $sentencia->bindParam(':torneo',$torneo);
    $sentencia->bindParam(':identidad',$identidad);
    $sentencia->bindParam(':nombrequipo',$nombrequipo);
    $sentencia->execute();
    
    }

  public function regisresultados ($equipo_local, $goles_local ,$equipo_visitante,$goles_visitante, $encuentro, $torneo, $nombrejornada, $fecha){
    
    $sentencia=$this->conn->prepare("
                                   INSERT into regisresultado
                                   SET equipo_local = :equipo_local,
                                   goles_local = :goles_local,
                                   equipo_visitante = :equipo_visitante,
                                   goles_visitante = :goles_visitante,
                                   encuentro = :encuentro,
                                   torneo = :torneo,
                                   nombrejornada = :nombrejornada,
                                   fecha = :fecha
                                    

                                   ");
    $sentencia->bindParam(':equipo_local',$equipo_local);
    $sentencia->bindParam(':goles_local',$goles_local);
    $sentencia->bindParam(':equipo_visitante',$equipo_visitante);
    $sentencia->bindParam(':goles_visitante',$goles_visitante);
    $sentencia->bindParam(':encuentro',$encuentro);
     $sentencia->bindParam(':torneo',$torneo);  
     $sentencia->bindParam(':nombrejornada',$nombrejornada);
     $sentencia->bindParam(':fecha',$fecha);  
    $sentencia->execute();
    
    }

      public function regisposicion1 ($equipo_local,$play1, $win1, $loss1, $torneo, $team1, $goles_local, $goles_visitante, $diferencia,$draw1, $puntos1){
    
    $sentencia=$this->conn->prepare("
                                   INSERT into tablaposicion
                                   SET nombrequipo = :nombrequipo,
                                   play = :play,
                                   win = :win,
                                   loss = :loss,
                                   torneo = :torneo,
                                   idequipo = :idequipo,
                                   golfavor = :golfavor,
                                   golcontra = :golcontra,
                                   diferenciagol = :diferenciagol,
                                   draw = :draw,
                                   puntos = :puntos

                                   ");
    $sentencia->bindParam(':nombrequipo',$equipo_local);
     $sentencia->bindParam(':play',$play1);
        $sentencia->bindParam(':win',$win1);
    $sentencia->bindParam(':loss',$loss1);
    $sentencia->bindParam(':torneo',$torneo);
     $sentencia->bindParam(':idequipo',$team1);
     $sentencia->bindParam(':golfavor',$goles_local);
     $sentencia->bindParam(':golcontra',$goles_visitante);
     $sentencia->bindParam(':diferenciagol',$diferencia);
     $sentencia->bindParam(':draw',$draw1);
    $sentencia->bindParam(':puntos',$puntos1);
    $sentencia->execute();
    
    }


public function regisposicion2 ($equipo_visitante,$play2, $win2, $loss2, $torneo, $team2, $goles_local, $goles_visitante, $diferencia2,$draw2,$puntos2){
    
    $sentencia=$this->conn->prepare("
                                   INSERT into tablaposicion
                                   SET nombrequipo = :nombrequipo,
                                   play = :play,
                                   win = :win,
                                   loss = :loss,
                                   torneo = :torneo,
                                   idequipo = :idequipo,
                                   golfavor = :golfavor,
                                   golcontra = :golcontra,
                                   diferenciagol = :diferenciagol,
                                   draw = :draw,
                                     puntos = :puntos

                                   ");
    $sentencia->bindParam(':nombrequipo',$equipo_visitante);
      $sentencia->bindParam(':play',$play2);
        $sentencia->bindParam(':win',$win2);
    $sentencia->bindParam(':loss',$loss2);
     $sentencia->bindParam(':torneo',$torneo);
     $sentencia->bindParam(':idequipo',$team2);
     $sentencia->bindParam(':golfavor',$goles_visitante);
     $sentencia->bindParam(':golcontra',$goles_local);
     $sentencia->bindParam(':diferenciagol',$diferencia2);
      $sentencia->bindParam(':draw',$draw2);
      $sentencia->bindParam(':puntos',$puntos2);
    $sentencia->execute();
    
    }





 public function apertura($nombre,$apellido,$correo,$telefono,$cedula,$carrera,$user,$pass,$notificacion){
    
    $sentencia=$this->conn->prepare("
                                   INSERT into inscrequipo
                                   SET nombre = :nombre,
                                   apellido = :apellido,
                                   correo = :correo,
                                   telefono = :telefono,
                                   cedula = :cedula,
                                   carrera = :carrera,
                                   user = :user,
                                   pass = :pass,
                                   notificacion = :notificacion
                                   ");
    $sentencia->bindParam(':nombre',$nombre);
    $sentencia->bindParam(':apellido',$apellido);
    $sentencia->bindParam(':correo',$correo);
    $sentencia->bindParam(':telefono',$telefono);
    $sentencia->bindParam(':cedula',$cedula);
    $sentencia->bindParam(':carrera',$carrera);
    $sentencia->bindParam(':user',$user);
    $sentencia->bindParam(':pass',$pass);
    $sentencia->bindParam(':notificacion',$notificacion);
    $sentencia->execute();
    
    }




 // funciones para evitr que un equipo juegue dos veces en una misma jornada



public function equirepetidojornada ($equipo_local, $nombrejornada, $torneo){
    $sentencia=$this->conn->prepare("SELECT * FROM regisjornadas
                                   WHERE
                                   (nombrejornada = :nombrejornada) and 
                                   (equipo_local  = :equipo_local) and 
                                   (torneo = :torneo)
                                   ");
   $sentencia->bindParam(':equipo_local',$equipo_local);
    //$sentencia->bindParam(':equipo_visitante',$equipo_visitante);
    $sentencia->bindParam(':nombrejornada',$nombrejornada);
     $sentencia->bindParam(':torneo',$torneo);
    $sentencia->execute();
  return($sentencia->fetchAll(PDO::FETCH_OBJ));  

  
    }    

   
public function equirepetidojornada2 ($equipo_visitante, $nombrejornada,$torneo){
    $sentencia=$this->conn->prepare("SELECT * FROM regisjornadas
                                   WHERE
                                   (nombrejornada = :nombrejornada) and 
                                    (equipo_visitante = :equipo_visitante) and
                                     (torneo = :torneo)
                                   ");
   //$sentencia->bindParam(':equipo_local',$equipo_local);
    $sentencia->bindParam(':equipo_visitante',$equipo_visitante);
    $sentencia->bindParam(':nombrejornada',$nombrejornada);
    $sentencia->bindParam(':torneo',$torneo);
    $sentencia->execute();
  return($sentencia->fetchAll(PDO::FETCH_OBJ));  

  
    }    

public function equirepetidojornada3 ($equipo_visitante, $nombrejornada,$torneo){
    $sentencia=$this->conn->prepare("SELECT * FROM regisjornadas
                                   WHERE
                                   nombrejornada = :nombrejornada and 
                                   equipo_local  = :equipo_visitante and
                                    (torneo = :torneo)
                                   ");
   //$sentencia->bindParam(':equipo_local',$equipo_local);
    $sentencia->bindParam(':equipo_visitante',$equipo_visitante);
    $sentencia->bindParam(':nombrejornada',$nombrejornada);
    $sentencia->bindParam(':torneo',$torneo);
    $sentencia->execute();
  return($sentencia->fetchAll(PDO::FETCH_OBJ));  

  
    }   

public function equirepetidojornada4 ($equipo_local, $nombrejornada,$torneo){
    $sentencia=$this->conn->prepare("SELECT * FROM regisjornadas
                                   WHERE
                                   nombrejornada = :nombrejornada and 
                                  equipo_visitante = :equipo_local and
                                   (torneo = :torneo)
                                   ");
   $sentencia->bindParam(':equipo_local',$equipo_local);
    //$sentencia->bindParam(':equipo_visitante',$equipo_visitante);
    $sentencia->bindParam(':nombrejornada',$nombrejornada);
    $sentencia->bindParam(':torneo',$torneo);
    $sentencia->execute();
  return($sentencia->fetchAll(PDO::FETCH_OBJ));  

  
    }   


 public function eliminarencuentro ($id){

    $sentencia=$this->conn->prepare("DELETE FROM `regisjornadas` 

                                    WHERE id_encuentro = :id_encuentro

                                   ");



    $sentencia->bindParam(':id_encuentro',$id);
    $sentencia->execute();


 }


 public function eliminarugador ($id){

    $sentencia=$this->conn->prepare("DELETE FROM `regisjugadore` 

                                    WHERE idjugadore = :idjugadore

                                   ");



    $sentencia->bindParam(':idjugadore',$id);
    $sentencia->execute();


 }
   
      public function buscaeliminatoriasemi1 ($equipo1, $torneo){
    $sentencia=$this->conn->prepare("SELECT * FROM tablaposicion
                                   WHERE
                                   nombrequipo = :nombrequipo AND
                                   torneo = :torneo AND
                                   (estatus_e = 1)
                                   ");
    $sentencia->bindParam(':nombrequipo',$equipo1);
    $sentencia->bindParam(':torneo',$torneo);
    $sentencia->execute();
    return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    } 
      public function buscaeliminatoriasfinal ($equipo1, $torneo){
    $sentencia=$this->conn->prepare("SELECT * FROM tablaposicion
                                   WHERE
                                   nombrequipo = :nombrequipo AND
                                   torneo = :torneo AND
                                   (estatus_e = 2)
                                   ");
    $sentencia->bindParam(':nombrequipo',$equipo1);
    $sentencia->bindParam(':torneo',$torneo);
    $sentencia->execute();
    return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }

       public function buscacarreras ($torneo, $carrera){
    $sentencia=$this->conn->prepare("SELECT * FROM estudiantestorneo
                                   WHERE
                                   torneo = :torneo and 
                                   carrera = :carrera                                  
                                   ");
   
    $sentencia->bindParam(':torneo',$torneo);
     $sentencia->bindParam(':carrera',$carrera);
    $sentencia->execute();
    return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    } 

  public function actualizarcarreras ($torneo){

   $suma = "SELECT * from estudiantestorneo WHERE carrera='$carrera' and torneo='$torneo'";
   $querysu = mysql_query($suma);
   $buscacamtidad = mysql_fetch_array($querysu);
   $monto1 = $buscacamtidad ['cantidad'];

   $sumatotal = $monto1 + $cantidad;


    $sentencia=$this->conn->prepare("UPDATE estudiantestorneo
                                   SET  idestudiantetorneo = :  idestudiantetorneo
                                   cantidad = $sumatotal                                   
                                   ");
   
    $sentencia->bindParam(':torneo',$torneo);
    $sentencia->execute();
    return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    } 




    //login
    
              
    public function loguear($user,$pass){
    $sentencia=$this->conn->prepare("
                                   Select * FROM usuario
                                   WHERE
                                   user = :user AND
                                   pass = :pass
                                   ");
    $sentencia->bindParam(':user',$user);
    $sentencia->bindParam(':pass',$pass);
    $sentencia->execute();
    return($sentencia->fetchAll(PDO::FETCH_OBJ));   
    }     
}
?>