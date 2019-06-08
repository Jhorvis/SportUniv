
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
<link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css">
<link rel="stylesheet" href="css/style.css" type="text/css" >
<link href='http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,600,500,300,200,100' rel='stylesheet' type='text/css'>
<script src="js/jquery-1.8.0.min.js"></script>
  
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



<div class="featurede" align="center" > 

 

<?php  

if ($_POST){
  
require("clases/claseusuario.php");
$p= new Usuarios();

 if ($p->VerificarCedula($_POST['cedula'])){
  
?>
 
 
<table width="100%"   height="300" >
  
<tr><td>
<br><center><img src="img/male_user_warning_256.png" width="120" ></center>
<p><br><center><h4>Esta CEDULA! ya se encuetra registrada.</h4></center></p> 
<br><br><center><a class="btn btn-primary" href="regestudiante.php"> Volver Interntar </a></center><br></td></tr>

</table>  
<br><br>
</div>

 

 
    
<?php 
  exit();
  
  }

 

 if ($p->VerificarCorreo($_POST['correo'])){
  
?>
 
<table width="100%"   height="300" >
  
<tr><td>
<br><center><img src="img/mail_notice-256.png" width="120" ></center>
<p><br><center><h4>Este CORREO! ya ha sido registrado.</h4></center></p> 
<br><br><center><a class="btn btn-primary" href="regestudiante.php"> Volver Interntar </a></center><br></td></tr>

</table>  
<br><br>
</div>

 

 
    
<?php 
  exit();
  
  }










$p->agregar(
      $_POST['nombre'],
      $_POST['apellido'],
      $_POST['cedula'],
      $_POST['telefono'],
      $_POST['carrera'],
      $_POST['correo']
      );

echo '   

 
   

 

<div class="modal-header">
<h4 class="modal-title"  >Confirmacion Exitosa!</h4>
</div>
<div class="modal-body">  
<p><h4 align="center">Informacion Almacenada Correctamente. <span class="glyphicon glyphicon-ok"></span></h4></p>
</div>

<div class="modal-footer">
<table width="100%"  height="340" >
<tr>

<td align="center"><a class="btn btn-primary" role="button"  href="home.php"  ><span class="glyphicon glyphicon-th"></span>
 Menu Principal</a></td>

 <td align="center"><a class="btn btn-primary" role="button"  href="regestudiante.php"  > Nuevo Registro <span class="glyphicon glyphicon-plus
">
</span></a></td>

</tr>
</table>
</div>

 
</div>
 
 
';

     
      }else {
?>    
<div style="background-color:#fff;" align="center" > 
 

<table width="100%" border="0"      style="background-color:#fff;">
  <tr>
    <td colspan="3"><h3  ><span style="margin-left:20px;"class="glyphicon glyphicon-search"  ><b style="font-family:bold;"> MODULO DE REGISTRO DE ESTUDIANTE</b></span></h3>   
 </td>

  </tr>

</table>


<form method="POST" action="#"  class="laberd"> 
 
 
 
 <table width="100%" height="200" >
   
<td>
  
 
<table width="100%" id="brde"  class="laberd" height="300">
  
<tr >

<td><label for="nombre"  >Nombres:</label></td><td><input  autofocus autocomplete="off" onkeypress="txNombres()" class="form-control" name="nombre" type="text" required></td>
<td><label for="apellido">Apellidos:</label></td><td><input  autocomplete="off" onkeypress="txNombres()" class="form-control" name="apellido" type="text" required></td>

</tr>


 
<tr>

<td><label for="cedula">Cedula:</label></td><td><input  autocomplete="off" onkeypress="ValidaSoloNumeros()" class="form-control" name="cedula" type="text"  required></td>
<td><label for="telefono">Telefono:</label></td><td><input  autocomplete="off" class="form-control" name="telefono" type="text"  onkeypress="ValidaSoloNumeros()" required></td>

</tr>


<tr>

<td><label for="Carrera">Carrera:</label></td>

<td>

<select name="carrera" class="form-control" style="height:34px; width:90%;" required>
  <option value="">Seleccione</option>
  <option value="Informatica">Informatica</option>
   <option value="Administración">Administración</option>
    <option value="Contabilidad Comp">Contabilidad Comp</option>
     <option value="Comercio Exterior">Comercio Exterior</option>
      <option value="Diseño de Modas">Diseño de Modas</option>  
        <option value="Publicidad y RR.PP">Publicidad y RR.PP</option>  
         <option value="Mercadotecnia">Mercadotecnia</option>  
          <option value="Turismo">Turismo</option>  
           <option value="Electrónica">Electrónica</option>  
            <option value="Diseño Gráfico">Diseño Gráfico</option>  
             <option value="Educ. Preescolar">Educ. Preescolar</option>  
               <option value="Psicopedagogía">Psicopedagogía</option>
      </select>

</td>

<td><label for="correo">Correo:</label></td><td><input autocomplete="off" class="form-control" name="correo" type="email" required></td>

</tr>

<tr>
  
<td colspan="4" align="right"><input class="btn btn-primary" type="submit" name="registrar" value="Procesar Registro" style="margin-right:30px;" ><br><br></td>

</tr>


</table>


</td>


 </table>

<table width="100%" border="0"      style="background-color:#fff;">
  <tr>

<td>
  
  <a href="moduloregistro.php" style="margin-left:20px;"><span class="glyphicon glyphicon-arrow-left" style="font-size:24px;"></span></a> <br><br>
 
 

</td>


</tr>

</table>

<?php } ?>



 </form>
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