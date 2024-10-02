
<div class="titulo"><?php Lang::_lang('Comprobantes Vinculados') ?></div>

<div class="bloque-comprobantes-vinculados bloque-pde-recibo-comprobantes-vinculados">
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

        foreach ($pde_nota_debito_pde_recibos as $pde_nota_debito_pde_recibo) {
            $pde_nota_debito = $pde_nota_debito_pde_recibo->getPdeNotaDebito();

            $pde_tipo_nota_debito = $pde_nota_debito->getPdeTipoNotaDebito();
//        $gral_condicion_iva = $pde_nota_debito->getGralCondicionIva();
//        $gral_tipo_personeria = $pde_nota_debito->getGralTipoPersoneria();
            $gral_empresa_facturadora = $pde_nota_debito->getGralEmpresa();
            $gral_empresa_facturadora_descripcion = $gral_empresa_facturadora->getDescripcion();

            $importe_total = $pde_nota_debito->getPdeNotaDebitoTotal();
            $importe_afectado = $pde_nota_debito_pde_recibo->getImporteAfectado();
            $porcentaje_afectado = ($importe_afectado * 100) / $importe_total;
            ?>
            <tr>
                <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                    <div class="codigo">
                        <?php Gral::_echo($pde_nota_debito->getCodigo()) ?>
                    </div>
                    <div class="fecha_emision">
                        <?php Gral::_echo(Gral::getFechaToWeb($pde_nota_debito->getFechaEmision())) ?>
                    </div>
                </td>	

                <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                    <div class="numero_comprobante" title="Numero de Nota de Debito AFIP">
                        <?php Gral::_echo($pde_nota_debito->getNumeroComprobanteCompleto()) ?>
                    </div>
                    <div class="cae" title="CAE">
                        <?php Gral::_echo($pde_nota_debito->getCae()) ?>
                    </div>
                    <div class="fecha_emision_cae" title="Fecha de emision">
                        <?php Gral::_echo(Gral::getFechaToWeb($pde_nota_debito->getFechaEmision())) ?>
                    </div>
                </td>		

                <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                    <div class="descripcion-pde-tipo-comprobante">	
                        <?php Gral::_echo($pde_tipo_nota_debito->getDescripcion()) ?>
                        <?php //Gral::_echo($pde_nota_debito->getPdeTipoNotaDebito()->getCodigoMin()) ?>

                    </div>
                </td>

                <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                    <div class="pde_comprobante_tipo_estado">
                        <img src="imgs/pde_nota_debito_tipo_estado/<?php Gral::_echo($pde_nota_debito->getPdeNotaDebitoTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
                        <?php Gral::_echo($pde_nota_debito->getPdeNotaDebitoTipoEstado()->getDescripcion()) ?>
                    </div>
                </td>

                <td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                    <div class="subtotal">
                        <?php Gral::_echoImp($pde_nota_debito->getPdeNotaDebitoSubtotal()) ?>
                    </div>

                    <?php if ($pde_nota_debito->getPdeNotaDebitoIva() > 0) { ?>
                        <div class="iva">
                            + IVA: <?php Gral::_echoImp($pde_nota_debito->getPdeNotaDebitoIva()) ?>
                        </div>
                    <?php } ?>

                    <?php if ($pde_nota_debito->getPdeNotaDebitoTributo() > 0) { ?>
                        <div class="tributos">
                            + Trib: <?php Gral::_echoImp($pde_nota_debito->getPdeNotaDebitoTributo()) ?>
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

        foreach ($pde_factura_pde_recibos as $pde_factura_pde_recibo) {
            $pde_factura = $pde_factura_pde_recibo->getPdeFactura();

            $pde_tipo_factura = $pde_factura->getPdeTipoFactura();
            $gral_empresa_facturadora = $pde_factura->getGralEmpresa();
            $gral_empresa_facturadora_descripcion = $gral_empresa_facturadora->getDescripcion();

            $importe_total = $pde_factura->getPdeFacturaTotal();
            $importe_afectado = $pde_factura_pde_recibo->getImporteAfectado();
            $porcentaje_afectado = ($importe_afectado * 100) / $importe_total;
            ?>
            <tr>
                <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                    <div class="codigo">
                        <?php Gral::_echo($pde_factura->getCodigo()) ?>
                    </div>
                    <div class="fecha_emision">
                        <?php Gral::_echo(Gral::getFechaToWeb($pde_factura->getFechaEmision())) ?>
                    </div>
                </td>	

                <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                    <div class="numero_comprobante" title="Numero de Factura AFIP">
                        <?php Gral::_echo($pde_factura->getNumeroComprobanteCompleto()) ?>
                    </div>
                    <div class="cae" title="CAE">
                        <?php Gral::_echo($pde_factura->getCae()) ?>
                    </div>
                    <div class="fecha_emision_cae" title="Fecha de emision">
                        <?php Gral::_echo(Gral::getFechaToWeb($pde_factura->getFechaEmision())) ?>
                    </div>
                </td>		

                <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                    <div class="descripcion-pde-tipo-nota-credito">	
                        <?php Gral::_echo($pde_tipo_factura->getDescripcion()) ?>
                        <?php //Gral::_echo($pde_factura->getPdeTipoFactura()->getCodigoMin()) ?>

                    </div>
                </td>

                <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                    <div class="pde_comprobante_tipo_estado">
                        <img src="imgs/pde_factura_tipo_estado/<?php Gral::_echo($pde_factura->getPdeFacturaTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
                        <?php Gral::_echo($pde_factura->getPdeFacturaTipoEstado()->getDescripcion()) ?>
                    </div>
                </td>

                <td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                    <div class="subtotal">
                        <?php Gral::_echoImp($pde_factura->getPdeFacturaSubtotal()) ?>
                    </div>

                    <?php if ($pde_factura->getPdeFacturaIva() > 0) { ?>
                        <div class="iva">
                            + IVA: <?php Gral::_echoImp($pde_factura->getPdeFacturaIva()) ?>
                        </div>
                    <?php } ?>

                    <?php if ($pde_factura->getPdeFacturaTributo() > 0) { ?>
                        <div class="tributos">
                            + Trib: <?php Gral::_echoImp($pde_factura->getPdeFacturaTributo()) ?>
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
