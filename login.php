<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css" />
</head>
<body>
<div id="contenedor">
	<div id="cabecera">
	<?php
		require("cabecera.php");
	?>
		
	</div>

	<div id="sidebar-left">
	<?php
		require("sidebarIzq.php");
	?>	
	</div>

	<div id="contenido">
	<?php
		require("inicioSesion.php");
	?>
	</div>

	<div id="sidebar-right">
	<?php
		require("sidebarDer.php");
	?>
	</div>

	<div id="pie">
	<?php
		require("pie.php");
	?>
	</div>
</div>
</body>
</html>