<?php 
$pagos_mensual['PGS_TOTAL'] = $pagos_mensual['PGS_INGRESOS'] - $pagos_mensual['PGS_DESCUENTOS'];
// total = descuentos(retenciones)-ingresos(egresos)
?>

<div class="container">
  	<div class="panel panel-default">
	  <div class="panel-heading">
	  	<h1 class="panel-title text-center">Informe de pagos del mes de <?php echo  $mes;?></h1>
	  </div>
	  <div class="panel-body">
	    <h3 class="text-center">TOTAL <?php echo $pagos_mensual['PGS_TOTAL']; ?></h3>
	    <div class="col-md-6">
		  	<div class="panel panel-danger">
			  <div class="panel-heading">
			  	<div class="form-group">
			    	<label class="panel-title col-md-7 text-right">TOTAL EGRESOS</label>
			    	<label class="panel-title col-md-5"><?php echo '$ '.$pagos_mensual['PGS_INGRESOS']; ?></label>
			    </div>
			  </div>
			  <div class="panel-body">
			  	<form class="form-horizontal">
			  		<div class="form-group">
				    	<label class="col-md-7 text-right">Total sueldos ganados</label>
				    	<div class="col-md-5">			    		
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $pagos_mensual['PGS_SUELDO_GANADO']; ?>">
				    		</div>	
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label class="col-md-7 text-right">Total valor horas extras</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $pagos_mensual['PGS_VALOR_HORAS_EXTRAS']; ?>">
				    		</div>	
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label class="col-md-7 text-right">Total comisiones</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $pagos_mensual['PGS_COMISIONES']; ?>">
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
			    	<label class="panel-title col-md-5"><?php echo '$ '.$pagos_mensual['PGS_DESCUENTOS']; ?></label>
			    </div>
			  </div>
			  <div class="panel-body">
			  	<form class="form-horizontal">
			  		<div class="form-group">
				    	<label class="col-md-7 text-right">Total aportes IESS</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $pagos_mensual['PGS_IESS']; ?>">
				    		</div>	
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label class="col-md-7 text-right">Total préstamos quirografarios</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $pagos_mensual['PGS_QUIROGRAFARIO']; ?>">
				    		</div>	
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label class="col-md-7 text-right">Total anticipos</label>
				    	<div class="col-md-5">
				    		<div class="input-group">
				    			<div class="input-group-addon">$</div>
				    			<input type="text" class="form-control" readonly value="<?php echo $pagos_mensual['PGS_ANTICIPOS']; ?>">
				    		</div>	
				    	</div>
				    </div>
			  	</form>
			  </div> <!-- panel-body -->
			</div> <!-- panel -->
	  	</div> <!-- col -->
	  </div> <!-- panel-body -->
	</div>

	  	
</div>