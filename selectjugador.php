
<!DOCTYPE html>

<?php @session_start();

if (!isset($_SESSION['nivel'])) header("location:index.php");

  
require("clases/claseusuario.php");
$a= new Usuarios();
$data=$a->VerTorneo(-1);
 



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


if ($_POST){

$a->regisjugadores (

	$_POST ['nombre'],
	$_POST ['apellido'],
	$_POST ['cedula'],
	$_POST ['telefono'],
	$_POST ['Edad'],
	$_POST ['carrera'], 
	$_POST ['dorsal']


);


echo '   

 
  <br><br>
 
 <div class="shell">
 

<div align="left"> 

<h4 style="margin-left:1%;"><span class="glyphicon glyphicon-tag"></span> Complejo Deportivo <span  style="color:blue;"><b>UNIR</b></span></h4>  

</div>

<div class="modal-header" align="left"> <br><br>


<h4 class="modal-title"  >Confirmacion Exitosa!</h4>
</div>
<div class="modal-body">  
<p><h4 align="center">Informacion Almacenada Correctamente. <span class="glyphicon glyphicon-ok"></span></h4></p>
</div>

<div class="modal-footer">
<table width="100%"  height="270" >
<tr>

<td align="center"><a class="btn btn-primary" role="button"  href="home.php"  ><span class="glyphicon glyphicon-th"></span>
 Menu Principal</a></td>

 <td align="center"><a class="btn btn-primary" role="button"  href="#"  > Nuevo Registro <span class="glyphicon glyphicon-plus
">
</span></a></td>

</tr>
</table>
</div>

 
</div> 
 
 
';


}else {?>



<div class="featurede" align="center" > 

<form action="#" method="POST" class="laberd">


<table width="100%" border="0"      style="background-color:#fff;">
  <tr>
    <td colspan="3"><h3  ><span style="margin-left:20px;"class="glyphicon glyphicon-search"  ><b style="font-family:bold;"> REGISTRAR JUGADORES</b></span></h3>   
</td>

  </tr>

</table>

 
<table width="100%" border="0"    height="250" style="background-color:#fff;">
 
<tr>
 

<td align="center">
	
<a href="elija-equipo-futbol.php"> <img src="img/27351.png" width="128"></a><br><br>Futbol

</td>

<td align="center">
	
<a href="elija-equipo-baloncesto.php"><img src="img/ee.jpg" width="128"></a><br><br>basquetbol

</td>


 
<td align="center">
	
<a href="elija-equipo-voleibol.php"> <img src="img/qw.jpg" width="128"></a><br><br>Voleibol

</td>


</tr>


<tr>

<td>
  
  <a href="home.php" style="margin-left:20px;"><span class="glyphicon glyphicon-arrow-left" style="font-size:24px;"></span></a> <br><br>
 
 

</td>


</tr>


</table>
 

 

</form>


   </div>


<?php   } ?>


       


<?php  include ("template/footer.php");?>







    
    </div>
    <!-- end of container -->
  </div>
  <!-- end of shell -->
</div>
<!-- end of wrapper -->
</body>
</html>