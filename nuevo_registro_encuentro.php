
<!DOCTYPE html>

<?php @session_start();
 

if (!isset($_SESSION['nivel'])) header("location:index.php");

//require("clases/claseusuario.php");

//$a= new Usuarios();
  
include ("enlace.php");
$id = $_GET['id'];

$sentencia = "select * from regisequipo where torneo = $id ";
     $query = mysql_query ($sentencia);

$sentencia2 = "select * from regisequipo where torneo = $id ";
     $query2 = mysql_query ($sentencia2);
 


 $sentencia3 = "SELECT * from jornadas where torneo = $id order by nombrejornada asc ";
     $query3 = mysql_query ($sentencia3);


 
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





if ($a->verificarfase1torneo2($id)){
?>
<table width="100%"   height="300" >
  
<tr><td>
<br><center><img src="img/User_with_strange_head.svg" width="120" ></center>
<p><br><center><h4>Ya esta fase del torneo <span style="color:red">Finalizó.</span> 
 para cuadrar los resultados de cuartos, semis y final dirigase al modulo de 'Eliminatorias'
 que se encuentra en el menu del torneo </center></p> 
<br><br><center><a class="btn btn-primary" href="inscrequipo.php">Atras</a></center><br></td></tr>

</table>  
<br><br>
</div>
 

 </div></div></div>

<?php
  exit();
}
?>



<?php 
if ($_POST){
  


if ($_POST ['equipo_local'] == $_POST ['equipo_visitante']){
?>
<table width="100%"   height="300" >
  
<tr><td>
<br><center><img src="img/User_with_strange_head.svg" width="120" ></center>
<p><br><center><h4><span style="color:red">ERROR!</span> un equipo no puede enfrentarse  <span style="color:red">A SI MISMO.</span> </h4></center></p> 
<br><br><center><a class="btn btn-primary" href="registro_encuentro.php">Intentar de Nuevo</a></center><br></td></tr>

</table>  
<br><br>
</div>
 

 </div></div></div>
    
<?php 
  exit();
  
  }
if ($a->equirepetidojornada($_POST['equipo_local'],$_POST["nombrejornada"], $id)){?>



<table width="100%"   height="300" >
  
<tr><td>
<br><center><img src="img/User_with_strange_head.svg" width="120" ></center>
<p><br><center><h4><span style="color:red">ERROR!</span> uno de los equipo que selecciono
ya tiene un encuentro pautado en esta jornada, para continuar debe elegir otra jornada
 
<br><br><center><a class="btn btn-primary" href="registro_encuentro.php">Intentar de Nuevo</a></center><br></td></tr>

</table>  
<br><br>
</div>
 

 </div></div></div>









<?php
exit();
}
 if ($a->equirepetidojornada2($_POST['equipo_visitante'],$_POST["nombrejornada"], $id)){?>



<table width="100%"   height="300" >
  
<tr><td>
<br><center><img src="img/User_with_strange_head.svg" width="120" ></center>
<p><br><center><h4><span style="color:red">ERROR!</span> uno de los equipo que selecciono
ya tiene un encuentro pautado en esta jornada, para continuar debe elegir otra jornada
 
<br><br><center><a class="btn btn-primary" href="registro_encuentro.php">Intentar de Nuevo</a></center><br></td></tr>

</table>  
<br><br>
</div>
 

 </div></div></div>









<?php
exit();
}
 if ($a->equirepetidojornada3($_POST['equipo_visitante'],$_POST["nombrejornada"],$id)){?>



<table width="100%"   height="300" >
  
<tr><td>
<br><center><img src="img/User_with_strange_head.svg" width="120" ></center>
<p><br><center><h4><span style="color:red">ERROR!</span> uno de los equipo que selecciono
ya tiene un encuentro pautado en esta jornada, para continuar debe elegir otra jornada
 
<br><br><center><a class="btn btn-primary" href="registro_encuentro.php">Intentar de Nuevo</a></center><br></td></tr>

</table>  
<br><br>
</div>
 

 </div></div></div>









<?php
exit();
}

if ($a->equirepetidojornada4($_POST['equipo_local'],$_POST["nombrejornada"],$id)){?>



<table width="100%"   height="300" >
  
<tr><td>
<br><center><img src="img/User_with_strange_head.svg" width="120" ></center>
<p><br><center><h4><span style="color:red">ERROR!</span> uno de los equipo que selecciono
ya tiene un encuentro pautado en esta jornada, para continuar debe elegir otra jornada
 
<br><br><center><a class="btn btn-primary" href="registro_encuentro.php">Intentar de Nuevo</a></center><br></td></tr>

</table>  
<br><br>
</div>
 

 </div></div></div>









<?php
exit();
}
include 'enlace.php';
$estatus = 0;
$equipo_local = $_POST['equipo_local'];
$equipo_visitante= $_POST['equipo_visitante'];

$sentencial = "SELECT * from regisequipo WHERE nombrequipo ='$equipo_local'";
$queryl = mysql_query($sentencial);
$arreglol = mysql_fetch_array($queryl);
$identidadl = $arreglol['identidad'];

$sentenciala = "SELECT * from usuario WHERE identidad ='$identidadl'";
$queryla = mysql_query($sentenciala);
$arreglola = mysql_fetch_array($queryla);
$identidadla = $arreglola['user'];


$sentenciav = "SELECT * from regisequipo WHERE nombrequipo ='$equipo_visitante'";
$queryv = mysql_query($sentenciav);
$arreglov = mysql_fetch_array($queryv);
$identidadv = $arreglov['identidad'];

$sentenciavb = "SELECT * from usuario WHERE identidad ='$identidadv'";
$queryvb = mysql_query($sentenciavb);
$arreglovb = mysql_fetch_array($queryvb);
$identidadvb = $arreglovb['user'];

$mensaje = "El proximo compromiso de su equipo fue pautado para
el dia . ".$_POST['dia']." ".$_POST['fechajornada']." a las
  ".$_POST['hora']." <br> <br>
".$_POST['equipo_local']." VS  ".$_POST['equipo_visitante']."";

$a->enviarmensaje2(

  $_SESSION['nombre'], 
  $identidadla, 
  $mensaje, 
  $estatus,
  $_POST['asunto']
  );

$a->enviarmensaje3(

  $_SESSION['nombre'], 
  $identidadvb, 
  $mensaje, 
  $estatus,
   $_POST['asunto']
  );

$a->regisjornadas (

	$_POST ['nombrejornada'],
	$_POST ['fechajornada'],
	$_POST ['torneo'],
    $_POST ['equipo_local'],
	$_POST ['equipo_visitante'],
    $_POST ['dia'],
	$_POST ['hora']
); ?>
 
<?php


echo'

<div align="center">


<form method="post" action="registro_encuentro.php">
	
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


<input name="asunto" value="Próximo encentro de tu equipo!" type="hidden">






<table width="100%" border="0"      style="background-color:#fff;">
  <tr>
    <td colspan="3"><h3  ><span style="margin-left:20px;"   ><b style="font-family:bold;"><center>REGISTRAR JORNADAS</center></b></span></h3>   
</td>

  </tr>

</table>





<table width="100%" border="0"    height="240" style="background-color:#fff;">
  

<tr    >
  
	<td width="20%">

	<div class="input-group"><b><center>Seleccione la jornada:</center></b><br>
	<select class="form-control" name="nombrejornada" required>
  
         <option value="">Seleccione</option>
            <?php

            while ($arreglo3 = mysql_fetch_array($query3)){ ?>  
   
       <option value="<?php echo $arreglo3 ['nombrejornada']?>"><?php echo $arreglo3 ['nombrejornada']?><hr></option>

       <?php } ?>
       </select> 
</tr>
	</td>

	<tr>
<td width="20%">

	<div class="input-group"><b><center>Equipo Local:</center></b><br>
	<select class="form-control" name="equipo_local" required>
  
  <option value="">Seleccione</option>
	 <?php
 
   while ($arreglo = mysql_fetch_array($query)){ ?>  
   
<option value="<?php echo $arreglo ['nombrequipo']?>"><?php echo $arreglo ['nombrequipo']?></option>


<?php } ?>

	</td>
<td width="20%">

	<div class="input-group"><b><center>Equipo Visitante:</center></b><br>

	<select class="form-control" name="equipo_visitante" required>
  
  <option value="">Seleccione</option>
	 <?php
 
   while ($arreglo2 = mysql_fetch_array($query2)){ ?>  
   
<option value="<?php echo $arreglo2 ['nombrequipo']?>"><?php echo $arreglo2 ['nombrequipo']?></option>


<?php } ?>

	</td>


	<td width="20%">

	<div class="input-group"><b><center>Fecha:</center></b><br>
	
<input type="date"   class="form-control" name="fechajornada"  autocomplete="off"  required></div>
	 

	</td>

<td width="20%">

	<div class="input-group"><b><center>Dia:</center></b><br>
	
	<select class="form-control" name="dia">
  
  <option value="">Seleccione</option>
  <option value="Lunes">Lunes</option>
  <option value="Martes">Martes</option>
  <option value="Miercoles">Miercoles</option>
  <option value="Jueves">Jueves</option>
  <option value="Viernes">Viernes</option>
  <option value="Sábado">Sábado</option>

	</td>
<td width="20%">

	<div class="input-group"><b><center>Hora:</center></b><br>
	<center><select class="form-control" name="hora" required>
  
  <option value="">Seleccione</option>
  <option value="">Diurno</option>
  <option value="11:30 AM">11:30 AM</option>
  <option value="11:45 AM">11:45 AM</option>
  <option value="12:00 PM">12:00 PM</option>
  <option value="12:15 PM">12:15 PM</option>
  <option value="12:30 PM">12:30 PM</option>
  <option value="12:45 PM">12:45 PM</option>
  <option value="01:00 PM">01:00 PM</option>
  <option value="01:15 PM">01:15 PM</option>
  <option value="01:30 PM">01:30 PM</option>
  <option value="01:45 PM">01:45 PM</option>
  <option value="02:00 PM">02:00 PM</option>
  <option value="">Nocturno</option>
   <option value="04:00 PM">04:00 PM</option>
  <option value="04:15 PM">04:15 PM</option>
  <option value="04:30 PM">04:30 PM</option>
  <option value="04:45 PM">04:45 PM</option>
  <option value="05:00 PM">05:00 PM</option>
  <option value="05:30 PM">05:30 PM</option>
  <option value="05:45 PM">05:45 PM</option>
  <option value="06:00 PM">06:00 PM</option>
  <option value="06:30 PM">06:30 PM</option>
  <option value="07:00 PM">07:00 PM</option>
	</td>

</select></center>




</tr>
 
 
<input type="hidden" name="torneo" value="<?php echo  $_GET['id'];?>"  class="form-control"  autocomplete="off"  required readonly>
 </div>
	 

	</td>


	


<tr>
	
<td colspan="3" align="right" style="padding-right:30px;"> <br>  <input class="btn btn-primary" type="submit" role="button" name="procesar" value="Procesar Registro"></td>	


</tr>



<td>

<?php 
$sentencia4 = "SELECT * from regisjornadas WHERE torneo = $id and estatus =0 order by nombrejornada ASC";
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
<th>Equipo Local </th>

<th></th>

<th>Equipo Visitante</th>

<th>Dia</th>

<th>Fecha</th>

<th>Hora</th>
<th>Resultado</th>
<th>Eliminar</th>
<th>Mesa Tec.</th>
<th>Cartelera</th>

</tr>

<?php while ($arreglo4 = mysql_fetch_array($query4)) {?>

<tr>
  <td><center> <?php  echo $arreglo4['nombrejornada'];  ?></center> </td>

<td> <?php  echo $arreglo4['equipo_local'];  ?> </td>

<td> <center>Vs</center> </td>


  

<td> <?php  echo $arreglo4['equipo_visitante'];  ?> </td>
<td> <?php  echo $arreglo4['dia'];  ?> </td>
<td> <?php  echo $arreglo4['fechajornada'];  ?> </td>
<td> <?php  echo $arreglo4['hora'];  ?> </td>
<td><?php 

$arre =$arreglo4 ['id_encuentro'];


echo "<center><a href='ingresar-resultado.php?id=$arre';\"><img src='img/check_box.png' width='32' height='27'</a></center>";
  
?></td>
<td><?php 




echo "<center><a href='eliminar_encuentro.php?id=$arre';\"><img src='img/deleted.png' width='32' height='27'</a></center>";
  
?></td>

<td><?php 




echo "<center><a href='planilla_mesa_tecnica.php?id=$arre';\"><img src='img/planillafundtkdsur.png' width='32' height='27'</a></center>";
  
?></td>

<td><?php 




echo "<center><a href='planilla_cartelera.php?id=$arre';\"><img src='img/impress.png' width='32' height='27'</a></center>";
  
?></td>
</tr>

<?php
  }



?>
</table>





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


 <?php 


}

 ?>


<?php  include ("template/footer.php");?>







    
    </div>
    <!-- end of container -->
  </div>
  <!-- end of shell -->
</div>
<!-- end of wrapper -->
</body>
</html>