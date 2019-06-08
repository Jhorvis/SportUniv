
<!DOCTYPE html>

<?php @session_start();

$id = $_GET ['id'];


if (!isset($_SESSION['nivel'])) header("location:index.php");

if ($_SESSION['nivel'] != 1) header("location:home.php"); 

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
<script src="js/jquery-1.8.0.min.js"></script>
 <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css">

  <link rel="stylesheet" href="font/css/font-awesome.css" type="text/css">

<link href="img/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
<script src="js/jquery.carouFredSel-5.5.0-packed.js"></script>
<script src="js/functions.js"></script>

<script src="font/css/font-awesome.min"></script>

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


<div class="featurede"   > 

<div class="row">
   

<?php 

 if (isset($_POST['procesar'])){


 if ($a->Verificarfactura($_POST['factura'])){
  
?>
 
 
<table width="100%"   height="300" >
  
<tr><td>
<br><center><img src="img/male_user_warning_256.png" width="120" ></center>
<p><br><center><h4>Ya esta factura se encuentra registrada para el estudiante <?php 


?>

<?php 
include 'enlace.php';

$factura = $_POST ["factura"];

$estudiante = $_POST ["cedula"];

$sentencia = "SELECT * from pagogym WHERE factura = $factura";


$sentencia3 = "SELECT * from estudiante WHERE cedula = $estudiante";

$query3 = mysql_query($sentencia3);
$arreglo3 = mysql_fetch_array($query3);
 $carrera = $arreglo3 ['carrera'];
while ($arreglo3 = mysql_fetch_array($query3)){?>

  <input type="hidden" name="" value="<?php echo $arreglo3 ['nombre']   ?>">
<b>
<?php echo $arreglo3 ['nombre'];
      echo " ";
      echo $arreglo3 ['apellido'];
      echo " CI: ";
      echo $estudiante;

 }

$query = mysql_query($sentencia);
while ($arreglo = mysql_fetch_array($query)){?>

<form method="POST">
  en el mes de 
  <input type="Hidden" name="" value="<?php echo $arreglo ['mes']   ?>">

<?php echo $arreglo ['mes']; }



$query = mysql_query($sentencia);?>


  <?php
while ($arreglo = mysql_fetch_array($query)){ ?>

</b>
<input type="hidden" name="" value="<?php echo $arreglo ['cedula']   ?>">

</form>
<?php



 } ?>
</h4></center></p> 

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

include 'enlace.php';



$estudiante = $_POST ["cedula"];


$sentencia3 = "SELECT * from estudiante WHERE cedula = $estudiante";

$query3 = mysql_query($sentencia3);
$arreglo3 = mysql_fetch_array($query3);
 $carrera = $arreglo3 ['carrera']; 


  $consultaperiodo = mysql_query("SELECT * from periodo where idperiodo = $id");
  $resultadoperiodo = mysql_fetch_array($consultaperiodo);
  $nombreperiodo = $resultadoperiodo ['nombreacademico'];

   $otramas = mysql_query("SELECT * from estudiantesgym where periodo='$nombreperiodo'");
 $resultadosos = mysql_fetch_array($otramas);
 $idstats = $resultadosos ['idestugym'];
 
if ($a->ConsultarStatsGym($idstats)){

 $a->updatestatsgym($idstats);
 $a->updatestatsgymcarr($idstats);
} else{

  $a->cargarstatsgym($nombreperiodo);
  $a->cargarstatsgymcar($carrera);
}

 
  
  


$a->ingresapago (

	$_POST ['mes'],
	 $_POST ['factura'],
   $_POST ['pago'],
	$_POST ['cedula'],
  $nombreperiodo

); ?>

<div align="center">


<form method="post">
	
<img src="img/futbol-bola-ajuste-jugador_318-43643.jpg" width="120">

<br><br>

<div class="alert alert-success">El pago se ha registrado con exito!</div>

<br><br><br>
 


<input type="submit" value="Volver a registrar otro jugador" class="btn btn-primary">

<br><br><br>

</form>

</div>



<?php


}else {?>
<form method="POST" name="" action="">

<table class="table ">
  

<tr>
  
<th>Mes a Cancelar</th>

<th>Numero de Factura</th>

<th>Monto del Pago</th>




</tr>







<tr>

<td>

<select class="form-control" name="mes" Required>
  <option value="">Seleccione</option>
<option value="Enero">Enero</option>
<option value="Febrero">Febrero</option>
<option value="Marzo">Marzo</option>
<option value="Abril">Abril</option>
<option value="Mayo">Mayo</option>
<option value="Junio">Junio</option>
<option value="Julio">Julio</option>
<option value="Agosto">Agosto</option>
<option value="Septiembre">Septiembre</option>
<option value="Octubre">Octubre</option>
<option value="Noviembre">Noviembre</option>
<option value="Diciembre">Diciembre</option>
 
</select>

</td>

<td>
  
<input name="factura" class="form-control" type="text" required>

</td>

<td>
  
<input name="pago" class="form-control" type="text" required>

</td>





</tr>

</table>



<input name="cedula" value="<?php echo $_GET ['cedu']; ?>" type="hidden">

<td colspan="4" align="right" ><br><br><input name="procesar" type="submit" value="Registrar" class="btn btn-primary"></td>


</form>

 



        
      </div>
       
      <div class="cl">&nbsp;</div>
    
   

<?php } ?>
<?php  include ("template/footer.php");?>







    
    </div>
    <!-- end of container -->
  </div>
  <!-- end of shell -->





</div>
<!-- end of wrapper -->
</body>
</html>