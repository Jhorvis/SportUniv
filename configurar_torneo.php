<!DOCTYPE html>
<?php @session_start();
 

if (!isset($_SESSION['nivel'])) header("location:index.php");
 if ($_SESSION['nivel'] != 1) header("location:home.php"); ?>
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
     


<?php  include ("template/header.php");
 $idtorneo = $_GET ['id'];

?>

  




  <div class="main">

       <div class="featurede" align="center" >


 <table width="100%" border="0"      style="background-color:#fff;">
  <tr>
    <td colspan="3"><h3  ><span style="margin-left:20px;"  ><b style="font-family:bold;"> <center>CONFIGURACIÓN DEL TORNEO<center></b></span></h3>   
</td>

  </tr>

</table>
 



<table width="100%" class="table table-bordered" height="300" style="background-color:#fff;">
  

<tr align="center"  >
  
<?php
echo "<td width='25%'  class='imghove'><a href='modificar_nombre_torneo.php?id=$idtorneo';\" ><img src='img/09_pencil-512.png' width='50%'>"
  ?>
</a><br><br> Cambiar nombre del torneo<br><br></td>

<?php
echo "<td width='25%'  class='imghove'><a href='modificar_capacidad_torneo.php?id=$idtorneo';\" ><img src='img/ISync_icon.png' width='50%'>"
  ?>
</a><br><br> Modificar capacidad de equipos<br><br></td>

<?php
echo "<td width='25%'  class='imghove'><a href='terminar_primera_fase.php?id=$idtorneo';\" ><img src='img/LOCK ICON.png' width='50%'>"
  ?>
</a><br><br> Cerrar primera fase<br><br></td>

<?php
echo "<td width='25%'  class='imghove'><a href='finalizar_torneo.php?id=$idtorneo';\" ><img src='img/LogoShutdown.png' width='50%'>"
  ?>
</a><br><br> Finalizar Torneo<br><br></td>



 
</tr>
<tr align="center"  >
 <?php
echo "<td width='25%'  class='imghove'><a href='descalificar_equipo.php?id=$idtorneo';\" ><img src='img/icon-close.png' width='50%'>"
  ?>
</a><br><br> Descalificar un equipo<br><br></td>


  <?php
echo "<td width='25%'  class='imghove'><a href='reactivar_fase.php?id=$idtorneo';\" ><img src='img/lock-unlocked-circle-filled-512.png' width='50%'>"
  ?>
</a><br><br> Reactivar primera fase <br><br></td>

  <?php
echo "<td width='25%'  class='imghove'><a href='reactivar_torneo.php?id=$idtorneo';\" ><img src='img/descarga.png' width='50%'>"
  ?>
</a><br><br> Reactivar torneo <br><br></td>

  <?php
echo "<td width='25%'  class='imghove'><a href='detalles.php?id=$idtorneo';\" ><img src='img/Nueva imagen (1).png' width='70%'>"
  ?>
</a><br><br> Detalles <br><br></td>



</tr>
</table>


 
 
 



      </div>
 


<?php
  $idtorneo = $_GET ['id'];
  echo "<a href='tipo_estadistica.php?id=$idtorneo' style='margin-left:20px;'><span class='glyphicon glyphicon-arrow-left' style='font-size:24px;'></span></a> <br><br>"
 
 ?>


        <section class="cols">
          



 

          <div class="cl">&nbsp;</div>
        </section>
        
      </div>
       
      <div class="cl">&nbsp;</div>
    
   


<?php  include ("template/footer.php");?>







    
    </div>
    <!-- end of container -->
  </div>
  <!-- end of shell -->
</div>
<!-- end of wrapper -->
</body>
</html>