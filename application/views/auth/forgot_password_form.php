<?php
$login = array(
	'name'	=> 'login',
	'id'	=> 'login',
	'value' => set_value('login'),
	'maxlength'	=> 80,
	'size'	=> 30,
	'class' => 'form-control',
	'placeholder' => 'Email o Usuario',
);
if ($this->config->item('use_username', 'tank_auth')) {
	$login_label = 'Email o Usuario';
} else {
	$login_label = 'Email';
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Recuperar clave</title>
    <link rel="shortcout icon" href="<?php echo base_url("assets/imagenes/sigerh.ico") ?>">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/components.css") ?>">
    
    <!-- <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/signin.css"); ?>" /> -->
</head>
<body>
<div class="container auth">

<?php echo form_open($this->uri->uri_string(),array('class'=>'form-signin')); ?>
<h2 class="text-center">SIGERH</h2>
<div class="panel panel-primary">

	<div class="panel-heading">
		<h1 class="panel-title text-center">Recuperar clave</h1>
	</div>
	<table class="table">
		<tr>
			<td><?php echo form_input($login); ?></td>
			<td style="color: red;"><?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?></td>
		</tr>
		<tr>
			<td colspan="1">
				<?php $attributes = array('class' => 'btn btn-success btn-block', 'name' => 'reset', 'value'=> 'Recuperar'); ?>
				<?php echo form_submit($attributes); ?>
			</td>
		</tr>
	</table>
<?php echo form_close(); ?>
</div>
<!-- Inicio Pie -->
<footer class="container auth">
    <p style="float: left; margin-right:5px;">© 2015 SIGERH. Todos los derechos reservados.</p>
    <p style="float: right; margin-right:5px;">Página mostrada en <strong>{elapsed_time}</strong> segundos.</p>
</footer>
<!-- Fin Pie -->
	<script type="text/javascript" src="<?php echo base_url("assets/grocery_crud/js/jquery-1.11.1.min.js") ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>