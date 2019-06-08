
<?php @session_start();

if (@$_SESSION['nivel']==1) {


?>

    <div id="footer">
        <div class="footer-nav">
          <ul>
            <li><a href="home.php">Inicio</a></li>
            <li><a href="#">Consulta</a></li>
            <li><a href="moduloregistro.php">Registro</a></li>
            <li><a href="#">Servicios</a></li>
            <li><a href="#">Estadistica</a></li>
             <li><a href="#">Auditoria</a></li>
              <li><a href="#">Configuracion</a></li>
        
          </ul>
          <div class="cl">&nbsp;</div>
        </div>
        <p class="copy">&copy; Copyright 2015<span>|</span>Sistema Diseñado Por Liz y Jhorvis</p>
        <div class="cl">&nbsp;</div>
      </div>



     <?php }




elseif (@$_SESSION['nivel']==2) {


?>

    <div id="footer">
        <div class="footer-nav">
          <ul>
            <li><a href="home.php">Inicio</a></li>
            
          </ul>
          <div class="cl">&nbsp;</div>
        </div>
        <p class="copy">&copy; Copyright 2015<span>|</span>Sistema Diseñado Por Liz y Jhorvis</p>
        <div class="cl">&nbsp;</div>
      </div>



     <?php }
















      else { ?>




 <div id="footer">
        <div class="footer-nav">
          <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="login.php">Iniciar Sesión</a></li>
            <li><a href="#">Servicios</a></li>
            <li><a href="#">Contacto</a></li>
            <li><a href="#">Quienes Somos?</a></li>
        
          </ul>
          <div class="cl">&nbsp;</div>
        </div>
        <p class="copy">&copy; Copyright 2015<span>|</span>Sistema Diseñado Por Liz y Jhorvis</p>
        <div class="cl">&nbsp;</div>
      </div>















     <?php } ?>