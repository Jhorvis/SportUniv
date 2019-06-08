
<!DOCTYPE html>

<?php @session_start();

if (!isset($_SESSION['nivel'])) header("location:index.php");
if ($_SESSION['nivel'] != 1) header("location:home.php"); 

require("clases/claseusuario.php");

$a= new Usuarios();
$data=$a->VerConfirmacion($_GET['id']);

 
if (isset($_POST['procesar'])){

$a->ActualizaReSTATUS(

    $_POST['idequipo'],
    $_POST['estatus']


  );

header("location:ver-notificacion-baloncesto.php");

}




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


<div class="featurede" align="center"  > 

 
<table width="100%" border="0"      style="background-color:#fff;">
  <tr>
  	<td colspan="3"><h3  ><span style="margin-left:20px;"  ><b style="font-family:bold;"> CONFIRMACION DE LA PREINSCRIPCION</b></span></h3>   
</td>

  </tr>

</table>

 <div   style="background-color:#fff;" > 

 

<br><br>
<?php foreach ($data as $rr) { } ?>


   <span style="font-size:18px;"> <?php echo $rr->nombrequipo; ?></span>

 
<form method="POST"  action="">
  
<input name="idequipo" value="<?php echo $rr->idequipo;?>" type="hidden">

<input name="estatus" value="2" type="hidden">
<br><br>

<input name="procesar" value="Confirmar Registro" type="submit"  class="btn btn-primary">

</form>

<br><br><br><br>
</div>



 
<table width="100%" border="0"      style="background-color:#fff;">
  <tr>

<td>
  
  <a href="home.php" style="margin-left:20px;"><span class="glyphicon glyphicon-arrow-left" style="font-size:24px;"></span></a> <br><br>
 
 
</td>


</tr>

</table>
 

   </div>





       


<?php  include ("template/footer.php");?>







    
    </div>
    <!-- end of container -->
  </div>
  <!-- end of shell -->
</div>
<!-- end of wrapper -->
</body>
</html>