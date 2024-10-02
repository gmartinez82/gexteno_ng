
<div class="titulo"><?php Lang::_lang('Comprobantes Desvinculados') ?></div>

<div class="bloque-comprobantes-vinculados bloque-pde-factura-comprobantes-vinculados">

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
            <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang("Usuario"); ?></td>
        </tr>
        <?php
        foreach ($pde_factura_pde_nota_creditos_desvinculados as $pde_factura_pde_nota_credito) {
            $estado = (false) ? 'habilitado' : 'deshabilitado';
            
            $pde_nota_credito = $pde_factura_pde_nota_credito->getPdeNotaCredito();

            $pde_tipo_nota_credito = $pde_nota_credito->getPdeTipoNotaCredito();
            $gral_empresa_facturadora = $pde_nota_credito->getGralEmpresa();
            $gral_empresa_facturadora_descripcion = $gral_empresa_facturadora->getDescripcion();

            $importe_total = $pde_nota_credito->getPdeNotaCreditoTotal();
            $importe_afectado = $pde_factura_pde_nota_credito->getImporteAfectado();
            $porcentaje_afectado = ($importe_afectado * 100) / $importe_total;            
            ?>
            <tr>
                <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                    <div class="codigo">
                        <?php Gral::_echo($pde_nota_credito->getCodigo()) ?>
                    </div>
                    <div class="fecha_emision">
                        <?php Gral::_echo(Gral::getFechaToWeb($pde_nota_credito->getFechaEmision())) ?>
                    </div>
                </td>	

                <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                    <div class="numero_comprobante" title="Numero de Nota de Credito AFIP">
                        <?php Gral::_echo($pde_nota_credito->getNumeroComprobanteCompleto()) ?>
                    </div>
                    <div class="cae" title="CAE">
                        <?php Gral::_echo($pde_nota_credito->getCae()) ?>
                    </div>
                    <div class="fecha_emision_cae" title="Fecha de emision">
                        <?php Gral::_echo(Gral::getFechaToWeb($pde_nota_credito->getFechaEmision())) ?>
                    </div>
                </td>		

                <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                    <div class="descripcion-pde-tipo-nota-credito">	
                        <?php Gral::_echo($pde_tipo_nota_credito->getDescripcion()) ?>
                        <?php //Gral::_echo($pde_nota_credito->getPdeTipoNotaCredito()->getCodigoMin()) ?>

                    </div>
                </td>

                <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                    <div class="pde_comprobante_tipo_estado">
                        <img src="imgs/pde_nota_credito_tipo_estado/<?php Gral::_echo($pde_nota_credito->getPdeNotaCreditoTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
                        <?php Gral::_echo($pde_nota_credito->getPdeNotaCreditoTipoEstado()->getDescripcion()) ?>
                    </div>
                </td>

                <td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                    <div class="subtotal">
                        <?php Gral::_echoImp($pde_nota_credito->getPdeNotaCreditoSubtotal()) ?>
                    </div>

                    <?php if ($pde_nota_credito->getPdeNotaCreditoIva() > 0) { ?>
                        <div class="iva">
                            + IVA: <?php Gral::_echoImp($pde_nota_credito->getPdeNotaCreditoIva()) ?>
                        </div>
                    <?php } ?>

                    <?php if ($pde_nota_credito->getPdeNotaCreditoTributo() > 0) { ?>
                        <div class="tributos">
                            + Trib: <?php Gral::_echoImp($pde_nota_credito->getPdeNotaCreditoTributo()) ?>
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

                <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                    <div class="usuario">
                        <?php Gral::_echo($pde_factura_pde_nota_credito->getModificadoPorDescripcion()) ?>
                    </div>
                    <div class="fecha">
                        <?php Gral::_echo(Gral::getFechaHoraToWEB($pde_factura_pde_nota_credito->getModificado())) ?>
                    </div>
                </td>
                
            </tr>
        <?php } ?>

        <?php

        foreach ($pde_factura_pde_recibos_desvinculados as $pde_factura_pde_recibo) {
            $estado = (false) ? 'habilitado' : 'deshabilitado';
            
            $pde_recibo = $pde_factura_pde_recibo->getPdeRecibo();

            $pde_tipo_recibo = $pde_recibo->getPdeTipoRecibo();
//        $gral_condicion_iva = $pde_recibo->getGralCondicionIva();
//        $gral_tipo_personeria = $pde_recibo->getGralTipoPersoneria();
            $gral_empresa_facturadora = $pde_recibo->getGralEmpresa();
            $gral_empresa_facturadora_descripcion = $gral_empresa_facturadora->getDescripcion();

            $importe_total = $pde_recibo->getPdeReciboTotal();
            $importe_afectado = $pde_factura_pde_recibo->getImporteAfectado();
            $porcentaje_afectado = ($importe_afectado * 100) / $importe_total;
            ?>
            <tr>
                <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                    <div class="codigo">
                        <?php Gral::_echo($pde_recibo->getCodigo()) ?>
                    </div>
                    <div class="fecha_emision">
                        <?php Gral::_echo(Gral::getFechaToWeb($pde_recibo->getFechaEmision())) ?>
                    </div>
                </td>	

                <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                    <div class="numero_comprobante" title="Numero de Recibo AFIP">
                        <?php Gral::_echo($pde_recibo->getNumeroComprobanteCompleto()) ?>
                    </div>
                    <div class="cae" title="CAE">
                        <?php Gral::_echo($pde_recibo->getCae()) ?>
                    </div>
                    <div class="fecha_emision_cae" title="Fecha de emision">
                        <?php Gral::_echo(Gral::getFechaToWeb($pde_recibo->getFechaEmision())) ?>
                    </div>
                </td>		

                <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                    <div class="descripcion-pde-tipo-nota-credito">	
                        <?php Gral::_echo($pde_tipo_recibo->getDescripcion()) ?>
                        <?php //Gral::_echo($pde_recibo->getPdeTipoRecibo()->getCodigoMin()) ?>

                    </div>
                </td>

                <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                    <div class="pde_comprobante_tipo_estado">
                        <img src="imgs/pde_recibo_tipo_estado/<?php Gral::_echo($pde_recibo->getPdeReciboTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
                        <?php Gral::_echo($pde_recibo->getPdeReciboTipoEstado()->getDescripcion()) ?>
                    </div>
                </td>

                <td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                    <div class="subtotal">
                        <?php Gral::_echoImp($pde_recibo->getPdeReciboSubtotal()) ?>
                    </div>

                    <?php if ($pde_recibo->getPdeReciboIva() > 0) { ?>
                        <div class="iva">
                            + IVA: <?php Gral::_echoImp($pde_recibo->getPdeReciboIva()) ?>
                        </div>
                    <?php } ?>

                    <?php if ($pde_recibo->getPdeReciboTributo() > 0) { ?>
                        <div class="tributos">
                            + Trib: <?php Gral::_echoImp($pde_recibo->getPdeReciboTributo()) ?>
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
                
                <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                    <div class="usuario">
                        <?php Gral::_echo($pde_factura_pde_recibo->getModificadoPorDescripcion()) ?>
                    </div>
                    <div class="fecha">
                        <?php Gral::_echo(Gral::getFechaHoraToWEB($pde_factura_pde_recibo->getModificado())) ?>
                    </div>
                </td>

            </tr>
        <?php } ?>
    </table>

</div>
<br />
