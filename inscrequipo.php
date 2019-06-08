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




if ($p->VerificarUsuarioINS($_POST['user'])){
  
?>
 

<table width="100%"   height="300" >
  
<tr><td>
<br><center><img src="img/User_with_strange_head.svg" width="120" ></center>
<p><br><center><h4>Ya este <span style="color:red">USUARIO!</span> se encuentra <span style="color:red">REGISTRADO.</span> </h4></center></p> 
<br><br><center><a class="btn btn-primary" href="inscrequipo.php">Intentar de Nuevo</a></center><br></td></tr>

</table>  
<br><br>
</div>
 

 </div></div></div>
    
<?php 
  exit();
  
  }
  if ($_POST['pass'] != $_POST['repass']){
  
?>
 

<table width="100%"   height="300" >
  
<tr><td>
<br><center><img src="img/User_with_strange_head.svg" width="120" ></center>
<p><br><center><h4> <span style="color:red"></span> Las contraseñas <span style="color:red">NO COINCIDEN.</span> </h4></center></p> 
<br><br><center><a class="btn btn-primary" href="inscrequipo.php">Intentar de Nuevo</a></center><br></td></tr>

</table>  
<br><br>
</div>
 

 </div></div></div>
    
<?php 
  exit();
  
  }






$p->apertura(
      $_POST['nombre'],
      $_POST['apellido'],
      $_POST['correo'],
      $_POST['telefono'],
      $_POST['cedula'],
      $_POST['carrera'],
      $_POST['user'],
      $_POST['pass'],
      $_POST['notificacion']
      );

$p->inscrequipoREG(
      $_POST['cedula'],
      $_POST['nombre'],
      $_POST['user'],
      $_POST['pass'],
      $_POST['nivel'] 
 
      );







echo '   

 
  <br><br>
 
 <div class="shell">
 

 

<div class="modal-header" align="left"> <br><br>


<h4 class="modal-title"  >Confirmacion Exitosa!</h4>
</div>
<div class="modal-body">  
<p><h4 align="center">Informacion Almacenada Correctamente. <span class="glyphicon glyphicon-ok"></span></h4></p>
</div>

<div class="modal-footer">
<table width="100%"  height="270" >
<tr>

<td align="center"><a class="btn btn-primary" role="button"  href="index.php"  ><span class="glyphicon glyphicon-th"></span>
 Menu Principal</a></td>

 <td align="center"><a class="btn btn-primary" role="button"  href="login.php"  > Iniciar sesión <span class="glyphicon glyphicon-plus
">
</span></a></td>

</tr>
</table>
</div>

 
</div> 
 
 
';


          }else {
?>    



  
 <div align="left"> 
  
<h4 style="margin-left:1%;"><span class="glyphicon glyphicon-tag"></span> Complejo Deportivo <span  style="color:blue;"><b>UNIR</b></span> <img src="img/IconoDeporte.png" width="32"> </h4>  

</div>

<div  >

<table width="100%">
  <td>
    


<form method="POST" action=""> 
  
<input value="2" name="nivel" type="hidden"> 



 
 <table width="100%" height="420">
   

 

<tr>

<td><label for="nombre">Nombres</label></td><td width="30%"><input   autocomplete="off" onkeypress="txNombres()"class="form-control" name="nombre" type="text" required></td>
<td><label for="apellido">Apellidos</label></td><td><input autocomplete="off" onkeypress="txNombres()"class="form-control" name="apellido" type="text" required></td>

</tr>


 
<tr>

<td><label for="edad">correo</label></td><td><input placeholder="nombre@ejemplo.com" class="form-control"  autocomplete="off"  name="correo" type="email"  required></td>
<td><label for="telefono">Telefono</label></td><td><input maxlength="11" class="form-control"  autocomplete="off" onkeypress="ValidaSoloNumeros()" name="telefono" type="text" required></td>

</tr>


<tr>

<td><label for="cedula">Cedula</label></td><td><input maxlength="8" class="form-control" autocomplete="off" onkeypress="ValidaSoloNumeros()" name="cedula" type="text" required></td>



<td><label for="carrera">Carrera</label></td><td>
  

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

</tr>


<tr>

<td><label for="user">Usuario</label></td><td><input class="form-control"  autocomplete="off" name="user" type="text" required></td>
<td><label for="pass">Contraseña</label></td><td  width="30%"><input class="form-control" autocomplete="off"  name="pass" type="password" placeholder="minimo 5 caracteres"
pattern="[A-Za-z0-9]{5,10}" required><font color="red">*La contraseña no puede
tener menos de 5 digitos ni mas de 10, y no debe incluir caracteres especiales, solo
letras mayusculas y minusculas y numeros.</font></td>

</tr><tr>

<td><label for="pass"> Vuelve a escribir la Contraseña</label></td><td><input class="form-control" autocomplete="off"  name="repass" type="password" required></td>

<td><label for="pass">¿Deseas recibir notificaciones a tu correo? </label></td>  <td><input  autocomplete="off"  name="notificacion" type="radio" value="1" required>SI
<input  autocomplete="off"  name="notificacion" type="radio" value="0" required>NO</td>


</tr>


<tr>
  
<td colspan="4" align="right"><input type="submit" name="registrar" class="btn btn-primary" value="Procesar Registro" style="margin-right:30px;" ></td>

</tr>

 </table>

<br>
 
 </form>
 

  </td>



   <?php } ?>
 
</table>

      </div>



 







    
    </div>
    <!-- end of container -->
  </div>
  <!-- end of shell -->
</div>
<!-- end of wrapper -->
</body>
</html>