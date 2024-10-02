<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$pdi_pedido_destinatario = PdiPedidoDestinatario::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($pdi_pedido_destinatario->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('PdiPedido') ?></div>
        <div class='dato'><?php Gral::_echo($pdi_pedido_destinatario->getPdiPedido()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('UsUsuario') ?></div>
        <div class='dato'><?php Gral::_echo($pdi_pedido_destinatario->getUsUsuario()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Observado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($pdi_pedido_destinatario->getObservado())->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Leido') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($pdi_pedido_destinatario->getLeido())->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Destacado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($pdi_pedido_destinatario->getDestacado())->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Aviso Email') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($pdi_pedido_destinatario->getAvisoEmail())->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Aviso Sms') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($pdi_pedido_destinatario->getAvisoSms())->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($pdi_pedido_destinatario->getCodigo()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($pdi_pedido_destinatario->getObservacion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($pdi_pedido_destinatario->getOrden()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('estado') ?></div>
        <div class='dato'><?php Gral::_echo($pdi_pedido_destinatario->getOrden()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($pdi_pedido_destinatario->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($pdi_pedido_destinatario->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($pdi_pedido_destinatario->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($pdi_pedido_destinatario->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

