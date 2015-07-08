Hola<?php if (strlen($username) > 0) { ?> <?php echo $username; ?><?php } ?>,

Olvidó su clave, eh? No es gran cosa.
Para crear una nueva clave, solo siga este enlace:

<?php echo site_url('/auth/reset_password/'.$user_id.'/'.$new_pass_key); ?>


Recibió este correo electrónico, porque fue solicitado por un usuario en <?php echo $site_name; ?>. Esto es parte del procedimiento para crear una nueva clave en el sistema. Si NO solicitó una nueva clave, por favor ignore este correo electrónico y su clave será la misma.


Gracias,
The <?php echo $site_name; ?> Team