
<!DOCTYPE html>

<?php @session_start();
 

if (!isset($_SESSION['nivel'])) header("location:index.php");
 

require("clases/claseusuario.php");

$a= new Usuarios();
  

$data=$a->Datos_Equipos($_GET['id']);

  
 
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



if (isset($_POST ['procesar'])){




 if ($a->VerList($_POST['torneo'])){
  
?>
 
 
<table width="100%"   height="300" >
  
<tr><td>
 <center><img src="img/errors.png" width="120" ></center>
<p><br><center><h4>Usted ya se encuentra registrado en el torneo!</h4></center></p> 

<div align="center">
<br>
 <a href="nuevo-equipo-voleiboll.php" class="btn btn-primary" >Volver Atras</a>

</div>

</table>  
<br><br>
</div>

 

 
    
<?php 
  exit();
  
  }

 

$a->regisequipos (

	$_POST ['nombrequipo'],
	$_POST ['coloruni'],
	$_POST ['telefono'],
	$_POST ['torneo'],
	$_POST ['telefonodel'],
	$_POST ['deleequipo'],
	$_POST ['identidad'],
    $_POST ['disciplina'],
	$_POST ['estatus']



); ?>
 


<div align="center">


<form method="post" action="nuevo-equipo-voleiboll.php">
	
<img src="img/futbol-bola-ajuste-jugador_318-43643.jpg" width="120">

<br><br>

<div class="alert alert-success">Se ha registrado con exito!</div>

<br><br><br>
 
<input type="submit" value="Volver a registrar " class="btn btn-primary">

<br><br><br>

</form>

</div>





<?php }else {  		?>



<div class="featurede" align="center" > 


<form action="#" method="POST" class="laberd" >

<input type="hidden" name="identidad" value="<?php echo $_SESSION['identidad']; ?>">





<input type="hidden"   class="form-control" name="disciplina"  value="Voleibol" required>



<input type="hidden"   class="form-control" name="estatus"  value="0" required>




<table width="100%" border="0"      style="background-color:#fff;">
  <tr>
    <td colspan="3"><h3  ><span style="margin-left:20px;"   ><b style="font-family:bold;">REGISTRAR EQUIPOS</b></span></h3>   
</td>

  </tr>

</table>





<table width="100%" border="0"    height="240" style="background-color:#fff;">
  

<tr    >
  
	<td width="33%">

	<div class="input-group"><b>Nombre del equipo:</b><br>
	<input type="text"   class="form-control" name="nombrequipo" autocomplete="off"  required></div>
	 

	</td>


	<td width="33%">

	<div class="input-group"><b>Color de uniforme:</b><br>
	<input type="text"   class="form-control" name="coloruni"  autocomplete="off"  required></div>
	 

	</td>


	<td width="33%">

	<div class="input-group"><b>Telefono:</b><br>
	<input type="text"   class="form-control" name="telefono"  autocomplete="off"  required></div>
	 
	</td>

</tr>




<tr >
  
	<td width="33%">

<div class="input-group"><b>Torneo:</b><br>
 
 
<input name="torneo" value="<?php echo  $_GET['id'];?>" type="text" class="form-control"  autocomplete="off"  required readonly>
 </div>
	 

	</td>


	<td width="33%">

	<div class="input-group"><b>Telefono del delegado:</b><br>
	<input type="text"   class="form-control" name="telefonodel"  autocomplete="off"  required></div>
	 

	</td>


	<td width="33%">

	<div class="input-group"><b>Delegado del equipo:</b><br>
	<input type="text"   class="form-control" name="deleequipo"  autocomplete="off"  required></div>
	 
	</td>

</tr>


<tr>
	
<td colspan="3" align="right" style="padding-right:30px;"> <br>  <input class="btn btn-primary" type="submit" role="button" name="procesar" value="Procesar Registro"></td>	


</tr>


<tr>
  


<td>
  
  <a href="nuevo-equipo-voleiboll.php" style="margin-left:20px;"><span class="glyphicon glyphicon-arrow-left" style="font-size:24px;"></span></a> <br><br>
 
 

</td>


</tr>




</table>
 





 

</form>




   </div>


 


<?php  include ("template/footer.php");?>

<?php } ?>





    
    </div>
    <!-- end of container -->
  </div>
  <!-- end of shell -->
</div>
<!-- end of wrapper -->
</body>
</html>