
<div class="titulo"><?php Lang::_lang('Cobros Anulados') ?></div>

<div class="bloque-ficha-cobros">
    <table border="0" class="tabla-modal">
        <tr>
            <td class="adm_tbl_encabezado" width="40" align="center">
                Cont
            </td>
            
            <td class="adm_tbl_encabezado" width="90" align="center">
                Emision
            </td>

            <td class="adm_tbl_encabezado" width="240" align="center">
                Cliente
            </td>

            <td class="adm_tbl_encabezado" width="150" align="center">
                Forma de Pago
            </td>

            <td class="adm_tbl_encabezado" width="100" align="center">
                Referencia
            </td>

            <td class="adm_tbl_encabezado" width="100" align="center">
                Importe
            </td>

            <td class="adm_tbl_encabezado" width="150" align="center">
                Creado
            </td>

            <td class="adm_tbl_encabezado" width="200" align="center">
                Caja Afectada
            </td>

        </tr>
        <?php
        $cont = 0;
        foreach ($vta_recibos_inactivos as $vta_recibo) {
            $cont++;
            foreach ($vta_recibo->getVtaReciboItems() as $vta_recibo_item) {

                $gral_fp_forma_pago = $vta_recibo_item->getGralFpFormaPago();
                $vta_recibo = $vta_recibo_item->getVtaRecibo();

                $vta_factura_vta_recibos = $vta_recibo->getVtaFacturaVtaRecibos(null, null, true);
                $vta_nota_debito_vta_recibos = $vta_recibo->getVtaNotaDebitoVtaRecibos(null, null, true);
                ?>
                <tr id="tr_pde_orden_pago_pde_comprobante_gestion_uno_<?php echo $vta_recibo->getId() ?>" class="uno" identificador="<?php echo $vta_recibo->getId() ?>" tabla="vta_recibo" clase="VtaRecibo">

                    <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                        <div class="cont">
                            <?php Gral::_echo($cont) ?>
                        </div>
                    </td>	

                    <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                        <div class="fecha-emision">
                            <?php Gral::_echo(Gral::getFechaToWEB($vta_recibo->getFechaEmision())) ?>
                        </div>
                        <div class="nro-comprobante">
                            <?php Gral::_echo($vta_recibo->getNumeroComprobanteCompleto()) ?>
                        </div>
                        <div class="comprobante-tipo-esstado">
                            <img src="imgs/vta_comprobante_tipo_estado/<?php Gral::_echo($vta_recibo->getVtaReciboTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="8" />                    
                            <?php Gral::_echo($vta_recibo->getVtaReciboTipoEstado()->getDescripcion()) ?>
                        </div>
                    </td>	

                    <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
                        <div class="persona-descripcion">
                            <?php Gral::_echo($vta_recibo->getPersonaDescripcion()) ?>
                        </div>
                        <div class="item-descripcion">
                            <?php Gral::_echo($vta_recibo_item->getDescripcion()) ?>
                        </div>
                        <div class="vta-comprobantes-vinculados">
                            <?php foreach ($vta_factura_vta_recibos as $vta_factura_vta_recibo) { ?>
                                <div class="vta-comprobante-vinculado">
                                    <?php Gral::_echo($vta_factura_vta_recibo->getVtaFactura()->getTipoComprobanteSiglas()) ?>
                                    <?php Gral::_echo($vta_factura_vta_recibo->getVtaFactura()->getNumeroFacturaCompleto()) ?>
                                    (<?php Gral::_echoImp($vta_factura_vta_recibo->getImporteAfectado()) ?>)
                                </div>
                            <?php } ?>
                            <?php foreach ($vta_nota_debito_vta_recibos as $vta_nota_debito_vta_recibo) { ?>
                                <div class="vta-comprobante-vinculado">
                                    <?php Gral::_echo($vta_nota_debito_vta_recibo->getVtaNotaDebito()->getTipoComprobanteSiglas()) ?>
                                    <?php Gral::_echo($vta_nota_debito_vta_recibo->getVtaNotaDebito()->getNumeroNotaDebitoCompleto()) ?>
                                    (<?php Gral::_echoImp($vta_nota_debito_vta_recibo->getImporteAfectado()) ?>)
                                </div>
                            <?php } ?>
                        </div>
                    </td>	

                    <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                        <div class="forma-pago">
                            <?php Gral::_echo($gral_fp_forma_pago->getDescripcion()) ?>
                        </div>
                    </td>	

                    <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                        <div class="referencia">
                            <?php Gral::_echo($vta_recibo_item->getCodigo()) ?>
                        </div>
                    </td>	

                    <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right">
                        <div class="importe">
                            <?php Gral::_echoImp($vta_recibo_item->getImporteTotal()) ?>
                        </div>
                    </td>	

                    <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                        <div class="creado">
                            <?php Gral::_echo(Gral::getFechaHoraToWEB($vta_recibo_item->getCreado())) ?>
                        </div>
                        <div class="creado-por">
                            <?php Gral::_echo($vta_recibo_item->getCreadoPorDescripcion()) ?>
                        </div>
                    </td>	

                    <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                        <div class="fnd_caja_id">
                            <?php if (UsCredencial::getEsAcreditado('FND_CAJA_GESTION_ACCION_FICHA_REASIGNAR_CAJA')) { ?>
                                <?php
                                if ($fnd_cajero_autenticado && $fnd_caja->esFndCajaAbierta() && $fnd_cajero_autenticado->getId() == $fnd_caja->getFndCajeroId()) {
                                    Html::html_dib_select(1, 'cmb_vta_recibo_fnd_caja_id_' . $fnd_caja->getId(), $fnd_cajero_autenticado->getFndCajaAbiertaCmb(), $fnd_caja->getId(), 'textbox cmb_fnd_caja_id' . $error_input_css, '', '', 'cmb_vta_recibo_fnd_caja_id[' . $fnd_caja->getId() . ']');
                                } else {
                                    Gral::_echo($fnd_caja->getDescripcion());
                                }
                                ?>
                            <?php } else { ?>
                                <?php Gral::_echo($fnd_caja->getDescripcion()); ?>
                            <?php } ?>
                        </div>
                    </td>	

                </tr>
            <?php } ?>
        <?php } ?>
    </table>
</div>
<br />

