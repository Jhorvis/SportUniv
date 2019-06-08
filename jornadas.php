
<!DOCTYPE html>

<?php @session_start();
 

if (!isset($_SESSION['nivel'])) header("location:index.php");
 if ($_SESSION['nivel'] != 1) header("location:home.php"); 

require("clases/claseusuario.php");
$a= new Usuarios();
  
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

 <?php

//if ($_POST){
  
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


if (isset($_POST['procesar'])){

if ($a->buscajornada($_POST['nombrejornada'], $_POST['torneo'])){
?>
<table width="100%"   height="300" >
  
<tr><td>
<br><center><img src="img/User_with_strange_head.svg" width="120" ></center>
<p><br><center><h4><span style="color:red">ERROR!</span> ya esta jornada esta registrada   <span style="color:red">EN ESTE TORNEO.</span> </h4></center></p> 
<br><br><center><a class="btn btn-primary" href="registro_jornadas.php">Intentar de Nuevo</a></center><br></td></tr>

</table>  
<br><br>
</div>
 

 </div></div></div>
    
<?php 
  exit();
  
  }







 

$a->nuevajornada (

	$_POST ['nombrejornada'],
	
	$_POST ['torneo']
); ?>
 
<?php


echo'

<div align="center">


<form method="post" action="tipo_estadistica.php">
  
<img src="img/futbol-bola-ajuste-jugador_318-43643.jpg" width="120">

<br><br>

<div class="alert alert-success">Se ha registrado con exito!</div>

<br><br><br>
 
<input type="submit" value="Volver a registrar " class="btn btn-primary">

<br><br><br>

</form>

</div>


'; }else{ 
?>



<div class="featurede" align="center" > 


<form action="#" method="POST" class="laberd" >

<input type="hidden" name="identidad" value="<?php echo $_SESSION['identidad']; ?>">









<table width="100%" border="0"      style="background-color:#fff;">
  <tr>
    <td colspan="3"><h3  ><span style="margin-left:20px;"   ><b style="font-family:bold;">REGISTRAR JORNADAS</b></span></h3>   
</td>

  </tr>

</table>





<table width="100%" border="0"    height="240" style="background-color:#fff;">
  

<tr    >
  
	<td width="20%">

	<div><b>Seleccione el numero de la jornada a activar:</b><br>
	 <table>
    <td >
      <?php 

      if ($a->jornada1($id)){
      ?>
   
   <?php }else{?>
    <input type="radio"   value= "1"  name="nombrejornada" autocomplete="off"  required>1<br></div>
    <?php } ?>
	 <?php 

      if ($a->jornada5($id)){
      ?>
   
   <?php }else{?>
    <input type="radio"   value= "5"  name="nombrejornada" autocomplete="off"  required>5<br></div>
    <?php } ?>
     <?php 

      if ($a->jornada9($id)){
      ?>
   
   <?php }else{?>
    <input type="radio"   value= "9"  name="nombrejornada" autocomplete="off"  required>9<br></div>
    <?php } ?>
     <?php 

      if ($a->jornada13($id)){
      ?>
   
   <?php }else{?>
    <input type="radio"   value= "13"  name="nombrejornada" autocomplete="off"  required>13<br></div>
    <?php } ?>
     <?php 

      if ($a->jornada17($id)){
      ?>
   
   <?php }else{?>
    <input type="radio"   value= "17"  name="nombrejornada" autocomplete="off"  required>17<br></div>
    <?php } ?>
   </td>
   <td>

     <?php 

      if ($a->jornada2($id)){
      ?>
   
   <?php }else{?>
    <input type="radio"   value= "2"  name="nombrejornada" autocomplete="off"  required>2<br></div>
    <?php } ?>
     <?php 

      if ($a->jornada6($id)){
      ?>
   
   <?php }else{?>
    <input type="radio"   value= "6"  name="nombrejornada" autocomplete="off"  required>6<br></div>
    <?php } ?>
     <?php 

      if ($a->jornada10($id)){
      ?>
   
   <?php }else{?>
    <input type="radio"   value= "10"  name="nombrejornada" autocomplete="off"  required>10<br></div>
    <?php } ?>
     <?php 

      if ($a->jornada14($id)){
      ?>
   
   <?php }else{?>
    <input type="radio"   value= "14"  name="nombrejornada" autocomplete="off"  required>14<br></div>
    <?php } ?>
     <?php 

      if ($a->jornada18($id)){
      ?>
   
   <?php }else{?>
    <input type="radio"   value= "18"  name="nombrejornada" autocomplete="off"  required>18<br></div>
    <?php } ?>
   
   </td>
   <td>
   <?php 

      if ($a->jornada3($id)){
      ?>
   
   <?php }else{?>
    <input type="radio"   value= "3"  name="nombrejornada" autocomplete="off"  required>3<br></div>
    <?php } ?>
     <?php 

      if ($a->jornada7($id)){
      ?>
   
   <?php }else{?>
    <input type="radio"   value= "7"  name="nombrejornada" autocomplete="off"  required>7<br></div>
    <?php } ?>
     <?php 

      if ($a->jornada11($id)){
      ?>
   
   <?php }else{?>
    <input type="radio"   value= "11"  name="nombrejornada" autocomplete="off"  required>11<br></div>
    <?php } ?>
     <?php 

      if ($a->jornada15($id)){
      ?>
   
   <?php }else{?>
    <input type="radio"   value= "15"  name="nombrejornada" autocomplete="off"  required>15<br></div>
    <?php } ?>
     <?php 

      if ($a->jornada19($id)){
      ?>
   
   <?php }else{?>
    <input type="radio"   value= "19"  name="nombrejornada" autocomplete="off"  required>19<br></div>
    <?php } ?>
   </td>
    <td>
   <?php 

      if ($a->jornada4($id)){
      ?>
   
   <?php }else{?>
    <input type="radio"   value= "4"  name="nombrejornada" autocomplete="off"  required>4<br></div>
    <?php } ?>
     <?php 

      if ($a->jornada8($id)){
      ?>
   
   <?php }else{?>
    <input type="radio"   value= "8"  name="nombrejornada" autocomplete="off"  required>8<br></div>
    <?php } ?>
     <?php 

      if ($a->jornada12($id)){
      ?>
   
   <?php }else{?>
    <input type="radio"   value= "12"  name="nombrejornada" autocomplete="off"  required>12<br></div>
    <?php } ?>
     <?php 

      if ($a->jornada16($id)){
      ?>
   
   <?php }else{?>
    <input type="radio"   value= "16"  name="nombrejornada" autocomplete="off"  required>16<br></div>
    <?php } ?>
     <?php 

      if ($a->jornada20($id)){
      ?>
   
   <?php }else{?>
    <input type="radio"   value= "20"  name="nombrejornada" autocomplete="off"  required>20<br></div>
    <?php } ?>   </td>
</table>
	</td>
	<tr>




<?php 



}
 ?>


 
 
<input type="hidden" name="torneo" value="<?php echo  $_GET['id'];?>"  class="form-control"  autocomplete="off"  required readonly>
 </div>
	 

	</td>


	


<tr>
	
<td colspan="3" align="right" style="padding-right:30px;"> <br>  <input class="btn btn-primary" type="submit" role="button" name="procesar" value="Procesar Registro"></td>	


</tr>


<tr>
  


<td>
  <?php
  $idtorneo = $_GET ['id'];
  echo "<a href='tipo_estadistica.php?id=$idtorneo' style='margin-left:20px;'><span class='glyphicon glyphicon-arrow-left' style='font-size:24px;'></span></a> <br><br>"
 
 ?>

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