Bienvenido a <?php echo $site_name; ?>,

Gracias por unirse a <?php echo $site_name; ?>. Listamos sus datos de inicio de sesión a continuación, asegurese de mantenerlos seguros.
Para verificar su dirección de correo electrónico, por favor siga este enlace:

<?php echo site_url('/auth/activate/'.$user_id.'/'.$new_email_key); ?>


Por favor verifique su correo electrónico dentro de <?php echo $activation_period; ?> horas, caso contrario su registro se invalidará y deberá registrase nuevamente.
<?php if (strlen($username) > 0) { ?>

Su nombre de usuario: <?php echo $username; ?>
<?php } ?>

Su dirección de correo electrónico: <?php echo $email; ?>
<?php if (isset($password)) { /* ?>

Your password: <?php echo $password; ?>
<?php */ } ?>



Gracias,
The <?php echo $site_name; ?> Team