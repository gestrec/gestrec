Hola<?php if (strlen($username) > 0) { ?> <?php echo $username; ?><?php } ?>,

Ha cambiado su dirección de correo electrónico en <?php echo $site_name; ?>.
Siga este enlace para confirmar su nueva dirección de correo electrónico:

<?php echo site_url('/auth/reset_email/'.$user_id.'/'.$new_email_key); ?>


Su nuevo correo electrónico: <?php echo $new_email; ?>


Recibió este correo electrónico, porque fue solicitado por un usuario en <?php echo $site_name; ?>. Si ha recibido esto por error, por favor NO haga clic en el enlace de confirmación, y simplemente elimine este correo. Después de un tiempo, la solicitud será eliminada del sistema.


Gracias,
The <?php echo $site_name; ?> Team