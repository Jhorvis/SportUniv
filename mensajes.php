
<!DOCTYPE html>

<?php @session_start();

if (!isset($_SESSION['nivel'])) header("location:index.php");


require("clases/claseusuario.php");

$a= new Usuarios();
$data=$a->VerNotificacionesUsuario($_SESSION['user']);


foreach ($data as $re) {}


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




<div class="featurede" align="center"  > 

 
<table width="100%" border="0"      style="background-color:#fff;">
  <tr>
    <td colspan="3"><h3  ><span style="margin-left:20px;"  ><b style="font-family:bold;"> MENSAJERIA Y NOTIFICACIONES</b></span></h3>   
</td>

  </tr>

</table>

 <div   style="background-color:#fff;" > 

<table  width="90%"  height="300"  >

<td valign="top" >


<?php 

if (@$re->destino){}else{ ?>


<br><br><br><br>
<div class="alert alert-info">
  <center>
No hay Mensajes en la bandeja!

</center>

</div>
 






<?php }



?>








<table   width="100%" class="table table-bordered table-striped" >
  
<thead>
<tr>
                        <th width="20%">Fecha / Hora</th>
                        <th width="1%">De:</th>
                        <th >Asunto</th>

 </tr >
</thead>
   <tbody>
    <?php



foreach ($data as $rr) {
  
 

  
    echo "<tr>";
  
    echo "<td>". $rr->fecha. " / " .$rr->hora. "</td>";
    echo "<td>". $rr->origen. " </td>";
    if (($rr->estatus) == 0 ){
    echo "<td><a href='notificaciones2.php?id=$rr->idmensaje'><font color='111'><b>". $rr->asunto. "</b></font></a> <font color='green'><b> | Nuevo</b></font> </td>";
    }else {
     echo "<td> <a href='notificaciones2.php?id=$rr->idmensaje'><font color='111'>". $rr->asunto. " <font color='#888';> | Leído</b></font> </td>";
    }

    echo "</tr>";
?> 
</tr>
<?php } ?>

  </tbody>
</table>



<tr><td colspan="3"><hr></td></tr>





</table>
 
 </td>

 </table>



</div>



 
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