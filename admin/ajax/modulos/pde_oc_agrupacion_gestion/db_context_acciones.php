<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$pde_oc_agrupacion = PdeOcAgrupacion::getOxId($id);

$pde_centro_recepcion = $pde_oc_agrupacion->getPdeCentroRecepcion();
$pde_oc_agrupacion_tipo_estado = $pde_oc_agrupacion->getPdeOcAgrupacionTipoEstado();
?>
<div class="datos" pde_oc_agrupacion_id="<?php Gral::_echo($pde_oc_agrupacion->getId()) ?>">
    <div class="titulo">
        <?php Lang::_lang('PdeOcAgrupacion') ?>: 
        <strong><?php Gral::_echo($pde_oc_agrupacion->getCodigo()) ?> - <?php Gral::_echo($pde_oc_agrupacion->getPrvProveedor()->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('PDE_OC_AGRUPACION_GESTION_ACCION_ACCIONES_PUBLICAR')) { ?>
        <?php if ($pde_oc_agrupacion_tipo_estado->getCodigo() == PdeOcAgrupacionTipoEstado::TIPO_ESTADO_GENERADO) { ?>
            <div class="uno aprobar">
                <img class="icono" src="imgs/btn_publicar.png" width="16" align="absmiddle" title="" />
                <?php Lang::_lang('Aprobar') ?> <?php Lang::_lang('PdeOcAgrupacion') ?>
            </div>
        <?php } ?>
    <?php } ?>

    <?php if (UsCredencial::getEsAcreditado('PDE_OC_AGRUPACION_GESTION_ACCION_ACCIONES_ANULAR')) { ?>
        <?php if ($pde_oc_agrupacion_tipo_estado->getActivo()) { ?>
            <div class="uno anular">
                <img class="icono" src="imgs/btn_anular.png" width="16" align="absmiddle" title="" />
                <?php Lang::_lang('Anular') ?> <?php Lang::_lang('PdeOcAgrupacion') ?>
            </div>
        <?php } ?>
    <?php } ?>

    <?php if (UsCredencial::getEsAcreditado('PDE_OC_AGRUPACION_GESTION_ACCION_ACCIONES_EDITAR')) { ?>
        <?php if ($pde_oc_agrupacion_tipo_estado->getCodigo() == PdeOcAgrupacionTipoEstado::TIPO_ESTADO_GENERADO) { ?>
            <div class="uno editar">
                <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
                <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeOcAgrupacion') ?>
            </div>
        <?php } ?>
    <?php } ?>

    <?php if (UsCredencial::getEsAcreditado('PDE_OC_AGRUPACION_GESTION_ACCION_ACCIONES_RECIBIR')) { ?>
        <?php if ($pde_oc_agrupacion_tipo_estado->getCodigo() == PdeOcAgrupacionTipoEstado::TIPO_ESTADO_APROBADO) { ?>
            <div class="uno recibir-masivo">
                <img class="icono" src="imgs/btn_recibir.png" width="16" align="absmiddle" title="" />
                <?php Lang::_lang('Recibir') ?> <?php Lang::_lang('PdeOcAgrupacion') ?>
            </div>
        <?php } ?>
    <?php } ?>

    <?php if (UsCredencial::getEsAcreditado('PDE_OC_AGRUPACION_GESTION_ACCION_ACCIONES_ETIQUETAS')) { ?>
        <div class="uno ver-etiquetas">
            <img class="icono" src="imgs/icn_barcode.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Etiquetas de Recepcion') ?>
        </div>
    <?php } ?>
    <br />
    
</div>