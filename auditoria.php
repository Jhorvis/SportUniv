
<!DOCTYPE html>

<?php @session_start();

if (!isset($_SESSION['nivel'])) header("location:index.php");
if ($_SESSION['nivel'] != 1) header("location:home.php"); 
@session_start();
    


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

  <link rel="stylesheet" href="font/css/font-awesome.css" type="text/css">

<link href="img/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
<script src="js/jquery.carouFredSel-5.5.0-packed.js"></script>
<script src="js/functions.js"></script>

<script src="font/css/font-awesome.min"></script>

 

</head>
<body>

 <style>  .scol{
    width: auto;
    height:512px;
    overflow: scroll;
}

</style>
<div id="wrapper">
 
  <div class="shell">
 
 
    <div class="container">
     


<?php  include ("template/header.php");?>

  

  <div class="main">
 

 


<div class="featured">

<h4>Sistema automatizado <strong> para los procesos administrativos y deportivos del</strong> complejo deportivo del  <strong> Tecnologico Unir.</strong></h4>
        
</div>



<?php 

if ($_SESSION['nivel']==1){

?>






<td width="78%">
  
 

 

                <table width="100%"  height="150" id="example1" class="table table-bordered table-striped">
                    
                    <thead>
                      <tr>
                        <th width="5%">Nº</th>
                        <th>Nivel</th>
                        <th width="1%">Usuario</th>
                        <th>Accion</th>
                        <th>Descripcion</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>IP</th>
                     
                      </tr>
                    </thead>

      
                    <tbody>
                          
<?php 
include 'enlace.php';
$i=1;
$sen = mysql_query("SELECT * FROM `auditoria` ORDER BY `auditoria`.`id` DESC");

while ($res = mysql_fetch_array($sen)) {



    echo "<tr>";
    echo "<td>". $i. "</td>";
    echo "<td>". $res['nivel']. " </td>";
    echo "<td>". $res['usuario']. " </td>";
    echo "<td>". $res['accion']. " </td>";
    echo "<td>".$res['descripcion']. "</td>";
    echo "<td>". $res['fecha']. "</td>";
    echo "<td>". $res['hora']. " </td>";
    echo "<td>". $res['servidor']. " </td>";

    echo "</tr>";

    $i++;
    }

    ?>
 


                    
                    </tbody>
                
                  </table> 
                  <div align="left">


<div class="alert alert-success">
<a href="home.php"><span class="glyphicon glyphicon-arrow-left"></span></a>

Volver Atras

</div>

</td>



</tr>

</table>

   </div>
    <script src="plugins/jquery/jQuery-2.1.4.min.js"></script>
     <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>


    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>



   <?php } ?>



 



<?php 

if ($_SESSION['nivel']==2){

?>

<div class="featurede" align="center" > 

<table width="100%" height="320" class="table table-bordered">
  
<tr valign="top">

<td width="22%">
  

 <?php include ("template/sidebar.php") ?>

 



</td>





<td width="78%"></td>



</tr>

</table>

   </div>

   <?php } ?>













        
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