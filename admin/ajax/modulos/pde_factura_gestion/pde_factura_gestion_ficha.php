<?php
include '_autoload.php';
$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$pde_factura = PdeFactura::getOxId($id);

?>
<div class='ficha'>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Descripcion') ?></div>
		<div class='dato'><?php Gral::_echo($pde_factura->getDescripcion()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('PrvProveedor') ?></div>
		<div class='dato'><?php Gral::_echo($pde_factura->getPrvProveedor()->getDescripcion()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('PdeFacturaTipoEstado') ?></div>
		<div class='dato'><?php Gral::_echo($pde_factura->getPdeFacturaTipoEstado()->getDescripcion()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('PdeTipoFactura') ?></div>
		<div class='dato'><?php Gral::_echo($pde_factura->getPdeTipoFactura()->getDescripcion()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('GralCondicionIva') ?></div>
		<div class='dato'><?php Gral::_echo($pde_factura->getGralCondicionIva()->getDescripcion()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('GralTipoPersoneria') ?></div>
		<div class='dato'><?php Gral::_echo($pde_factura->getGralTipoPersoneria()->getDescripcion()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Numero de Factura') ?></div>
		<div class='dato'><?php Gral::_echo($pde_factura->getNumeroFactura()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('Fecha de Emision') ?></div>
		<div class='dato'><?php Gral::_echo($pde_factura->getFechaEmision()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('PersonaDescripcion') ?></div>
		<div class='dato'><?php Gral::_echo($pde_factura->getPersonaDescripcion()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('Razon Social') ?></div>
		<div class='dato'><?php Gral::_echo($pde_factura->getRazonSocial()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Domicilio Legal') ?></div>
		<div class='dato'><?php Gral::_echo($pde_factura->getDomicilioLegal()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('CUIT') ?></div>
		<div class='dato'><?php Gral::_echo($pde_factura->getCuit()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Codigo') ?></div>
		<div class='dato'><?php Gral::_echo($pde_factura->getCodigo()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('Observaciones') ?></div>
		<div class='dato'><?php Gral::_echo($pde_factura->getObservacion()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('orden') ?></div>
		<div class='dato'><?php Gral::_echo($pde_factura->getOrden()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('estado') ?></div>
		<div class='dato'><?php Gral::_echo(GralSiNo::getOxId($pde_factura->getEstado())->getDescripcion()) ?></div>
	</div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Creado') ?></div>
		<div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_factura->getCreado())) ?></div>
	</div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
	<div class='par '>
		<div class='label'><?php Lang::_lang('Creado Por') ?></div>
		<div class='dato'><?php Gral::_echo($pde_factura->getCreadoPorDescripcion()) ?></div>
	</div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Modificado') ?></div>
		<div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_factura->getModificado())) ?></div>
	</div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
	<div class='par '>
		<div class='label'><?php Lang::_lang('Modificado Por') ?></div>
		<div class='dato'><?php Gral::_echo($pde_factura->getModificadoPorDescripcion()) ?></div>
	</div>
<?php } ?>

</div>

