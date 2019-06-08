<!DOCTYPE html>

<?php @session_start();

if (!isset($_SESSION['nivel'])) header("location:index.php");
if ($_SESSION['nivel'] != 1) header("location:home.php"); 
include ("enlace.php");

$id = $_GET['id'];


 $sentencia = "SELECT * from jornadas where torneo = $id ";
     $query = mysql_query ($sentencia);

 
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

$data=$a->Consultarjornada($_POST ['jornada'], $_GET ['id']);

foreach($data as $rr){}
 ?> 
 

<h3  ><span style="margin-left:20px;"class=" glyphicon glyphicon-search"  ><b style="font-family:bold;"> RESULTADO DE LA CONSULTA</b></span></h3>   
 
<br>
<div class="featurede"   > 
 


<?php

$jornada = $_POST['jornada'];

$sentencia2 = "SELECT * from regisjornadas where torneo = $id 
 and nombrejornada = $jornada and estatus = 0"; //consulta para equipo local

$sentencia3 = "SELECT * from regisjornadas where torneo = $id 
and nombrejornada = $jornada and estatus = 0"; // consulta para equipo visitante

?>

  <table width="100%">

<tr>  
  <th width="18%">
<b>Equipo Local:</b>
  </th>

<th width="18%">
<b>Equipo Visitante:</b>
  </th>

  <th width="18%">
<b>Ir ha partido:</b>
  </th>
</tr>



 <?php
      $query2 = mysql_query ($sentencia2);

while ($arreglo2 = mysql_fetch_array($query2)){ ?>

 
<tr>
 

<td  width="45%"> 
<input  type="text"   class="form-control" name="equipo_local"  autocomplete="off"  value = "<?php  echo $arreglo2 ['equipo_local'] ?>"  required readonly>

</td>


<td width="45%">  

<input  type="text"   class="form-control" name="equipo_local"  autocomplete="off"  value = "<?php  echo $arreglo2 ['equipo_visitante'] ?>"  required readonly>

</td>


<?php 

$arre =$arreglo2 ['id_encuentro'];


echo "<td align='center'><a href='ingresar-resultado.php?id=$arre';\"><img src='img/check_box.png' width='32' height='27'</a></td>";
  
?>



</tr>


<?php  } ?>


</table>
 


</div>

</div>
<?php if ( @$rr->nombrejornada){echo '
<div class="alert alert-success">
<a href="registro_resultados.php"><span class="glyphicon glyphicon-arrow-left"></span></a>

Consulta exitosa!

</div>';}else { ?>

<div class="alert alert-danger">

 <center> Esta jornada aun no posee encuentros definidos!</center>

</div>
<a href="registro_resultados.php"><span class="glyphicon glyphicon-arrow-left" style="font-size:24px;"></span></a> 



<?php } ?>

</div>
<br><br>

</div>




</div>








<?php
 
 
} else {

?>

 



<div class="featurede" align="center" > 


  
 
 


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
      <select class="form-control" name="jornada" required>
  
         <option value="">Seleccione</option>
            <?php

            while ($arreglo = mysql_fetch_array($query)){ ?>  
   
       <option value="<?php echo $arreglo ['nombrejornada']?>"><?php echo $arreglo ['nombrejornada']?><hr></option>

       <?php } ?>
       </select>
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
