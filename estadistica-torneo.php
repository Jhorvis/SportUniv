
<!DOCTYPE html>

<?php @session_start();

if (!isset($_SESSION['nivel'])) header("location:index.php");

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




<div class="featurede" align="center" > 

 
<table width="100%" border="0"      style="background-color:#fff;">
  <tr>
    <td colspan="3"><h3  ><span style="margin-left:20px;"  ><b style="font-family:bold;">ESTADISTICAS GENERALES</b></span></h3>   
</td>

  </tr>

</table>

<table width="100%"  height="300" class="table table-bordered" style="background-color:#fff;">
  

<tr align="center"  >
<td width="20%">
  <ul id="sidebar-left">
 

<li id="pri"  ><i class="fa fa-home"></i> <a href="stats_carrera_torneo.php" >Participación torneos</a></li>
<li id="pri"><i class="fa fa-soccer-ball-o"></i></i> <a href="stats_participacion_gym.php">Participación gimnasio</a></li>
<li id="pri"><i class="fa fa-search"></i></i> <a href="#">Usuarios del gimnasio</a></li>



<li id="pri"><i class="fa fa-user-plus"></i> <a href="#">Actividad de usuarios</a></li>

</ul>
</td>
<td width="80%"  class="imghove"> <a href="listado-torneo.php"><img src="img/soccer_93707.jpg" width="36%"></a><br><br> ESTADISTICAS POR TORNEO<br><br></td>



</tr>

</table>
 



 
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