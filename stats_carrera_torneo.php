
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
<td width="80%"  class="imghove"> 

        <link rel="stylesheet" href="style.css" type="text/css">
        <script src="amcharts/amcharts/amcharts.js" type="text/javascript"></script>
        <script src="amcharts/amcharts/pie.js" type="text/javascript"></script>

        <script>
            var chart;

            var chartData = [
            <?php
   include 'enlace.php';

     $sentencia ="SELECT * from estudiantestorneo";
     $query = mysql_query($sentencia);
    while ($arreglo = mysql_fetch_array($query)) { 

     
      ?>
                {
                    "carrera": "<?php echo $arreglo['carrera']; ?>",
                    "cantidad": "<?php echo $arreglo['cantidad']; ?>"
                },
                
        <?php } ?>    ];


            AmCharts.ready(function () {
                // PIE CHART
                chart = new AmCharts.AmPieChart();

                // title of the chart
                chart.addTitle("Estudiantes participantes en el torneo por carrera", 16);

                chart.dataProvider = chartData;
                chart.titleField = "carrera";
                chart.valueField = "cantidad";
                chart.sequencedAnimation = true;
                chart.startEffect = "elastic";
                chart.innerRadius = "30%";
                chart.startDuration = 2;
                chart.labelRadius = 15;
                chart.balloonText = "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>";
                // the following two lines makes the chart 3D
                chart.depth3D = 5;
                chart.angle = 15;

                // WRITE
                chart.write("chartdiv");
            });
        </script>
    </head>

    <body>
        <div id="chartdiv" style="width:700px; height:400px;"></div>
    </body>

</td>



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