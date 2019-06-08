 

<?php

if (isset($_POST['logear']))
{
 
require("clases/claseusuario.php");
  
$c=new Usuarios();
$dato=$c->loguear($_POST['user'],$_POST['pass']);

if ($dato){

session_start();

$_SESSION['user']=$dato[0]->user;
$_SESSION['nivel']=$dato[0]->nivel;
 
$_SESSION['nombre']=$dato[0]->nombre;

$_SESSION['identidad']=$dato[0]->identidad;

 if (@$_SESSION['nivel']==1) {
        
       header("location:home.php");

require_once "clases/claseauditoria.php";
$audit=new auditoria();

if ($_SESSION['nivel']==1){

$admin = 'Administrador';

}

elseif ($_SESSION['nivel']==2) {

$admin = 'Usuario';

}



$audit->insauditoria($admin, $_SESSION['identidad'], "Inicio de Session", " Usuario: " .$_SESSION['user'], "".$_SERVER['REMOTE_ADDR']);
      



    }
    
if (@$_SESSION['nivel']==2) {   

$_SESSION['identidad']=$dato[0]->identidad;

       header("location:home.php");    
    }

	
}else{
	
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

  

  <div class="main ">
 

      <div class="featurede"   >
    
 

 <table width="100%" height="267" border="0" ><tr><td  align="center"><table  >
<tr><td align="center"><img src="img/male_user_warning_256.png" width="64"></td></tr>
<tr><td><h2 style="font-size:22px;">El nombre de usuario o contraseña no es correcto.</h2></td></tr>
<tr><td><br><center><a href="login.php" class="btn btn-primary"><strong>Intentar de Nuevo</strong></a></center></td></tr>
</table></td></tr></table>

      </div>
      <!-- main -->



<div class="featured">

<h4>Sistema automatizado <strong> para los procesos administrativos y deportivos del</strong> complejo deportivo del  <strong> Tecnologico Unir.</strong></h4>
        
</div>




        <section class="cols">
          




<table width="100%">
  




<td width="33%" valign="top">

 <div class="col">
            <h3>Razon Social</h3>
             
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus dui ipsum, cursus ut adipiscing porta, vestibulum quis turpis adispicing amet sit.  <br />
            </p>
          </div>
 </td>



<td width="33%" valign="top">
  

          <div class="col">
            <h3>Ubicacion</h3>
            <img src="img/PLANTILLA-CONTACTANOS_04.jpg" width="97" height="84" alt="" class="left"/>
            <h5>  SEDE MARACAIBO.</h5>
Teléfonos:<br>
 

0501-UNIR <br>0501-8647-338<br><br>


            <div class="cl">&nbsp;</div>
            <p>Avenida Libertador, Sector Casco Central frente al muelle.<br /></p>
          </div>
 


</td>



<td width="33%" valign="top">

          <div class="col">
            <h3>Poblacion</h3>
 
            <div class="cl">&nbsp;</div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus dui ipsum, cursus ut adipiscing porta, vestibulum quis turpis adispicing amet sit. <br />
       </p>
          </div>

 </td>


</table>

          <div class="cl">&nbsp;</div>
        </section>
        
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


























































       
 ';

 <?php
 
      }
}

?>

 
 
 
 
 
 
 
 
 
 
 
 
 