<?php
include '_autoload.php';
$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$fnd_caja = FndCaja::getOxId($id);
?>
<div class='ficha'>

    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($fnd_caja->getDescripcion()) ?></div>
    </div>

    <div class='par '>
        <div class='label'><?php Lang::_lang('FndCajero') ?></div>
        <div class='dato'><?php Gral::_echo($fnd_caja->getFndCajero()->getDescripcion()) ?></div>
    </div>

    <div class='par impar'>
        <div class='label'><?php Lang::_lang('FndCajaTipoEstado') ?></div>
        <div class='dato'><?php Gral::_echo($fnd_caja->getFndCajaTipoEstado()->getDescripcion()) ?></div>
    </div>

    <div class='par '>
        <div class='label'><?php Lang::_lang('Fecha de Apertura') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaToWeb($fnd_caja->getFechaApertura())) ?></div>
    </div>

    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Fecha de Cierre') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaToWeb($fnd_caja->getFechaCierre())) ?></div>
    </div>

    <div class='par '>
        <div class='label'><?php Lang::_lang('Fecha de Rendicion') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaToWeb($fnd_caja->getFechaRendicion())) ?></div>
    </div>

    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($fnd_caja->getCodigo()) ?></div>
    </div>

    <div class='par '>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($fnd_caja->getObservacion()) ?></div>
    </div>

    <div class='par impar'>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($fnd_caja->getOrden()) ?></div>
    </div>

    <div class='par '>
        <div class='label'><?php Lang::_lang('Estado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($fnd_caja->getEstado())->getDescripcion()) ?></div>
    </div>

    <?php if (Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')) { ?>
        <div class='par impar'>
            <div class='label'><?php Lang::_lang('Creado') ?></div>
            <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_caja->getCreado())) ?></div>
        </div>
    <?php } ?>

    <?php if (Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')) { ?>
        <div class='par '>
            <div class='label'><?php Lang::_lang('Creado Por') ?></div>
            <div class='dato'><?php Gral::_echo($fnd_caja->getCreadoPorDescripcion()) ?></div>
        </div>
    <?php } ?>

    <?php if (Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')) { ?>
        <div class='par impar'>
            <div class='label'><?php Lang::_lang('Modificado') ?></div>
            <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_caja->getModificado())) ?></div>
        </div>
    <?php } ?>

    <?php if (Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')) { ?>
        <div class='par '>
            <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
            <div class='dato'><?php Gral::_echo($fnd_caja->getModificadoPorDescripcion()) ?></div>
        </div>
    <?php } ?>

</div>

