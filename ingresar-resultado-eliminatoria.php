<!DOCTYPE html>

<?php @session_start();

if (!isset($_SESSION['nivel'])) header("location:index.php");
if ($_SESSION['nivel'] != 1) header("location:home.php"); 
include ("enlace.php");

$id = $_GET['id'];



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
 
<?php








if (isset($_POST['procesar'])){




include 'enlace.php';


//consulta para sacar el ID del torneo
  $id = $_GET['id'];
$buscarelacion = "SELECT * from regisjornadas where id_encuentro = $id";
$consulta = mysql_query($buscarelacion);
$resultado = mysql_fetch_array($consulta);
$torneo = $resultado ["torneo"];
$nombrejornada = $resultado['nombrejornada'];
$fecha = $resultado ['fechajornada'];
//funcion para ubicar equipos ya registrados en la tabla de posiciones
if ($a->equitabla1($_POST['equipo_local'],$torneo)){
//consulta para sacar el ID del equipo local
$nombrequipo1 = $_POST ['equipo_local'];
$buscarequipo1 = "SELECT * from regisequipo WHERE torneo = $torneo AND nombrequipo ='$nombrequipo1'";
$consulta2 = mysql_query($buscarequipo1);
$resultado2 = mysql_fetch_array($consulta2);
$idequipoa = $resultado2 ['idequipo'];



////////////////////////////////////////////////////////////////////////////
$nombrequipo1 = $_POST['equipo_local'];
$sente = "SELECT * from tablaposicion where nombrequipo = '$nombrequipo1' and torneo=$torneo";
$querysen = mysql_query($sente);
$arresente = mysql_fetch_array($querysen);

$condicionestatus = $arresente ['estatus_e'];
if ($_POST ['goles_local'] > $_POST ['goles_visitante']){


  $estatus_e = 1;
  

}else {$estatus_e = 0;}

if (($_POST ['goles_local'] > $_POST ['goles_visitante']) && ($condicionestatus == 1)) {
  $estatus_e = 2;
} else {
if (($_POST ['goles_local'] < $_POST ['goles_visitante']) && ($condicionestatus == 1)) {
  
  $estatus_e = 1; }

}

$a->actualizareliminatorias($idequipoa, $estatus_e,$torneo);


 ////////////////////////////////////////////////////////////////////////////

$a->regisresultados (

  $_POST ['equipo_local'],
  $_POST ['goles_local'],
  $_POST ['equipo_visitante'],
  $_POST ['goles_visitante'],
  $_POST ['encuentro'],
  $torneo,
  $nombrejornada,
  $fecha

); 

   // funcion para actualizar estatus del encuentro
   $a->actualizarestatusencuentro ($_POST["encuentro"], $_POST["estatus"]);





}




 include 'enlace.php';


//consulta para sacar el ID del torneo
  $id = $_GET['id'];
$buscarelacion = "SELECT * from regisjornadas where id_encuentro = $id";
$consulta = mysql_query($buscarelacion);
$resultado = mysql_fetch_array($consulta);
$torneo = $resultado ["torneo"];


if ($a->equitabla2($_POST['equipo_visitante'],$torneo)){


//consulta para sacar el ID del equipo visitante
$nombrequipo2 = $_POST ['equipo_visitante'];
$buscarequipo3 = "SELECT * from regisequipo WHERE torneo = $torneo AND nombrequipo ='$nombrequipo2'";
$consulta3 = mysql_query($buscarequipo3);
$resultado3 = mysql_fetch_array($consulta3);
$idequipob = $resultado3 ['idequipo'];
 


 //////////////////////////////////////////////////////////////////////////
$nombrequipo2 = $_POST['equipo_visitante'];
$sente = "SELECT * from tablaposicion where nombrequipo = '$nombrequipo2' and torneo=$torneo";
$querysen = mysql_query($sente);
$arresente = mysql_fetch_array($querysen);


$condicionestatus = $arresente ['estatus_e'];


if ($_POST ['goles_local'] < $_POST ['goles_visitante']){


  $estatus_e = 1;
  

}else {$estatus_e = 0;}

if (($_POST ['goles_local'] < $_POST ['goles_visitante']) && ($condicionestatus == 1)) {
  $estatus_e = 2;
} else {
if (($_POST ['goles_local'] > $_POST ['goles_visitante']) && ($condicionestatus == 1)) {
  
  $estatus_e = 1; }

}

$a->actualizareliminatorias($idequipob, $estatus_e,$torneo);





////////////////////////////////////////////////////////////////////////////





//$a->regisresultados (
//
  //$_POST ['equipo_local'],
  //$_POST ['goles_local'],
  //$_POST ['equipo_visitante'],
  //$_POST ['goles_visitante'],
  //$_POST ['encuentro']
 

//); 

   // funcion para actualizar estatus del encuentro
   $a->actualizarestatusencuentro ($_POST["encuentro"], $_POST["estatus"]); }
   ?>

<div align="center">


<form method="post" action = "<?php echo "nuevo_resultado.php?id=$torneo\""?>">
  
<img src="img/futbol-bola-ajuste-jugador_318-43643.jpg" width="120">

<br><br>

<div class="alert alert-success">Se ha registrado con exito!</div>

<br><br><br>
 


<input type="submit" value="Volver a registrar otro resultado" class="btn btn-primary">

<br><br><br>

</form>

  </div>

   <?php

}   else{

?>




<?php
//$encuentro = $_GET ['id'];

$sentencia2 = "SELECT * from regisjornadas where id_encuentro = $id"; //consulta para seleccionar encuentro

 

?>

  <table width="100%">

<tr>  
  <th width="25%">
<b>Equipo Local:</b>
  </th>

<th width="25%">
<b>Goles:</b>
  </th>

  <th width="25%">
<b>Ir ha partido:</b>
  </th>

<th width="25%">
<b>Goles:</b>
  </th>

</tr>



<form name="" method="POST" action=""> 


 <?php

$query2 = mysql_query ($sentencia2);

while ($arreglo2 = mysql_fetch_array($query2)){ ?>
 
<tr>
 

<td  width="25%"> 
<input  type="text"   class="form-control" name="equipo_local"  autocomplete="off"  value = "<?php  echo $arreglo2 ['equipo_local'] ?>"  required readonly>

</td>


<td width="25%"> <input  type="number" class="form-control" name="goles_local"  size="1px" required></td>




<td width="25%">  

<input  type="text"   class="form-control" name="equipo_visitante"  autocomplete="off"  value = "<?php  echo $arreglo2 ['equipo_visitante'] ?>"  required readonly>

</td>


<td width="25%"> <input  type="number" class="form-control" name="goles_visitante" size="1px" required></td>
 
 

 <input  type="hidden" class="form-control" name="win" size="1px" required></td>

 <input  type="hidden" class="form-control" name="loss" size="1px" required></td>

</tr>


<?php  }  ?>



<tr>
  
<td colspan="4" align="right" ><br><br><input name="procesar" type="submit" value="Registrar" class="btn btn-primary"></td>

</tr>
<?php


?>

<tr>
  

<td> <a href="registro_resultados.php" style="margin-left:20px;"><span class="glyphicon glyphicon-arrow-left" style="font-size:24px;"></span></a></td>

</tr>
<input type="hidden" name="encuentro" value="<?php echo  $_GET['id'];?>"  class="form-control"  autocomplete="off"  required readonly>
 <input type="hidden" name="estatus" value="1"  class="form-control"  autocomplete="off"  required readonly>

 </div>

</table>
 


</div>

</div>


</div>
<br><br>

</div>




</div>



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























 



 

  </div>
   
   

   
   
   
   
   
   
</div>
    </div>     
      </div>     
    </div>    









 

  </div>
   
   

   
   
   
   
   
   
</div>
    </div>     
      </div>     
    </div>    
