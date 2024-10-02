<?php
include '_autoload.php';
$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$pde_nota_credito = PdeNotaCredito::getOxId($id);

?>
<div class='ficha'>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Descripcion') ?></div>
		<div class='dato'><?php Gral::_echo($pde_nota_credito->getDescripcion()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('PrvProveedor') ?></div>
		<div class='dato'><?php Gral::_echo($pde_nota_credito->getPrvProveedor()->getDescripcion()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('PdeTipoNotaCredito') ?></div>
		<div class='dato'><?php Gral::_echo($pde_nota_credito->getPdeTipoNotaCredito()->getDescripcion()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('GralCondicionIva') ?></div>
		<div class='dato'><?php Gral::_echo($pde_nota_credito->getGralCondicionIva()->getDescripcion()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('GralTipoPersoneria') ?></div>
		<div class='dato'><?php Gral::_echo($pde_nota_credito->getGralTipoPersoneria()->getDescripcion()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('GralEmpresa') ?></div>
		<div class='dato'><?php Gral::_echo($pde_nota_credito->getGralEmpresa()->getDescripcion()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Numero de Nota de Credito') ?></div>
		<div class='dato'><?php Gral::_echo($pde_nota_credito->getNumeroNotaCredito()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('Cae') ?></div>
		<div class='dato'><?php Gral::_echo($pde_nota_credito->getCae()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Fecha de Emision') ?></div>
		<div class='dato'><?php Gral::_echo($pde_nota_credito->getFechaEmision()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('PersonaDescripcion') ?></div>
		<div class='dato'><?php Gral::_echo($pde_nota_credito->getPersonaDescripcion()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Razon Social') ?></div>
		<div class='dato'><?php Gral::_echo($pde_nota_credito->getRazonSocial()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('Domicilio Legal') ?></div>
		<div class='dato'><?php Gral::_echo($pde_nota_credito->getDomicilioLegal()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('CUIT') ?></div>
		<div class='dato'><?php Gral::_echo($pde_nota_credito->getCuit()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('Codigo') ?></div>
		<div class='dato'><?php Gral::_echo($pde_nota_credito->getCodigo()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Observaciones') ?></div>
		<div class='dato'><?php Gral::_echo($pde_nota_credito->getObservacion()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('orden') ?></div>
		<div class='dato'><?php Gral::_echo($pde_nota_credito->getOrden()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('estado') ?></div>
		<div class='dato'><?php Gral::_echo(GralSiNo::getOxId($pde_nota_credito->getEstado())->getDescripcion()) ?></div>
	</div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
	<div class='par '>
		<div class='label'><?php Lang::_lang('Creado') ?></div>
		<div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_credito->getCreado())) ?></div>
	</div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Creado Por') ?></div>
		<div class='dato'><?php Gral::_echo($pde_nota_credito->getCreadoPorDescripcion()) ?></div>
	</div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
	<div class='par '>
		<div class='label'><?php Lang::_lang('Modificado') ?></div>
		<div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_credito->getModificado())) ?></div>
	</div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Modificado Por') ?></div>
		<div class='dato'><?php Gral::_echo($pde_nota_credito->getModificadoPorDescripcion()) ?></div>
	</div>
<?php } ?>

</div>

