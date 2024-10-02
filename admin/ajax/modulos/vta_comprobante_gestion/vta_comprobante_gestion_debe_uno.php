<td align='center' class='adm_tbl_lineas tipo_<?php Gral::_echo($vta_comprobante->getTipoComprobanteSiglas()) ?> <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="vta_tipo_comprobante_min" title="ID: <?php Gral::_echo($vta_comprobante->getId()) ?>">	
        <?php Gral::_echo($vta_comprobante->getTipoComprobanteSiglas()) ?>
    </div>
</td>

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="cli_cliente_id">	
        <?php Gral::_echo($vta_comprobante->getCliCliente()->getDescripcion()) ?>
    </div>
    <div class="fecha_emision">
        Emitido el <?php Gral::_echo(Gral::getFechaToWeb($vta_comprobante->getFechaEmision())) ?>
    </div>    
    <div class="tipo-origen">
        Origen: <?php Gral::_echo($vta_comprobante->getVtaTipoOrigenComprobanteDescripcion()) ?>
    </div>    
    <div class="vta_numero_comprobante" title="<?php Gral::_echo($vta_comprobante->getCodigo()) ?>">	
        <?php Gral::_echo($vta_comprobante->getTipoComprobanteMin()) ?>
        <?php Gral::_echo($vta_comprobante->getNumeroComprobanteCompleto()) ?>
    </div>
</td>

<td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="importe">	
        <?php Gral::_echoImp($importe_total_comprobante) ?>
    </div>
    <div class="vta_comprobante_tipo_estado_id">
        <?php Gral::_echo($vta_comprobante->getTipoEstadoComprobante()) ?>
        <img src="imgs/vta_comprobante_tipo_estado/<?php Gral::_echo($vta_comprobante->getVtaComprobanteTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="12" />
    </div>
</td>

<td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <?php if ($saldo_imputable > 0) { ?>
        <div class="importe_imputar">
            <?php Gral::_echoImp($saldo_imputable) ?>
        </div>
    <?php } ?>

    <?php if (is_array($arr_comprobantes_vinculados_por_conciliacion['INTERMEDIO'])) { ?>
        <div class="comprobantes-vinculados">
            <?php foreach ($arr_comprobantes_vinculados_por_conciliacion['INTERMEDIO'] as $arr_comprobante_vinculado_extremo) { ?>
                <div class="comprobante-vinculado" title="Emitido el <?php Gral::_echo(Gral::getFechaToWeb($arr_comprobante_vinculado_extremo->getVtaComprobanteHaber()->getFechaEmision())) ?>">
                    <?php Gral::_echo($arr_comprobante_vinculado_extremo->getVtaComprobanteHaber()->getTipoComprobanteSiglas()) ?> -
                    <?php Gral::_echo($arr_comprobante_vinculado_extremo->getVtaComprobanteHaber()->getNumeroComprobanteCompleto()) ?>
                    <br />
                    (<?php Gral::_echoImp($arr_comprobante_vinculado_extremo->getImporteAfectado()) ?>)
                </div>
            <?php } ?>
        </div>
    <?php } ?>

</td>

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>' clase="<?php echo get_class($vta_comprobante); ?>">
    <ul class="adm_botones_acciones">
        <?php if (UsCredencial::getEsAcreditado('VTA_COMPROBANTE_GESTION_ACCION_FICHA')) { ?>
            <li class='adm_botones_accion vta_comprobante_gestion_ver_ficha'>
                <img src='imgs/btn_ficha.png' width='13' border='0' />
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_COMPROBANTE_GESTION_ACCION_COMPROBANTE')) { ?>
            <li class='adm_botones_accion vta-comprobante-pdf'>
                <?php if (get_class($vta_comprobante) == 'VtaFactura') { ?>
                    <a href="ajax/modulos/vta_factura_gestion/pdf_factura.php?vta_factura_id=<?php echo $vta_comprobante->getId() ?>" target="_blank">
                        <img src='imgs/btn_pdf.png' width='16' border='0' title="Ver Factura" />
                    </a>
                <?php } ?>
                <?php if (get_class($vta_comprobante) == 'VtaNotaDebito') { ?>
                    <a href="ajax/modulos/vta_nota_debito_gestion/pdf_nota_debito.php?vta_nota_debito_id=<?php echo $vta_comprobante->getId() ?>" target="_blank">
                        <img src='imgs/btn_pdf.png' width='16' border='0' title="Ver Nota de Debito" />
                    </a>
                <?php } ?>
            </li>
        <?php } ?>                

        <?php if (UsCredencial::getEsAcreditado('VTA_COMPROBANTE_GESTION_ACCION_IMPUTAR')) { ?>
            <?php if ($vta_comprobante->getVtaComprobanteTipoEstado()->getImputable() == 1) { ?>
                <li class='adm_botones_accion imputar_comprobante' title='<?php Lang::_lang('Imputar') ?>'>
                    <img src='imgs/icon_cadena.png' width='15' border='0' />
                </li>
            <?php } ?>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_COMPROBANTE_GESTION_ACCION_DESVINCULAR')) { ?>
            <?php if ($es_comprobante_desvinculable && is_array($arr_comprobantes_vinculados_por_conciliacion['INTERMEDIO']) && count($arr_comprobantes_vinculados_por_conciliacion['INTERMEDIO']) > 0) { ?>
                <li class='adm_botones_accion vta_comprobante_gestion_desvincular' title='<?php Lang::_lang('Desvincular') ?>'>
                    <img src='imgs/icon_cadena_desvincular.png' width='15' border='0' />
                </li>
            <?php } ?>
        <?php } ?>
                
    </ul>
</td>



