<?php
include '_autoload.php';
$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$prv_insumo = PrvInsumo::getOxId($id);

?>
<div class='ficha'>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Descripcion') ?></div>
		<div class='dato'><?php Gral::_echo($prv_insumo->getDescripcion()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('InsInsumo') ?></div>
		<div class='dato'><?php Gral::_echo($prv_insumo->getInsInsumo()->getDescripcion()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('PrvProveedor') ?></div>
		<div class='dato'><?php Gral::_echo($prv_insumo->getPrvProveedor()->getDescripcion()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('Cod Proveedor') ?></div>
		<div class='dato'><?php Gral::_echo($prv_insumo->getCodigoProveedor()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('InsMarca') ?></div>
		<div class='dato'><?php Gral::_echo($prv_insumo->getInsMarca()->getDescripcion()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('Cod Marca') ?></div>
		<div class='dato'><?php Gral::_echo($prv_insumo->getCodigoMarca()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('InsMatriz') ?></div>
		<div class='dato'><?php Gral::_echo($prv_insumo->getInsMatriz()->getDescripcion()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('InsMarcaPieza') ?></div>
		<div class='dato'><?php Gral::_echo(($prv_insumo->getInsMarcaPieza() != 'null') ? InsMarca::getOxId($prv_insumo->getInsMarcaPieza())->getDescripcion() : '') ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Cod Pieza') ?></div>
		<div class='dato'><?php Gral::_echo($prv_insumo->getCodigoPieza()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('Codigo') ?></div>
		<div class='dato'><?php Gral::_echo($prv_insumo->getCodigo()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Fecha') ?></div>
		<div class='dato'><?php Gral::_echo($prv_insumo->getFechaActualizacion()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('Observaciones') ?></div>
		<div class='dato'><?php Gral::_echo($prv_insumo->getObservacion()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('orden') ?></div>
		<div class='dato'><?php Gral::_echo($prv_insumo->getOrden()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('estado') ?></div>
		<div class='dato'><?php Gral::_echo($prv_insumo->getOrden()) ?></div>
	</div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Creado') ?></div>
		<div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_insumo->getCreado())) ?></div>
	</div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
	<div class='par '>
		<div class='label'><?php Lang::_lang('Creado Por') ?></div>
		<div class='dato'><?php Gral::_echo($prv_insumo->getCreadoPorDescripcion()) ?></div>
	</div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Modificado') ?></div>
		<div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_insumo->getModificado())) ?></div>
	</div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
	<div class='par '>
		<div class='label'><?php Lang::_lang('Modificado Por') ?></div>
		<div class='dato'><?php Gral::_echo($prv_insumo->getModificadoPorDescripcion()) ?></div>
	</div>
<?php } ?>

</div>

