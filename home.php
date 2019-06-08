
<!DOCTYPE html>

<?php @session_start();

if (!isset($_SESSION['nivel'])) header("location:index.php");

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
  

<img src="img/yrty435e.jpg" width="100%" height="96%">



</td>



</tr>

</table>

   </div>

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





<td width="78%">
  
<img src="img/yrty435e.jpg" width="100%" >



  
</td>



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