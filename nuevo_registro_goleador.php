<!DOCTYPE html>

<?php @session_start();

if (!isset($_SESSION['nivel'])) header("location:index.php");
include ("enlace.php");

$id = $_GET['id'];

 

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
//$jornada = $_POST['jornada'];

$sentencia2 = "SELECT * from regisequipo where torneo = $id 
 "; //consulta para equipos



?>

  <table width="100%">

<tr>  
  <th width="18%">
<b>Equipo Registrados</b>
  </th>

<th width="18%"  >
<b>Ver Goleadores</b>
  </th>

 



 <?php
 
$sentencia2 = "SELECT * from regisequipo where torneo  = $id"; //consulta para seleccionar encuentro



      $query2 = mysql_query ($sentencia2);

while ($arreglo2 = mysql_fetch_array($query2)){ ?>

 
<tr>
 

<td  width="45%"> 
<input  type="text"   class="form-control" name="equipo_local"  autocomplete="off"  value = "<?php  echo $arreglo2 ['nombrequipo'] ?>"  required readonly>

</td>




<?php 

$arre =$arreglo2 ['nombrequipo'];

$arres =$arreglo2 ['torneo'];

echo "<td  ><a href='ingresar_goleador.php?id=$arre&tor=$arres&at=$id';\"><img src='img/check_box.png' width='32' height='27'</a></td>";
  
?>



</tr>


<?php  } ?>


</table>
 
<br>

<?php
  $idtorneo = $_GET ['id'];
  echo "<a href='tipo_estadistica.php?id=$idtorneo' style='margin-left:20px;'><span class='glyphicon glyphicon-arrow-left' style='font-size:24px;'></span></a> <br><br>"
 
 ?>

</div>

</div>


 <?php  include ("template/footer.php");?>




</div>
<br><br>



</div>

</div>

   </div>




 

 
<!-- end of wrapper -->
</body>
</html>

 