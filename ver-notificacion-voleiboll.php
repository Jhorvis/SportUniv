
<!DOCTYPE html>

<?php @session_start();

if (!isset($_SESSION['nivel'])) header("location:index.php");
if ($_SESSION['nivel'] != 1) header("location:home.php"); 

require("clases/claseusuario.php");

$a= new Usuarios();
$data=$a->VerNotificacionesvoleibol(-1);


foreach ($data as $re) {}


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
    <td colspan="3"><h3  ><span style="margin-left:20px;"  ><b style="font-family:bold;"> MODULO DE PREINSCRIPCION DE BALONCESTO</b></span></h3>   
</td>

  </tr>

</table>

 <div   style="background-color:#fff;" > 

<table  width="90%"  height="300"  >

<td valign="top" >


<?php 

if (@$re->nombrequipo){}else{ ?>


<br><br><br><br>
<div class="alert alert-info">
  <center>
No hay notificaciones pendientes!

</center>

</div>
 






<?php }



?>








<table   width="100%"  height="140"    >
  

<?php

foreach ($data as $rr) {
  
 

  ?>


 <tr >
   
<td  width="33%"><b>Equipos</b></td>
<td align="center"  width="33%"><b>Estatus</b></td>
<td align="right" width="33%"><b>Inscribir</b></td>
</tr>
 
<tr>
  
<td width="33%"><?php echo $rr->nombrequipo; ?></td>
<td width="33%" align="center"><?php if ($rr->estatus==0) {echo "Preinscrito";}?></td>


<?php echo "<td width='33%' align='right'>

<a href='aprobar-inscripcion-voleiboll.php?id=$rr->idequipo';\"><img id='img' src='img/unchecked_checkbox.png' width='27' height='27'></a></td>";
 
   ?>
</tr>
<tr><td colspan="3"><hr></td></tr>



<?php } ?>

</table>
 
 </td>

 </table>



</div>



 
<table width="100%" border="0"      style="background-color:#fff;">
  <tr>

<td>
  
  <a href="notificaciones.php" style="margin-left:20px;"><span class="glyphicon glyphicon-arrow-left" style="font-size:24px;"></span></a> <br><br>
 
 
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