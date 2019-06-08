
<!DOCTYPE html>

<?php @session_start();


require "clases/config.php";
$conn = new PDO('mysql:host='.$servidor.';dbname='.$basedatos, $usuario, $clave);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


if (!isset($_SESSION['nivel'])) header("location:index.php");


$nombrequipo = $_POST ['nombrequipo'];
  
$_SESSION['nombrequipo'] = $nombrequipo;

require("clases/claseusuario.php");

$a= new Usuarios();

$data=$a->VerTorneos($_SESSION['nombrequipo']);

foreach ($data as $rv) {}

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


if (isset($_POST['procesar'])){


 if ($a->VerificarJugadores($_POST['cedula'],$_POST ['torneo'])){
  
?>
 
 
<table width="100%"   height="300" >
  
<tr><td>
<br><center><img src="img/male_user_warning_256.png" width="120" ></center>
<br><center><h4>El jugador


<?php 
include 'enlace.php';



$estudiante = $_POST ["cedula"];
$Torneo     = $_POST ['torneo'];

$sentencia3 = "SELECT * from regisjugadore WHERE cedula = $estudiante AND torneo='$Torneo'";

$query3 = mysql_query($sentencia3);
while ($arreglo3 = mysql_fetch_array($query3)){?>

  <input type="hidden" name="" value="<?php echo $arreglo3 ['nombre']   ?>">
<b>
<?php echo $arreglo3 ['nombre'];
      echo " ";
      echo $arreglo3 ['apellido'];
      echo "</b> CI: <b>";
      
      echo $estudiante;
      echo "</b> ya se encuentra REGISTRADO en el equipo: <b>";
      echo $arreglo3 ['nombrequipo'];

 }

?>
</b>
</center>
</h4>
<form method="POST">
 

<?php
  exit();
  
  } else {

 if ($a->Verificardorsal($_POST['torneo'],$_POST ['dorsal'],$_POST ['nombrequipo'])){
  
?>

<table width="100%"   height="300" >
  
<tr><td>
<br><center><img src="img/male_user_warning_256.png" width="120" ></center>
<br><center><h4>El dorsal numero 

<?php
echo $_POST ["dorsal"];
echo " en este equipo ya pertenece al jugador ";
include 'enlace.php';

$torneo = $_POST ["torneo"];
$equipo = $_POST ["nombrequipo"];
$dorsal = $_POST ["dorsal"];

$buscardorsal = "SELECT * from regisjugadore where torneo = $torneo 
and nombrequipo='$nombrequipo' and dorsal = $dorsal";


$consulta = mysql_query($buscardorsal);
$arre = mysql_fetch_array($consulta);
echo $arre ['nombre']; 
echo " ";
echo $arre ['apellido']; 
?>
<center></h4>
<div align="center">

<form method="post">
	
 
<br>

<input name="nombrequipo" type="hidden" value="<?php echo  $_POST ['nombrequipo']; ?>">

<input type="submit" value="Volver Interntar" class="btn btn-primary">


</form>
</div>

</table>  
<br><br>
</div>

 

 
    
<?php 
  exit();
  
  }

}

if ($a->buscacarreras($_POST['torneo'], $_POST ['carrera'])){

	$a->actualizaestadistica();

}else{

$a->insertardatos($_POST ['carrera'], $_POST ['torneo']);
}

$a->regisjugadores (

	$_POST ['nombre'],
	$_POST ['apellido'],
	$_POST ['cedula'],
	$_POST ['telefono'],
	$_POST ['Edad'],
	$_POST ['carrera'], 
	$_POST ['dorsal'],
	$_POST ['torneo'],
	$_POST ['identidad'],
	$_POST ['nombrequipo']

); ?>


<div align="center">


<form method="post">
	
<img src="img/futbol-bola-ajuste-jugador_318-43643.jpg" width="120">

<br><br>

<div class="alert alert-success">Se ha registrado con exito!</div>

<br><br><br>
 
<input name="nombrequipo" type="hidden" value="<?php echo   $_SESSION['nombrequipo'] = $_POST ['nombrequipo']; ?>">

<input type="submit" value="Volver a registrar otro jugador" class="btn btn-primary">

<br><br><br>

</form>

</div>



<?php


}else { ?>



<div class="featurede" align="center" > 

</td>

<form action="#" method="POST" class="laberd" >

<table width="100%" border="0"      style="background-color:#fff;">
  <tr>
    <td colspan="3"><h3  ><span style="margin-left:20px;"class="glyphicon glyphicon-search"  ><b style="font-family:bold;"> REGISTRAR JUGADORES</b></span></h3>   
</td>

  </tr>

</table>



<table width="100%" border="0"    height="100" style="background-color:#fff;">
  

<tr>

  
<input name="nombrequipo" type="hidden" value="<?php echo  $_SESSION ['nombrequipo']; ?>">

<input name="torneo" value="<?php echo $rv->torneo;?>" type="hidden">

<input name="identidad" value="<?php echo $_SESSION['identidad'];?>" type="hidden">


	<td width="33%">

	<div class="input-group"><b>Nombre:</b><br>
	<input type="text"   class="form-control" name="nombre" autocomplete="off"  required></div>
	 

	</td>


	<td width="33%">

	<div class="input-group"><b>Apellido:</b><br>
	<input type="text"   class="form-control" name="apellido"  autocomplete="off"  required></div>
	 

	</td>


	<td width="33%" colspan="2">

	<div class="input-group"><b>Cedula:</b><br>
	<input type="text"   class="form-control" name="cedula"  autocomplete="off"  required></div>
	 
	</td>

</tr>


</table>

<table width="100%" border="0"    height="250" style="background-color:#fff;">


<tr    >
  
	<td style="padding-right:30px;" >

	<div class="input-group"><b>Telefono:</b><br>
	<input type="text"   class="form-control" name="telefono" autocomplete="off"  required></div>
	 

	</td>


	<td  width="20%" style="padding-right:30px;" >

	<div class="input-group"><b>Edad:</b><br>
	<input type="text"   class="form-control" name="Edad"  autocomplete="off"  required></div>
	 

	</td>


	<td width="30%" style="padding-right:30px;" >

	<div class="input-group"><b>Carrera:</b><br>

<select name="carrera" class="form-control" style="height:34px; width:100%;" required>
  <option value="">Seleccione</option>
  <option value="Informatica">Informatica</option>
   <option value="Administración">Administración</option>
    <option value="Contabilidad Comp">Contabilidad Comp</option>
     <option value="Comercio Exterior">Comercio Exterior</option>
      <option value="Diseño de Modas">Diseño de Modas</option>  
          <option value="Electrónica">Electrónica</option>  
          <option value="Publicidad y RR.PP">Publicidad y RR.PP</option>  
         <option value="Mercadotecnia">Mercadotecnia</option>  
          <option value="Turismo">Turismo</option>  
         <option value="Turismo">Enfermeria</option>  
            <option value="Diseño Gráfico">Diseño Gráfico</option>  
             <option value="Educ. Preescolar">Educ. Preescolar</option>  
               <option value="Psicopedagogía">Psicopedagogía</option>
               <b><option value="empleado">Empleado/administrativo</option></b>
               <option value="invitado">Invitado</option>
      </select>
</div>
	 
	</td>

		<td style="padding-right:30px;" width="20%">

	<div class="input-group"><b>Nº Dorsal:</b><br>
	<input type="text"   class="form-control" name="dorsal"    autocomplete="off"  required></div>
	 

	</td>

</tr>




<tr>

<td colspan="1" align="left" style="padding-left:30px;">   <a href="elija-equipo-futbol.php" class="btn btn-primary">Volver Atras</a></td>	


	
<td colspan="3" align="right" style="padding-right:30px;">   <input class="btn btn-primary" type="submit" role="button" name="procesar" value="Agregar Jugador"></td>	


</tr>

</table>

<?php 
include 'enlace.php';

$sentencia4 = "SELECT * from regisjugadore WHERE torneo = $rv->torneo  and nombrequipo = '$nombrequipo'";
$query4 = mysql_query($sentencia4);

;?>
</td>
<td colspan="3"><h3  ><span style="margin-left:20px;"  ><b style="font-family:bold;"> <center>LISTA DE JUGADORES </center></b></span></h3>   
</td>
</tr>



<table width="100%"  class="table table-bordered"   style="background-color:#fff;">
 
 


<tr style="background-color:#d9edf9;">


<th>Nombre</th>
<th>Apellido </th>

<th>Cedula</th>

<th>Carrera</th>
<th>Dorsal</th>
<th>Eliminar</th>


</tr>

<?php while ($arreglo4 = mysql_fetch_array($query4)) {?>
<tr>
  

<td> <?php  echo $arreglo4['nombre'];  ?> </td>
<td> <?php  echo $arreglo4['apellido'];  ?> </td>
<td> <?php  echo $arreglo4['cedula'];  ?> </td>
<td> <?php  echo $arreglo4['carrera'];  ?> </td>
<td> <?php  echo $arreglo4['dorsal'];  ?> </td>
<td><?php 

$arre =$arreglo4 ['idjugadore'];






echo "<center><a href='eliminar_jugador.php?id=$arre';\"><img src='img/deleted.png' width='32' height='27'</a></center>";
 
?></td>

<?php 





  }




?>

</tr>
</table>


</form>



   </div>


<?php   } ?>