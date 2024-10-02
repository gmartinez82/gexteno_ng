<?php
include '_autoload.php';
$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$pde_recibo = PdeRecibo::getOxId($id);
?>
<div class='ficha'>

    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($pde_recibo->getDescripcion()) ?></div>
    </div>

    <div class='par '>
        <div class='label'><?php Lang::_lang('PrvProveedor') ?></div>
        <div class='dato'><?php Gral::_echo($pde_recibo->getPrvProveedor()->getDescripcion()) ?></div>
    </div>

    <div class='par impar'>
        <div class='label'><?php Lang::_lang('PdeTipoRecibo') ?></div>
        <div class='dato'><?php Gral::_echo($pde_recibo->getPdeTipoRecibo()->getDescripcion()) ?></div>
    </div>

    <div class='par '>
        <div class='label'><?php Lang::_lang('GralCondicionIva') ?></div>
        <div class='dato'><?php Gral::_echo($pde_recibo->getGralCondicionIva()->getDescripcion()) ?></div>
    </div>

    <div class='par impar'>
        <div class='label'><?php Lang::_lang('GralTipoPersoneria') ?></div>
        <div class='dato'><?php Gral::_echo($pde_recibo->getGralTipoPersoneria()->getDescripcion()) ?></div>
    </div>

    <div class='par '>
        <div class='label'><?php Lang::_lang('GralEmpresa') ?></div>
        <div class='dato'><?php Gral::_echo($pde_recibo->getGralEmpresa()->getDescripcion()) ?></div>
    </div>

    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Numero de Recibo') ?></div>
        <div class='dato'><?php Gral::_echo($pde_recibo->getNumeroRecibo()) ?></div>
    </div>

    <div class='par '>
        <div class='label'><?php Lang::_lang('Cae') ?></div>
        <div class='dato'><?php Gral::_echo($pde_recibo->getCae()) ?></div>
    </div>

    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Fecha de Emision') ?></div>
        <div class='dato'><?php Gral::_echo($pde_recibo->getFechaEmision()) ?></div>
    </div>

    <div class='par '>
        <div class='label'><?php Lang::_lang('PersonaDescripcion') ?></div>
        <div class='dato'><?php Gral::_echo($pde_recibo->getPersonaDescripcion()) ?></div>
    </div>

    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Razon Social') ?></div>
        <div class='dato'><?php Gral::_echo($pde_recibo->getRazonSocial()) ?></div>
    </div>

    <div class='par '>
        <div class='label'><?php Lang::_lang('Domicilio Legal') ?></div>
        <div class='dato'><?php Gral::_echo($pde_recibo->getDomicilioLegal()) ?></div>
    </div>

    <div class='par impar'>
        <div class='label'><?php Lang::_lang('CUIT') ?></div>
        <div class='dato'><?php Gral::_echo($pde_recibo->getCuit()) ?></div>
    </div>

    <div class='par '>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($pde_recibo->getCodigo()) ?></div>
    </div>

    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($pde_recibo->getObservacion()) ?></div>
    </div>

    <div class='par '>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($pde_recibo->getOrden()) ?></div>
    </div>

    <div class='par impar'>
        <div class='label'><?php Lang::_lang('estado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($pde_recibo->getEstado())->getDescripcion()) ?></div>
    </div>

    <?php if (Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')) { ?>
        <div class='par '>
            <div class='label'><?php Lang::_lang('Creado') ?></div>
            <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recibo->getCreado())) ?></div>
        </div>
    <?php } ?>

    <?php if (Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')) { ?>
        <div class='par impar'>
            <div class='label'><?php Lang::_lang('Creado Por') ?></div>
            <div class='dato'><?php Gral::_echo($pde_recibo->getCreadoPorDescripcion()) ?></div>
        </div>
    <?php } ?>

    <?php if (Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')) { ?>
        <div class='par '>
            <div class='label'><?php Lang::_lang('Modificado') ?></div>
            <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recibo->getModificado())) ?></div>
        </div>
    <?php } ?>

    <?php if (Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')) { ?>
        <div class='par impar'>
            <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
            <div class='dato'><?php Gral::_echo($pde_recibo->getModificadoPorDescripcion()) ?></div>
        </div>
    <?php } ?>

</div>

