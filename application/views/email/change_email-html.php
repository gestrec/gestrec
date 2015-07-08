<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head><title>Su nueva dirección de correo electrónico en <?php echo $site_name; ?></title></head>
<body>
<div style="max-width: 800px; margin: 0; padding: 30px 0;">
<table width="80%" border="0" cellpadding="0" cellspacing="0">
<tr>
<td width="5%"></td>
<td align="left" width="95%" style="font: 13px/18px Arial, Helvetica, sans-serif;">
<h2 style="font: normal 20px/23px Arial, Helvetica, sans-serif; margin: 0; padding: 0 0 18px; color: black;">Su nueva dirección de correo electrónico en <?php echo $site_name; ?></h2>
Ha cambiado su dirección de correo electrónico en <?php echo $site_name; ?>.<br />
Siga este enlace para confirmar su nueva dirección de correo electrónico:<br />
<br />
<big style="font: 16px/18px Arial, Helvetica, sans-serif;"><b><a href="<?php echo site_url('/auth/reset_email/'.$user_id.'/'.$new_email_key); ?>" style="color: #3366cc;">Confirmar su nueva dirección de correo electrónico</a></b></big><br />
<br />
El enlace no funciona? Copie el siguiente enlace en la barra de direcciones de su navegador:<br />
<nobr><a href="<?php echo site_url('/auth/reset_email/'.$user_id.'/'.$new_email_key); ?>" style="color: #3366cc;"><?php echo site_url('/auth/reset_email/'.$user_id.'/'.$new_email_key); ?></a></nobr><br />
<br />
<br />
Su nueva dirección de correo electrónico: <?php echo $new_email; ?><br />
<br />
<br />
Recibió este correo, porque fue solicitado por un usuario en <a href="<?php echo site_url(''); ?>" style="color: #3366cc;"><?php echo $site_name; ?></a>. Si ha recibido esto por error, por favor NO haga clic en el enlace de confirmación, y simplemente elimine este correo electrónico. Después de un tiempo, la solicitud será eliminada del sistema.<br />
<br />
<br />
Gracias,<br />
The <?php echo $site_name; ?> Team
</td>
</tr>
</table>
</div>
</body>
</html>