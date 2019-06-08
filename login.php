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
 

      <div class="featurede" align="center" >

<form action='loguear.php' method='POST' >  

      <br>
<h4> <img src="img/key.png" width="64">Iniciar Sesión</h4> 

<table width="40%" border="0"  >
  
<tr>

<td> <label for='user'>Usuario:</label></td>
<td> <input type='text' name='user' class="form-control" required placeholder='Ingrese su Usuario' autocomplete="off" /></td>
</tr>
 
<tr>
  
<td> <br> <label for='pass'>Clave:</label></td>
<td> <br> <input type='password' name='pass' class="form-control"  required placeholder='Ingresa tu Clave' autocomplete="off" /></td>

</tr>

<tr>
  
<td colspan="2" align="right"> <br> <input type='hidden' name='logear' value='Si' />

  <center></a> <input type='submit' value='Entrar'  class='btn btn-primary' />  <a href="inscrequipo.php"><input type='button'  value='REGISTRATE!' class='btn btn-segundario' />
 </center>
 </td>
 


</tr>

</table>


 </form><br>









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
             
            <p style="text-align:justify;">Se  denomina  por  el nombre oficial y legal  de una  empresa o ente público. Ahora bien, en el caso  del instituto universitario READIC es  el nombre oficial de una institución  educativa privada que se encarga de formar técnicos superiores universitarios.
  <br />
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
            <p style="text-align:justify;">De este mismo modo, desde el punto de vista técnico, el proyecto aporta a la organización una aplicación web para automatizar los procesos administrativos, dando así un mayor control con la planificación y toma de decisiones en la comunidad.<br />
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