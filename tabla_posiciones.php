 
<!DOCTYPE html>

<?php @session_start();

if (!isset($_SESSION['nivel'])) header("location:index.php");


unset($_SESSION['torneo']);

require("clases/claseusuario.php");
$a= new Usuarios();

$data=$a->VerTorneoD($_GET['id']);


foreach ($data as $rv) {} 


$datas=$a->ListadoEquipostabla($rv->idtorneo);
 
 


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
    <td colspan="3"><h3  ><span style="margin-left:20px;"  ><b style="font-family:bold;"> <center>TABLA DE POSICIONES </center></b></span></h3>   
</td>

  </tr>

</table>
 
<?php $a = 1 ?>
 

<table width="100%"  class="table table-bordered"   style="background-color:#fff;">
 
 
    <thead>

<tr style="background-color:#d9edf9;">
 
<th><center>Pos.</center></th>

<th>Nombre del equipo</th>

<th><center>Pts.</center></th>

<th><center>JJ</center></th>

<th><center>JG</center></th>

<th><center>JE</center></th>

<th><center>JP</center></th>

<th><center>GF</center></th>

<th><center>GC</center></th>

<th><center>DF</center></th>
   </thead>




 </tr>



 <?php foreach ($datas as $rs) {
  

  ?>

 
<tr>
  
<td>    <center><?php echo $a++ ;?></center></td>
<td>    <?php echo $rs->nombrequipo; ?>   </td>
<td>    <center><?php echo $rs->puntos; ?></center>   </td>
<td>    <center><?php echo $rs->play; ?></center>   </td>
<td>    <center><?php echo $rs->win; ?> </center>  </td>
<td>    <center><?php echo $rs->draw; ?> </center>  </td>
<td>    <center><?php echo $rs->loss; ?></center>  </td>
<td>    <center><?php echo $rs->golfavor; ?> </center> </td>
<td>    <center><?php echo $rs->golcontra; ?>  </td>
<td>   <center> <?php echo $rs->diferenciagol; ?></center>  </td>

</tr>





 
  



 <?php  } ?>



</table>
 


<table width="100%"   style="background-color:#fff;">

  
   
   <tr>

  <td><left><i>Leyenda</i>: <b>Pos.</b> : Posición. <b>Pts.</b>: Puntos. <b>JJ</b>: Juegos Jugados. <b>JG</b>: Juegos ganados.<br>
  <b>JE</b>: Juegos Empatados. <b>JP</b>: Juegos perdidos. <b>GF</b>: Goles a favor. <b>GC</b>: Goles en contra. 
  <b>DF</b>: Diferencia de goles.


   <BR><BR> <left>
  <?php
  $idtorneo = $_GET ['id'];
  echo "<a href='tipo_estadistica.php?id=$idtorneo' style='margin-left:20px;'><span class='glyphicon glyphicon-arrow-left' style='font-size:24px;'></span></a> <br><br>"
 
 ?>
 </left>

</td>


</tr>

 </table>

  

</form>

 

   </div>


 
   <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>



<?php  include ("template/footer.php");?>







    
    </div>
    <!-- end of container -->
  </div>
  <!-- end of shell -->
</div>
<!-- end of wrapper -->
</body>
</html>