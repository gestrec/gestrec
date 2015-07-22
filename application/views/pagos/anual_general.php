<?php
$enero['PGS_TOTAL'] = $enero['PGS_DESCUENTOS'] - $enero['PGS_INGRESOS'];
$febrero['PGS_TOTAL'] = $febrero['PGS_DESCUENTOS'] - $febrero['PGS_INGRESOS'];
$marzo['PGS_TOTAL'] = $marzo['PGS_DESCUENTOS'] - $marzo['PGS_INGRESOS'];
$abril['PGS_TOTAL'] = $abril['PGS_DESCUENTOS'] - $abril['PGS_INGRESOS'];
$mayo['PGS_TOTAL'] = $mayo['PGS_DESCUENTOS'] - $mayo['PGS_INGRESOS'];
$junio['PGS_TOTAL'] = $junio['PGS_DESCUENTOS'] - $junio['PGS_INGRESOS'];
$julio['PGS_TOTAL'] = $julio['PGS_DESCUENTOS'] - $julio['PGS_INGRESOS'];
$agosto['PGS_TOTAL'] = $agosto['PGS_DESCUENTOS'] - $agosto['PGS_INGRESOS'];
$septiembre['PGS_TOTAL'] = $septiembre['PGS_DESCUENTOS'] - $septiembre['PGS_INGRESOS'];
$octubre['PGS_TOTAL'] = $octubre['PGS_DESCUENTOS'] - $octubre['PGS_INGRESOS'];
$noviembre['PGS_TOTAL'] = $noviembre['PGS_DESCUENTOS'] - $noviembre['PGS_INGRESOS'];
$diciembre['PGS_TOTAL'] = $diciembre['PGS_DESCUENTOS'] - $diciembre['PGS_INGRESOS'];
// total = descuentos(retenciones)-ingresos(egresos)
?>

<div class="container">
  	
  	<div class="panel panel-default">
	  <div class="panel-heading">
	  	<h1 class="panel-title text-center">Informe de pagos del mes de <?php echo  ucwords('enero').' de '.$anio;?></h1>
	  </div>
	  <div class="panel-body">
	    <h3 class="text-center">TOTAL <?php echo $enero['PGS_TOTAL']; ?></h3>
	    <?php if($enero['PGS_TOTAL']!=0){ ?>
	    <div class="col-md-6">
		  	<div class="panel panel-danger">
			  <div class="panel-heading">
			  	<div class="form-group">
			    	<label class="panel-title col-md-7 text-right">TOTAL EGRESOS</label>
			    	<label class="panel-title col-md-5"><?php echo '$ '.$enero['PGS_INGRESOS']; ?></label>
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
			    	<label class="panel-title col-md-5"><?php echo '$ '.$enero['PGS_DESCUENTOS']; ?></label>
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
	    <h3 class="text-center">TOTAL <?php echo $febrero['PGS_TOTAL']; ?></h3>
	    <?php if($febrero['PGS_TOTAL']!=0){ ?>
	    <div class="col-md-6">
		  	<div class="panel panel-danger">
			  <div class="panel-heading">
			  	<div class="form-group">
			    	<label class="panel-title col-md-7 text-right">TOTAL EGRESOS</label>
			    	<label class="panel-title col-md-5"><?php echo '$ '.$febrero['PGS_INGRESOS']; ?></label>
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
			    	<label class="panel-title col-md-5"><?php echo '$ '.$febrero['PGS_DESCUENTOS']; ?></label>
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
	    <h3 class="text-center">TOTAL <?php echo $marzo['PGS_TOTAL']; ?></h3>
	    <?php if($marzo['PGS_TOTAL']!=0){ ?>
	    <div class="col-md-6">
		  	<div class="panel panel-danger">
			  <div class="panel-heading">
			  	<div class="form-group">
			    	<label class="panel-title col-md-7 text-right">TOTAL EGRESOS</label>
			    	<label class="panel-title col-md-5"><?php echo '$ '.$marzo['PGS_INGRESOS']; ?></label>
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
			    	<label class="panel-title col-md-5"><?php echo '$ '.$marzo['PGS_DESCUENTOS']; ?></label>
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
	    <h3 class="text-center">TOTAL <?php echo $abril['PGS_TOTAL']; ?></h3>
	    <?php if($abril['PGS_TOTAL']!=0){ ?>
	    <div class="col-md-6">
		  	<div class="panel panel-danger">
			  <div class="panel-heading">
			  	<div class="form-group">
			    	<label class="panel-title col-md-7 text-right">TOTAL EGRESOS</label>
			    	<label class="panel-title col-md-5"><?php echo '$ '.$abril['PGS_INGRESOS']; ?></label>
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
			    	<label class="panel-title col-md-5"><?php echo '$ '.$abril['PGS_DESCUENTOS']; ?></label>
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
	    <h3 class="text-center">TOTAL <?php echo $mayo['PGS_TOTAL']; ?></h3>
	    <?php if($mayo['PGS_TOTAL']!=0){ ?>
	    <div class="col-md-6">
		  	<div class="panel panel-danger">
			  <div class="panel-heading">
			  	<div class="form-group">
			    	<label class="panel-title col-md-7 text-right">TOTAL EGRESOS</label>
			    	<label class="panel-title col-md-5"><?php echo '$ '.$mayo['PGS_INGRESOS']; ?></label>
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
			    	<label class="panel-title col-md-5"><?php echo '$ '.$mayo['PGS_DESCUENTOS']; ?></label>
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
	    <h3 class="text-center">TOTAL <?php echo $junio['PGS_TOTAL']; ?></h3>
	    <?php if($junio['PGS_TOTAL']!=0){ ?>
	    <div class="col-md-6">
		  	<div class="panel panel-danger">
			  <div class="panel-heading">
			  	<div class="form-group">
			    	<label class="panel-title col-md-7 text-right">TOTAL EGRESOS</label>
			    	<label class="panel-title col-md-5"><?php echo '$ '.$junio['PGS_INGRESOS']; ?></label>
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
			    	<label class="panel-title col-md-5"><?php echo '$ '.$junio['PGS_DESCUENTOS']; ?></label>
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
	    <h3 class="text-center">TOTAL <?php echo $julio['PGS_TOTAL']; ?></h3>
	    <?php if($julio['PGS_TOTAL']!=0){ ?>
	    <div class="col-md-6">
		  	<div class="panel panel-danger">
			  <div class="panel-heading">
			  	<div class="form-group">
			    	<label class="panel-title col-md-7 text-right">TOTAL EGRESOS</label>
			    	<label class="panel-title col-md-5"><?php echo '$ '.$julio['PGS_INGRESOS']; ?></label>
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
			    	<label class="panel-title col-md-5"><?php echo '$ '.$julio['PGS_DESCUENTOS']; ?></label>
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
	    <h3 class="text-center">TOTAL <?php echo $agosto['PGS_TOTAL']; ?></h3>
	    <?php if($agosto['PGS_TOTAL']!=0){ ?>
	    <div class="col-md-6">
		  	<div class="panel panel-danger">
			  <div class="panel-heading">
			  	<div class="form-group">
			    	<label class="panel-title col-md-7 text-right">TOTAL EGRESOS</label>
			    	<label class="panel-title col-md-5"><?php echo '$ '.$agosto['PGS_INGRESOS']; ?></label>
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
			    	<label class="panel-title col-md-5"><?php echo '$ '.$agosto['PGS_DESCUENTOS']; ?></label>
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
	    <h3 class="text-center">TOTAL <?php echo $septiembre['PGS_TOTAL']; ?></h3>
	    <?php if($septiembre['PGS_TOTAL']!=0){ ?>
	    <div class="col-md-6">
		  	<div class="panel panel-danger">
			  <div class="panel-heading">
			  	<div class="form-group">
			    	<label class="panel-title col-md-7 text-right">TOTAL EGRESOS</label>
			    	<label class="panel-title col-md-5"><?php echo '$ '.$septiembre['PGS_INGRESOS']; ?></label>
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
			    	<label class="panel-title col-md-5"><?php echo '$ '.$septiembre['PGS_DESCUENTOS']; ?></label>
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
	    <h3 class="text-center">TOTAL <?php echo $octubre['PGS_TOTAL']; ?></h3>
	    <?php if($octubre['PGS_TOTAL']!=0){ ?>
	    <div class="col-md-6">
		  	<div class="panel panel-danger">
			  <div class="panel-heading">
			  	<div class="form-group">
			    	<label class="panel-title col-md-7 text-right">TOTAL EGRESOS</label>
			    	<label class="panel-title col-md-5"><?php echo '$ '.$octubre['PGS_INGRESOS']; ?></label>
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
			    	<label class="panel-title col-md-5"><?php echo '$ '.$octubre['PGS_DESCUENTOS']; ?></label>
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
	    <h3 class="text-center">TOTAL <?php echo $noviembre['PGS_TOTAL']; ?></h3>
	    <?php if($noviembre['PGS_TOTAL']!=0){ ?>
	    <div class="col-md-6">
		  	<div class="panel panel-danger">
			  <div class="panel-heading">
			  	<div class="form-group">
			    	<label class="panel-title col-md-7 text-right">TOTAL EGRESOS</label>
			    	<label class="panel-title col-md-5"><?php echo '$ '.$noviembre['PGS_INGRESOS']; ?></label>
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
			    	<label class="panel-title col-md-5"><?php echo '$ '.$noviembre['PGS_DESCUENTOS']; ?></label>
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
	    <h3 class="text-center">TOTAL <?php echo $diciembre['PGS_TOTAL']; ?></h3>
	    <?php if($diciembre['PGS_TOTAL']!=0){ ?>
	    <div class="col-md-6">
		  	<div class="panel panel-danger">
			  <div class="panel-heading">
			  	<div class="form-group">
			    	<label class="panel-title col-md-7 text-right">TOTAL EGRESOS</label>
			    	<label class="panel-title col-md-5"><?php echo '$ '.$diciembre['PGS_INGRESOS']; ?></label>
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
			    	<label class="panel-title col-md-5"><?php echo '$ '.$diciembre['PGS_DESCUENTOS']; ?></label>
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