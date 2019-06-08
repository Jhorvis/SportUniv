
 
<!DOCTYPE html>

<?php @session_start();

if (!isset($_SESSION['nivel'])) header("location:index.php");

require("clases/claseusuario.php");

$a= new Usuarios();
include 'enlace.php';
$id = $_GET['id'];


$sentencia = "SELECT * from regisjornadas WHERE id_encuentro = '$id'";
$query = mysql_query($sentencia);
$arreglo = mysql_fetch_array($query);
$equipo_local = $arreglo['equipo_local'];
$equipo_visitante = $arreglo['equipo_visitante'];
$idtorneo = $arreglo ['torneo'];

$data1=$a->ConsultarJugadores1($equipo_local);
$data2=$a->ConsultarJugadores2($equipo_visitante);

$datas=$a->DatosJornada($_GET['id']);



 foreach ($datas as $r) {}


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



  <body onload="window.print(); window.close();">


 
<?php
echo "<META http-equiv='refresh' content='0;URL=nuevo_registro_encuentro.php?id=$idtorneo'; >"
  ?>



<table width="100%">
	

<td><img src="img/logo-deportes.png" width="120"></td>



<td align="center">
<center><br>
Republica bolivariana de venezuela<br>
Instituto universitario de tecnologia READIC UNIR<br>
Coordinación de deportes<br><br><br>
</center>
</td>


<td><img src="img/logounir.png" width="120"></td>

	
</table>







 <center>Planilla de resultados para mesa técnica</center>


<br>
<table width="100%">
<tr>
<td> <font size="72"> <center><?php   echo $r->equipo_local; ?></center></font></td>
<td> <font size="72"><center><image src="img/cuadro.png" width="75" heigt="75"> </center></font></td>
<td> <font size="72"><center> Vs </center></font> </td>
<td> <font size="72"><center><image src="img/cuadro.png" width="75" heigt="75"></center> </font></td>
<td><font size="72"> <center><?php  echo $r->equipo_visitante; ?></center></font></td>		
		

</tr>
<br><br>
</table>


<br>
 <b><?php   echo $r->equipo_local; ?></b>

<table width="100%" class="table table-bordered">
  	



<tr>
	

<th width="10%">NOMBRE</th>
<th width="1%">N°</th>

<th width="1%">TA</th>
<th width="1%">TR</th>
<th width="1%">FALTA</th>
<th width="1%">GOLES</th>
<th width="20%">Observación</th>

</tr>
 <?php foreach ($data1 as $rs) { ?>


<tr>
	
<td><?php echo $rs->nombre, ' ' ,$rs->apellido;?></td>

<td><?php echo $rs->dorsal; ?></td>

<td></td>

<td></td>

<td></td>

<td></td>
<td></td>



</tr>

<?php } ?>
</table>

 <b><?php   echo $r->equipo_visitante; ?></b>

<table width="100%" class="table table-bordered">

<tr>
	

<th width="10%">NOMBRE</th>
<th width="1%">N°</th>

<th width="1%">TA</th>
<th width="1%">TR</th>
<th width="1%">FALTA</th>
<th width="1%">GOLES</th>
<th width="20%">Observación</th>

</tr>

 <?php foreach ($data2 as $rsa) { ?>

<tr>
	
<td><?php echo $rsa->nombre, ' ' ,$rsa->apellido;?></td>

<td><?php echo $rsa->dorsal; ?></td>

<td></td>

<td></td>

<td></td>

<td></td>
<td></td>



</tr>
<?php } ?>
</table>





  </body>