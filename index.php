<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css" />
	<meta charset="utf-8">
	<title>Portada</title>
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
		require("contenido.php");
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


</div> <!-- Fin del contenedor -->

</body>
</html>