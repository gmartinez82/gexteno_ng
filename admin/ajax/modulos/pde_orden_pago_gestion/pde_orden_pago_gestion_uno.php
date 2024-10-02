<?php
$pde_orden_pago_pde_comprobantes = $pde_orden_pago->getPdeOrdenPagoPdeComprobantes(null, null, true);
$pde_orden_pago_gral_forma_pagos = $pde_orden_pago->getPdeOrdenPagoGralFpFormaPagos(null, null, true);
$cantidad_items = count($pde_orden_pago_pde_comprobantes);

$prv_proveedor = $pde_orden_pago->getPrvProveedor();

$total_importe_pago = $pde_orden_pago->getPdeOrdenPagoTotal();
$total_importe_comprobantes_afectados = $pde_orden_pago->getPdeOrdenPagoTotalComprobantes();
$total_importe_retenciones = $pde_orden_pago->getPdeOrdenPagoTotalRetenciones();

$saldo_importe = ($total_importe_pago + $total_importe_retenciones) - $total_importe_comprobantes_afectados;
?>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="codigo">
        <?php Gral::_echo($pde_orden_pago->getCodigo()) ?>
    </div>
    <div class="fecha_emision">
        <?php Gral::_echo(Gral::getFechaToWeb($pde_orden_pago->getFechaEmision())) ?>
    </div>
</td>

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="persona_descripcion">
        <?php Gral::_echo($pde_orden_pago->getPersonaDescripcion()) ?>
    </div>
    <div class="cuit">
        <?php Gral::_echo('Cuit: ') ?>
        <?php Gral::_echo($pde_orden_pago->getCuit()) ?>
    </div>

    <?php if (trim($pde_orden_pago->getNotaPublica()) != '') { ?>
        <div class="nota-publica">
            NP: <?php Gral::_echo($pde_orden_pago->getNotaPublica()) ?>
        </div>
    <?php } ?>


    <div class="emails_enviados">
        <?php foreach ($pde_orden_pago->getPdeOrdenPagoEnviados() as $pde_orden_pago_enviado) { ?>
            <?php if ($pde_orden_pago_enviado->getEstado()) { ?>
                <img src="imgs/email/icn_email_green.png" alt="icn-email" width="14" title="Enviado a '<?php echo $pde_orden_pago_enviado->getDestinatario() ?>' el <?php echo Gral::getFechaHoraToWEB($pde_orden_pago_enviado->getCreado()) ?>">
            <?php } else { ?>
                <img src="imgs/email/icn_email_red.png" alt="icn-email" width="14" title="No Enviado: '<?php echo $pde_orden_pago_enviado->getCodigoEnvio() ?>'">
            <?php } ?>
        <?php } ?>
    </div>    

</td>

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="pde_orden_pago_tipo_estado">
        <img src="imgs/pde_orden_pago_tipo_estado/<?php Gral::_echo($pde_orden_pago->getPdeOrdenPagoTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
        <?php Gral::_echo($pde_orden_pago->getPdeOrdenPagoTipoEstado()->getDescripcion()) ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="pde-comprobantes-vinculados">
        <?php
        foreach ($pde_orden_pago_pde_comprobantes as $pde_orden_pago_pde_comprobante) {
            $pde_comprobante = $pde_orden_pago_pde_comprobante->getPdeComprobante();
            ?>
            <div class="pde-comprobante-vinculado"> -
                <?php Gral::_echo($pde_comprobante->getTipoComprobanteSiglas()) ?>
                <?php Gral::_echo($pde_comprobante->getTipoComprobanteMin()) ?> 
                <?php Gral::_echo($pde_comprobante->getNumeroComprobanteCompleto()) ?>
                (<?php Gral::_echoImp($pde_orden_pago_pde_comprobante->getImporteAfectado()) ?>)
            </div>
        <?php } ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="gral-fp-forma-pagos">
        <?php
        foreach ($pde_orden_pago_gral_forma_pagos as $pde_orden_pago_gral_forma_pago) {
            $gral_fp_forma_pago = $pde_orden_pago_gral_forma_pago->getGralFpFormaPago();
            ?>
            <div class="gral-fp-forma-pago"> - 
                <?php Gral::_echo($gral_fp_forma_pago->getDescripcion()) ?>
                (<?php Gral::_echoImp($pde_orden_pago_gral_forma_pago->getImporteAfectado()) ?>)
            </div>
        <?php } ?>
    </div>
</td>

<td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="importe importe-total-comprobantes" title="Total de Comprobantes Afectados">
        <div class="par">
            <div class="label">Comprobantes</div>
            <div class="dato"><?php Gral::_echoImp($total_importe_comprobantes_afectados) ?></div>
        </div>
    </div>
    
    <?php if (round($total_importe_retenciones, 2) > 0) { ?>
    <div class="importe importe-total-retenciones" title="Total de Retenciones">
        <div class="par">
            <div class="label">Retenciones</div>
            <div class="dato"><?php Gral::_echoImp($total_importe_retenciones) ?></div>
        </div>
    </div>
    <?php } ?>
    
    <div class="importe importe-total" title="Total del Pago">
        <div class="par">
            <div class="label">A Pagar</div>
            <div class="dato"><?php Gral::_echoImp($total_importe_pago) ?></div>
        </div>
    </div>

    <?php if (round($saldo_importe, 2) > 0) { ?>
        <div class="importe importe-total-saldo deudor" title="Saldo a favor de <?php Gral::_echo($pde_orden_pago->getGralEmpresa()->getDescripcion()) ?>">
            <div class="par">
                <div class="label">Saldo <?php echo Gral::getConfig('gral_cliente_min') ?></div>
                <div class="dato"><?php Gral::_echoImp($saldo_importe) ?></div>
            </div>
        </div>
    <?php } elseif (round($saldo_importe, 2) < 0) { ?>
        <div class="importe importe-total-saldo acreedor" title="Saldo a favor de <?php Gral::_echo($pde_orden_pago->getPersonaDescripcion()) ?>">
            <div class="par">
                <div class="label">Saldo PRV</div>
                <div class="dato"><?php Gral::_echoImp($saldo_importe) ?></div>
            </div>
        </div>
    <?php } ?>

</td>

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>

    <ul class="adm_botones_acciones" pde_orden_pago_id="<?php echo $pde_orden_pago->getId() ?>">

        <?php if (UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_GESTION_ACCION_FICHA')) { ?>
            <li class='adm_botones_accion pde_orden_pago_gestion_ver_ficha'>
                <img src='imgs/btn_ficha.png' width='16' border='0' />
            </li>
        <?php } ?>

        <?php if (!$pde_orden_pago->getPdeOrdenPagoTipoEstado()->getAnulado()) { ?>
            <?php if (UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_GESTION_ACCION_COMPROBANTE')) { ?>
                <li class='adm_botones_accion pde-orden_pago-comprobante'>
                    <a href="ajax/modulos/pde_orden_pago_gestion/pdf_orden_pago.php?pde_orden_pago_id=<?php echo $pde_orden_pago->getId() ?>" target="_blank">
                        <img src='imgs/btn_pdf.png' width='20' border='0' title="Ver OrdenPago" />
                    </a>
                </li>
            <?php } ?>

            <?php if (UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_GESTION_ACCION_ENVIAR_POR_CORREO')) { ?>
                <li class='adm_botones_accion pde-orden_pago-enviar-por-correo'>
                    <img src='imgs/btn_email.png' width='20' border='0' title="Enviar Email" />
                </li>
            <?php } ?>

            <?php if (UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_GESTION_ACCION_CONFIG')) { ?>
                <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/pde_orden_pago_gestion/db_context_acciones.php?id=<?php Gral::_echo($pde_orden_pago->getId()) ?>' modulo_metodo_init="setInitPdeOrdenPagoGestion()">
                    <img src='imgs/btn_ajustar.png' width='20' />    	
                </li>
            <?php } ?>
        <?php } ?>

    </ul>
</td>


