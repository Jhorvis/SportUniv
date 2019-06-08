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
    <td colspan="3"><h3  ><span style="margin-left:20px;"  ><b style="font-family:bold;"> <center>GESTIÓN Y ESTADISTICAS DEL TORNEO<center></b></span></h3>   
</td>

  </tr>

</table>
 



<table width="100%" class="table table-bordered" height="300" style="background-color:#fff;">
  

<tr align="center"  >
  
<?php
echo "<td width='25%'  class='imghove'><a href='jornadas.php?id=$idtorneo';\" ><img src='img/1-2-3.png' width='70%'>"
  ?>
</a><br><br> Jornadas<br><br></td>

<?php
echo "<td width='25%'  class='imghove'><a href='nuevo_registro_encuentro.php?id=$idtorneo';\" ><img src='img/encuentros.png' width='70%'>"
  ?>
</a><br><br> Encuentros por jornada<br><br></td>

<?php
echo "<td width='25%'  class='imghove'><a href='resultados.php?id=$idtorneo';\" ><img src='img/result.png' width='80%'>"
  ?>
</a><br><br> Resultados<br><br></td>

<?php
echo "<td width='25%'  class='imghove'><a href='nuevo_registro_goleador.php?id=$idtorneo';\" ><img src='img/futbol-bola-ajuste-jugador_318-43643.jpg' width='33%'>"
  ?>
</a><br><br> Registro personal del jugador<br><br></td>



 
</tr>
<tr align="center"  >
 <?php
echo "<td width='25%'  class='imghove'><a href='listado-equipos.php?id=$idtorneo';\" ><img src='img/listado.jpg' width='60%'>"
  ?>
</a><br><br> Listado de equipos<br><br></td>


  <?php
echo "<td width='25%'  class='imghove'><a href='tabla_posiciones.php?id=$idtorneo';\" ><img src='img/podium.png' width='70%'>"
  ?>
</a><br><br> Tabla de posiciones<br><br></td>

  <?php
echo "<td width='25%'  class='imghove'><a href='eliminatorias.php?id=$idtorneo';\" ><img src='img/final.png' width='100%'>"
  ?>
</a><br><br> Eliminatorias finales<br><br></td>
 <?php
echo "<td width='25%'  class='imghove'><a href='configurar_torneo.php?id=$idtorneo';\" ><img src='img/herramientas.png' width='50%'>"
  ?>
</a><br><br> Configuración<br><br></td>






</tr>
</table>


 
 
 



      </div>
 


 <a href="listado-torneo.php" style="margin-left:20px;"><span class="glyphicon glyphicon-arrow-left" style="font-size:24px;"></span></a> <br><br>
 



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