
<div class="titulo"><?php Lang::_lang('Comprobantes Vinculados') ?></div>

<div class="bloque-comprobantes-vinculados bloque-vta-nota-credito-comprobantes-vinculados">
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
            $vta_nota_debito = $vta_nota_debito_vta_nota_credito->getVtaNotaDebito();

            $vta_tipo_nota_debito = $vta_nota_debito->getVtaTipoNotaDebito();
            $gral_empresa_facturadora = $vta_nota_debito->getGralEmpresa();
            $gral_empresa_facturadora_descripcion = $gral_empresa_facturadora->getDescripcion();

            $importe_total = $vta_nota_debito->getVtaNotaDebitoTotal();
            $importe_afectado = $vta_nota_debito_vta_nota_credito->getImporteAfectado();
            $porcentaje_afectado = ($importe_afectado * 100) / $importe_total;
            ?>
            <tr>
                <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                    <div class="codigo">
                        <?php Gral::_echo($vta_nota_debito->getCodigo()) ?>
                    </div>
                    <div class="fecha_emision">
                        <?php Gral::_echo(Gral::getFechaToWeb($vta_nota_debito->getFechaEmision())) ?>
                    </div>
                </td>	

                <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                    <div class="numero_comprobante" title="Numero de Nota de Debito AFIP">
                        <?php Gral::_echo($vta_nota_debito->getNumeroComprobanteCompleto()) ?>
                    </div>
                    <div class="cae" title="CAE">
                        <?php Gral::_echo($vta_nota_debito->getCae()) ?>
                    </div>
                    <div class="fecha_emision_cae" title="Fecha de emision">
                        <?php Gral::_echo(Gral::getFechaToWeb($vta_nota_debito->getFechaEmision())) ?>
                    </div>
                </td>		

                <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                    <div class="descripcion-vta-tipo-comprobante">	
                        <?php Gral::_echo($vta_tipo_nota_debito->getDescripcion()) ?>
                        <?php //Gral::_echo($vta_nota_debito->getVtaTipoNotaDebito()->getCodigoMin()) ?>

                    </div>
                </td>

                <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                    <div class="vta_comprobante_tipo_estado">
                        <img src="imgs/vta_nota_debito_tipo_estado/<?php Gral::_echo($vta_nota_debito->getVtaNotaDebitoTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
                        <?php Gral::_echo($vta_nota_debito->getVtaNotaDebitoTipoEstado()->getDescripcion()) ?>
                    </div>
                </td>

                <td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                    <div class="subtotal">
                        <?php Gral::_echoImp($vta_nota_debito->getVtaNotaDebitoSubtotal()) ?>
                    </div>

                    <?php if ($vta_nota_debito->getVtaNotaDebitoIva() > 0) { ?>
                        <div class="iva">
                            + IVA: <?php Gral::_echoImp($vta_nota_debito->getVtaNotaDebitoIva()) ?>
                        </div>
                    <?php } ?>

                    <?php if ($vta_nota_debito->getVtaNotaDebitoTributo() > 0) { ?>
                        <div class="tributos">
                            + Trib: <?php Gral::_echoImp($vta_nota_debito->getVtaNotaDebitoTributo()) ?>
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
                    <div class="empresa_facturadora">
                        <?php Gral::_echo($gral_empresa_facturadora_descripcion) ?>
                    </div>
                </td>

            </tr>
        <?php } ?>

        <?php

        foreach ($vta_factura_vta_nota_creditos as $vta_factura_vta_nota_credito) {
            $vta_factura = $vta_factura_vta_nota_credito->getVtaFactura();

            $vta_tipo_factura = $vta_factura->getVtaTipoFactura();
            $gral_empresa_facturadora = $vta_factura->getGralEmpresa();
            $gral_empresa_facturadora_descripcion = $gral_empresa_facturadora->getDescripcion();

            $importe_total = $vta_factura->getVtaFacturaTotal();
            $importe_afectado = $vta_factura_vta_nota_credito->getImporteAfectado();
            $porcentaje_afectado = ($importe_afectado * 100) / $importe_total;
            ?>
            <tr>
                <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                    <div class="codigo">
                        <?php Gral::_echo($vta_factura->getCodigo()) ?>
                    </div>
                    <div class="fecha_emision">
                        <?php Gral::_echo(Gral::getFechaToWeb($vta_factura->getFechaEmision())) ?>
                    </div>
                </td>	

                <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                    <div class="numero_comprobante" title="Numero de Factura AFIP">
                        <?php Gral::_echo($vta_factura->getNumeroComprobanteCompleto()) ?>
                    </div>
                    <div class="cae" title="CAE">
                        <?php Gral::_echo($vta_factura->getCae()) ?>
                    </div>
                    <div class="fecha_emision_cae" title="Fecha de emision">
                        <?php Gral::_echo(Gral::getFechaToWeb($vta_factura->getFechaEmision())) ?>
                    </div>
                </td>		

                <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                    <div class="descripcion-vta-tipo-nota-credito">	
                        <?php Gral::_echo($vta_tipo_factura->getDescripcion()) ?>
                        <?php //Gral::_echo($vta_factura->getVtaTipoFactura()->getCodigoMin()) ?>

                    </div>
                </td>

                <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                    <div class="vta_comprobante_tipo_estado">
                        <img src="imgs/vta_factura_tipo_estado/<?php Gral::_echo($vta_factura->getVtaFacturaTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
                        <?php Gral::_echo($vta_factura->getVtaFacturaTipoEstado()->getDescripcion()) ?>
                    </div>
                </td>

                <td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                    <div class="subtotal">
                        <?php Gral::_echoImp($vta_factura->getVtaFacturaSubtotal()) ?>
                    </div>

                    <?php if ($vta_factura->getVtaFacturaIva() > 0) { ?>
                        <div class="iva">
                            + IVA: <?php Gral::_echoImp($vta_factura->getVtaFacturaIva()) ?>
                        </div>
                    <?php } ?>

                    <?php if ($vta_factura->getVtaFacturaTributo() > 0) { ?>
                        <div class="tributos">
                            + Trib: <?php Gral::_echoImp($vta_factura->getVtaFacturaTributo()) ?>
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
                    <div class="empresa_facturadora">
                        <?php Gral::_echo($gral_empresa_facturadora_descripcion) ?>
                    </div>
                </td>

            </tr>
        <?php } ?>
    </table>    
</div>
<br />
