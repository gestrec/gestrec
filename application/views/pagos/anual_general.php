<div class="container">

	<!-- <form class="form-inline" action>
	  <div class="form-group">
	    <label for="field-anio_consultado">Año</label>
	    <input type="number" class="form-control" id="field-anio_consultado">
	  </div>
	  <button type="submit" class="btn btn-success">Consultar</button>
	</form> -->

  	<div class="panel panel-default">
	  <div class="panel-heading">
	  	<h1 class="panel-title text-center">Informe de pagos del mes de <?php echo  ucwords('enero').' de '.$anio;?></h1>
	  </div>
	  <div class="panel-body">
	    <h3 class="text-center">TOTAL <?php echo '$ '.round($enero['PGS_TOTAL'],2); ?></h3>
	    <?php if($enero['PGS_TOTAL']!=0){ ?>
	    <div class="col-md-6">
		  	<div class="panel panel-danger">
			  <div class="panel-heading">
			  	<div class="form-group">
			    	<label class="panel-title col-md-7 text-right">TOTAL EGRESOS</label>
			    	<label class="panel-title col-md-5"><?php echo '$ '.round($enero['PGS_INGRESOS'],2); ?></label>
			    </div>
			  </div>
			  <div class="panel-body">
			  	<form class="form-horizontal">
			  		<div class="form-group">
				    	<label class="col-md-7 text-right">Total sueldos ganados</label>
				    	<div class="col-md-5">			    		
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $enero['PGS_SUELDO_GANADO']; ?>">
				    		</div>	
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label class="col-md-7 text-right">Total valor horas extras</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $enero['PGS_VALOR_HORAS_EXTRAS']; ?>">
				    		</div>	
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label class="col-md-7 text-right">Total comisiones</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $enero['PGS_COMISIONES']; ?>">
				    		</div>	
				    	</div>
				    </div>
			  	</form>
			  </div> <!-- panel-body -->
			</div> <!-- panel -->
	  	</div> <!-- col -->

	  	<div class="col-md-6">
		  	<div class="panel panel-info">
			  <div class="panel-heading">
			    <div class="form-group">
			    	<label class="panel-title col-md-7 text-right">TOTAL RETENCIONES</label>
			    	<label class="panel-title col-md-5"><?php echo '$ '.round($enero['PGS_DESCUENTOS'],2); ?></label>
			    </div>
			  </div>
			  <div class="panel-body">
			  	<form class="form-horizontal">
			  		<div class="form-group">
				    	<label class="col-md-7 text-right">Total aportes IESS</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $enero['PGS_IESS']; ?>">
				    		</div>	
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label class="col-md-7 text-right">Total préstamos quirografarios</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $enero['PGS_QUIROGRAFARIO']; ?>">
				    		</div>	
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label class="col-md-7 text-right">Total anticipos</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $enero['PGS_ANTICIPOS']; ?>">
				    		</div>	
				    	</div>
				    </div>
			  	</form>
			  </div> <!-- panel-body -->
			</div> <!-- panel -->
	  	</div> <!-- col -->
	  	<?php } ?>
	  </div> <!-- panel-body -->
	</div> <!-- end panel general -->	


	
	<div class="panel panel-default">
	  <div class="panel-heading">
	  	<h1 class="panel-title text-center">Informe de pagos del mes de <?php echo  ucwords('Febrero').' de '.$anio;?></h1>
	  </div>
	  <div class="panel-body">
	    <h3 class="text-center">TOTAL <?php echo '$ '.round($febrero['PGS_TOTAL'],2); ?></h3>
	    <?php if($febrero['PGS_TOTAL']!=0){ ?>
	    <div class="col-md-6">
		  	<div class="panel panel-danger">
			  <div class="panel-heading">
			  	<div class="form-group">
			    	<label class="panel-title col-md-7 text-right">TOTAL EGRESOS</label>
			    	<label class="panel-title col-md-5"><?php echo '$ '.round($febrero['PGS_INGRESOS'],2); ?></label>
			    </div>
			  </div>
			  <div class="panel-body">
			  	<form class="form-horizontal">
			  		<div class="form-group">
				    	<label class="col-md-7 text-right">Total sueldos ganados</label>
				    	<div class="col-md-5">			    		
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $febrero['PGS_SUELDO_GANADO']; ?>">
				    		</div>	
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label class="col-md-7 text-right">Total valor horas extras</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $febrero['PGS_VALOR_HORAS_EXTRAS']; ?>">
				    		</div>	
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label class="col-md-7 text-right">Total comisiones</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $febrero['PGS_COMISIONES']; ?>">
				    		</div>	
				    	</div>
				    </div>
			  	</form>
			  </div> <!-- panel-body -->
			</div> <!-- panel -->
	  	</div> <!-- col -->

	  	<div class="col-md-6">
		  	<div class="panel panel-info">
			  <div class="panel-heading">
			    <div class="form-group">
			    	<label class="panel-title col-md-7 text-right">TOTAL RETENCIONES</label>
			    	<label class="panel-title col-md-5"><?php echo '$ '.round($febrero['PGS_DESCUENTOS'],2); ?></label>
			    </div>
			  </div>
			  <div class="panel-body">
			  	<form class="form-horizontal">
			  		<div class="form-group">
				    	<label class="col-md-7 text-right">Total aportes IESS</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $febrero['PGS_IESS']; ?>">
				    		</div>	
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label class="col-md-7 text-right">Total préstamos quirografarios</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $febrero['PGS_QUIROGRAFARIO']; ?>">
				    		</div>	
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label class="col-md-7 text-right">Total anticipos</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $febrero['PGS_ANTICIPOS']; ?>">
				    		</div>	
				    	</div>
				    </div>
			  	</form>
			  </div> <!-- panel-body -->
			</div> <!-- panel -->
	  	</div> <!-- col -->
	  	<?php } ?>
	  </div> <!-- panel-body -->
	</div> <!-- end panel general -->	

	
	<div class="panel panel-default">
	  <div class="panel-heading">
	  	<h1 class="panel-title text-center">Informe de pagos del mes de <?php echo  ucwords('marzo').' de '.$anio;?></h1>
	  </div>
	  <div class="panel-body">
	    <h3 class="text-center">TOTAL <?php echo '$ '.round($marzo['PGS_TOTAL'],2); ?></h3>
	    <?php if($marzo['PGS_TOTAL']!=0){ ?>
	    <div class="col-md-6">
		  	<div class="panel panel-danger">
			  <div class="panel-heading">
			  	<div class="form-group">
			    	<label class="panel-title col-md-7 text-right">TOTAL EGRESOS</label>
			    	<label class="panel-title col-md-5"><?php echo '$ '.round($marzo['PGS_INGRESOS'],2); ?></label>
			    </div>
			  </div>
			  <div class="panel-body">
			  	<form class="form-horizontal">
			  		<div class="form-group">
				    	<label class="col-md-7 text-right">Total sueldos ganados</label>
				    	<div class="col-md-5">			    		
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $marzo['PGS_SUELDO_GANADO']; ?>">
				    		</div>	
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label class="col-md-7 text-right">Total valor horas extras</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $marzo['PGS_VALOR_HORAS_EXTRAS']; ?>">
				    		</div>	
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label class="col-md-7 text-right">Total comisiones</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $marzo['PGS_COMISIONES']; ?>">
				    		</div>	
				    	</div>
				    </div>
			  	</form>
			  </div> <!-- panel-body -->
			</div> <!-- panel -->
	  	</div> <!-- col -->

	  	<div class="col-md-6">
		  	<div class="panel panel-info">
			  <div class="panel-heading">
			    <div class="form-group">
			    	<label class="panel-title col-md-7 text-right">TOTAL RETENCIONES</label>
			    	<label class="panel-title col-md-5"><?php echo '$ '.round($marzo['PGS_DESCUENTOS'],2); ?></label>
			    </div>
			  </div>
			  <div class="panel-body">
			  	<form class="form-horizontal">
			  		<div class="form-group">
				    	<label class="col-md-7 text-right">Total aportes IESS</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $marzo['PGS_IESS']; ?>">
				    		</div>	
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label class="col-md-7 text-right">Total préstamos quirografarios</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $marzo['PGS_QUIROGRAFARIO']; ?>">
				    		</div>	
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label class="col-md-7 text-right">Total anticipos</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $marzo['PGS_ANTICIPOS']; ?>">
				    		</div>	
				    	</div>
				    </div>
			  	</form>
			  </div> <!-- panel-body -->
			</div> <!-- panel -->
	  	</div> <!-- col -->
	  	<?php } ?>
	  </div> <!-- panel-body -->
	</div> <!-- end panel general -->	

	
	<div class="panel panel-default">
	  <div class="panel-heading">
	  	<h1 class="panel-title text-center">Informe de pagos del mes de <?php echo  ucwords('abril').' de '.$anio;?></h1>
	  </div>
	  <div class="panel-body">
	    <h3 class="text-center">TOTAL <?php echo '$ '.round($abril['PGS_TOTAL'],2); ?></h3>
	    <?php if($abril['PGS_TOTAL']!=0){ ?>
	    <div class="col-md-6">
		  	<div class="panel panel-danger">
			  <div class="panel-heading">
			  	<div class="form-group">
			    	<label class="panel-title col-md-7 text-right">TOTAL EGRESOS</label>
			    	<label class="panel-title col-md-5"><?php echo '$ '.round($abril['PGS_INGRESOS'],2); ?></label>
			    </div>
			  </div>
			  <div class="panel-body">
			  	<form class="form-horizontal">
			  		<div class="form-group">
				    	<label class="col-md-7 text-right">Total sueldos ganados</label>
				    	<div class="col-md-5">			    		
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $abril['PGS_SUELDO_GANADO']; ?>">
				    		</div>	
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label class="col-md-7 text-right">Total valor horas extras</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $abril['PGS_VALOR_HORAS_EXTRAS']; ?>">
				    		</div>	
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label class="col-md-7 text-right">Total comisiones</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $abril['PGS_COMISIONES']; ?>">
				    		</div>	
				    	</div>
				    </div>
			  	</form>
			  </div> <!-- panel-body -->
			</div> <!-- panel -->
	  	</div> <!-- col -->

	  	<div class="col-md-6">
		  	<div class="panel panel-info">
			  <div class="panel-heading">
			    <div class="form-group">
			    	<label class="panel-title col-md-7 text-right">TOTAL RETENCIONES</label>
			    	<label class="panel-title col-md-5"><?php echo '$ '.round($abril['PGS_DESCUENTOS'],2); ?></label>
			    </div>
			  </div>
			  <div class="panel-body">
			  	<form class="form-horizontal">
			  		<div class="form-group">
				    	<label class="col-md-7 text-right">Total aportes IESS</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $abril['PGS_IESS']; ?>">
				    		</div>	
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label class="col-md-7 text-right">Total préstamos quirografarios</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $abril['PGS_QUIROGRAFARIO']; ?>">
				    		</div>	
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label class="col-md-7 text-right">Total anticipos</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $abril['PGS_ANTICIPOS']; ?>">
				    		</div>	
				    	</div>
				    </div>
			  	</form>
			  </div> <!-- panel-body -->
			</div> <!-- panel -->
	  	</div> <!-- col -->
	  	<?php } ?>
	  </div> <!-- panel-body -->
	</div> <!-- end panel general -->	

	
	<div class="panel panel-default">
	  <div class="panel-heading">
	  	<h1 class="panel-title text-center">Informe de pagos del mes de <?php echo  ucwords('mayo').' de '.$anio;?></h1>
	  </div>
	  <div class="panel-body">
	    <h3 class="text-center">TOTAL <?php echo '$ '.round($mayo['PGS_TOTAL'],2); ?></h3>
	    <?php if($mayo['PGS_TOTAL']!=0){ ?>
	    <div class="col-md-6">
		  	<div class="panel panel-danger">
			  <div class="panel-heading">
			  	<div class="form-group">
			    	<label class="panel-title col-md-7 text-right">TOTAL EGRESOS</label>
			    	<label class="panel-title col-md-5"><?php echo '$ '.round($mayo['PGS_INGRESOS'],2); ?></label>
			    </div>
			  </div>
			  <div class="panel-body">
			  	<form class="form-horizontal">
			  		<div class="form-group">
				    	<label class="col-md-7 text-right">Total sueldos ganados</label>
				    	<div class="col-md-5">			    		
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $mayo['PGS_SUELDO_GANADO']; ?>">
				    		</div>	
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label class="col-md-7 text-right">Total valor horas extras</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $mayo['PGS_VALOR_HORAS_EXTRAS']; ?>">
				    		</div>	
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label class="col-md-7 text-right">Total comisiones</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $mayo['PGS_COMISIONES']; ?>">
				    		</div>	
				    	</div>
				    </div>
			  	</form>
			  </div> <!-- panel-body -->
			</div> <!-- panel -->
	  	</div> <!-- col -->

	  	<div class="col-md-6">
		  	<div class="panel panel-info">
			  <div class="panel-heading">
			    <div class="form-group">
			    	<label class="panel-title col-md-7 text-right">TOTAL RETENCIONES</label>
			    	<label class="panel-title col-md-5"><?php echo '$ '.round($mayo['PGS_DESCUENTOS'],2); ?></label>
			    </div>
			  </div>
			  <div class="panel-body">
			  	<form class="form-horizontal">
			  		<div class="form-group">
				    	<label class="col-md-7 text-right">Total aportes IESS</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $mayo['PGS_IESS']; ?>">
				    		</div>	
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label class="col-md-7 text-right">Total préstamos quirografarios</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $mayo['PGS_QUIROGRAFARIO']; ?>">
				    		</div>	
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label class="col-md-7 text-right">Total anticipos</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $mayo['PGS_ANTICIPOS']; ?>">
				    		</div>	
				    	</div>
				    </div>
			  	</form>
			  </div> <!-- panel-body -->
			</div> <!-- panel -->
	  	</div> <!-- col -->
	  	<?php } ?>
	  </div> <!-- panel-body -->
	</div> <!-- end panel general -->	

	
	<div class="panel panel-default">
	  <div class="panel-heading">
	  	<h1 class="panel-title text-center">Informe de pagos del mes de <?php echo  ucwords('junio').' de '.$anio;?></h1>
	  </div>
	  <div class="panel-body">
	    <h3 class="text-center">TOTAL <?php echo '$ '.round($junio['PGS_TOTAL'],2); ?></h3>
	    <?php if($junio['PGS_TOTAL']!=0){ ?>
	    <div class="col-md-6">
		  	<div class="panel panel-danger">
			  <div class="panel-heading">
			  	<div class="form-group">
			    	<label class="panel-title col-md-7 text-right">TOTAL EGRESOS</label>
			    	<label class="panel-title col-md-5"><?php echo '$ '.round($junio['PGS_INGRESOS'],2); ?></label>
			    </div>
			  </div>
			  <div class="panel-body">
			  	<form class="form-horizontal">
			  		<div class="form-group">
				    	<label class="col-md-7 text-right">Total sueldos ganados</label>
				    	<div class="col-md-5">			    		
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $junio['PGS_SUELDO_GANADO']; ?>">
				    		</div>	
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label class="col-md-7 text-right">Total valor horas extras</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $junio['PGS_VALOR_HORAS_EXTRAS']; ?>">
				    		</div>	
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label class="col-md-7 text-right">Total comisiones</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $junio['PGS_COMISIONES']; ?>">
				    		</div>	
				    	</div>
				    </div>
			  	</form>
			  </div> <!-- panel-body -->
			</div> <!-- panel -->
	  	</div> <!-- col -->

	  	<div class="col-md-6">
		  	<div class="panel panel-info">
			  <div class="panel-heading">
			    <div class="form-group">
			    	<label class="panel-title col-md-7 text-right">TOTAL RETENCIONES</label>
			    	<label class="panel-title col-md-5"><?php echo '$ '.round($junio['PGS_DESCUENTOS'],2); ?></label>
			    </div>
			  </div>
			  <div class="panel-body">
			  	<form class="form-horizontal">
			  		<div class="form-group">
				    	<label class="col-md-7 text-right">Total aportes IESS</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $junio['PGS_IESS']; ?>">
				    		</div>	
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label class="col-md-7 text-right">Total préstamos quirografarios</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $junio['PGS_QUIROGRAFARIO']; ?>">
				    		</div>	
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label class="col-md-7 text-right">Total anticipos</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $junio['PGS_ANTICIPOS']; ?>">
				    		</div>	
				    	</div>
				    </div>
			  	</form>
			  </div> <!-- panel-body -->
			</div> <!-- panel -->
	  	</div> <!-- col -->
	  	<?php } ?>
	  </div> <!-- panel-body -->
	</div> <!-- end panel general -->	

	
	<div class="panel panel-default">
	  <div class="panel-heading">
	  	<h1 class="panel-title text-center">Informe de pagos del mes de <?php echo  ucwords('julio').' de '.$anio;?></h1>
	  </div>
	  <div class="panel-body">
	    <h3 class="text-center">TOTAL <?php echo '$ '.round($julio['PGS_TOTAL'],2); ?></h3>
	    <?php if($julio['PGS_TOTAL']!=0){ ?>
	    <div class="col-md-6">
		  	<div class="panel panel-danger">
			  <div class="panel-heading">
			  	<div class="form-group">
			    	<label class="panel-title col-md-7 text-right">TOTAL EGRESOS</label>
			    	<label class="panel-title col-md-5"><?php echo '$ '.round($julio['PGS_INGRESOS'],2); ?></label>
			    </div>
			  </div>
			  <div class="panel-body">
			  	<form class="form-horizontal">
			  		<div class="form-group">
				    	<label class="col-md-7 text-right">Total sueldos ganados</label>
				    	<div class="col-md-5">			    		
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $julio['PGS_SUELDO_GANADO']; ?>">
				    		</div>	
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label class="col-md-7 text-right">Total valor horas extras</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $julio['PGS_VALOR_HORAS_EXTRAS']; ?>">
				    		</div>	
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label class="col-md-7 text-right">Total comisiones</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $julio['PGS_COMISIONES']; ?>">
				    		</div>	
				    	</div>
				    </div>
			  	</form>
			  </div> <!-- panel-body -->
			</div> <!-- panel -->
	  	</div> <!-- col -->

	  	<div class="col-md-6">
		  	<div class="panel panel-info">
			  <div class="panel-heading">
			    <div class="form-group">
			    	<label class="panel-title col-md-7 text-right">TOTAL RETENCIONES</label>
			    	<label class="panel-title col-md-5"><?php echo '$ '.round($julio['PGS_DESCUENTOS'],2); ?></label>
			    </div>
			  </div>
			  <div class="panel-body">
			  	<form class="form-horizontal">
			  		<div class="form-group">
				    	<label class="col-md-7 text-right">Total aportes IESS</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $julio['PGS_IESS']; ?>">
				    		</div>	
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label class="col-md-7 text-right">Total préstamos quirografarios</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $julio['PGS_QUIROGRAFARIO']; ?>">
				    		</div>	
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label class="col-md-7 text-right">Total anticipos</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $julio['PGS_ANTICIPOS']; ?>">
				    		</div>	
				    	</div>
				    </div>
			  	</form>
			  </div> <!-- panel-body -->
			</div> <!-- panel -->
	  	</div> <!-- col -->
	  	<?php } ?>
	  </div> <!-- panel-body -->
	</div> <!-- end panel general -->	

	
	<div class="panel panel-default">
	  <div class="panel-heading">
	  	<h1 class="panel-title text-center">Informe de pagos del mes de <?php echo  ucwords('agosto').' de '.$anio;?></h1>
	  </div>
	  <div class="panel-body">
	    <h3 class="text-center">TOTAL <?php echo '$ '.round($agosto['PGS_TOTAL'],2); ?></h3>
	    <?php if($agosto['PGS_TOTAL']!=0){ ?>
	    <div class="col-md-6">
		  	<div class="panel panel-danger">
			  <div class="panel-heading">
			  	<div class="form-group">
			    	<label class="panel-title col-md-7 text-right">TOTAL EGRESOS</label>
			    	<label class="panel-title col-md-5"><?php echo '$ '.round($agosto['PGS_INGRESOS'],2); ?></label>
			    </div>
			  </div>
			  <div class="panel-body">
			  	<form class="form-horizontal">
			  		<div class="form-group">
				    	<label class="col-md-7 text-right">Total sueldos ganados</label>
				    	<div class="col-md-5">			    		
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $agosto['PGS_SUELDO_GANADO']; ?>">
				    		</div>	
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label class="col-md-7 text-right">Total valor horas extras</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $agosto['PGS_VALOR_HORAS_EXTRAS']; ?>">
				    		</div>	
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label class="col-md-7 text-right">Total comisiones</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $agosto['PGS_COMISIONES']; ?>">
				    		</div>	
				    	</div>
				    </div>
			  	</form>
			  </div> <!-- panel-body -->
			</div> <!-- panel -->
	  	</div> <!-- col -->

	  	<div class="col-md-6">
		  	<div class="panel panel-info">
			  <div class="panel-heading">
			    <div class="form-group">
			    	<label class="panel-title col-md-7 text-right">TOTAL RETENCIONES</label>
			    	<label class="panel-title col-md-5"><?php echo '$ '.round($agosto['PGS_DESCUENTOS'],2); ?></label>
			    </div>
			  </div>
			  <div class="panel-body">
			  	<form class="form-horizontal">
			  		<div class="form-group">
				    	<label class="col-md-7 text-right">Total aportes IESS</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $agosto['PGS_IESS']; ?>">
				    		</div>	
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label class="col-md-7 text-right">Total préstamos quirografarios</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $agosto['PGS_QUIROGRAFARIO']; ?>">
				    		</div>	
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label class="col-md-7 text-right">Total anticipos</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $agosto['PGS_ANTICIPOS']; ?>">
				    		</div>	
				    	</div>
				    </div>
			  	</form>
			  </div> <!-- panel-body -->
			</div> <!-- panel -->
	  	</div> <!-- col -->
	  	<?php } ?>
	  </div> <!-- panel-body -->
	</div> <!-- end panel general -->	

	
	<div class="panel panel-default">
	  <div class="panel-heading">
	  	<h1 class="panel-title text-center">Informe de pagos del mes de <?php echo  ucwords('septiembre').' de '.$anio;?></h1>
	  </div>
	  <div class="panel-body">
	    <h3 class="text-center">TOTAL <?php echo '$ '.round($septiembre['PGS_TOTAL'],2); ?></h3>
	    <?php if($septiembre['PGS_TOTAL']!=0){ ?>
	    <div class="col-md-6">
		  	<div class="panel panel-danger">
			  <div class="panel-heading">
			  	<div class="form-group">
			    	<label class="panel-title col-md-7 text-right">TOTAL EGRESOS</label>
			    	<label class="panel-title col-md-5"><?php echo '$ '.round($septiembre['PGS_INGRESOS'],2); ?></label>
			    </div>
			  </div>
			  <div class="panel-body">
			  	<form class="form-horizontal">
			  		<div class="form-group">
				    	<label class="col-md-7 text-right">Total sueldos ganados</label>
				    	<div class="col-md-5">			    		
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $septiembre['PGS_SUELDO_GANADO']; ?>">
				    		</div>	
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label class="col-md-7 text-right">Total valor horas extras</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $septiembre['PGS_VALOR_HORAS_EXTRAS']; ?>">
				    		</div>	
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label class="col-md-7 text-right">Total comisiones</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $septiembre['PGS_COMISIONES']; ?>">
				    		</div>	
				    	</div>
				    </div>
			  	</form>
			  </div> <!-- panel-body -->
			</div> <!-- panel -->
	  	</div> <!-- col -->

	  	<div class="col-md-6">
		  	<div class="panel panel-info">
			  <div class="panel-heading">
			    <div class="form-group">
			    	<label class="panel-title col-md-7 text-right">TOTAL RETENCIONES</label>
			    	<label class="panel-title col-md-5"><?php echo '$ '.round($septiembre['PGS_DESCUENTOS'],2); ?></label>
			    </div>
			  </div>
			  <div class="panel-body">
			  	<form class="form-horizontal">
			  		<div class="form-group">
				    	<label class="col-md-7 text-right">Total aportes IESS</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $septiembre['PGS_IESS']; ?>">
				    		</div>	
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label class="col-md-7 text-right">Total préstamos quirografarios</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $septiembre['PGS_QUIROGRAFARIO']; ?>">
				    		</div>	
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label class="col-md-7 text-right">Total anticipos</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $septiembre['PGS_ANTICIPOS']; ?>">
				    		</div>	
				    	</div>
				    </div>
			  	</form>
			  </div> <!-- panel-body -->
			</div> <!-- panel -->
	  	</div> <!-- col -->
	  	<?php } ?>
	  </div> <!-- panel-body -->
	</div> <!-- end panel general -->	

	
	<div class="panel panel-default">
	  <div class="panel-heading">
	  	<h1 class="panel-title text-center">Informe de pagos del mes de <?php echo  ucwords('octubre').' de '.$anio;?></h1>
	  </div>
	  <div class="panel-body">
	    <h3 class="text-center">TOTAL <?php echo '$ '.round($octubre['PGS_TOTAL'],2); ?></h3>
	    <?php if($octubre['PGS_TOTAL']!=0){ ?>
	    <div class="col-md-6">
		  	<div class="panel panel-danger">
			  <div class="panel-heading">
			  	<div class="form-group">
			    	<label class="panel-title col-md-7 text-right">TOTAL EGRESOS</label>
			    	<label class="panel-title col-md-5"><?php echo '$ '.round($octubre['PGS_INGRESOS'],2); ?></label>
			    </div>
			  </div>
			  <div class="panel-body">
			  	<form class="form-horizontal">
			  		<div class="form-group">
				    	<label class="col-md-7 text-right">Total sueldos ganados</label>
				    	<div class="col-md-5">			    		
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $octubre['PGS_SUELDO_GANADO']; ?>">
				    		</div>	
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label class="col-md-7 text-right">Total valor horas extras</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $octubre['PGS_VALOR_HORAS_EXTRAS']; ?>">
				    		</div>	
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label class="col-md-7 text-right">Total comisiones</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $octubre['PGS_COMISIONES']; ?>">
				    		</div>	
				    	</div>
				    </div>
			  	</form>
			  </div> <!-- panel-body -->
			</div> <!-- panel -->
	  	</div> <!-- col -->

	  	<div class="col-md-6">
		  	<div class="panel panel-info">
			  <div class="panel-heading">
			    <div class="form-group">
			    	<label class="panel-title col-md-7 text-right">TOTAL RETENCIONES</label>
			    	<label class="panel-title col-md-5"><?php echo '$ '.round($octubre['PGS_DESCUENTOS'],2); ?></label>
			    </div>
			  </div>
			  <div class="panel-body">
			  	<form class="form-horizontal">
			  		<div class="form-group">
				    	<label class="col-md-7 text-right">Total aportes IESS</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $octubre['PGS_IESS']; ?>">
				    		</div>	
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label class="col-md-7 text-right">Total préstamos quirografarios</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $octubre['PGS_QUIROGRAFARIO']; ?>">
				    		</div>	
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label class="col-md-7 text-right">Total anticipos</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $octubre['PGS_ANTICIPOS']; ?>">
				    		</div>	
				    	</div>
				    </div>
			  	</form>
			  </div> <!-- panel-body -->
			</div> <!-- panel -->
	  	</div> <!-- col -->
	  	<?php } ?>
	  </div> <!-- panel-body -->
	</div> <!-- end panel general -->	

	
	<div class="panel panel-default">
	  <div class="panel-heading">
	  	<h1 class="panel-title text-center">Informe de pagos del mes de <?php echo  ucwords('noviembre').' de '.$anio;?></h1>
	  </div>
	  <div class="panel-body">
	    <h3 class="text-center">TOTAL <?php echo '$ '.round($noviembre['PGS_TOTAL'],2); ?></h3>
	    <?php if($noviembre['PGS_TOTAL']!=0){ ?>
	    <div class="col-md-6">
		  	<div class="panel panel-danger">
			  <div class="panel-heading">
			  	<div class="form-group">
			    	<label class="panel-title col-md-7 text-right">TOTAL EGRESOS</label>
			    	<label class="panel-title col-md-5"><?php echo '$ '.round($noviembre['PGS_INGRESOS'],2); ?></label>
			    </div>
			  </div>
			  <div class="panel-body">
			  	<form class="form-horizontal">
			  		<div class="form-group">
				    	<label class="col-md-7 text-right">Total sueldos ganados</label>
				    	<div class="col-md-5">			    		
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $noviembre['PGS_SUELDO_GANADO']; ?>">
				    		</div>	
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label class="col-md-7 text-right">Total valor horas extras</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $noviembre['PGS_VALOR_HORAS_EXTRAS']; ?>">
				    		</div>	
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label class="col-md-7 text-right">Total comisiones</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $noviembre['PGS_COMISIONES']; ?>">
				    		</div>	
				    	</div>
				    </div>
			  	</form>
			  </div> <!-- panel-body -->
			</div> <!-- panel -->
	  	</div> <!-- col -->

	  	<div class="col-md-6">
		  	<div class="panel panel-info">
			  <div class="panel-heading">
			    <div class="form-group">
			    	<label class="panel-title col-md-7 text-right">TOTAL RETENCIONES</label>
			    	<label class="panel-title col-md-5"><?php echo '$ '.round($noviembre['PGS_DESCUENTOS'],2); ?></label>
			    </div>
			  </div>
			  <div class="panel-body">
			  	<form class="form-horizontal">
			  		<div class="form-group">
				    	<label class="col-md-7 text-right">Total aportes IESS</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $noviembre['PGS_IESS']; ?>">
				    		</div>	
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label class="col-md-7 text-right">Total préstamos quirografarios</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $noviembre['PGS_QUIROGRAFARIO']; ?>">
				    		</div>	
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label class="col-md-7 text-right">Total anticipos</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $noviembre['PGS_ANTICIPOS']; ?>">
				    		</div>	
				    	</div>
				    </div>
			  	</form>
			  </div> <!-- panel-body -->
			</div> <!-- panel -->
	  	</div> <!-- col -->
	  	<?php } ?>
	  </div> <!-- panel-body -->
	</div> <!-- end panel general -->	

	
	<div class="panel panel-default">
	  <div class="panel-heading">
	  	<h1 class="panel-title text-center">Informe de pagos del mes de <?php echo  ucwords('diciembre').' de '.$anio;?></h1>
	  </div>
	  <div class="panel-body">
	    <h3 class="text-center">TOTAL <?php echo '$ '.round($diciembre['PGS_TOTAL'],2); ?></h3>
	    <?php if($diciembre['PGS_TOTAL']!=0){ ?>
	    <div class="col-md-6">
		  	<div class="panel panel-danger">
			  <div class="panel-heading">
			  	<div class="form-group">
			    	<label class="panel-title col-md-7 text-right">TOTAL EGRESOS</label>
			    	<label class="panel-title col-md-5"><?php echo '$ '.round($diciembre['PGS_INGRESOS'],2); ?></label>
			    </div>
			  </div>
			  <div class="panel-body">
			  	<form class="form-horizontal">
			  		<div class="form-group">
				    	<label class="col-md-7 text-right">Total sueldos ganados</label>
				    	<div class="col-md-5">			    		
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $diciembre['PGS_SUELDO_GANADO']; ?>">
				    		</div>	
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label class="col-md-7 text-right">Total valor horas extras</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $diciembre['PGS_VALOR_HORAS_EXTRAS']; ?>">
				    		</div>	
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label class="col-md-7 text-right">Total comisiones</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $diciembre['PGS_COMISIONES']; ?>">
				    		</div>	
				    	</div>
				    </div>
			  	</form>
			  </div> <!-- panel-body -->
			</div> <!-- panel -->
	  	</div> <!-- col -->

	  	<div class="col-md-6">
		  	<div class="panel panel-info">
			  <div class="panel-heading">
			    <div class="form-group">
			    	<label class="panel-title col-md-7 text-right">TOTAL RETENCIONES</label>
			    	<label class="panel-title col-md-5"><?php echo '$ '.round($diciembre['PGS_DESCUENTOS'],2); ?></label>
			    </div>
			  </div>
			  <div class="panel-body">
			  	<form class="form-horizontal">
			  		<div class="form-group">
				    	<label class="col-md-7 text-right">Total aportes IESS</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $diciembre['PGS_IESS']; ?>">
				    		</div>	
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label class="col-md-7 text-right">Total préstamos quirografarios</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $diciembre['PGS_QUIROGRAFARIO']; ?>">
				    		</div>	
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label class="col-md-7 text-right">Total anticipos</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $diciembre['PGS_ANTICIPOS']; ?>">
				    		</div>	
				    	</div>
				    </div>
			  	</form>
			  </div> <!-- panel-body -->
			</div> <!-- panel -->
	  	</div> <!-- col -->
	  	<?php } ?>
	  </div> <!-- panel-body -->
	</div> <!-- end panel general -->	
</div> <!-- end container -->