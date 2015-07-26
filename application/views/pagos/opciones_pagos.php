<div class="container opciones">
	<div class="btn-group btn-group-justified" role="group" aria-label="Pagos">
		<div class="btn-group">
		  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		    Pagos mensuales <span class="caret"></span>
		  </button>
		  <ul class="dropdown-menu">
		    <li><a href="<?php echo base_url("pagos/mensual_individual"); ?>">Generar pagos individuales para el presente mes</a></li>
		    <li><a href="<?php echo base_url("pagos/mensual_general") ?>">Ver pago mensual del personal</a></li>
		    <!-- <li role="separator" class="divider"></li> -->
		    <li><a href="<?php echo base_url("pagos/notificar_pagos") ?>">Enviar correos de notificación</a></li>
		  </ul>
		</div>



		<div class="btn-group">
		  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		    Pagos anuales <span class="caret"></span>
		  </button>
		  <ul class="dropdown-menu">
		    <!-- <li><a href="<?php echo base_url("pagos/anual_individual") ?>">Generar pagos individuales</a></li> -->
		    <li><a href="<?php echo base_url("pagos/anual_general") ?>">Ver pago anual del personal</a></li>
		  </ul>
		</div>
	</div>
</div>