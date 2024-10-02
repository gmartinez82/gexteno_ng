<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$pde_oc_agrupacion = PdeOcAgrupacion::getOxId($id);

?>
<div class='ficha'>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Descripcion') ?></div>
		<div class='dato'><?php Gral::_echo($pde_oc_agrupacion->getDescripcion()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('Codigo') ?></div>
		<div class='dato'><?php Gral::_echo($pde_oc_agrupacion->getCodigo()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('PdePedido') ?></div>
		<div class='dato'><?php Gral::_echo($pde_oc_agrupacion->getPdePedido()->getDescripcion()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('PdeCotizacion') ?></div>
		<div class='dato'><?php Gral::_echo($pde_oc_agrupacion->getPdeCotizacion()->getDescripcion()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('PrvProveedor') ?></div>
		<div class='dato'><?php Gral::_echo($pde_oc_agrupacion->getPrvProveedor()->getDescripcion()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('InsInsumo') ?></div>
		<div class='dato'><?php Gral::_echo($pde_oc_agrupacion->getInsInsumo()->getDescripcion()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('InsMarca') ?></div>
		<div class='dato'><?php Gral::_echo($pde_oc_agrupacion->getInsMarca()->getDescripcion()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('PdeCentroRecepcion') ?></div>
		<div class='dato'><?php Gral::_echo($pde_oc_agrupacion->getPdeCentroRecepcion()->getDescripcion()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Cantidad') ?></div>
		<div class='dato'><?php Gral::_echo($pde_oc_agrupacion->getCantidad()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('Fecha Entrega') ?></div>
		<div class='dato'><?php Gral::_echo($pde_oc_agrupacion->getFechaEntrega()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Importe Unidad') ?></div>
		<div class='dato'><?php Gral::_echo($pde_oc_agrupacion->getImporteUnidad()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('Importe Total') ?></div>
		<div class='dato'><?php Gral::_echo($pde_oc_agrupacion->getImporteTotal()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Vencimiento') ?></div>
		<div class='dato'><?php Gral::_echo($pde_oc_agrupacion->getVencimiento()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('Observaciones') ?></div>
		<div class='dato'><?php Gral::_echo($pde_oc_agrupacion->getObservacion()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('orden') ?></div>
		<div class='dato'><?php Gral::_echo($pde_oc_agrupacion->getOrden()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('estado') ?></div>
		<div class='dato'><?php Gral::_echo($pde_oc_agrupacion->getOrden()) ?></div>
	</div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Creado') ?></div>
		<div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc_agrupacion->getCreado())) ?></div>
	</div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
	<div class='par '>
		<div class='label'><?php Lang::_lang('Creado Por') ?></div>
		<div class='dato'><?php Gral::_echo($pde_oc_agrupacion->getCreadoPorDescripcion()) ?></div>
	</div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Modificado') ?></div>
		<div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc_agrupacion->getModificado())) ?></div>
	</div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
	<div class='par '>
		<div class='label'><?php Lang::_lang('Modificado Por') ?></div>
		<div class='dato'><?php Gral::_echo($pde_oc_agrupacion->getModificadoPorDescripcion()) ?></div>
	</div>
<?php } ?>

</div>

