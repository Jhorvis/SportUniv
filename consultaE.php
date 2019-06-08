
<!DOCTYPE html>

<?php @session_start();

if (!isset($_SESSION['nivel'])) header("location:index.php");
if ($_SESSION['nivel'] != 1) header("location:home.php"); 
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
 




<script type="text/javascript">

function ValidaSoloNumeros() {
 if ((event.keyCode < 48) || (event.keyCode > 57)) 
  event.returnValue = false;
}

function txNombres() {
 if ((event.keyCode != 32) && (event.keyCode < 65) || (event.keyCode > 90) && (event.keyCode < 97) || (event.keyCode > 122))
  event.returnValue = false;
} 

</script>

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

if (@$_POST['buscar']){

require_once "clases/claseusuario.php";

$a= new Usuarios();

$data=$a->ConsultarList($_POST ['search']);

foreach($data as $rr){}
 ?> 
 

<h3  ><span style="margin-left:20px;"class=" glyphicon glyphicon-search"  ><b style="font-family:bold;"> RESULTADO DE LA CONSULTA</b></span></h3>   
 
<br>
<div class="featurede"   > 

<table width="100%"    class="table table-bordered">


<tr> 

<th width="33%">Nombre</th><th width="33%">Apellido</th><th width="33%">Cedula</th><th rowspan="4">Modificar<br><br>

<?php 

if (@$rr->cedula){ 

echo "<a href='modificar_estudiante.php?id=$rr->idregistro';\"><img src='img/Harwen-Pleasant-Text-Document.ico' width='60' </a>";
  ?>



<?php } ?>

</th><th  rowspan="4">Eliminar <br><br>

<?php if (@$rr->cedula){ 
echo "<a href='eliminar_estudiante.php?id=$rr->idregistro';\"><img src='img/open_folder_delete_256.png' width='60' </a>";
?>
<?php } ?>

</th>

</tr>


<tr> 

<td><?php echo @$rr->nombre;?></td><td><?php echo @$rr->apellido;?></td><td><?php echo @$rr->cedula;?></td>

</tr>


<tr> 

<th>Telefono</th><th>Carrera</th><th>Correo</th> 


</tr>


<tr> 

<td><?php echo @$rr->telefono;?></td><td><?php echo @$rr->carrera;?></td><td><?php echo @$rr->correo;?></td>

</tr>

 
</table><br>



<h3>Prestamos de Articulos 
<a  id='btnt'   data-toggle='modal' data-target='#myModal12' class="btn btn-primary" role='button' name='Agregar'> Agregar </a>

<a  id='btnt'   data-toggle='modal' data-target='#myModal13' class="btn btn-primary" role='button' name='Devolucion'> Devolucion </a>



</h3>
 

<table class="table  table-bordered">
  

<thead>
  
<th>Articulo</th>
<th>Serial</th>
<th>Marca</th>
<th>Modelo</th>
<th width="20%">Articulo de Prestamo</th>
<th>Fecha</th>

</thead>

<?php 


require_once "clases/claseusuario.php";

$a= new Usuarios();

$data=$a->ConsuListaEstudiante(-1);
 
foreach($data as $rv){
  
?>

<tbody>
  
<td><?php echo $rv->articulo; ?></td>
<td><?php echo $rv->seriales; ?></td>
<td><?php echo $rv->marca; ?></td>
<td><?php echo $rv->modelo; ?></td>
<td><?php echo $rv->existencia; ?></td>
<td><?php echo $rv->fecha; ?></td>

</tbody>


<?php } ?>



</table>



<br> 





<h3>Pago de Cuota del Gimnasio 
<a  id='btnt'   data-toggle='modal' data-target='#myModal14' class="btn btn-primary" role='button' name='agregar'> Agregar </a><br><br>
<?php
include 'enlace.php';
$cedula = $_POST['search'];

$data = mysql_query("SELECT * from pagogym where cedula='$cedula' order by idgym DESC");



?>

<table class="table  table-bordered ">
  

<thead>
<tr>
<th width="25%">Ultimo mes cancelado</th>
<th width="25%">Factura</th>
<th width="25%">Monto Cancelado</th>
<th width="25%">Periodo</th>
</tr>
</thead>

<?php
while ($result = mysql_fetch_array($data)) { ?>
<tbody> 
<?php
 
echo"<td>".  $result['mes']."</td>";
echo"<td>".  $result['factura']."</td>";
echo"<td>".  $result['pago']."</td>";
echo"<td>".  $result['periodo']."</td>";

?>
</tbody>
<?php } ?>


</table>


<br><br>
<div align="left">

<?php if ( @$rr->nombre){echo '
<div class="alert alert-success">
<a href="consultaE.php"><span class="glyphicon glyphicon-arrow-left"></span></a>

Consulta exitosa!

</div>';}else { ?>

<div class="alert alert-danger">

 <center> El estudiante no se encuentra registrado en la base de datos!</center>

</div>

<a href="consultaE.php"><span class="glyphicon glyphicon-arrow-left" style="font-size:24px;"></span></a> 



<?php } ?>

</div>
<br><br>

</div>




</div>








<?php
 
 
} else {

?>

 



<div class="featurede" align="center" > 


<table width="100%" height="260"  >
  
 
 


<tr valign="top">


<td width="100%"  >



 



<table width="100%" border="0"      style="background-color:#fff;">
  <tr>
    <td colspan="3"><h3  ><span style="margin-left:20px;"class="glyphicon glyphicon-search"  ><b style="font-family:bold;"> MODULO DE CONSULTA</b></span></h3>   
 </td>

  </tr>

</table>



<form method="post" action="">


<div style="background-color:#fff;" align="center" > 

<table width="80%" border="0" height="300" >

<tr >
 
<td >
   
<img src="img/error.jpg" width="220">
 
</td>
 
 <td  >   
    <div class="input-group  "  >
      <input type="text" name="search"  onkeypress="ValidaSoloNumeros()" maxlength="8" autofocus required class="form-control" placeholder="Buscador...">
      <span class="input-group-btn">
        <button    name="buscar" type="submit" value="Buscador" class="btn btn-primary">Buscador</button>
      </span>
    </div>
  </div>
 

</td>

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
  
  <a href="home.php" style="margin-left:20px;"><span class="glyphicon glyphicon-arrow-left" style="font-size:24px;"></span></a> <br><br>
 
 

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























 

<style>
  
.scol{
    width: auto;
    height:380px;
    overflow: scroll;
}

.modal-dialog{

   width: 768px;
}




</style>



<div class="modal fade  " id="myModal12" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
   <div  class="modal-dialog"  >
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h5 class="modal-title" id="myModalLabel">Listado de Articulo.</h5>
     <br />
     
   <div class="scol"> 

<table width="100%" .scrol  class="table table-hover" >
    <tr  >
      <th>Articulos</th>
         <th>Serial</th>
      <th>Marca</th>
           <th>Modelo</th>
           <th>Existencia</th>
            <th>Asignar Articulo</th>
           
    </tr>
    
    

<?php
  
require_once "clases/claseusuario.php";

$a= new Usuarios();

$data=$a->ConsuLista(-1);
 
foreach($data as $r){
  
    echo "<tr>";
    echo "<td>". $r->articulo. "</td>";
    echo "<td>". $r->seriales. "</td>";
    echo "<td>". $r->marca. "</td>";
    echo "<td>". $r->modelo. "</td>";
    echo "<td>". $r->existencia. "</td>";
    echo "<td width='20%'><a name='proce' class='btn btn-primary'  href='agregar-articulo.php?id=$r->idarticulos';\">Aceptar</a></td>";
    echo "</tr>";

    }
    
foreach($data as $rsv){}

if (@$rsv->articulo){ }else {echo "<tr>";
    echo "<td colspan='6'>No hay articulo por devolver!</td>";
   echo "</tr>";  }
   echo "</table>"; 


    
    echo "</table>"; 

 
?>
  </div>
   
   

   
   
   
   
   
   
</div>
    </div>     
      </div>     
    </div>    









































<div class="modal fade  " id="myModal13" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
   <div  class="modal-dialog"  >
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h5 class="modal-title" id="myModalLabel">Listado de Articulo.</h5>
     <br />
     
   <div class="scol"> 

<table width="100%" .scrol  class="table table-hover" >
    <tr  >
      <th>Articulos</th>
         <th>Serial</th>
      <th>Marca</th>
           <th>Modelo</th>
           <th>Existencia</th>
            <th>Asignar Articulo</th>
           
    </tr>
    
    

<?php
  
require_once "clases/claseusuario.php";

$a= new Usuarios();

$data=$a->ConsuListaEstudiante(-1);
 

foreach($data as $r){
  
    echo "<tr>";
    echo "<td>". $r->articulo. "</td>";
    echo "<td>". $r->seriales. "</td>";
    echo "<td>". $r->marca. "</td>";
    echo "<td>". $r->modelo. "</td>";
    echo "<td>". $r->existencia. "</td>";
    echo "<td width='20%'><a name='proce' class='btn btn-primary'  href='devolucion-articulo.php?id=$r->idarticulos';\">Aceptar</a></td>";
    echo "</tr>";

    }
    



foreach($data as $rsv){}

if (@$rsv->articulo){ }else {echo "<tr>";
    echo "<td colspan='6'>No hay articulo por devolver!</td>";
   echo "</tr>";  }
   echo "</table>"; 







 
?>
  </div>
   
   

   
   
   
   
   
   
</div>
    </div>     
      </div>     
    </div>    
















































<div class="modal fade  " id="myModal14" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
   <div  class="modal-dialog"  >
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h5 class="modal-title" id="myModalLabel">Pago de Cuota del Gimnasio.</h5>
     <br />
     
   <div class="scol"> 

<table width="100%" .scrol  class="table table-hover" >
    <tr  >
<th>periodo academico</th>
 
<th>Asignar Periodo</th>
    </tr>
    
    

<?php
 
require_once "clases/claseusuario.php";

$a= new Usuarios();

$data=$a->fPeriodo(-1);
 
foreach($data as $rew){
  
    echo "<tr>";
    echo "<td>". $rew->nombreacademico. "</td>";
 
    echo "<td width='20%'><a name='proce' class='btn btn-primary'  href='ingresar-pago.php?id=$rew->idperiodo&cedu=$rr->cedula';\">Aceptar</a></td>";
    echo "</tr>";

    }
    
foreach($data as $rsv){}

if (@$rsv->articulo){ }else {echo "<tr>";
    echo "<td colspan='6'>No hay articulo por devolver!</td>";
   echo "</tr>";  }
   echo "</table>"; 


    
    echo "</table>"; 

 
?>
  </div>
   
   

   
   
   
   
   
   
</div>
    </div>     
      </div>     
    </div>    