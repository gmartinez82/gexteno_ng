<?php
include '_autoload.php';
$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$vta_presupuesto_conflicto = VtaPresupuestoConflicto::getOxId($id);

?>
<div class='ficha'>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Descripcion') ?></div>
		<div class='dato'><?php Gral::_echo($vta_presupuesto_conflicto->getDescripcion()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('VtaPresupuestoInsInsumo') ?></div>
		<div class='dato'><?php Gral::_echo($vta_presupuesto_conflicto->getVtaPresupuestoInsInsumo()->getDescripcion()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Imp Inicial') ?></div>
		<div class='dato'><?php Gral::_echo($vta_presupuesto_conflicto->getImporteInicial()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('Imp Actualizado') ?></div>
		<div class='dato'><?php Gral::_echo($vta_presupuesto_conflicto->getImporteActualizado()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Imp Resuelto') ?></div>
		<div class='dato'><?php Gral::_echo($vta_presupuesto_conflicto->getImporteResuelto()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('Codigo') ?></div>
		<div class='dato'><?php Gral::_echo($vta_presupuesto_conflicto->getCodigo()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Observaciones') ?></div>
		<div class='dato'><?php Gral::_echo($vta_presupuesto_conflicto->getObservacion()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('orden') ?></div>
		<div class='dato'><?php Gral::_echo($vta_presupuesto_conflicto->getOrden()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('estado') ?></div>
		<div class='dato'><?php Gral::_echo(GralSiNo::getOxId($vta_presupuesto_conflicto->getEstado())->getDescripcion()) ?></div>
	</div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
	<div class='par '>
		<div class='label'><?php Lang::_lang('Creado') ?></div>
		<div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_presupuesto_conflicto->getCreado())) ?></div>
	</div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Creado Por') ?></div>
		<div class='dato'><?php Gral::_echo($vta_presupuesto_conflicto->getCreadoPorDescripcion()) ?></div>
	</div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
	<div class='par '>
		<div class='label'><?php Lang::_lang('Modificado') ?></div>
		<div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_presupuesto_conflicto->getModificado())) ?></div>
	</div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Modificado Por') ?></div>
		<div class='dato'><?php Gral::_echo($vta_presupuesto_conflicto->getModificadoPorDescripcion()) ?></div>
	</div>
<?php } ?>

</div>

