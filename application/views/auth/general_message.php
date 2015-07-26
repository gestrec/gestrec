<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SIGERH</title>
    <link rel="shortcout icon" href="<?php echo base_url("assets/imagenes/sigerh.ico"); ?>">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/components.css") ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/signin.css"); ?>">
</head>
<body>
	<div class="container">
		<?php echo $message; ?>
		<!-- Inicio Pie -->
		<footer class="container auth">
		    <p style="float: left; margin-right:5px;">© 2015 SIGERH. Todos los derechos reservados.</p>
		    <p style="float: right; margin-right:5px;">Página mostrada en <strong>{elapsed_time}</strong> segundos.</p>
		</footer>
		<!-- Fin Pie -->
	</div>
	<script type="text/javascript" src="<?php echo base_url("assets/grocery_crud/js/jquery-1.11.1.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>