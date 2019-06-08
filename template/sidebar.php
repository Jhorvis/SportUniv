 <style type="text/css">i {color:#00acef;} hr{border:1px solid #BFBFBF;} </style>
<?php 

if ($_SESSION['nivel']==1){

?>


<h4> <span class="glyphicon glyphicon-th"></span> Menu Principal  </h4>

<ul id="sidebar-left">
 

<li id="pri"  ><i class="fa fa-home"></i> <a href="home.php" >Inicio</a></li>
<hr>
<li id="pri"><i class="fa fa-search"></i></i> <a href="consultaE.php">Consulta</a></li>
<hr>
<li id="pri"><i class="fa fa-soccer-ball-o"></i></i> <a href="articulos.php">Articulos</a></li>
<hr>
<li id="pri"><i class="fa fa-user-plus"></i> <a href="moduloregistro.php">Registro</a></li>
<hr>
<li id="pri">  <i class="fa fa-bell"></i> <a href="notificaciones.php"><?php 

require_once "clases/claseusuario.php";

$a= new Usuarios();
if ($a->VerNotificaciones2()){

echo "<image src='img/notificacion.png' width='10%'><font color='red'>Notificaciones</font> </a></li>"; } else{?>
Notificaciones </a></li><?php } ?>
<hr>
<li id="pri"><i class="fa fa-trophy"></i> <a href="listado.php">Torneos</a></li>
<hr>
<li id="pri"><i class="fa fa-bar-chart"></i> <a href="estadistica-torneo.php"> Estadistica</a></li>
<hr>
<li id="pri"><i class="fa fa-user-secret"></i> <a href="auditoria.php"> Auditoria</a></li>
<hr>
 <li id="pri"><i class="fa fa-user"></i> <a href="cuentas_usuario.php"> Cuentas</a></li>
<hr>

</ul>


<?php } ?>


<?php 

if ($_SESSION['nivel']==2){

?>


<h4> <span class="glyphicon glyphicon-th"></span> Menu Principal  </h4>

<ul id="sidebar-left"> 

<li id="pri"> <a href="home.php" >Inicio</a></li>
<hr>
<li id="pri"> <a href="ver-equipos.php">Mis Equipos</a></li>
<hr>
<li id="pri"><a href="selectequipos.php">Registrar Equipo</a></li>
<hr>
<li id="pri"></i><a href="selectjugador.php">Registrar Jugadores</a></li>
<hr>
<li id="pri"><a href="planilla.php">Imprimir Planilla</a></li>
<hr>
<li id="pri"><a href="mensajes.php"><?php 

require_once "clases/claseusuario.php";

$a= new Usuarios();
$usuario = $_SESSION['user'];
if ($a->VerNotificacionesUsuarioalert($usuario)){

include 'enlace.php';

$conteo = mysql_query("SELECT count(*) FROM mensajes WHERE destino = '$usuario'
 AND estatus = 0");
$mensajestotal = mysql_fetch_array($conteo);





echo "<font color='red'>Notificaciones(".$mensajestotal['count(*)'].")</font> </a></li>"; } else{?>
Notificaciones </a></li><?php } ?>
<hr>
<li id="pri"><a href="#">Configuracion</a></li>
<hr>
<li id="pri"><a href="logout.php">Cerrar Sesión</a></li>
 
</ul>

<?php } ?>