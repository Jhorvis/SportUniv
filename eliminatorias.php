
<!DOCTYPE html>

<?php @session_start();
 

if (!isset($_SESSION['nivel'])) header("location:index.php");

//require("clases/claseusuario.php");

//$a= new Usuarios();
  
include ("enlace.php");
$id = $_GET['id'];

$sentencia = "select * from regisequipo where torneo = $id ";
     $query = mysql_query ($sentencia);

$sentencia2 = "select * from regisequipo where torneo = $id ";
     $query2 = mysql_query ($sentencia2);
 
require("clases/claseusuario.php");
$a= new Usuarios();


//ARREGLANDO CUARTOS DE FINAL

 $sentencia3 = "SELECT * from jornadas where torneo = $id ";
     $query3 = mysql_query ($sentencia3);

 $sentenciapos1 = "SELECT * from tablaposicion where torneo = $id and pos = 1";
     $querypos1 = mysql_query ($sentenciapos1);
     $arreglopos1 = mysql_fetch_array($querypos1);
 $sentenciapos8 = "SELECT * from tablaposicion where torneo = $id and pos = 8";
     $querypos8 = mysql_query ($sentenciapos8);
     $arreglopos8 = mysql_fetch_array($querypos8);

     $sentenciapos3 = "SELECT * from tablaposicion where torneo = $id and pos = 3";
     $querypos3 = mysql_query ($sentenciapos3);
     $arreglopos3 = mysql_fetch_array($querypos3);
 $sentenciapos6 = "SELECT * from tablaposicion where torneo = $id and pos = 6";
     $querypos6 = mysql_query ($sentenciapos6);
     $arreglopos6 = mysql_fetch_array($querypos6);


     $sentenciapos2 = "SELECT * from tablaposicion where torneo = $id and pos = 2";
     $querypos2 = mysql_query ($sentenciapos2);
     $arreglopos2 = mysql_fetch_array($querypos2);
 $sentenciapos7 = "SELECT * from tablaposicion where torneo = $id and pos = 7";
     $querypos7 = mysql_query ($sentenciapos7);
     $arreglopos7 = mysql_fetch_array($querypos7);


     $sentenciapos4 = "SELECT * from tablaposicion where torneo = $id and pos = 4";
     $querypos4 = mysql_query ($sentenciapos4);
     $arreglopos4 = mysql_fetch_array($querypos4);
 $sentenciapos5 = "SELECT * from tablaposicion where torneo = $id and pos = 5";
     $querypos5 = mysql_query ($sentenciapos5);
     $arreglopos5 = mysql_fetch_array($querypos5);

 
?>
 

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Unir</title>
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0">
 <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link href='http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,600,500,300,200,100' rel='stylesheet' type='text/css'>
<script src="js/jquery-1.8.0.min.js"></script>
 <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css">
<link href="img/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
<script src="js/jquery.carouFredSel-5.5.0-packed.js"></script>
<script src="js/functions.js"></script>
</head>
<body>
 
<div id="wrapper">
 
  <div class="shell">
 
 
    <div class="container">
     


<?php  include ("template/header.php");?>

  

  <div class="main">
 


<div class="featured">

<h4>Sistema automatizado <strong> para los procesos administrativos y deportivos del</strong> complejo deportivo del  <strong> Tecnologico Unir.</strong></h4>
        
</div>

 <?php

if ($a->verificarfasefinal($id)){
?>
<table width="100%"   height="300" >
  
<tr><td>
<br><center><img src="img/User_with_strange_head.svg" width="120" ></center>
<p><br><center><h4>Ya el torneo <span style="color:red">Finalizó.</span> 
no se pueden editar estadisticas del mismo </center></p> 
<br><br><center><a class="btn btn-primary" href="inscrequipo.php">Atras</a></center><br></td></tr>

</table>  
<br><br>
</div>
 

 </div></div></div>

<?php
  exit();
}
if ($a->verificarfase1torneo($id)){
?>
<table width="100%"   height="300" >
  
<tr><td>
<br><center><img src="img/User_with_strange_head.svg" width="120" ></center>
<p><br><center><h4>Atención! La fase 1 o fase previa <span style="color:red">NO HA FINALIZADO</span> 
  para continuar con la fase de eliminatorias dirigase antes a las configuraciones del torneo
  y a continuación presione en <span style="color:red">'Cerrar primera fase'.</span> </h4></center></p> 
<br><br><center><a class="btn btn-primary" href="inscrequipo.php">Atras</a></center><br></td></tr>

</table>  
<br><br>
</div>
 

 </div></div></div>

<?php
  exit();
}
?>


<?php 
if (isset($_POST['procesar1'])){




  

include 'enlace.php';
$estatus = 0;

 $torneo = $_GET['id'];
 $jornada = "cuartos de final";
 $asuntocuartos = "Partido por los cuartos de final";

 $equipo1 = $_POST['equipo1'];
$equipo8= $_POST['equipo8'];

$equipo3 = $_POST['equipo3'];
$equipo6= $_POST['equipo6'];

$equipo2 = $_POST['equipo2'];
$equipo7= $_POST['equipo7'];

$equipo4 = $_POST['equipo4'];
$equipo5= $_POST['equipo5'];


 /////////////////////////////////////////////////////////////////////
 $sentencial1 = "SELECT * from regisequipo WHERE nombrequipo ='$equipo1'";
$queryl1 = mysql_query($sentencial1);
$arreglol1 = mysql_fetch_array($queryl1);
$identidadl1 = $arreglol1['identidad'];

$sentenciala1 = "SELECT * from usuario WHERE identidad ='$identidadl1'";
$queryla1 = mysql_query($sentenciala1);
$arreglola1 = mysql_fetch_array($queryla1);
$identidadla1 = $arreglola1['user'];


$sentenciav2 = "SELECT * from regisequipo WHERE nombrequipo ='$equipo8'";
$queryv2 = mysql_query($sentenciav2);
$arreglov2 = mysql_fetch_array($queryv2);
$identidadv2 = $arreglov2['identidad'];

$sentenciavb2 = "SELECT * from usuario WHERE identidad ='$identidadv2'";
$queryvb2 = mysql_query($sentenciavb2);
$arreglovb2 = mysql_fetch_array($queryvb2);
$identidadvb2 = $arreglovb2['user'];
###################################################################
 $sentencial3 = "SELECT * from regisequipo WHERE nombrequipo ='$equipo3'";
$queryl3 = mysql_query($sentencial3);
$arreglol3 = mysql_fetch_array($queryl3);
$identidadl3 = $arreglol3['identidad'];

$sentenciala3 = "SELECT * from usuario WHERE identidad ='$identidadl3'";
$queryla3 = mysql_query($sentenciala3);
$arreglola3 = mysql_fetch_array($queryla3);
$identidadla3 = $arreglola3['user'];


$sentenciav4 = "SELECT * from regisequipo WHERE nombrequipo ='$equipo6'";
$queryv4 = mysql_query($sentenciav4);
$arreglov4 = mysql_fetch_array($queryv4);
$identidadv4 = $arreglov4['identidad'];

$sentenciavb4 = "SELECT * from usuario WHERE identidad ='$identidadv4'";
$queryvb4 = mysql_query($sentenciavb4);
$arreglovb4 = mysql_fetch_array($queryvb4);
$identidadvb4 = $arreglovb4['user'];
####################################################################
 $sentencial5 = "SELECT * from regisequipo WHERE nombrequipo ='$equipo2'";
$queryl5 = mysql_query($sentencial5);
$arreglol5 = mysql_fetch_array($queryl5);
$identidadl5 = $arreglol5['identidad'];

$sentenciala5 = "SELECT * from usuario WHERE identidad ='$identidadl5'";
$queryla5 = mysql_query($sentenciala5);
$arreglola5 = mysql_fetch_array($queryla5);
$identidadla5 = $arreglola5['user'];


$sentenciav6 = "SELECT * from regisequipo WHERE nombrequipo ='$equipo7'";
$queryv6 = mysql_query($sentenciav6);
$arreglov6 = mysql_fetch_array($queryv6);
$identidadv6 = $arreglov6['identidad'];

$sentenciavb6 = "SELECT * from usuario WHERE identidad ='$identidadv6'";
$queryvb6 = mysql_query($sentenciavb6);
$arreglovb6 = mysql_fetch_array($queryvb6);
$identidadvb6 = $arreglovb6['user'];
########################################################################
 $sentencial7 = "SELECT * from regisequipo WHERE nombrequipo ='$equipo4'";
$queryl7 = mysql_query($sentencial7);
$arreglol7 = mysql_fetch_array($queryl7);
$identidadl7 = $arreglol7['identidad'];

$sentenciala7 = "SELECT * from usuario WHERE identidad ='$identidadl7'";
$queryla7 = mysql_query($sentenciala7);
$arreglola7 = mysql_fetch_array($queryla7);
$identidadla7 = $arreglola7['user'];


$sentenciav8 = "SELECT * from regisequipo WHERE nombrequipo ='$equipo5'";
$queryv8 = mysql_query($sentenciav8);
$arreglov8 = mysql_fetch_array($queryv8);
$identidadv8 = $arreglov8['identidad'];

$sentenciavb8 = "SELECT * from usuario WHERE identidad ='$identidadv8'";
$queryvb8 = mysql_query($sentenciavb8);
$arreglovb8 = mysql_fetch_array($queryvb8);
$identidadvb8 = $arreglovb8['user'];
//////////////////////////////////////////////////////////////////////
$mensaje1 = "El proximo compromiso de su equipo fue pautado para
el dia . ".$_POST['diaa']." ".$_POST['fechajornadaa']." a las
  ".$_POST['horaa']." <br> <br>
".$_POST['equipo1']." VS  ".$_POST['equipo8']."";

$mensaje2 = "El proximo compromiso de su equipo fue pautado para
el dia . ".$_POST['diab']." ".$_POST['fechajornadab']." a las
  ".$_POST['horab']." <br> <br>
".$_POST['equipo3']." VS  ".$_POST['equipo6']."";

$mensaje3 = "El proximo compromiso de su equipo fue pautado para
el dia . ".$_POST['diac']." ".$_POST['fechajornadac']." a las
  ".$_POST['horac']." <br> <br>
".$_POST['equipo2']." VS  ".$_POST['equipo7']."";

$mensaje4 = "El proximo compromiso de su equipo fue pautado para
el dia . ".$_POST['diad']." ".$_POST['fechajornadad']." a las
  ".$_POST['horad']." <br> <br>
".$_POST['equipo5']." VS  ".$_POST['equipo4']."";

//////////////////////////////////////////////////////////////////////
$a->enviarmensaje2(

  $_SESSION['nombre'], 
  $identidadla1, 
  $mensaje1, 
  $estatus,
  $asuntocuartos
  );

$a->enviarmensaje3(

  $_SESSION['nombre'], 
  $identidadvb2, 
  $mensaje1, 
  $estatus,
  $asuntocuartos
  );
$a->enviarmensaje2(

  $_SESSION['nombre'], 
  $identidadla3, 
  $mensaje2, 
  $estatus,
  $asuntocuartos
  );

$a->enviarmensaje3(

  $_SESSION['nombre'], 
  $identidadvb4, 
  $mensaje2, 
  $estatus,
  $asuntocuartos
  );
$a->enviarmensaje2(

  $_SESSION['nombre'], 
  $identidadla5, 
  $mensaje3, 
  $estatus,
  $asuntocuartos
  );

$a->enviarmensaje3(

  $_SESSION['nombre'], 
  $identidadvb6, 
  $mensaje3, 
  $estatus,
  $asuntocuartos
  );
$a->enviarmensaje2(

  $_SESSION['nombre'], 
  $identidadla7, 
  $mensaje4, 
  $estatus,
  $asuntocuartos
  );

$a->enviarmensaje3(

  $_SESSION['nombre'], 
  $identidadvb8, 
  $mensaje4, 
  $estatus,
  $asuntocuartos
  );
////////////////////////////////////////////////////////////////////////
$a->regisjornadas (

	$jornada,
	$_POST ['fechajornadaa'],
	$torneo,
    $_POST ['equipo1'],
	$_POST ['equipo8'],
    $_POST ['diaa'],
	$_POST ['horaa']
); 

$a->regisjornadas (

  $jornada,
  $_POST ['fechajornadab'],
  $torneo,
    $_POST ['equipo3'],
  $_POST ['equipo6'],
    $_POST ['diab'],
  $_POST ['horab']
); 

 $a->regisjornadas (

  $jornada,
  $_POST ['fechajornadac'],
  $torneo,
    $_POST ['equipo2'],
  $_POST ['equipo7'],
    $_POST ['diac'],
  $_POST ['horac']
); 

 $a->regisjornadas (

  $jornada,
  $_POST ['fechajornadad'],
  $torneo,
    $_POST ['equipo4'],
  $_POST ['equipo5'],
    $_POST ['diad'],
  $_POST ['horad']
); 


 echo'

<div align="center">


<form method="post" action="registro_encuentro.php">
  
<img src="img/futbol-bola-ajuste-jugador_318-43643.jpg" width="120">

<br><br>

<div class="alert alert-success">Se ha registrado con exito!</div>

<br><br><br>
 
<input type="submit" value="Volver a registrar " class="btn btn-primary">

<br><br><br>

</form>

</div>


';


  exit();


} 



if (isset($_POST['procesar2'])){


$estatus = 0;
 $torneo = $_GET['id'];
 $jornada = "Semifinal";
$a->regisjornadas (

  $jornada,
  $_POST ['fechajornadae'],
  $torneo,
    $_POST ['ganadora'],
  $_POST ['ganadorb'],
    $_POST ['diae'],
  $_POST ['horae']
); 
 
$a->regisjornadas (

  $jornada,
  $_POST ['fechajornadaf'],
  $torneo,
    $_POST ['ganadorc'],
  $_POST ['ganadord'],
    $_POST ['diaf'],
  $_POST ['horaf']
); 

echo'

<div align="center">


<form method="post" action="registro_encuentro.php">
  
<img src="img/futbol-bola-ajuste-jugador_318-43643.jpg" width="120">

<br><br>

<div class="alert alert-success">Se ha registrado con exito!</div>

<br><br><br>
 
<input type="submit" value="Volver a registrar " class="btn btn-primary">

<br><br><br>

</form>

</div>


';
exit ();
}

if (isset($_POST['procesar3'])){

$estatus = 0;

 $torneo = $_GET['id'];
 $jornada = "final";
  $a->regisjornadas (

  $jornada,
  $_POST ['fechajornadag'],
  $torneo,
    $_POST ['ganadore'],
  $_POST ['ganadorf'],
    $_POST ['diag'],
  $_POST ['horag']
); 


?>
 
<?php


echo'

<div align="center">


<form method="post" action="registro_encuentro.php">
	
<img src="img/futbol-bola-ajuste-jugador_318-43643.jpg" width="120">

<br><br>

<div class="alert alert-success">Se ha registrado con exito!</div>

<br><br><br>
 
<input type="submit" value="Volver a registrar " class="btn btn-primary">

<br><br><br>

</form>

</div>


'; }else{ 
?>





<div class="featurede" align="center" > 




<input type="hidden" name="identidad" value="<?php echo $_SESSION['identidad']; ?>">


<input name="asunto" value="Próximo encentro de tu equipo!" type="hidden">






<table width="100%" border="0"      style="background-color:#fff;">
  <tr>
    <td colspan="3"><h3  ><span style="margin-left:20px;"   ><b style="font-family:bold;"><center>FASE FINAL</center></b></span></h3>   
</td>

  </tr>

</table>





<table width="100%" border="0"    height="240" style="background-color:#fff;">
  


  <tr>
	<TH><center>CUARTOS DE FINAL:</center></TH>
    <TH><center>SEMIFINAL:</center></TH>
    <TH><center>FINAL:</center></TH>
</tr>
<form action="#" method="POST" class="laberd" >
<tr    >
  <td width="33%">
 
 
 <div class=""><b><center>Encuentro A</center></b><br>
  <b><center>Fecha:</center></b><br>
  
<input type="date"   class="form-control" name="fechajornadaa"  autocomplete="off"  required>
   

  <div ><b>Dia:</b>
  
  <select  name="diaa">
  
  <option value="">Seleccione</option>
  <option value="Lunes">Lunes</option>
  <option value="Martes">Martes</option>
  <option value="Miercoles">Miercoles</option>
  <option value="Jueves">Jueves</option>
  <option value="Viernes">Viernes</option>
  <option value="Sábado">Sábado</option>
</select>
 


  <div ><b>Hora:</b>
  <select  name="horaa" required>
  
  <option value="">Seleccione</option>
  <option value="">Diurno</option>
  <option value="11:30 AM">11:30 AM</option>
  <option value="11:45 AM">11:45 AM</option>
  <option value="12:00 PM">12:00 PM</option>
  <option value="12:15 PM">12:15 PM</option>
  <option value="12:30 PM">12:30 PM</option>
  <option value="12:45 PM">12:45 PM</option>
  <option value="01:00 PM">01:00 PM</option>
  <option value="01:15 PM">01:15 PM</option>
  <option value="01:30 PM">01:30 PM</option>
  <option value="01:45 PM">01:45 PM</option>
  <option value="02:00 PM">02:00 PM</option>
  <option value="">Nocturno</option>
   <option value="04:00 PM">04:00 PM</option>
  <option value="04:15 PM">04:15 PM</option>
  <option value="04:30 PM">04:30 PM</option>
  <option value="04:45 PM">04:45 PM</option>
  <option value="05:00 PM">05:00 PM</option>
  <option value="05:30 PM">05:30 PM</option>
  <option value="05:45 PM">05:45 PM</option>
  <option value="06:00 PM">06:00 PM</option>
  <option value="06:30 PM">06:30 PM</option>
  <option value="07:00 PM">07:00 PM</option>
  
</select>
  <input class="form-control" tipe="text" name="equipo1" value="<?php echo $arreglopos1['nombrequipo'];?>" readonly>
   <input class="form-control" tipe="text" name="equipo8" value="<?php echo $arreglopos8['nombrequipo'];?>" readonly>
   
   </div><br>
   <div class=""><b><center>Encuentro B</center></b><br>
  <b><center>Fecha:</center></b><br>
  <div ><b>Dia:</b>
  
  <select  name="diab">
  
  <option value="">Seleccione</option>
  <option value="Lunes">Lunes</option>
  <option value="Martes">Martes</option>
  <option value="Miercoles">Miercoles</option>
  <option value="Jueves">Jueves</option>
  <option value="Viernes">Viernes</option>
  <option value="Sábado">Sábado</option>
</select>
 


  <div ><b>Hora:</b>
  <select  name="horab" required>
  
  <option value="">Seleccione</option>
  <option value="">Diurno</option>
  <option value="11:30 AM">11:30 AM</option>
  <option value="11:45 AM">11:45 AM</option>
  <option value="12:00 PM">12:00 PM</option>
  <option value="12:15 PM">12:15 PM</option>
  <option value="12:30 PM">12:30 PM</option>
  <option value="12:45 PM">12:45 PM</option>
  <option value="01:00 PM">01:00 PM</option>
  <option value="01:15 PM">01:15 PM</option>
  <option value="01:30 PM">01:30 PM</option>
  <option value="01:45 PM">01:45 PM</option>
  <option value="02:00 PM">02:00 PM</option>
  <option value="">Nocturno</option>
   <option value="04:00 PM">04:00 PM</option>
  <option value="04:15 PM">04:15 PM</option>
  <option value="04:30 PM">04:30 PM</option>
  <option value="04:45 PM">04:45 PM</option>
  <option value="05:00 PM">05:00 PM</option>
  <option value="05:30 PM">05:30 PM</option>
  <option value="05:45 PM">05:45 PM</option>
  <option value="06:00 PM">06:00 PM</option>
  <option value="06:30 PM">06:30 PM</option>
  <option value="07:00 PM">07:00 PM</option>
  
</select>
<input type="date"   class="form-control" name="fechajornadab"  autocomplete="off"  required>
   
  <input class="form-control" tipe="text" name="equipo3" value="<?php echo $arreglopos3['nombrequipo'];?>" readonly>
   <input class="form-control" tipe="text" name="equipo6" value="<?php echo $arreglopos6['nombrequipo'];?>" readonly>
   
   </div>
     <br>
   <div class=""><b><center>Encuentro C</center></b><br>
  <b><center>Fecha:</center></b><br>
  <div ><b>Dia:</b>
  
  <select  name="diac">
  
  <option value="">Seleccione</option>
  <option value="Lunes">Lunes</option>
  <option value="Martes">Martes</option>
  <option value="Miercoles">Miercoles</option>
  <option value="Jueves">Jueves</option>
  <option value="Viernes">Viernes</option>
  <option value="Sábado">Sábado</option>
</select>
 


  <div ><b>Hora:</b>
  <select  name="horac" required>
  
  <option value="">Seleccione</option>
  <option value="">Diurno</option>
  <option value="11:30 AM">11:30 AM</option>
  <option value="11:45 AM">11:45 AM</option>
  <option value="12:00 PM">12:00 PM</option>
  <option value="12:15 PM">12:15 PM</option>
  <option value="12:30 PM">12:30 PM</option>
  <option value="12:45 PM">12:45 PM</option>
  <option value="01:00 PM">01:00 PM</option>
  <option value="01:15 PM">01:15 PM</option>
  <option value="01:30 PM">01:30 PM</option>
  <option value="01:45 PM">01:45 PM</option>
  <option value="02:00 PM">02:00 PM</option>
  <option value="">Nocturno</option>
   <option value="04:00 PM">04:00 PM</option>
  <option value="04:15 PM">04:15 PM</option>
  <option value="04:30 PM">04:30 PM</option>
  <option value="04:45 PM">04:45 PM</option>
  <option value="05:00 PM">05:00 PM</option>
  <option value="05:30 PM">05:30 PM</option>
  <option value="05:45 PM">05:45 PM</option>
  <option value="06:00 PM">06:00 PM</option>
  <option value="06:30 PM">06:30 PM</option>
  <option value="07:00 PM">07:00 PM</option>
  
</select>
<input type="date"   class="form-control" name="fechajornadac"  autocomplete="off"  required>
   
  <input class="form-control" tipe="text" name="equipo2" value="<?php echo $arreglopos2['nombrequipo'];?>" readonly>
   <input class="form-control" tipe="text" name="equipo7" value="<?php echo $arreglopos7['nombrequipo'];?>" readonly>
   
   </div>
 <br>
   <div class=""><b><center>Encuentro D</center></b><br>
  <b><center>Fecha:</center></b><br>
  <div ><b>Dia:</b>
  
  <select  name="diad">
  
  <option value="">Seleccione</option>
  <option value="Lunes">Lunes</option>
  <option value="Martes">Martes</option>
  <option value="Miercoles">Miercoles</option>
  <option value="Jueves">Jueves</option>
  <option value="Viernes">Viernes</option>
  <option value="Sábado">Sábado</option>
</select>
 


  <div ><b>Hora:</b>
  <select  name="horad" required>
  
  <option value="">Seleccione</option>
  <option value="">Diurno</option>
  <option value="11:30 AM">11:30 AM</option>
  <option value="11:45 AM">11:45 AM</option>
  <option value="12:00 PM">12:00 PM</option>
  <option value="12:15 PM">12:15 PM</option>
  <option value="12:30 PM">12:30 PM</option>
  <option value="12:45 PM">12:45 PM</option>
  <option value="01:00 PM">01:00 PM</option>
  <option value="01:15 PM">01:15 PM</option>
  <option value="01:30 PM">01:30 PM</option>
  <option value="01:45 PM">01:45 PM</option>
  <option value="02:00 PM">02:00 PM</option>
  <option value="">Nocturno</option>
   <option value="04:00 PM">04:00 PM</option>
  <option value="04:15 PM">04:15 PM</option>
  <option value="04:30 PM">04:30 PM</option>
  <option value="04:45 PM">04:45 PM</option>
  <option value="05:00 PM">05:00 PM</option>
  <option value="05:30 PM">05:30 PM</option>
  <option value="05:45 PM">05:45 PM</option>
  <option value="06:00 PM">06:00 PM</option>
  <option value="06:30 PM">06:30 PM</option>
  <option value="07:00 PM">07:00 PM</option>
  
</select>
<input type="date"   class="form-control" name="fechajornadad"  autocomplete="off"  required>
   
  <input class="form-control" tipe="text" name="equipo4" value="<?php echo $arreglopos4['nombrequipo'];?>" readonly>
   <input class="form-control" tipe="text" name="equipo5" value="<?php echo $arreglopos5['nombrequipo'];?>" readonly>
   
   </div><br><center>
        <input class="btn btn-primary" type="submit" role="button" name="procesar1" value="Procesar Cuartos"></center>
  </td>
</form>
<form action="#" method="POST" class="laberd" >
	<td width="33%">
    <div class=""><b><center>ENCUENTRO E</center></b><br>
  <b><center>Fecha:</center></b><br>
  <div ><b>Dia:</b>
  
  <select  name="diae">
  
  <option value="">Seleccione</option>
  <option value="Lunes">Lunes</option>
  <option value="Martes">Martes</option>
  <option value="Miercoles">Miercoles</option>
  <option value="Jueves">Jueves</option>
  <option value="Viernes">Viernes</option>
  <option value="Sábado">Sábado</option>
</select>
 


  <div ><b>Hora:</b>
  <select  name="horae" required>
  
  <option value="">Seleccione</option>
  <option value="">Diurno</option>
  <option value="11:30 AM">11:30 AM</option>
  <option value="11:45 AM">11:45 AM</option>
  <option value="12:00 PM">12:00 PM</option>
  <option value="12:15 PM">12:15 PM</option>
  <option value="12:30 PM">12:30 PM</option>
  <option value="12:45 PM">12:45 PM</option>
  <option value="01:00 PM">01:00 PM</option>
  <option value="01:15 PM">01:15 PM</option>
  <option value="01:30 PM">01:30 PM</option>
  <option value="01:45 PM">01:45 PM</option>
  <option value="02:00 PM">02:00 PM</option>
  <option value="">Nocturno</option>
   <option value="04:00 PM">04:00 PM</option>
  <option value="04:15 PM">04:15 PM</option>
  <option value="04:30 PM">04:30 PM</option>
  <option value="04:45 PM">04:45 PM</option>
  <option value="05:00 PM">05:00 PM</option>
  <option value="05:30 PM">05:30 PM</option>
  <option value="05:45 PM">05:45 PM</option>
  <option value="06:00 PM">06:00 PM</option>
  <option value="06:30 PM">06:30 PM</option>
  <option value="07:00 PM">07:00 PM</option>
  
</select>
<input type="date"   class="form-control" name="fechajornadae"  autocomplete="off"  required>
   <?php 
  include 'enlace.php';
$senteniacuartos = "SELECT * from tablaposicion where (estatus_e = 1 or estatus_e = 2) and (pos = 1 or
pos = 8) and (torneo=$id)";
$querycuartos = mysql_query($senteniacuartos);
$arreglarsemi = mysql_fetch_array($querycuartos);

$senteniacuartos2 = "SELECT * from tablaposicion where (estatus_e = 1 or estatus_e = 2) and (pos = 3 or
pos = 6) and (torneo=$id)";
$querycuartos2 = mysql_query($senteniacuartos2);
$arreglarsemi2 = mysql_fetch_array($querycuartos2);


   ?>
  <input class="form-control" tipe="text" name="ganadora" value="<?php echo $arreglarsemi['nombrequipo'];?>" readonly>
   <input class="form-control" tipe="text" name="ganadorb" value="<?php echo $arreglarsemi2['nombrequipo'];?>" readonly>
   <br>
   <br>
   <br>
   </div>
   <div class=""><b><center>GANADOR F</center></b><br>
     <div ><b>Dia:</b>
  
  <select  name="diaf">
  
  <option value="">Seleccione</option>
  <option value="Lunes">Lunes</option>
  <option value="Martes">Martes</option>
  <option value="Miercoles">Miercoles</option>
  <option value="Jueves">Jueves</option>
  <option value="Viernes">Viernes</option>
  <option value="Sábado">Sábado</option>
</select>
 


  <div ><b>Hora:</b>
  <select  name="horaf" required>
  
  <option value="">Seleccione</option>
  <option value="">Diurno</option>
  <option value="11:30 AM">11:30 AM</option>
  <option value="11:45 AM">11:45 AM</option>
  <option value="12:00 PM">12:00 PM</option>
  <option value="12:15 PM">12:15 PM</option>
  <option value="12:30 PM">12:30 PM</option>
  <option value="12:45 PM">12:45 PM</option>
  <option value="01:00 PM">01:00 PM</option>
  <option value="01:15 PM">01:15 PM</option>
  <option value="01:30 PM">01:30 PM</option>
  <option value="01:45 PM">01:45 PM</option>
  <option value="02:00 PM">02:00 PM</option>
  <option value="">Nocturno</option>
   <option value="04:00 PM">04:00 PM</option>
  <option value="04:15 PM">04:15 PM</option>
  <option value="04:30 PM">04:30 PM</option>
  <option value="04:45 PM">04:45 PM</option>
  <option value="05:00 PM">05:00 PM</option>
  <option value="05:30 PM">05:30 PM</option>
  <option value="05:45 PM">05:45 PM</option>
  <option value="06:00 PM">06:00 PM</option>
  <option value="06:30 PM">06:30 PM</option>
  <option value="07:00 PM">07:00 PM</option>
  
</select>
  <b><center>Fecha:</center></b><br>
  
<input type="date"   class="form-control" name="fechajornadaf"  autocomplete="off"  required>
    <?php 
  include 'enlace.php';
$senteniacuartos3 = "SELECT * from tablaposicion where (estatus_e = 1  or estatus_e = 2) and (pos = 2 or
pos = 7)and (torneo=$id)";
$querycuartos3 = mysql_query($senteniacuartos3);
$arreglarsemi3 = mysql_fetch_array($querycuartos3);

$senteniacuartos4 = "SELECT * from tablaposicion where (estatus_e = 1  or estatus_e = 2) and(pos = 4 or
pos = 5)and (torneo=$id)";
$querycuartos4 = mysql_query($senteniacuartos4);
$arreglarsemi4 = mysql_fetch_array($querycuartos4);


   ?>
  <input class="form-control" tipe="text" name="ganadorc" value="<?php echo $arreglarsemi3['nombrequipo'];?>" readonly>
   <input class="form-control" tipe="text" name="ganadord" value="<?php echo $arreglarsemi4['nombrequipo'];?>" readonly>
   
   </div><br><center>
   <input class="btn btn-primary" type="submit" role="button" name="procesar2" value="Procesar Seminifal"></center>
  
  </td>
	</form>
<form action="#" method="POST" class="laberd" >

  <td width="33%">

   <div class=""><b><center>GANADOR G</center></b><br>
     <div ><b>Dia:</b>
  
  <select  name="diag">
  
  <option value="">Seleccione</option>
  <option value="Lunes">Lunes</option>
  <option value="Martes">Martes</option>
  <option value="Miercoles">Miercoles</option>
  <option value="Jueves">Jueves</option>
  <option value="Viernes">Viernes</option>
  <option value="Sábado">Sábado</option>
</select>
 


  <div ><b>Hora:</b>
  <select  name="horag" required>
  
  <option value="">Seleccione</option>
  <option value="">Diurno</option>
  <option value="11:30 AM">11:30 AM</option>
  <option value="11:45 AM">11:45 AM</option>
  <option value="12:00 PM">12:00 PM</option>
  <option value="12:15 PM">12:15 PM</option>
  <option value="12:30 PM">12:30 PM</option>
  <option value="12:45 PM">12:45 PM</option>
  <option value="01:00 PM">01:00 PM</option>
  <option value="01:15 PM">01:15 PM</option>
  <option value="01:30 PM">01:30 PM</option>
  <option value="01:45 PM">01:45 PM</option>
  <option value="02:00 PM">02:00 PM</option>
  <option value="">Nocturno</option>
   <option value="04:00 PM">04:00 PM</option>
  <option value="04:15 PM">04:15 PM</option>
  <option value="04:30 PM">04:30 PM</option>
  <option value="04:45 PM">04:45 PM</option>
  <option value="05:00 PM">05:00 PM</option>
  <option value="05:30 PM">05:30 PM</option>
  <option value="05:45 PM">05:45 PM</option>
  <option value="06:00 PM">06:00 PM</option>
  <option value="06:30 PM">06:30 PM</option>
  <option value="07:00 PM">07:00 PM</option>
  
</select>
  <b><center>Fecha:</center></b><br>
  
<input type="date"   class="form-control" name="fechajornadag"  autocomplete="off"  required>
     <?php 
  include 'enlace.php';

$senteniafinal1 = "SELECT * from tablaposicion where estatus_e = 2 and (torneo=$id) order by id_posicion ASC";
$queryfinal1 = mysql_query($senteniafinal1);
 $arreglarfinal1 = mysql_fetch_array($queryfinal1);

 $senteniafinal2 = "SELECT * from tablaposicion where estatus_e = 2  and (torneo=$id) order by  id_posicion DESC";
$queryfinal2 = mysql_query($senteniafinal2);
 $arreglarfinal2 = mysql_fetch_array($queryfinal2);?>

  <input class="form-control" tipe="text" name="ganadore" value="<?php echo $arreglarfinal1['nombrequipo'];?>" readonly>
   <input class="form-control" tipe="text" name="ganadorf" value="<?php echo $arreglarfinal2['nombrequipo'];?>" readonly>
   
 
   </div><br><center>
<input class="btn btn-primary" type="submit" role="button" name="procesar3" value="Procesar final"></center>
  
  </td>
  </form>



</tr>
 </table>
 
<input type="hidden" name="torneo" value="<?php echo  $_GET['id'];?>"  class="form-control"  autocomplete="off"  required readonly>
 </div>
	 

	</td>


	






<td>

<?php 
$sentencia4 = "SELECT * from regisjornadas WHERE (torneo = $id) and (estatus =0) and (nombrejornada='cuartos de final'
or nombrejornada='semifinal' or nombrejornada='final') order by id_encuentro DESC";
$query4 = mysql_query($sentencia4);

;?>
</td>
<td colspan="3"><h3  ><span style="margin-left:20px;"  ><b style="font-family:bold;"> <center>ENCUENTROS PAUTADOS </center></b></span></h3>   
</td>
</tr>
<table width="100%"  style="background-color:#fff;">
<tr  style="background-color:#d9edf9;">

  <th><center>DESCRIPCIÓN DEL PARTIDO</center></th>
  
  

  <th><center>ACCIONES</center></th>
  </tr>
 
</table>
<table width="100%"  class="table table-bordered"   style="background-color:#fff;">
 
 


<tr style="background-color:#d9edf9;">


<th>Jornada</th>
<th>Equipo Local </th>

<th></th>

<th>Equipo Visitante</th>

<th>Dia</th>

<th>Fecha</th>

<th>Hora</th>
<th>Resultado</th>
<th>Eliminar</th>
<th>Mesa Tec.</th>
<th>Cartelera</th>

</tr>

<?php while ($arreglo4 = mysql_fetch_array($query4)) {?>

<tr>
  <td><center> <?php  echo $arreglo4['nombrejornada'];  ?></center> </td>

<td> <?php  echo $arreglo4['equipo_local'];  ?> </td>

<td> <center>Vs</center> </td>


  

<td> <?php  echo $arreglo4['equipo_visitante'];  ?> </td>
<td> <?php  echo $arreglo4['dia'];  ?> </td>
<td> <?php  echo $arreglo4['fechajornada'];  ?> </td>
<td> <?php  echo $arreglo4['hora'];  ?> </td>
<td><?php 

$arre =$arreglo4 ['id_encuentro'];


echo "<center><a href='ingresar-resultado-eliminatoria.php?id=$arre';\"><img src='img/check_box.png' width='32' height='27'</a></center>";
  
?></td>
<td><?php 




echo "<center><a href='eliminar_encuentro.php?id=$arre';\"><img src='img/deleted.png' width='32' height='27'</a></center>";
  
?></td>

<td><?php 




echo "<center><a href='planilla_mesa_tecnica.php?id=$arre';\"><img src='img/planillafundtkdsur.png' width='32' height='27'</a></center>";
  
?></td>

<td><?php 




echo "<center><a href='planilla_cartelera.php?id=$arre';\"><img src='img/impress.png' width='32' height='27'</a></center>";
  
?></td>
</tr>

<?php
  }



?>
</table>





<tr>
  


<td>
  
  <?php
  $idtorneo = $_GET ['id'];
  echo "<a href='tipo_estadistica.php?id=$idtorneo' style='margin-left:20px;'><span class='glyphicon glyphicon-arrow-left' style='font-size:24px;'></span></a> <br><br>"
 
 ?>
 
 

</td>


</tr>




</table>
 





 





   </div>


 <?php 


}

 ?>


<?php  include ("template/footer.php");?>







    
    </div>
    <!-- end of container -->
  </div>
  <!-- end of shell -->
</div>
<!-- end of wrapper -->
</body>
</html>