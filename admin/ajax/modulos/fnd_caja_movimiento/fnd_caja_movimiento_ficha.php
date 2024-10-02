<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$fnd_caja_movimiento = FndCajaMovimiento::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($fnd_caja_movimiento->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('FndCaja Origen') ?></div>
        <div class='dato'><?php Gral::_echo(($fnd_caja_movimiento->getFndCajaOrigen() != 'null') ? FndCaja::getOxId($fnd_caja_movimiento->getFndCajaOrigen())->getDescripcion() : '') ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('FndCaja Destino') ?></div>
        <div class='dato'><?php Gral::_echo(($fnd_caja_movimiento->getFndCajaDestino() != 'null') ? FndCaja::getOxId($fnd_caja_movimiento->getFndCajaDestino())->getDescripcion() : '') ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('FndCajaTipoMovimiento') ?></div>
        <div class='dato'><?php Gral::_echo($fnd_caja_movimiento->getFndCajaTipoMovimiento()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Autorizado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($fnd_caja_movimiento->getAutorizado())->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Autorizado el') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaToWeb($fnd_caja_movimiento->getAutorizadoEl())) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Autorizado Por') ?></div>
        <div class='dato'><?php Gral::_echo(($fnd_caja_movimiento->getAutorizadoPor() != 'null') ? UsUsuario::getOxId($fnd_caja_movimiento->getAutorizadoPor())->getDescripcion() : '') ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('FndCajaMovimientoTipoEstado') ?></div>
        <div class='dato'><?php Gral::_echo($fnd_caja_movimiento->getFndCajaMovimientoTipoEstado()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($fnd_caja_movimiento->getCodigo()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($fnd_caja_movimiento->getObservacion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($fnd_caja_movimiento->getOrden()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Estado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($fnd_caja_movimiento->getEstado())->getDescripcion()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_caja_movimiento->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($fnd_caja_movimiento->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_caja_movimiento->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($fnd_caja_movimiento->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

