<?php
include '_autoload.php';
$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$vta_recibo = VtaRecibo::getOxId($id);
?>
<div class='ficha'>

    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($vta_recibo->getDescripcion()) ?></div>
    </div>

    <div class='par '>
        <div class='label'><?php Lang::_lang('CliCliente') ?></div>
        <div class='dato'><?php Gral::_echo($vta_recibo->getCliCliente()->getDescripcion()) ?></div>
    </div>

    <div class='par impar'>
        <div class='label'><?php Lang::_lang('VtaTipoRecibo') ?></div>
        <div class='dato'><?php Gral::_echo($vta_recibo->getVtaTipoRecibo()->getDescripcion()) ?></div>
    </div>

    <div class='par '>
        <div class='label'><?php Lang::_lang('GralCondicionIva') ?></div>
        <div class='dato'><?php Gral::_echo($vta_recibo->getGralCondicionIva()->getDescripcion()) ?></div>
    </div>

    <div class='par impar'>
        <div class='label'><?php Lang::_lang('GralTipoPersoneria') ?></div>
        <div class='dato'><?php Gral::_echo($vta_recibo->getGralTipoPersoneria()->getDescripcion()) ?></div>
    </div>

    <div class='par '>
        <div class='label'><?php Lang::_lang('GralEmpresa') ?></div>
        <div class='dato'><?php Gral::_echo($vta_recibo->getGralEmpresa()->getDescripcion()) ?></div>
    </div>

    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Numero de Recibo') ?></div>
        <div class='dato'><?php Gral::_echo($vta_recibo->getNumeroRecibo()) ?></div>
    </div>

    <div class='par '>
        <div class='label'><?php Lang::_lang('Cae') ?></div>
        <div class='dato'><?php Gral::_echo($vta_recibo->getCae()) ?></div>
    </div>

    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Fecha de Emision') ?></div>
        <div class='dato'><?php Gral::_echo($vta_recibo->getFechaEmision()) ?></div>
    </div>

    <div class='par '>
        <div class='label'><?php Lang::_lang('PersonaDescripcion') ?></div>
        <div class='dato'><?php Gral::_echo($vta_recibo->getPersonaDescripcion()) ?></div>
    </div>

    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Razon Social') ?></div>
        <div class='dato'><?php Gral::_echo($vta_recibo->getRazonSocial()) ?></div>
    </div>

    <div class='par '>
        <div class='label'><?php Lang::_lang('Domicilio Legal') ?></div>
        <div class='dato'><?php Gral::_echo($vta_recibo->getDomicilioLegal()) ?></div>
    </div>

    <div class='par impar'>
        <div class='label'><?php Lang::_lang('CUIT') ?></div>
        <div class='dato'><?php Gral::_echo($vta_recibo->getCuit()) ?></div>
    </div>

    <div class='par '>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($vta_recibo->getCodigo()) ?></div>
    </div>

    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($vta_recibo->getObservacion()) ?></div>
    </div>

    <div class='par '>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($vta_recibo->getOrden()) ?></div>
    </div>

    <div class='par impar'>
        <div class='label'><?php Lang::_lang('estado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($vta_recibo->getEstado())->getDescripcion()) ?></div>
    </div>

    <?php if (Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')) { ?>
        <div class='par '>
            <div class='label'><?php Lang::_lang('Creado') ?></div>
            <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_recibo->getCreado())) ?></div>
        </div>
    <?php } ?>

    <?php if (Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')) { ?>
        <div class='par impar'>
            <div class='label'><?php Lang::_lang('Creado Por') ?></div>
            <div class='dato'><?php Gral::_echo($vta_recibo->getCreadoPorDescripcion()) ?></div>
        </div>
    <?php } ?>

    <?php if (Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')) { ?>
        <div class='par '>
            <div class='label'><?php Lang::_lang('Modificado') ?></div>
            <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_recibo->getModificado())) ?></div>
        </div>
    <?php } ?>

    <?php if (Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')) { ?>
        <div class='par impar'>
            <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
            <div class='dato'><?php Gral::_echo($vta_recibo->getModificadoPorDescripcion()) ?></div>
        </div>
    <?php } ?>

</div>

