<!DOCTYPE html>

<?php @session_start();

if (!isset($_SESSION['nivel'])) header("location:index.php");
if ($_SESSION['nivel'] != 1) header("location:home.php"); 

include ("enlace.php");

$id = $_GET['id'];

$at = $_GET['at'];


 $sentencia = "SELECT * from jornadas where torneo = $id ";
     $query = mysql_query ($sentencia);
require("clases/claseusuario.php");

$a= new Usuarios();
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Unir</title>
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0">
 <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link href='http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,600,500,300,200,100' rel='stylesheet' type='text/css'>

<script src="plugins/jquery/jQuery-2.1.4.min.js"></script>

<script src="bootstrap/js/bootstrap.js"></script>

<link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css">

<link href="img/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
<script src="js/jquery.carouFredSel-5.5.0-packed.js"></script>
<script src="js/functions.js"></script>



<script type="text/javascript">

function ValidaSoloNumeros() {
 if ((event.keyCode < 48) || (event.keyCode > 57)) 
  event.returnValue = false;
}

function txNombres() {
 if ((event.keyCode != 32) && (event.keyCode < 65) || (event.keyCode > 90) && (event.keyCode < 97) || (event.keyCode > 122))
  event.returnValue = false;
} 

</script>

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
    

 
 

<h3  ><span style="margin-left:20px;"class=" glyphicon glyphicon-search"  ><b style="font-family:bold;"> RESULTADO DE LA CONSULTA</b></span></h3>   
 
<br>
<div class="featurede"   > 
 
 
 

<div align="center">


 

</div>

 
<?php
if (isset($_POST['procesar'])){


 //if ($a->VerificarJugadores($_POST['cedula'],$_POST ['torneo'])){
  

 








$a->agregargoleador (

  $_POST ['jugagol'],
  $_POST ['jorna'],
  $_POST ['gole'],
  $_POST ['faltas'],
  $_POST ['tarjetaa'],
  $_POST ['tarjetar'],
  $_GET ['tor']
 

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



<?php } else { ?>


<?php

$equipo = $_GET ['id'];

$sentencia2 = "SELECT * from regisjugadore where nombrequipo = '$equipo'"; //consulta para seleccionar encuentro
 
?>

<form name="" method="POST" action=""> 
 
<table width="100%">

<tr>  
  <th width="25%">
<b>Nombre del Jugador:</b>
  </th>

  <th width="7%">
<b>Jornada:</b>
  </th>


  <th width="7%">
<b>Goles:</b>
  </th>

    <th width="7%">
<b>Tarjeta Amarilla:</b>
  </th>

  <th width="7%">
<b>Tarjeta Roja:</b>
  </th>

  <th width="7%">
<b>N° Faltas:</b>
  </th>


</tr>


<?php

$query2 = mysql_query ($sentencia2);
 
 ?>
 
<tr>
 

<td  width="25%"> 

<select name="jugagol" class="form-control">

<?php 
while ($arreglo2 = mysql_fetch_array($query2)){ ?>

<option value="<?php  echo $arreglo2 ['cedula'] ?>"><?php  

echo $arreglo2 ['nombre']," ", $arreglo2 ['apellido'];?> 

</option>

<?php }

?>

</select>
 
 </td>

<?php $tor =  $_GET ['tor']; ?>
 

<td  width="7%"> 

<select name="jorna" class="form-control">

<?php 

$sentencia3 = "SELECT `id_jornadas`, `nombrejornada`, `torneo` FROM `jornadas` WHERE 1 and torneo = $tor"; //consulta para 


$query3 = mysql_query ($sentencia3);


while ($arreglo3 = mysql_fetch_array($query3)){ ?>

<option  value="<?php  echo $arreglo3 ['id_jornadas'] ?>"><?php  

echo $arreglo3 ['nombrejornada'];?>

</option>

<?php }?>

</select>
 
</td>
<td  width="7%"> 

<input  type="text"   class="form-control" name="gole" maxlength="2"  required   >

</td>
<td  width="7%"> 

<input  type="text"   class="form-control" name="tarjetaa" maxlength="2"  required   >

</td>
<td  width="7%"> 

<input  type="text"   class="form-control" name="tarjetar" maxlength="2"  required   >

</td>
<td  width="7%"> 

<input  type="text"   class="form-control" name="faltas" maxlength="2"  required   >

</td>

<tr>
  
<td colspan="4" align="right" ><br><br><input name="procesar" type="submit" value="Registrar" class="btn btn-primary"></td>

</tr>

<tr>
  

<td> <a href="nuevo_registro_goleador.php?id=<?php echo $at; ?>" style="margin-left:20px;"><span class="glyphicon glyphicon-arrow-left" style="font-size:24px;"></span></a></td>

</tr>
<input type="hidden" name="encuentro" value="<?php echo  $_GET['id'];?>"  class="form-control"  autocomplete="off"  required readonly>
 </div>

</table>
 

</form>


<?php } ?>

</div>

</div>


</div>
<br><br>

</div>




</div>


 
<?php  include ("template/footer.php");?>




<?  ?>


    
    </div>
    <!-- end of container -->
  </div>
  <!-- end of shell -->
</div>
<!-- end of wrapper -->
</body>
</html>








 