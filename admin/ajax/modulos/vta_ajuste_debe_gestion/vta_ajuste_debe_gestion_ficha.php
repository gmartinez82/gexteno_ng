<?php
include '_autoload.php';
$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$vta_ajuste_debe = VtaAjusteDebe::getOxId($id);

?>
<div class='ficha'>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Descripcion') ?></div>
		<div class='dato'><?php Gral::_echo($vta_ajuste_debe->getDescripcion()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('CliCliente') ?></div>
		<div class='dato'><?php Gral::_echo($vta_ajuste_debe->getCliCliente()->getDescripcion()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('VtaAjusteDebeTipoEstado') ?></div>
		<div class='dato'><?php Gral::_echo($vta_ajuste_debe->getVtaAjusteDebeTipoEstado()->getDescripcion()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('VtaTipoAjusteDebe') ?></div>
		<div class='dato'><?php Gral::_echo($vta_ajuste_debe->getVtaTipoAjusteDebe()->getDescripcion()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('GralCondicionIva') ?></div>
		<div class='dato'><?php Gral::_echo($vta_ajuste_debe->getGralCondicionIva()->getDescripcion()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('GralTipoPersoneria') ?></div>
		<div class='dato'><?php Gral::_echo($vta_ajuste_debe->getGralTipoPersoneria()->getDescripcion()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Numero de AjusteDebe') ?></div>
		<div class='dato'><?php Gral::_echo($vta_ajuste_debe->getNumeroAjusteDebe()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('Fecha de Emision') ?></div>
		<div class='dato'><?php Gral::_echo($vta_ajuste_debe->getFechaEmision()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('PersonaDescripcion') ?></div>
		<div class='dato'><?php Gral::_echo($vta_ajuste_debe->getPersonaDescripcion()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('Razon Social') ?></div>
		<div class='dato'><?php Gral::_echo($vta_ajuste_debe->getRazonSocial()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Domicilio Legal') ?></div>
		<div class='dato'><?php Gral::_echo($vta_ajuste_debe->getDomicilioLegal()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('CUIT') ?></div>
		<div class='dato'><?php Gral::_echo($vta_ajuste_debe->getCuit()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Codigo') ?></div>
		<div class='dato'><?php Gral::_echo($vta_ajuste_debe->getCodigo()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('Observaciones') ?></div>
		<div class='dato'><?php Gral::_echo($vta_ajuste_debe->getObservacion()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('orden') ?></div>
		<div class='dato'><?php Gral::_echo($vta_ajuste_debe->getOrden()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('estado') ?></div>
		<div class='dato'><?php Gral::_echo(GralSiNo::getOxId($vta_ajuste_debe->getEstado())->getDescripcion()) ?></div>
	</div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Creado') ?></div>
		<div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_ajuste_debe->getCreado())) ?></div>
	</div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
	<div class='par '>
		<div class='label'><?php Lang::_lang('Creado Por') ?></div>
		<div class='dato'><?php Gral::_echo($vta_ajuste_debe->getCreadoPorDescripcion()) ?></div>
	</div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Modificado') ?></div>
		<div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_ajuste_debe->getModificado())) ?></div>
	</div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
	<div class='par '>
		<div class='label'><?php Lang::_lang('Modificado Por') ?></div>
		<div class='dato'><?php Gral::_echo($vta_ajuste_debe->getModificadoPorDescripcion()) ?></div>
	</div>
<?php } ?>

</div>

