<!DOCTYPE html>
<?php @session_start();
 

if (!isset($_SESSION['nivel'])) header("location:index.php");
 ?>
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
    <td colspan="3"><h3  ><span style="margin-left:20px;"  ><b style="font-family:bold;"> <center>DETALLES DEL TORNEO<center></b></span></h3>   
</td>

  </tr>
 
</table>
 

<table width="100%" border="0"      style="background-color:#fff;">
	<?php 
     include 'enlace.php';

     #fechas de comienzo y fin de torneo
     $sentenciaini = mysql_query("SELECT * from regisjornadas where torneo = $idtorneo and nombrejornada = '1' ");
     $resi = mysql_fetch_array($sentenciaini);
     $inicio = $resi['fechajornada'];

     $sentenciafin = mysql_query("SELECT * from regisjornadas where torneo = $idtorneo and nombrejornada = 'Final' ");
     $resf = mysql_fetch_array($sentenciafin);
     $final = $resf['fechajornada'];

     #numero de equipos
     $sentency=mysql_query("SELECT count(*) FROM regisequipo WHERE torneo = $idtorneo  and estatus = 2 ");
     $count = mysql_fetch_array($sentency);
     $conteo = $count['count(*)'];
	 
	 #jornadas

	 $senjornada = mysql_query("SELECT count(*) from jornadas WHERE torneo = $idtorneo");
     $countjor = mysql_fetch_array($senjornada);
     $conteojorn = $countjor['count(*)'];
	 
	 #encuentros
     $senpart = mysql_query("SELECT count(*) from regisjornadas WHERE torneo = $idtorneo");
     $countpart = mysql_fetch_array($senpart);
     $conteopart = $countpart['count(*)'];

	?>

  <tr>
    <td>Fecha de inicio: <?php
 if ($inicio == ""){ 

    	echo "<font color='purple'><b>Por definir</b></font>";
    } else {
     echo "<b> ".$inicio."</b>"; 
 }?> 
 </td>

 </tr>  
<tr>
    <td>Fecha de finalización: <?php 
    if ($final == ""){ 

    	echo "<font color='purple'><b>Por definir</b></font>";
    } else { 
    	echo "<b> ".$final."</b>";} 
    	?> 
    </td>

 </tr>  
 <tr>
    <td>Número de Equipos: <?php

echo "<b>". $conteo ."</b>";
    ?></td>

 </tr> 
  <tr>

  <td>Jornadas Jugadas: 
   <?php

echo "<b>". $conteojorn ."</b>";
    ?></td>

 </tr>
 <tr>
  <td>Partidos disputados:<?php

echo "<b>". $conteopart ."</b>";
    ?> </td>

 </tr>  
 <tr>
    <td>Campeón: Definir</td>

 </tr>  
<tr>
    <td>Sub-campeón: Defiir</td>

 </tr>  


 


</table>























<?php
  $idtorneo = $_GET ['id'];
  echo "<a href='configurar_torneo.php?id=$idtorneo' style='margin-left:20px;'><span class='glyphicon glyphicon-arrow-left' style='font-size:24px;'></span></a> <br><br>"
 
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