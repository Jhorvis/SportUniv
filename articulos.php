
<!DOCTYPE html>

<?php @session_start();

if (!isset($_SESSION['nivel'])) header("location:index.php");
if ($_SESSION['nivel'] != 1) header("location:home.php"); 
@session_start();

require_once "clases/claseusuario.php";

$g= new Usuarios();

$datos=$g->articulo();
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

<div class="featurede" align="center" > 

<table width="100%" height="320" class="table table-bordered">
  
<tr valign="top">

<td width="22%">
  

 <?php include ("template/sidebar.php") ?>





</td>

<td width="78%">
  


    <table width="100%"  height="150" id="example1" class="table table-bordered table-striped">
                    
                    <thead>
                      <tr>
                        <th width="5%">Nº</th>
                        <th>Articulo</th>
                        <th width="1%">Serial</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Existencia</th>
                                         
                      </tr>
                    </thead>

      
                    <tbody>
                          
 
                          
<?php 

$i=1;
include 'enlace.php';
$sentencia ="SELECT * from articulos";
$query = mysql_query($sentencia);
while ($arreglo = mysql_fetch_array($query)) {

    echo "<tr>";
    echo "<td>". $i. "</td>";
    echo "<td>". $arreglo ['articulo']. " </td>";
    echo "<td>". $arreglo ['seriales']. " </td>";
    echo "<td>". $arreglo ['marca']. " </td>";
    echo "<td>".$arreglo ['modelo']. "</td>";
    echo "<td>". $arreglo ['existencia']. "</td>";
   

    echo "</tr>";

    $i++;
    }

    ?>
 


           
 


                    
                    </tbody>
                
                  </table> 



</td>

</tr>

</table>

   </div>

   <?php } ?>


        
      </div>
       
      <div class="cl">&nbsp;</div>
    
   


<?php  include ("template/footer.php");?>



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



    
    </div>
    <!-- end of container -->
  </div>
  <!-- end of shell -->





</div>
<!-- end of wrapper -->
</body>
</html>