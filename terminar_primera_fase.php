<!DOCTYPE html>

<?php @session_start();

if (!isset($_SESSION['nivel'])) header("location:index.php");
if ($_SESSION['nivel'] != 1) header("location:home.php"); 


$id = $_GET['id'];



 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Unir</title>
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0">
 <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link href='http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,600,500,300,200,100' rel='stylesheet' type='text/css'>

<script src="plugins/jquery/jQuery-2.1.4.min.js"></script>

<script src="bootstrap/js/bootstrap.js"></script>

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

if ($_POST){


   include ("enlace.php");

  
 

require_once "clases/claseauditoria.php";
$audit=new auditoria();

if ($_SESSION['nivel']==1){

$admin = 'Administrador';

}

$audit->insauditoria($admin, $_SESSION['identidad'],"Finalizo la fase previa de un torneo", " Usuario: " .$_SESSION['user'], "".$_SERVER['REMOTE_ADDR']);

  
require_once "clases/claseusuario.php";

$a= new Usuarios();

$fase = 1;
$data=$a->actualizafasetorneo($_GET ['id'], $fase);


$a->actualizaposeliminatoria($_GET ['id']);



 echo"

<div align='center'>


<form method='post' action='registro_encuentro.php'>
  
<img src='img/futbol-bola-ajuste-jugador_318-43643.jpg' width='120'>

<br><br>

<div class='alert alert-success'>El registro ha sido eliminado con exito!</div>

<br><br><br>
 
<a href='nuevo_registro_encuentro.php?id=;\"> <input  class='btn btn-primary' value='Volver atras'></a>

<br><br><br>

</form>

</div> "; 

?> 
 

<?php }else{ ?>

<form method="post" action="">

<div class="alert alert-danger">

 <center> ¿Seguro desea finalizar la primera fase de este torneo?</center>

</div>
 

</td>

</tr>
<table width="100%" border="0"      style="background-color:#fff;">
<tr>
  

  <?php 
 

  ?>

 <td><center><input type ="submit" class="btn btn-primary" name="procesar" value="Si, Finalizar"></center></td>
</tr>

</table>

</div>

</form>
 
</td>

</tr>

</table>


 
<table width="100%" border="0"      style="background-color:#fff;">
  <tr>

<td>
  
  <a href="registro_resultados.php" style="margin-left:20px;"><span class="glyphicon glyphicon-arrow-left" style="font-size:24px;"></span></a> <br><br>
 
 

</td>


</tr>

</table>



   </div>


<?php  } ?>

 
<?php  include ("template/footer.php");?>







    
    </div>
    <!-- end of container -->
  </div>
  <!-- end of shell -->
</div>
<!-- end of wrapper -->
</body>
</html>























 



 

  </div>
   
   

   
   
   
   
   
   
</div>
    </div>     
      </div>     
    </div>    









 

  </div>
   
   

   
   
   
   
   
   
</div>
    </div>     
      </div>     
    </div>    
