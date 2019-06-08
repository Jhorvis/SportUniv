
<!DOCTYPE html>

<?php @session_start();
 

if (!isset($_SESSION['nivel'])) header("location:index.php");
 if ($_SESSION['nivel'] != 1) header("location:home.php"); 

//require("clases/claseusuario.php");

//$a= new Usuarios();
  
include ("enlace.php");
$id = $_GET['id'];

$sentencia = "select * from regisequipo where torneo = $id ";
     $query = mysql_query ($sentencia);

$sentencia2 = "select * from regisequipo where torneo = $id ";
     $query2 = mysql_query ($sentencia2);
  
 
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

 




<td>

<?php 
require("clases/claseusuario.php");
$a= new Usuarios();

if ($a->verificarfasefinal($id)){
?>
<table width="100%"   height="300" >
  
<tr><td>
<br><center><img src="img/User_with_strange_head.svg" width="120" ></center>
<p><br><center><h4>Ya el torneo <span style="color:red">Finalizó.</span> 
no se pueden editar estadisticas del mismo </center></p> 
<br><br><center><a class="btn btn-primary" href="inscrequipo.php">Atras</a></center><br></td></tr>

</table>  
<br><br>
</div>
 

 </div></div></div>

<?php
  exit();
}
$sentencia4 = "SELECT * from regisresultado WHERE torneo = $id order by encuentro DESC";
$query4 = mysql_query($sentencia4);



;?>
</td>
<td colspan="3"><h3  ><span style="margin-left:20px;"  ><b style="font-family:bold;"> <center>ENCUENTROS PAUTADOS </center></b></span></h3>   
</td>
</tr>
<table width="100%"  style="background-color:#fff;">
<tr  style="background-color:#d9edf9;">

  <th><center>DESCRIPCIÓN DEL PARTIDO</center></th>
  
  

  <th><center>ACCIONES</center></th>
  </tr>
 
</table>
<table width="100%"  class="table table-bordered"   style="background-color:#fff;">
 
 


<tr style="background-color:#d9edf9;">


<th>Jornada</th>
<th>Fecha</th>

<th>Equipo Local </th>

<th>GOL</th>

<th>Equipo Visitante</th>

<th>GOL</th>



<th>Modificar</th>



</tr>

<tr>



<?php while ($arreglo4 = mysql_fetch_array($query4)) {?>




<td> <?php  echo $arreglo4['nombrejornada'];  ?> </td>
<td> <?php  echo $arreglo4['fecha']; ?> </td>


<td> <?php  echo $arreglo4['equipo_local'];  ?> </td>
<td>  <?php  echo $arreglo4['goles_local'];  ?> </td>
<td> <?php  echo $arreglo4['equipo_visitante'];  ?> </td>
<td>  <?php  echo $arreglo4['goles_visitante'];  ?> </td>



<td>

<?php 

$arre =$arreglo4 ['encuentro'];

$torn = $arreglo4['torneo'];




echo "<center><a href='modificar_encuentro.php?id=$arre&tournament=$torn';\"><img src='img/check_box.png' width='32' height='27'</a></center>";
  


?>
</td>
</tr>

<?php
  }



?>

</table>


<?php
  $idtorneo = $_GET ['id'];
  echo "<a href='tipo_estadistica.php?id=$idtorneo' style='margin-left:20px;'><span class='glyphicon glyphicon-arrow-left' style='font-size:24px;'></span></a> <br><br>"
 
 ?>


 

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