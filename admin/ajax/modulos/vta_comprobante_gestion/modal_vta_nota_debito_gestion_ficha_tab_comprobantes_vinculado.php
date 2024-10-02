
<div class="titulo"><?php Lang::_lang('Comprobantes Vinculados') ?></div>

<div class="bloque-comprobantes-vinculados bloque-vta-nota_debito-comprobantes-vinculados">
<table border="0" class="tabla-modal">
    <tr>
        <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Codigo"); ?></td>
        <td class="adm_tbl_encabezado" width="120" align='center'><?php Lang::_lang("Info AFIP"); ?></td>
        <td class="adm_tbl_encabezado" width="120" align='center'><?php Lang::_lang("Tipo Comp"); ?></td>
        <td class="adm_tbl_encabezado" width="120" align='center'><?php Lang::_lang("Estado"); ?></td>
        <td class="adm_tbl_encabezado" width="130" align='center'><?php Lang::_lang("Subtotal"); ?></td>
        <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang("Total"); ?></td>
        <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang("Imp Afectado"); ?></td>
        <td class="adm_tbl_encabezado" width="160" align='center'><?php Lang::_lang("Empresa Fact"); ?></td>
    </tr>
    <?php

    foreach ($vta_nota_debito_vta_nota_creditos as $vta_nota_debito_vta_nota_credito) {
        $vta_nota_credito = $vta_nota_debito_vta_nota_credito->getVtaNotaCredito();

        $vta_tipo_nota_credito = $vta_nota_credito->getVtaTipoNotaCredito();
        $gral_empresa_nota_debitodora = $vta_nota_credito->getGralEmpresa();
        $gral_empresa_nota_debitodora_descripcion = $gral_empresa_nota_debitodora->getDescripcion();

        $importe_total = $vta_nota_credito->getVtaNotaCreditoTotal();
        $importe_afectado = $vta_nota_debito_vta_nota_credito->getImporteAfectado();
        $porcentaje_afectado = ($importe_afectado * 100) / $importe_total;
        ?>
        <tr>
            <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="codigo">
                    <?php Gral::_echo($vta_nota_credito->getCodigo()) ?>
                </div>
                <div class="fecha_emision">
                    <?php Gral::_echo(Gral::getFechaToWeb($vta_nota_credito->getFechaEmision())) ?>
                </div>
            </td>	

            <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="numero_comprobante" title="Numero de Nota de Credito AFIP">
                    <?php Gral::_echo($vta_nota_credito->getNumeroComprobanteCompleto()) ?>
                </div>
                <div class="cae" title="CAE">
                    <?php Gral::_echo($vta_nota_credito->getCae()) ?>
                </div>
                <div class="fecha_emision_cae" title="Fecha de emision">
                    <?php Gral::_echo(Gral::getFechaToWeb($vta_nota_credito->getFechaEmision())) ?>
                </div>
            </td>		

            <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="descripcion-vta-tipo-nota-credito">	
                    <?php Gral::_echo($vta_tipo_nota_credito->getDescripcion()) ?>
                    <?php //Gral::_echo($vta_nota_credito->getVtaTipoNotaCredito()->getCodigoMin()) ?>

                </div>
            </td>

            <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="vta_comprobante_tipo_estado">
                    <img src="imgs/vta_nota_credito_tipo_estado/<?php Gral::_echo($vta_nota_credito->getVtaNotaCreditoTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
                    <?php Gral::_echo($vta_nota_credito->getVtaNotaCreditoTipoEstado()->getDescripcion()) ?>
                </div>
            </td>

            <td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="subtotal">
                    <?php Gral::_echoImp($vta_nota_credito->getVtaNotaCreditoSubtotal()) ?>
                </div>

                <?php if ($vta_nota_credito->getVtaNotaCreditoIva() > 0) { ?>
                    <div class="iva">
                        + IVA: <?php Gral::_echoImp($vta_nota_credito->getVtaNotaCreditoIva()) ?>
                    </div>
                <?php } ?>

                <?php if ($vta_nota_credito->getVtaNotaCreditoTributo() > 0) { ?>
                    <div class="tributos">
                        + Trib: <?php Gral::_echoImp($vta_nota_credito->getVtaNotaCreditoTributo()) ?>
                    </div>
                <?php } ?>
            </td>

            <td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="total">
                    <?php Gral::_echoImp($importe_total) ?>
                </div>
            </td>

            <td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="importe_afectado">
                    <?php Gral::_echoImp($importe_afectado) ?>
                </div>
                <div class="porcentaje_afectado">
                    <?php Gral::_echoFloat($porcentaje_afectado) ?>%
                </div>
            </td>

            <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="empresa_nota_debitodora">
                    <?php Gral::_echo($gral_empresa_nota_debitodora_descripcion) ?>
                </div>
            </td>

        </tr>
    <?php } ?>

    <?php

    foreach ($vta_nota_debito_vta_recibos as $vta_nota_debito_vta_recibo) {
        $vta_recibo = $vta_nota_debito_vta_recibo->getVtaRecibo();

        $vta_tipo_recibo = $vta_recibo->getVtaTipoRecibo();
//        $gral_condicion_iva = $vta_recibo->getGralCondicionIva();
//        $gral_tipo_personeria = $vta_recibo->getGralTipoPersoneria();
        $gral_empresa_nota_debitodora = $vta_recibo->getGralEmpresa();
        $gral_empresa_nota_debitodora_descripcion = $gral_empresa_nota_debitodora->getDescripcion();

        $importe_total = $vta_recibo->getVtaReciboTotal();
        $importe_afectado = $vta_nota_debito_vta_recibo->getImporteAfectado();
        $porcentaje_afectado = ($importe_afectado * 100) / $importe_total;
        ?>
        <tr>
            <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="codigo">
                    <?php Gral::_echo($vta_recibo->getCodigo()) ?>
                </div>
                <div class="fecha_emision">
                    <?php Gral::_echo(Gral::getFechaToWeb($vta_recibo->getFechaEmision())) ?>
                </div>
            </td>	

            <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="numero_comprobante" title="Numero de Recibo AFIP">
                    <?php Gral::_echo($vta_recibo->getNumeroComprobanteCompleto()) ?>
                </div>
                <div class="cae" title="CAE">
                    <?php Gral::_echo($vta_recibo->getCae()) ?>
                </div>
                <div class="fecha_emision_cae" title="Fecha de emision">
                    <?php Gral::_echo(Gral::getFechaToWeb($vta_recibo->getFechaEmision())) ?>
                </div>
            </td>		

            <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="descripcion-vta-tipo-nota-credito">	
                    <?php Gral::_echo($vta_tipo_recibo->getDescripcion()) ?>
                    <?php //Gral::_echo($vta_recibo->getVtaTipoRecibo()->getCodigoMin()) ?>

                </div>
            </td>

            <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="vta_comprobante_tipo_estado">
                    <img src="imgs/vta_recibo_tipo_estado/<?php Gral::_echo($vta_recibo->getVtaReciboTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
                    <?php Gral::_echo($vta_recibo->getVtaReciboTipoEstado()->getDescripcion()) ?>
                </div>
            </td>

            <td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="subtotal">
                    <?php Gral::_echoImp($vta_recibo->getVtaReciboSubtotal()) ?>
                </div>

                <?php if ($vta_recibo->getVtaReciboIva() > 0) { ?>
                    <div class="iva">
                        + IVA: <?php Gral::_echoImp($vta_recibo->getVtaReciboIva()) ?>
                    </div>
                <?php } ?>

                <?php if ($vta_recibo->getVtaReciboTributo() > 0) { ?>
                    <div class="tributos">
                        + Trib: <?php Gral::_echoImp($vta_recibo->getVtaReciboTributo()) ?>
                    </div>
                <?php } ?>
            </td>

            <td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="total">
                    <?php Gral::_echoImp($importe_total) ?>
                </div>
            </td>

            <td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="importe_afectado">
                    <?php Gral::_echoImp($importe_afectado) ?>
                </div>
                <div class="porcentaje_afectado">
                    <?php Gral::_echoFloat($porcentaje_afectado) ?>%
                </div>
            </td>

            <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="empresa_nota_debitodora">
                    <?php Gral::_echo($gral_empresa_nota_debitodora_descripcion) ?>
                </div>
            </td>

        </tr>
    <?php } ?>
</table>    
</div>
<br />
