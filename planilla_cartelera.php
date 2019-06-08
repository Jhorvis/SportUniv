
 
<!DOCTYPE html>

<?php @session_start();

if (!isset($_SESSION['nivel'])) header("location:index.php");

require("clases/claseusuario.php");

$a= new Usuarios();
include 'enlace.php';
$id = $_GET['id'];



 $sentencia = "SELECT * from regisjornadas WHERE id_encuentro = '$id'";
$query = mysql_query($sentencia);
$arreglo = mysql_fetch_array($query);

$idtorneo = $arreglo ['torneo'];



//$data=$a->ConsultarTorneos($_POST ['nombrequipo']);
 

$datas=$a->DatosJornada($_GET['id']);



 foreach ($datas as $r) {}


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



  <body onload="window.print(); window.close();"> 


 <?php
echo "<META http-equiv='refresh' content='0;URL=nuevo_registro_encuentro.php?id=$idtorneo'; >"
  ?>



<table width="100%">
	

<td><img src="img/logo-deportes.png" width="120"></td>



<td align="center">
<center><br>
Republica bolivariana de venezuela<br>
Instituto universitario de tecnologia READIC UNIR<br>
Coordinación de deportes<br><br><br>
</center>
</td>


<td><img src="img/logounir.png" width="120"></td>

	
</table>












<br>


<table width="100%" >
  	



<tr>
	



</tr>


 <?php foreach ($datas as $rs) { ?>


<tr>
	
<td><center><font size="12"><?php echo $rs->nombrejornada;?></center></font></td>

</tr>




<tr>
	
<td><center><font size="12"><?php echo $rs->equipo_local;?></center></font></td>

</tr>

<tr>
<td> <?php echo " ";?> </td>
</tr>






<tr>
<td> <center><font size="12"> VS </font></td>
</tr>


<tr>
<td><center><font size="12"><?php echo $rs->equipo_visitante; ?></font></center></td>
</tr>

<tr>
<td> <?php echo " ";?> </td>
</tr>


<tr>
<td><center><font size="12"><?php echo $rs->dia;?></font></center></td>
</tr>

<tr>
<td>  <?php echo " ";?> </td>
</tr>


<tr>
<td><center><font size="12"><?php echo $rs->fechajornada;?></font></center></td>
</tr>

<tr>
<td> <?php echo " ";?> </td>
</tr>


<tr>
<td><center><font size="12"><?php echo $rs->hora;?></font></center></td>

</tr>

<?php } ?>



</table>





  </body>