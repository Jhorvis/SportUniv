
 
<!DOCTYPE html>

<?php @session_start();

if (!isset($_SESSION['nivel'])) header("location:index.php");

require("clases/claseusuario.php");

$a= new Usuarios();

$data=$a->ConsultarTorneo($_POST ['nombrequipo']);
 

$datas=$a->DatosTorneo($_POST ['nombrequipo']);



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


 <META http-equiv="refresh" content="0;URL=planilla-imprimir-voleibol.php">




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







 <center>Planilla de Preinscripción</center>


<br>


<label>Nombre del equipo:</label>  <?php   echo $r->nombrequipo; ?>     <br>
<label>Delegado:</label>      <?php  echo $r->deleequipo; ?>        <br>
<label>Telefono:</label>      <?php  echo $r->telefonodel; ?>       <br>
<label>Disciplina:</label>           Baloncesto

<br><br>

<center>Lista de Jugadores</center>

<br>


<table width="100%" class="table table-bordered">
    



<tr>
  

<th>NOMBRE</th>
<th>APELLIDO</th>
<th>CEDULA</th>
<th>TELEFONO</th>
<th>EDAD</th>
<th>CARRERA</th>
<th>DORSAL</th>

</tr>


 <?php foreach ($data as $rs) { ?>


<tr>
  
<td><?php echo $rs->nombre;?></td>

<td><?php echo $rs->apellido; ?></td>

<td><?php echo $rs->cedula;?></td>

<td><?php echo $rs->telefono;?></td>

<td><?php echo $rs->Edad;?></td>

<td><?php echo $rs->carrera;?></td>

<td><?php echo $rs->dorsal;?></td>

</tr>

<?php } ?>



</table>





  </body>