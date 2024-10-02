<?php
include '_autoload.php';
$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$vta_ajuste_haber = VtaAjusteHaber::getOxId($id);
?>
<div class='ficha'>

    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($vta_ajuste_haber->getDescripcion()) ?></div>
    </div>

    <div class='par '>
        <div class='label'><?php Lang::_lang('CliCliente') ?></div>
        <div class='dato'><?php Gral::_echo($vta_ajuste_haber->getCliCliente()->getDescripcion()) ?></div>
    </div>

    <div class='par impar'>
        <div class='label'><?php Lang::_lang('VtaTipoAjusteHaber') ?></div>
        <div class='dato'><?php Gral::_echo($vta_ajuste_haber->getVtaTipoAjusteHaber()->getDescripcion()) ?></div>
    </div>

    <div class='par '>
        <div class='label'><?php Lang::_lang('GralCondicionIva') ?></div>
        <div class='dato'><?php Gral::_echo($vta_ajuste_haber->getGralCondicionIva()->getDescripcion()) ?></div>
    </div>

    <div class='par impar'>
        <div class='label'><?php Lang::_lang('GralTipoPersoneria') ?></div>
        <div class='dato'><?php Gral::_echo($vta_ajuste_haber->getGralTipoPersoneria()->getDescripcion()) ?></div>
    </div>

    <div class='par '>
        <div class='label'><?php Lang::_lang('GralEmpresa') ?></div>
        <div class='dato'><?php Gral::_echo($vta_ajuste_haber->getGralEmpresa()->getDescripcion()) ?></div>
    </div>

    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Numero de AjusteHaber') ?></div>
        <div class='dato'><?php Gral::_echo($vta_ajuste_haber->getNumeroAjusteHaber()) ?></div>
    </div>

    <div class='par '>
        <div class='label'><?php Lang::_lang('Cae') ?></div>
        <div class='dato'><?php Gral::_echo($vta_ajuste_haber->getCae()) ?></div>
    </div>

    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Fecha de Emision') ?></div>
        <div class='dato'><?php Gral::_echo($vta_ajuste_haber->getFechaEmision()) ?></div>
    </div>

    <div class='par '>
        <div class='label'><?php Lang::_lang('PersonaDescripcion') ?></div>
        <div class='dato'><?php Gral::_echo($vta_ajuste_haber->getPersonaDescripcion()) ?></div>
    </div>

    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Razon Social') ?></div>
        <div class='dato'><?php Gral::_echo($vta_ajuste_haber->getRazonSocial()) ?></div>
    </div>

    <div class='par '>
        <div class='label'><?php Lang::_lang('Domicilio Legal') ?></div>
        <div class='dato'><?php Gral::_echo($vta_ajuste_haber->getDomicilioLegal()) ?></div>
    </div>

    <div class='par impar'>
        <div class='label'><?php Lang::_lang('CUIT') ?></div>
        <div class='dato'><?php Gral::_echo($vta_ajuste_haber->getCuit()) ?></div>
    </div>

    <div class='par '>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($vta_ajuste_haber->getCodigo()) ?></div>
    </div>

    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($vta_ajuste_haber->getObservacion()) ?></div>
    </div>

    <div class='par '>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($vta_ajuste_haber->getOrden()) ?></div>
    </div>

    <div class='par impar'>
        <div class='label'><?php Lang::_lang('estado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($vta_ajuste_haber->getEstado())->getDescripcion()) ?></div>
    </div>

    <?php if (Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')) { ?>
        <div class='par '>
            <div class='label'><?php Lang::_lang('Creado') ?></div>
            <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_ajuste_haber->getCreado())) ?></div>
        </div>
    <?php } ?>

    <?php if (Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')) { ?>
        <div class='par impar'>
            <div class='label'><?php Lang::_lang('Creado Por') ?></div>
            <div class='dato'><?php Gral::_echo($vta_ajuste_haber->getCreadoPorDescripcion()) ?></div>
        </div>
    <?php } ?>

    <?php if (Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')) { ?>
        <div class='par '>
            <div class='label'><?php Lang::_lang('Modificado') ?></div>
            <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_ajuste_haber->getModificado())) ?></div>
        </div>
    <?php } ?>

    <?php if (Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')) { ?>
        <div class='par impar'>
            <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
            <div class='dato'><?php Gral::_echo($vta_ajuste_haber->getModificadoPorDescripcion()) ?></div>
        </div>
    <?php } ?>

</div>

