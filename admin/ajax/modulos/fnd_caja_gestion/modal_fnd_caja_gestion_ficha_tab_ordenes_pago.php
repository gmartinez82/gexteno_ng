
<div class="titulo"><?php Lang::_lang('Ordenes de Pago') ?></div>

<div class="bloque-ficha-ordenes-pago">
    <table border="0" class="tabla-modal">
        <tr>
            <td class="adm_tbl_encabezado" width="100" align="center">
                Emision
            </td>

            <td class="adm_tbl_encabezado" width="210" align="center">
                Proveedor
            </td>

            <td class="adm_tbl_encabezado" width="120" align="center">
                Nro Comprobante
            </td>

            <td class="adm_tbl_encabezado" width="150" align="center">
                Forma de Pago
            </td>

            <td class="adm_tbl_encabezado" width="150" align="center">
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
        foreach ($pde_orden_pagos as $pde_orden_pago) {
            foreach ($pde_orden_pago->getPdeOrdenPagoGralFpFormaPagos() as $pde_orden_pago_gral_fp_forma_pago) {
                $cont++;

                $gral_fp_forma_pago = $pde_orden_pago_gral_fp_forma_pago->getGralFpFormaPago();
                ?>
                <tr id="tr_pde_orden_pago_pde_comprobante_gestion_uno_<?php echo $pde_orden_pago->getId() ?>" class="uno" identificador="<?php echo $pde_orden_pago->getId() ?>" tabla="pde_orden_pago" clase="PdeOrdenPago">

                    <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                        <div class="fecha-emision">
                            <?php Gral::_echo(Gral::getFechaToWEB($pde_orden_pago->getFechaEmision())) ?>
                        </div>
                    </td>	

                    <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
                        <div class="persona-descripcion">
                            <?php Gral::_echo($pde_orden_pago->getPersonaDescripcion()) ?>
                        </div>
                    </td>	

                    <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                        <div class="nro-comprobante">
                            <?php Gral::_echo($pde_orden_pago->getCodigo()) ?>
                        </div>
                    </td>	

                    <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                        <div class="forma-pago">
                            <?php Gral::_echo($gral_fp_forma_pago->getDescripcion()) ?>
                        </div>
                    </td>	

                    <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right">
                        <div class="importe">
                            <?php Gral::_echoImp($pde_orden_pago_gral_fp_forma_pago->getImporteAfectado()) ?>
                        </div>
                    </td>	
                    
                    <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                        <div class="creado">
                            <?php Gral::_echo(Gral::getFechaHoraToWEB($pde_orden_pago_gral_fp_forma_pago->getCreado())) ?>
                        </div>
                        <div class="creado-por">
                            <?php Gral::_echo($pde_orden_pago_gral_fp_forma_pago->getCreadoPorDescripcion()) ?>
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

