<!DOCTYPE html>

<?php @session_start();


require "clases/config.php";
$conn = new PDO('mysql:host='.$servidor.';dbname='.$basedatos, $usuario, $clave);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


if (!isset($_SESSION['nivel'])) header("location:index.php");



require("clases/claseusuario.php");

$a= new Usuarios();

$data=$a->VerTorneos($_SESSION['identidad']);


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


<div class="featurede" align="center" > 

</td>

<form action="#" method="POST" class="laberd" >



</table>

<?php 

$cedula = $_SESSION['identidad'];

include 'enlace.php';

$sentencia4 = "SELECT * from regisequipo WHERE identidad = '$cedula'  ";
$query4 = mysql_query($sentencia4);



;?>
</td>
<td colspan="3"><h3  ><span style="margin-left:20px;"  ><b style="font-family:bold;"> <center>LISTA DE EQUIPOS </center></b></span></h3>   
</td>
</tr>



<table width="100%"  class="table table-bordered"   style="background-color:#fff;">
 
 


<tr style="background-color:#98FB98;">


<th>Equipo</th>
<th>Disciplina </th>

<th>Torneo</th>

<th>JG</th>
<th>JE</th>
<th>JP</th>
<th>POS</th>
<th>Estatus/T</th>
<th>Estatus/E</th>
<th></th>

</tr>

<?php while ($arreglo4 = mysql_fetch_array($query4)) {?>
<tr>
  

<td> <?php  echo $arreglo4['nombrequipo'];  ?> </td>
<td> <?php  echo $arreglo4['disciplina'];  ?> </td>
<td> <?php 
$torneo = $arreglo4['torneo'];
$sentencia = "SELECT * from registorneo WHERE idtorneo = '$torneo' ";
$query = mysql_query($sentencia);
$arreglo = mysql_fetch_array($query);
$idtourneo = $arreglo['idtorneo'];


 echo "<a href='detalles.php?id=$idtourneo';\">" .$arreglo['nombretorneo']; ?> </a></td>
<td> <?php 
$idequipo = $arreglo4['idequipo'];


$sentencia2 = "SELECT * from tablaposicion WHERE idequipo = $idequipo ";
$query2 = mysql_query($sentencia2);
$arreglo2 = mysql_fetch_array($query2);
 if ($arreglo2['win']== ''){
      	echo "-";
      }else{
 echo $arreglo2['win']; } ?>  </td>
<td> <?php 
 if ($arreglo2['draw']== ''){
      	echo "-";
      }else{
 echo $arreglo2['draw']; 
     } ?>  </td>
<td> <?php  if ($arreglo2['loss']== ''){
      	echo "-";
      }else{ echo $arreglo2['loss']; }  ?>  </td>
<td> <?php if ($arreglo2['eliminatorias']==''){ if ($arreglo2['pos']== ''){
      	echo "-";
      }else{ echo $arreglo2['pos']; echo "°";} } else{
         echo $arreglo2['eliminatorias']; 
      } ?>  </td>

<td> 


  <?php  if ($arreglo['estatus']== '0'){
        echo "<b><font color='green'>EN CURSO<font></b>";
      }else{ $arreglo['estatus']=='1'; 

      echo "<b><font color='red'>FINALIZADO<font></b>"; }?>
</td>


<td> <?php  if ($arreglo4['estatus']== '2'){
        echo "<b><font color='green'>Inscrito<font></b>";
      } if ($arreglo4['estatus']=='0'){ 

      echo "<b><font color='orange'>Pendiente<font></b>"; }
      if ($arreglo4['estatus']=='3'){ 

      echo "<b><font color='red'>Rechazado<font></b>"; }
      if ($arreglo4['estatus']=='4'){ 

      echo "<b><font color='red'>Descalificado<font></b>"; }else{}?> </td>
<td><?php 

//$arre =$arreglo4 ['idjugadore'];



$idequipo = $arreglo4['idequipo'];


echo "<center><a href='modificar-equipo.php?id=$idequipo';\"><b>MODIFICAR</b></a></center>";
 
?></td>

<?php 





  }




?>

</tr>
</table>


</form>



   </div>


