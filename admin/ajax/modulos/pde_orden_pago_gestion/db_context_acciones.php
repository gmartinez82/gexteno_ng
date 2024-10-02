<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$pde_orden_pago = PdeOrdenPago::getOxId($id);

$pde_orden_pago_pde_tributos = $pde_orden_pago->getPdeOrdenPagoPdeTributos();

$pde_orden_pago_tipo_estado = $pde_orden_pago->getPdeOrdenPagoTipoEstado();
?>
<div class="datos" pde_orden_pago_id="<?php Gral::_echo($pde_orden_pago->getId()) ?>">

    <div class="titulo">
        <?php Lang::_lang('PdeOrdenPago') ?>: 
        <strong><?php Gral::_echo($pde_orden_pago->getCodigo()) ?></strong>
    </div>

    <?php if ($pde_orden_pago_tipo_estado->getCodigo() == PdeOrdenPagoTipoEstado::TIPO_GENERADO) { ?>
        <?php if (UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_GESTION_ACCION_ACCIONES_AUTORIZAR')) { ?>
            <div class="uno autorizar-orden-pago">
                <img class="icono" src="imgs/btn_aceptar.png" width="16" align="absmiddle" title="" />
                <?php Lang::_lang('Autorizar') ?> <?php Lang::_lang('PdeOrdenPago') ?>
            </div>
        <?php } ?>
    <?php } ?>

    <?php if ($pde_orden_pago_tipo_estado->getCodigo() == PdeOrdenPagoTipoEstado::TIPO_GENERADO) { ?>
        <?php if (UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_GESTION_ACCION_ACCIONES_RECHAZAR')) { ?>
            <div class="uno rechazar-orden-pago">
                <img class="icono" src="imgs/btn_rechazar.png" width="16" align="absmiddle" title="" />
                <?php Lang::_lang('Rechazar') ?> <?php Lang::_lang('PdeOrdenPago') ?>
            </div>
        <?php } ?>
    <?php } ?>

    <?php if ($pde_orden_pago_tipo_estado->getCodigo() == PdeOrdenPagoTipoEstado::TIPO_PREPARADO) { ?>
        <?php if (UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_GESTION_ACCION_ACCIONES_PAGO_ENVIADO')) { ?>
            <div class="uno pago-enviado-orden-pago">
                <img class="icono" src="imgs/btn_enviado.png" width="16" align="absmiddle" title="" />
                <?php Lang::_lang('Pago Efectuado') ?>
            </div>
        <?php } ?>
    <?php } ?>

    <?php if ($pde_orden_pago_tipo_estado->getCodigo() == PdeOrdenPagoTipoEstado::TIPO_AUTORIZADO) { ?>
        <?php if (UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_GESTION_ACCION_ACCIONES_PAGO_PREVENTISTA')) { ?>
            <div class="uno pago-preventista-orden-pago">
                <img class="icono" src="imgs/btn_pagar.png" width="14" align="absmiddle" title="" />
                <?php Lang::_lang('Pago a Preventista') ?>
            </div>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_GESTION_ACCION_ACCIONES_PAGO_PREPARADO')) { ?>
            <div class="uno preparar-orden-pago">
                <img class="icono" src="imgs/btn_enviado.png" width="16" align="absmiddle" title="" />
                <?php Lang::_lang('Pago Preparado') ?>
            </div>
        <?php } ?>
    
        <?php if (UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_GESTION_ACCION_ACCIONES_PAGO_TRANSFERIDO')) { ?>
            <div class="uno transferir-orden-pago">
                <img class="icono" src="imgs/btn_pagar.png" width="14" align="absmiddle" title="" />
                <?php Lang::_lang('Transferir Pago') ?>
            </div>
        <?php } ?>
    <?php } ?>

    <?php //if ($pde_orden_pago_tipo_estado->getCodigo() != PdeOrdenPagoTipoEstado::TIPO_ANULADO) { ?>
    <?php if ($pde_orden_pago_tipo_estado->getActivo()) { ?>
        <?php if (UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_GESTION_ACCION_ACCIONES_ANULAR')) { ?>
            <div class="uno anular-orden-pago">
                <img class="icono" src="imgs/btn_rechazar.png" width="16" align="absmiddle" title="" />
                <?php Lang::_lang('Anular') ?> <?php Lang::_lang('PdeOrdenPago') ?>
            </div>
        <?php } ?>
    <?php } ?>

    <?php if ($pde_orden_pago_tipo_estado->getCodigo() == PdeOrdenPagoTipoEstado::TIPO_PAGO_ENVIADO || $pde_orden_pago_tipo_estado->getCodigo() == PdeOrdenPagoTipoEstado::TIPO_PAGO_PREVENTISTA) { ?>
        <?php if (UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_GESTION_ACCION_ACCIONES_PAGO_RECIBIDO')) { ?>
            <div class="uno pago-recibido-orden-pago">
                <img class="icono" src="imgs/btn_recibir.png" width="20" align="absmiddle" title="" />
                <?php Lang::_lang('Pago Recibido') ?>
            </div>
        <?php } ?>
    <?php } ?>

    <?php if (UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_GESTION_ACCION_ACCIONES_EDITAR_NOTA_PUBLICA')) { ?>
        <div class="uno editar-nota-publica">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar Nota al Proveedor') ?>
        </div>
    <?php } ?>

    <?php if (UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_GESTION_ACCION_COMPROBANTE')) { ?>
        <?php foreach ($pde_orden_pago_pde_tributos as $pde_orden_pago_pde_tributo) { ?>
            <div class="uno">
                <a href="ajax/modulos/pde_orden_pago_gestion/pdf_orden_pago_tributo.php?pde_orden_pago_id=<?php echo $pde_orden_pago->getId() ?>&pde_orden_pago_pde_tributo_id=<?php echo $pde_orden_pago_pde_tributo->getId() ?>" target="_blank">
                    <img class="icono" src='imgs/btn_pdf.png' width='16' border='0' align="absmiddle" title="Ver PDF" />
                    <?php Gral::_echo($pde_orden_pago_pde_tributo->getPdeTributo()->getDescripcion()) ?>
                </a>
            </div>
        <?php } ?>
    <?php } ?>


    <br />
</div>