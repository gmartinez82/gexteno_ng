<?php 
$user = UsUsuario::autenticado();

?>
<div class='ficha'>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Descripcion') ?></div>
		<div class='dato'><?php Gral::_echo($vta_presupuesto->getDescripcion()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('CliCliente') ?></div>
		<div class='dato'><?php Gral::_echo($vta_presupuesto->getCliCliente()->getDescripcion()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('VtaVendedor') ?></div>
		<div class='dato'><?php Gral::_echo($vta_presupuesto->getVtaVendedor()->getDescripcion()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('VtaComisionista') ?></div>
		<div class='dato'><?php Gral::_echo($vta_presupuesto->getVtaComisionista()->getDescripcion()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('GralFpFormaPago') ?></div>
		<div class='dato'><?php Gral::_echo($vta_presupuesto->getGralFpFormaPago()->getDescripcion()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('GralFpCuota') ?></div>
		<div class='dato'><?php Gral::_echo($vta_presupuesto->getGralFpCuota()->getDescripcion()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('InsTipoListaPrecio') ?></div>
		<div class='dato'><?php Gral::_echo($vta_presupuesto->getInsTipoListaPrecio()->getDescripcion()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('VtaPresupuestoTipoEstado') ?></div>
		<div class='dato'><?php Gral::_echo($vta_presupuesto->getVtaPresupuestoTipoEstado()->getDescripcion()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('VtaTipoFactura') ?></div>
		<div class='dato'><?php Gral::_echo($vta_presupuesto->getVtaTipoFactura()->getDescripcion()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('Fecha') ?></div>
		<div class='dato'><?php Gral::_echo($vta_presupuesto->getFecha()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Fecha de Vencimiento') ?></div>
		<div class='dato'><?php Gral::_echo($vta_presupuesto->getFechaVencimiento()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('Fecha de Entrega') ?></div>
		<div class='dato'><?php Gral::_echo($vta_presupuesto->getFechaEntrega()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Imp Total') ?></div>
		<div class='dato'><?php Gral::_echo($vta_presupuesto->getImporteTotal()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('Cant Items') ?></div>
		<div class='dato'><?php Gral::_echo($vta_presupuesto->getCantidadItems()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Nota Interna') ?></div>
		<div class='dato'><?php Gral::_echo($vta_presupuesto->getNotaInterna()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('Codigo') ?></div>
		<div class='dato'><?php Gral::_echo($vta_presupuesto->getCodigo()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Observaciones') ?></div>
		<div class='dato'><?php Gral::_echo($vta_presupuesto->getObservacion()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('orden') ?></div>
		<div class='dato'><?php Gral::_echo($vta_presupuesto->getOrden()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('estado') ?></div>
		<div class='dato'><?php Gral::_echo(GralSiNo::getOxId($vta_presupuesto->getEstado())->getDescripcion()) ?></div>
	</div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
	<div class='par '>
		<div class='label'><?php Lang::_lang('Creado') ?></div>
		<div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_presupuesto->getCreado())) ?></div>
	</div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Creado Por') ?></div>
		<div class='dato'><?php Gral::_echo($vta_presupuesto->getCreadoPorDescripcion()) ?></div>
	</div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
	<div class='par '>
		<div class='label'><?php Lang::_lang('Modificado') ?></div>
		<div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_presupuesto->getModificado())) ?></div>
	</div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Modificado Por') ?></div>
		<div class='dato'><?php Gral::_echo($vta_presupuesto->getModificadoPorDescripcion()) ?></div>
	</div>
<?php } ?>

</div>

