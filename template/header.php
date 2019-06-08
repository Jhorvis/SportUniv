
<!DOCTYPE html>



 

<?php @session_start();

if (@$_SESSION['nombre']) {


?>

<br>
<header id="header">
 
      <div class="logo" >
                 
      <img src="img/logounir.png">

      </div>
            
      <div class="cl">&nbsp;</div>

</header>



<div>
  
<div class="inilogin">

<ul>


<li><img src="img/icon_user_online.gif"></li>


<?php 

if ($_SESSION['nivel']==1){

?>

<li>Nivel -> <span style="color:green">Administrador</span> |</li>

<?php } ?>


<?php 

if ($_SESSION['nivel']==2){

?>

<li>Nivel -> <span style="color:green">Usuario</span> |</li>

<?php } ?>


<li>Hola <?php  echo $_SESSION['user'];?>! </li>

<li><a class="btn btn-link" href="logout.php" title="">Cerrar Sesion</a></li>

</ul>

</div>

</div>


<?php 

if ($_SESSION['nivel']==1){

?>

<nav id="navigation"  > <a href="#" class="nav-btn">HOME<span></span></a>
<ul  >
         <li class="active"><a href="home.php">Inicio</a></li>
    
          
          <li><a href="consultaE.php">Consulta</a></li>
          <li><a href="moduloregistro.php">Registro</a></li>
          <li><a href="notificaciones.php">Notificaciones</a></li>
          <li><a href="listado.php">Listado</a></li>
       
          <li><a href="#">Configuracion</a></li>
        </ul>
        <div class="cl">&nbsp;</div>
</nav>
  <br><br>


<?php } ?>


<?php 

if ($_SESSION['nivel']==2){

?>

<nav id="navigation"  > <a href="#" class="nav-btn">HOME<span></span></a>
<ul  >
         <li class="active"><a href="home.php">Inicio</a></li>
    
          
          <li><a href="selectequipos.php">Registrar Equipo</a></li>
          <li><a href="selectjugador.php">Registrar Jugadores</a></li>
          <li><a href="planilla.php">Imprimir Planilla</a></li>
 
      
        </ul>
        <div class="cl">&nbsp;</div>
</nav>
  <br><br>


<?php } ?>


<?php 

}else {

?>

<br>

<header id="header">
 
      <div class="logo" >
                 
      <img src="img/logounir.png">

      </div>
            
      <div class="cl">&nbsp;</div>

</header>


<nav id="navigation"  > <a href="#" class="nav-btn">HOME<span></span></a>
<ul  >
         <li class="active"><a href="index.php">Inicio</a></li>
    
          
          <li><a href="login.php">Iniciar Sessión</a></li>
          <li><a href="torneo.php">Torneo</a></li>
          <li><a href="#">Contacto</a></li>
          <li><a href="#">Quienes Somos?</a></li>
        </ul>
        <div class="cl">&nbsp;</div>
</nav>  <br><br>
  

  <?php } ?>