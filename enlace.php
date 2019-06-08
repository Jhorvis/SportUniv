<?php

//Conexion a la base de datos
	$enlace = @mysql_connect('mysql.hostinger.es','u572133649_iutm','006767osjj') or
		  die("No ha sido posible conectar con MySQL".
		      mysql_error());

	$misDatos = @mysql_selectdb("u572133649_unir2",$enlace) or
		  die("No se ha encontrado la Base de Datos.".
		      mysql_error());
			  
			  ?>
			  