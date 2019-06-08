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

// if ($p->VerificarCedula($_POST['cedula'])){
  
?>
 
 
<!--<table width="100%"   height="300" >
  
<tr><td>
<br><center><img src="img/male_user_warning_256.png" width="120" ></center>
<p><br><center><h4>Esta CEDULA! ya se encuetra registrada.</h4></center></p> 
<br><br><center><a class="btn btn-primary" href="regestudiante.php"> Volver Interntar </a></center><br></td></tr>

</table>  
<br><br>
</div>-->

 

 
    
<?php 
  //exit();
  
  //}

 

 //if ($p->VerificarCorreo($_POST['correo'])){
  
?>
 
<!--<table width="100%"   height="300" >
  
<tr><td>
<br><center><img src="img/mail_notice-256.png" width="120" ></center>
<p><br><center><h4>Este CORREO! ya ha sido registrado.</h4></center></p> 
<br><br><center><a class="btn btn-primary" href="regestudiante.php"> Volver Interntar </a></center><br></td></tr>

</table>  
<br><br>
</div>-->

 

 
    
<?php 
  //exit();
  
 // }




 $nameteam =$_POST['nombres'];
        


include 'enlace.php';
        $id = $_GET ['id'];

       
$s = mysql_query("SELECT * from regisjornadas where equipo_local = '$nameteam' or equipo_visitante = '$nameteam'");

while ($rs = mysql_fetch_array($s)) {
 $played = $rs['id_encuentro'];
 $ss = mysql_query("SELECT * from regisjornadas where id_encuentro = $played");
 while ($rss = mysql_fetch_array($ss)) {
  $nombre1= $rss['equipo_visitante'];
  $nombre2= $rss['equipo_local'];
$sss = mysql_query("SELECT * from regisequipo where torneo = $id and nombrequipo != '$nombre1' ");
   while ($rsss = mysql_fetch_array($sss)) {

     echo  $rsss['idequipo']." ";
}



}
}


//$p->eliminaequipo(
  //     $id,
    //   $_POST['nombre']
      // );

require_once "clases/claseauditoria.php";
$audit=new auditoria();

if ($_SESSION['nivel']==1){

$admin = 'Administrador';

}

$audit->insauditoria($admin, $_SESSION['identidad'],"Modificó el nombre del torneo: <font color=blue><i>" .$_POST['nombres']. " </i></font>", " Usuario: " .$_SESSION['user'], "".$_SERVER['REMOTE_ADDR']);

echo '   

 
   

 

<div class="modal-header">
<h4 class="modal-title"  >Modificación Exitosa!</h4>
</div>
<div class="modal-body">  
<p><h4 align="center">Informacion Almacenada Correctamente. <span class="glyphicon glyphicon-ok"></span></h4></p>
</div>

<div class="modal-footer">
<table width="100%"  height="340" >
<tr>

<td align="center"><a class="btn btn-primary" role="button"  href="home.php"  ><span class="glyphicon glyphicon-th"></span>
 Menu Principal</a></td>

 <td align="center"><a class="btn btn-primary" role="button"  href="consultaE.php"  > Nuevo Registro <span class="glyphicon glyphicon-plus
">
</span></a></td>

</tr>
</table>
</div>

 
</div>
 
 
';

     
      }else {

        include 'enlace.php';
        $id = $_GET ['id'];

        $modificarest = "SELECT * FROM regisequipo where torneo = $id";
        $query = mysql_query($modificarest);
        

?>    
<div style="background-color:#fff;" align="center" > 
 

<table width="100%" border="0"      style="background-color:#fff;">
  <tr>
    <td colspan="3"><h3  ><span style="margin-left:20px;"class="glyphicon glyphicon-search"  ><b style="font-family:bold;"> SELECCIONA UNA EQUIPO</b></span></h3>   
 </td>

  </tr>

</table>


<form method="POST" action="#"  class="laberd"> 
 
 
 
 <table width="100%" height="200" >
   
<td>
  
 
<table width="100%" id="brde"  class="laberd" height="300">
  
<tr >

<td><label for="nombre"  >Elija un quipo:</label></td><td><select  autofocus autocomplete="off"  class="form-control" name="nombres" required>
<option value="">Seleccione</option>
 <?php while ($result = mysql_fetch_array($query))  { ?>

<option value="<?php echo $result ['nombrequipo']; ?>"><?php echo $result ['nombrequipo']; ?></option>
<?php
} 
?>
</select>
</td>
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
  
  <?php  echo "<a href='configurar_torneo.php?id=$id' style='margin-left:20px;'><span class='glyphicon glyphicon-arrow-left' style='font-size:24px;''></span></a> <br><br>
 
 "?>

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