<?php
include '_autoload.php';
$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$ins_stock_resumen = InsStockResumen::getOxId($id);

?>
<div class='ficha'>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Descripcion') ?></div>
		<div class='dato'><?php Gral::_echo($ins_stock_resumen->getDescripcion()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('InsInsumo') ?></div>
		<div class='dato'><?php Gral::_echo($ins_stock_resumen->getInsInsumo()->getDescripcion()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('PanPanol') ?></div>
		<div class='dato'><?php Gral::_echo($ins_stock_resumen->getPanPanol()->getDescripcion()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('Codigo') ?></div>
		<div class='dato'><?php Gral::_echo($ins_stock_resumen->getCodigo()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Cantidad') ?></div>
		<div class='dato'><?php Gral::_echo($ins_stock_resumen->getCantidad()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('Cant Pasivo') ?></div>
		<div class='dato'><?php Gral::_echo($ins_stock_resumen->getCantidadPasivo()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Observaciones') ?></div>
		<div class='dato'><?php Gral::_echo($ins_stock_resumen->getObservacion()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('orden') ?></div>
		<div class='dato'><?php Gral::_echo($ins_stock_resumen->getOrden()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('estado') ?></div>
		<div class='dato'><?php Gral::_echo($ins_stock_resumen->getOrden()) ?></div>
	</div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
	<div class='par '>
		<div class='label'><?php Lang::_lang('Creado') ?></div>
		<div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_stock_resumen->getCreado())) ?></div>
	</div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Creado Por') ?></div>
		<div class='dato'><?php Gral::_echo($ins_stock_resumen->getCreadoPorDescripcion()) ?></div>
	</div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
	<div class='par '>
		<div class='label'><?php Lang::_lang('Modificado') ?></div>
		<div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_stock_resumen->getModificado())) ?></div>
	</div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Modificado Por') ?></div>
		<div class='dato'><?php Gral::_echo($ins_stock_resumen->getModificadoPorDescripcion()) ?></div>
	</div>
<?php } ?>

</div>

