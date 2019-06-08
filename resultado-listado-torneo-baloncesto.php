 
<!DOCTYPE html>

<?php @session_start();

if (!isset($_SESSION['nivel'])) header("location:index.php");


unset($_SESSION['torneo']);

require("clases/claseusuario.php");
$a= new Usuarios();

$data=$a->VerTorneoD($_GET['id']);


foreach ($data as $rv) {} 


$datas=$a->ListadoEquipos($rv->idtorneo);
 
 


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




<div class="featurede" align="center"   style="background-color:#fff;"> 

 



 
 
 
 <table width="100%" border="0"      style="background-color:#fff;">
  <tr>
    <td colspan="3"><h3  ><span style="margin-left:20px;"  ><b style="font-family:bold;"> LISTADO DE TORNEO DE BASQUETBOL  - SOLO SE PERMITE <span style="color:red;"><?PHP echo $rv->cantidaequi;?></span> EQUIPOS!</b></span></h3>   
</td>

  </tr>

</table>
 
<?php $a = 1 ?>
 

<table width="100%"  class="table table-bordered"   style="background-color:#fff;">
 
 
 

<tr>
 
<th>Nº</th>

<th>Nombre del equipo</th>

<th>Color de uniforme</th>

<th>Delegado del equipo</th>

<th>Telefono del delegado</th>

 </tr>



 <?php foreach ($datas as $rs) {
  

  ?>

 
<tr>
  
<td> <?php echo $a++ ;?></td>
<td>    <?php echo $rs->nombrequipo; ?>  </td>
<td>    <?php echo $rs->coloruni; ?>   </td>
<td>    <?php echo $rs->deleequipo; ?>   </td>
<td>    <?php echo $rs->telefono; ?>  </td>
 


</tr>









 <?php } ?>



</table>
 


<table width="100%"   style="background-color:#fff;">
   
   <tr>
  

<td>
   <BR><BR> 
  <a href="listado-torneo.php" style="margin-left:20px;"><span class="glyphicon glyphicon-arrow-left" style="font-size:24px;"></span></a> <br><br>
 
 

</td>


</tr>

 </table>

  

</form>

 

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