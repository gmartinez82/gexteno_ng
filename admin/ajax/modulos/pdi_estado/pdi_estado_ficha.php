<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$pdi_estado = PdiEstado::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('PdiPedido') ?></div>
        <div class='dato'><?php Gral::_echo($pdi_estado->getPdiPedido()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('PdiTipoEstado') ?></div>
        <div class='dato'><?php Gral::_echo($pdi_estado->getPdiTipoEstado()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Inicial') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($pdi_estado->getInicial())->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Actual') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($pdi_estado->getActual())->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Cantidad') ?></div>
        <div class='dato'><?php Gral::_echo($pdi_estado->getCantidad()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Cantidad Stock Real') ?></div>
        <div class='dato'><?php Gral::_echo($pdi_estado->getCantidadStockReal()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Cantidad Stock Comprometida') ?></div>
        <div class='dato'><?php Gral::_echo($pdi_estado->getCantidadStockComprometida()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Fecha Hora') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($pdi_estado->getFechahora())) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Venta Perdida') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($pdi_estado->getVentaPerdida())->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($pdi_estado->getObservacion()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($pdi_estado->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($pdi_estado->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($pdi_estado->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($pdi_estado->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

