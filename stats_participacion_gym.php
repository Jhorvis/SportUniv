
<!DOCTYPE html>

<?php @session_start();

if (!isset($_SESSION['nivel'])) header("location:index.php");
  include 'enlace.php';

     $sentencia ="SELECT * from estudiantesgym order by periodo ASC";
     $query = mysql_query($sentencia);

     $sentencia2 ="SELECT * from estudiantesgymcarrera order by carrera ASC";
     $query2 = mysql_query($sentencia2);
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
        <link href='http://fonts.googleapis.com/css?family=Covered+By+Your+Grace' rel='stylesheet' type='text/css'>
        <script src="amcharts/amcharts/amcharts.js" type="text/javascript"></script>
        <script src="amcharts/amcharts/serial.js" type="text/javascript"></script>
        <script src="amcharts/amcharts/pie.js" type="text/javascript"></script>
        <!-- theme files. you only need to include the theme you use.
             feel free to modify themes and create your own themes -->
        <script src="amcharts/amcharts/themes/light.js" type="text/javascript"></script>
        <script src="amcharts/amcharts/themes/dark.js" type="text/javascript"></script>
        <script src="amcharts/amcharts/themes/black.js" type="text/javascript"></script>
        <script src="amcharts/amcharts/themes/chalk.js" type="text/javascript"></script>
        <script src="amcharts/amcharts/themes/patterns.js" type="text/javascript"></script>
        <script>
        // in order to set theme for a chart, all you need to include theme file
        // located in amcharts/themes folder and set theme property for the chart.

        var chart1;
        var chart2;

        makeCharts("light", "#FFFFFF");

        // Theme can only be applied when creating chart instance - this means
        // that if you need to change theme at run time, youhave to create whole
        // chart object once again.

        function makeCharts(theme, bgColor, bgImage) {

            if (chart1) {
                chart1.clear();
            }
            if (chart2) {
                chart2.clear();
            }

            // background
            if (document.body) {
                document.body.style.backgroundColor = bgColor;
                document.body.style.backgroundImage = "url(" + bgImage + ")";
            }

            // column chart
            chart1 = AmCharts.makeChart("chartdiv1", {
                type: "serial",
                theme: theme,
                dataProvider: [

               <?php
 
    while ($arreglo = mysql_fetch_array($query)) { 

     
      ?>
                {
                    "year": "<?php echo $arreglo['periodo']; ?>",
                    "income": "<?php echo $arreglo['cantidad']; ?>",
                    "expenses": "<?php echo $arreglo['asistencia']; ?>"
                },

           <?php } ?>     ],


                categoryField: "year",
                startDuration: 1,

                categoryAxis: {
                    gridPosition: "start"
                }, 
                valueAxes: [{
                    title: "Estudiantes por periodo"
                }],
                graphs: [{
                    type: "column",
                    title: "Inscritos",
                    valueField: "income",
                    lineAlpha: 0,
                    fillAlphas: 0.8,
                    balloonText: "[[title]] in [[category]]:<b>[[value]]</b>"
                }

                ],
                legend: {
                    useGraphSettings: true
                }

            }
             );

            // pie chart
            chart2 = AmCharts.makeChart("chartdiv2", {
                type: "pie",
                theme: theme,
                dataProvider: [
    <?php
 
    while ($arreglo2 = mysql_fetch_array($query2)) { 

     
      ?>

                {
                    "country": "<?php echo $arreglo2['carrera']; ?>",
                    "litres": "<?php echo $arreglo2['cantidad']; ?>"
                }, 
           <?php } ?>  ],

                titleField: "country",
                valueField: "litres",
                balloonText: "[[title]]<br><b>[[value]]</b> ([[percents]]%)",
                legend: {
                    align: "center",
                    markerType: "circle"
                }
            });

        }


        </script>
    </head>

    <body style="font-size:15px;">
        <div id="chartdiv1" style="width: 600px; height: 400px;"></div>
        <div id="chartdiv2" style="width: 600px; height: 400px;"></div>
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