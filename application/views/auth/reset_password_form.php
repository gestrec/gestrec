<?php
$new_password = array(
	'name'	=> 'new_password',
	'id'	=> 'new_password',
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
	'class' => 'form-control',
	'placeholder' => 'Nueva clave',
);
$confirm_new_password = array(
	'name'	=> 'confirm_new_password',
	'id'	=> 'confirm_new_password',
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size' 	=> 30,
	'class' => 'form-control',
	'placeholder' => 'Confirmar nueva clave',
);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Recuperar clave</title>
    <link rel="shortcout icon" href="<?php echo base_url("assets/imagenes/sigerh.ico"); ?>">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/components.css"); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/signin.css"); ?>">
</head>
<body>
<div class="container auth">
<?php echo form_open($this->uri->uri_string(),array('class'=>'form-signin')); ?>
<h2 class="text-center">SIGERH</h2>
<div class="panel panel-primary">

	<div class="panel-heading">
		<h1 class="panel-title text-center">Crear nueva clave</h1>
	</div>
	<table class="table">
		<tr>
			<td><?php //echo form_label('New Password', $new_password['id']); ?></td>
			<td><?php echo form_password($new_password); ?></td>
			<td style="color: red;"><?php echo form_error($new_password['name']); ?><?php echo isset($errors[$new_password['name']])?$errors[$new_password['name']]:''; ?></td>
		</tr>
		<tr>
			<td><?php //echo form_label('Confirm New Password', $confirm_new_password['id']); ?></td>
			<td><?php echo form_password($confirm_new_password); ?></td>
			<td style="color: red;"><?php echo form_error($confirm_new_password['name']); ?><?php echo isset($errors[$confirm_new_password['name']])?$errors[$confirm_new_password['name']]:''; ?></td>
		</tr>
		<tr>
			<td colspan="2">
				<?php $attributes = array('class' => 'btn btn-lg btn-success btn-block', 'name' => 'change', 'value'=> 'Cambiar Clave'); ?>
				<?php echo form_submit($attributes); ?>
			</td>
		</tr>
	</table>

</div>

	<?php echo form_close(); ?>
	<!-- Inicio Pie -->
	<footer class="container">
	    <p style="float: left; margin-right:5px;">© 2015 SIGERH. Todos los derechos reservados.</p>
	    <p style="float: right; margin-right:5px;">Página mostrada en <strong>{elapsed_time}</strong> segundos.</p>
	</footer>
	<!-- Fin Pie -->

</div>
	<script type="text/javascript" src="<?php echo base_url("assets/grocery_crud/js/jquery-1.11.1.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>