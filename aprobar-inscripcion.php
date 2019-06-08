
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

include 'enlace.php';
$idequipo= $_POST['idequipo'];
$sentencia ="SELECT * from regisequipo WHERE idequipo = '$idequipo'";
$query = mysql_query($sentencia);
$arreglo = mysql_fetch_array($query);
$identidad = $arreglo['identidad'];

$sentencia2 ="SELECT * from usuario WHERE identidad = '$identidad'";
$query2 = mysql_query($sentencia2);
$arreglo2 = mysql_fetch_array($query2);
$usuario =  $arreglo2 ['user'];
$estatus = 0;


$a->enviarmensaje(

    $_SESSION['nombre'],
   
    $usuario,
    $_POST['mensaje'],
    $estatus,
    $_POST['asunto']

  );

header("location:ver-notificacion.php");

}
include 'enlace.php';

$id = $_GET['t'];
$sentency=mysql_query("SELECT count(*) FROM regisequipo WHERE torneo = $id  and estatus = 2 ");
$count = mysql_fetch_array($sentency);
$conteo = $count['count(*)'];

$buscacantidad = mysql_query("SELECT * from registorneo where idtorneo =$id");
$cantidad = mysql_fetch_array($buscacantidad);
$canttotal = $cantidad['cantidaequi'];

if ($conteo >= $canttotal){
  
?>
 
 
<table width="100%"   height="300" >
  
<tr><td>
 <center><img src="img/errors.png" width="120" ></center>
<p><br><center><h4>Ya este torneo alcanzó el limite máximo de paricipantes!<br>
<?php echo "<font color='red'>". $conteo. " de " .$canttotal." Equipos </font>"; ?></h4></center></p> 

<div align="center">
<br>
 <a href="ver-notificacion.php" class="btn btn-primary" >Volver Atras</a>

</div>

</table>  
<br><br>
</div>
<?php exit(); } else {

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
<?php 


?>

<input name="mensaje" value="Nos place informarle que su solicitud para formar parte
del torneo  de  <?php echo $rr->disciplina; ?> con el equipo <b><?php echo $rr->nombrequipo; ?></b> ha sido <font color='green'><b>APROBADA!</b></font> por este medio se le estará 
informando las fechas que jugara su equipo" type="hidden">

<input name="asunto" value="Solicitud de participacion en el torneo de <?php echo $rr->disciplina;?>" type="hidden">


  
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





       


<?php }  include ("template/footer.php");?>







    
    </div>
    <!-- end of container -->
  </div>
  <!-- end of shell -->
</div>
<!-- end of wrapper -->
</body>
</html>