
<!DOCTYPE html>

<?php @session_start();

if (!isset($_SESSION['nivel'])) header("location:index.php");
if ($_SESSION['nivel'] != 1) header("location:home.php"); 

if (isset($_POST ['procesar'])){
require_once 'clases/claseusuario.php';

$a = new Usuarios ();

$a->agregarArticulo (

        $_POST ['articulo'],
        $_POST ['seriales'],
        $_POST ['marca'],
        $_POST ['modelo'],
        $_POST ['existencia']
     
  );
?>


   
<script type="text/javascript">
window.onload=function(){alert('Registrado! con exito');}
 
</script>
 
<META HTTP-EQUIV=Refresh CONTENT="0; URL=registro-inventario.php">


<?php 
}





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
  	<td colspan="3"><h3  ><span style="margin-left:20px;"  ><b style="font-family:bold;">REGISTRO DE INVENTARIO</b></span></h3>   
</td>

  </tr>

</table>





 <div class="row">
   
<form method="POST" action=""> 
<br> 
 

<div class="col-sm-4">

<label class="col-xs-3">Articulo</label>

<input name="articulo" type="text" class="form-control" required>
 
</div>


<div class="col-sm-4">
<label class="col-xs-3">Serial</label>

<input name="seriales" type="text" class="form-control" required>
</div>


<div class="col-sm-4">
<label class="col-xs-3">Marca</label>

<input name="marca" type="text" class="form-control" required>
</div>

<br><br>
<br><br>

<div class="col-sm-4">
<label class="col-xs-3">Modelo</label>

<input name="modelo" type="text" class="form-control" required>
</div>


<div class="col-sm-4">
<label class="col-xs-3">Existencia</label>

<input name="existencia" type="text" class="form-control" required>
</div>



<div class="col-sm-4">
<br>
<button name="procesar" type="submit" class="btn btn-primary">Procesar Registro</button>

</div>


<br><br>
<br><br>
<br><br>




 </div>


 
</form>



 </div>






 
 



 
<table width="100%" border="0"      style="background-color:#fff;">
  <tr>

<td>
  
  <a href="moduloregistro.php" style="margin-left:20px;"><span class="glyphicon glyphicon-arrow-left" style="font-size:24px;"></span></a> <br><br>
 
 
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