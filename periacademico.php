
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
 
$p->PeriodoAcademico(
      $_POST['nombreacademico'],
      $_POST['fechaini'],
      $_POST['fechafina']
      );

echo '   

 
   

 <div class="containeres"><br>

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

 <td align="center"><a class="btn btn-primary" role="button"  href="periacademico.php"  > Nuevo Registro <span class="glyphicon glyphicon-plus
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
    <td colspan="3"><h3  ><span style="margin-left:20px;"class="glyphicon glyphicon-search"  ><b style="font-family:bold;">  MODULO DE PERIODO ACADEMICO</b></span></h3>   
 </td>

  </tr>

</table>

<form method="POST" action="#"  class="laberd"> 
 

 <table width="100%" height="300">
   
 

<tr>

<td><label for="nombreacademico">Nombre del periodo académico</label></td><td><input class="form-control" onkeypress="txNombres()"  name="nombreacademico" type="text" required></td>
<td><label for="fechaini">Fecha de inicio del periodo académico</label></td><td><input class="form-control" name="fechaini" type="date" required></td>

</tr>


 
<tr>

<td><label for="fechafina">Fecha de finalización del periodo académico</label></td><td><input class="form-control" name="fechafina" type="date" required></td>


 
  
<td colspan="4" align="right"><input type="submit" name="registrar" class="btn btn-primary" value="Procesar Registro"  style="margin-right:30px;"></td>

</tr>

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