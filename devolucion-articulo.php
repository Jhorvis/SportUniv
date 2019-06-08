
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
<script src="js/jquery-1.8.0.min.js"></script>
 <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css">

  <link rel="stylesheet" href="font/css/font-awesome.css" type="text/css">

<link href="img/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
<script src="js/jquery.carouFredSel-5.5.0-packed.js"></script>
<script src="js/functions.js"></script>

<script src="font/css/font-awesome.min"></script>

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


<div class="featurede"   > 

<table width="100%" height="320" class="table ">
  
<tr valign="top">
 


<td  >

<div class="row">
  

<?php 

require_once "clases/claseusuario.php";

$a= new Usuarios();

$data=$a->ConsuListasDevolcuiones($_GET ['id']);


$datas=$a->ConsuListase($_GET ['id']);

foreach($datas as $rs){}

echo "Articulos Asignado";
echo "<br><br>";


 
foreach($data as $r){}

?>


<table width="90%"   class="table table-hover" >
    <tr  >
      <th>Articulos</th>
         <th>Serial</th>
      <th>Marca</th>
           <th>Modelo</th>
           <th width="20%">Articulos Asignado</th>
                   
    </tr>

    <?php 
    echo "<tr>";
    echo "<td>". $r->articulo. "</td>";
    echo "<td>". $r->seriales. "</td>";
    echo "<td>". $r->marca. "</td>";
    echo "<td>". $r->modelo. "</td>";
    echo "<td>". $r->existencia. "</td>";
    echo "</tr>"; 

    echo "</table>"; 

    


if (isset($_POST ['procesar'])){
require_once 'clases/claseusuario.php';

$a = new Usuarios ();

$a->DevolverArticulo (
        $_POST ['idarticulos']

  );


$a->DevolverArticuloResto (
        $_POST ['idarticulos']

  );


?>

 
<script type="text/javascript">
window.onload=function(){alert('Registrado! con exito');}
 
</script>
 
<META HTTP-EQUIV=Refresh CONTENT="0; URL=devolucion-articulo.php?id=<?php echo $_GET ['id'];?>">


<?php 
}


?>



<form method="POST" action="">

<input name="sumar" value="<?php echo $rs->existencia;?>" type="hidden">
 <input name="idarticulos" type="hidden" value="<?php echo $r->idarticulos;?>">
<input name="articulo" value="<?php echo $r->articulo;?>" type="hidden">
<input name="seriales" value="<?php echo $r->seriales;?>" type="hidden">
<input name="marca" value="<?php echo $r->marca;?>" type="hidden">
<input name="modelo" value="<?php echo $r->modelo;?>"type="hidden">
 
<input name="existencia" value="<?php echo $r->existencia;?>" type="hidden">


<br>

 

 
<table width="100%"  >

<td  align="center">

<table width="40%"  >

<td >

<center>
<img src="img/planillafundtkdsur.png" width="64"><br>
<br>

 </center>
<input name="emprestar" type="number" class="form-control" placeholder="Devolver articulos..."> <br>
<center><button name="procesar" type="submit" class="btn btn-primary">Procesar Registro</button></center>
 
</td>

</table>


</td>

</table>

 

</form>


 



 


</div>







</td>



</tr>

</table>

   </div>






        
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