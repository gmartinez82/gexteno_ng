
<div class="titulo"><?php Lang::_lang('Ajustes de Haber Anulados') ?></div>

<div class="bloque-ficha-cobros">
    <table border="0" class="tabla-modal">
        <tr>
            <td class="adm_tbl_encabezado" width="40" align="center">
                Cont
            </td>
            
            <td class="adm_tbl_encabezado" width="90" align="center">
                Emision
            </td>

            <td class="adm_tbl_encabezado" width="300" align="center">
                Cliente
            </td>

            <td class="adm_tbl_encabezado" width="150" align="center">
                Forma de Pago
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
        foreach ($vta_ajuste_habers_inactivos as $vta_ajuste_haber) {
            $cont++;
            foreach ($vta_ajuste_haber->getVtaAjusteHaberItems() as $vta_ajuste_haber_item) {

                $gral_fp_forma_pago = $vta_ajuste_haber_item->getGralFpFormaPago();
                $vta_ajuste_haber   = $vta_ajuste_haber_item->getVtaAjusteHaber();

                $vta_ajuste_debe_vta_ajuste_habers = $vta_ajuste_haber->getVtaAjusteDebeVtaAjusteHabers(null, null, true);
                ?>
                <tr id="tr_pde_orden_pago_pde_comprobante_gestion_uno_<?php echo $vta_ajuste_haber->getId() ?>" class="uno" identificador="<?php echo $vta_ajuste_haber->getId() ?>" tabla="vta_ajuste_haber" clase="VtaAjusteHaber">

                    <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                        <div class="cont">
                            <?php Gral::_echo($cont) ?>
                        </div>
                    </td>	

                    <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                        <div class="fecha-emision">
                            <?php Gral::_echo(Gral::getFechaToWEB($vta_ajuste_haber->getFechaEmision())) ?>
                        </div>
                        <div class="nro-comprobante">
                            <?php Gral::_echo($vta_ajuste_haber->getNumeroComprobanteCompleto()) ?>
                        </div>
                        <div class="comprobante-tipo-esstado">
                            <img src="imgs/vta_comprobante_tipo_estado/<?php Gral::_echo($vta_ajuste_haber->getVtaAjusteHaberTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="8" />                    
                            <?php Gral::_echo($vta_ajuste_haber->getVtaAjusteHaberTipoEstado()->getDescripcion()) ?>
                        </div>
                    </td>	

                    <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
                        <div class="persona-descripcion">
                            <?php Gral::_echo($vta_ajuste_haber->getPersonaDescripcion()) ?>
                        </div>
                        <div class="item-descripcion">
                            <?php Gral::_echo($vta_ajuste_haber_item->getDescripcion()) ?>
                        </div>
                        <div class="vta-comprobantes-vinculados">
                            <?php
                            foreach ($vta_ajuste_debe_vta_ajuste_habers as $vta_ajuste_debe_vta_ajuste_haber) {
                                $vta_ajuste_debe = $vta_ajuste_debe_vta_ajuste_haber->getVtaAjusteDebe();
                                $vta_presupuesto = $vta_ajuste_debe->getVtaPresupuesto();
                                ?>
                                <div class="vta-comprobante-vinculado">
                                    <?php Gral::_echo(Gral::getFechaHoraToWeb($vta_ajuste_debe->getCreado())) ?> - 
                                    <?php Gral::_echo($vta_ajuste_debe->getCodigo()) ?>
                                    (<?php Gral::_echoImp($vta_ajuste_debe_vta_ajuste_haber->getImporteAfectado()) ?>)

                                    <?php if ($vta_presupuesto->getId() != 'null') { ?>
                                        <div class="vta-presupuesto-vinculado">
                                            <?php Gral::_echo(Gral::getFechaHoraToWeb($vta_presupuesto->getCreado())) ?> - 
                                            <?php Gral::_echo($vta_presupuesto->getCodigo()) ?> creado por <?php Gral::_echo($vta_presupuesto->getCreadoPorDescripcion()) ?>
                                        </div>
                                    <?php } ?>

                                </div>
                            <?php } ?>
                        </div>
                    </td>	

                    <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                        <div class="forma-pago">
                            <?php Gral::_echo($gral_fp_forma_pago->getDescripcion()) ?>
                        </div>
                        <div class="referencia">
                            <?php Gral::_echo($vta_ajuste_haber_item->getCodigo()) ?>
                        </div>
                    </td>	

                    <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right">
                        <div class="importe">
                            <?php Gral::_echoImp($vta_ajuste_haber_item->getImporteTotal()) ?>
                        </div>
                    </td>	

                    <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                        <div class="creado">
                            <?php Gral::_echo(Gral::getFechaHoraToWEB($vta_ajuste_haber_item->getCreado())) ?>
                        </div>
                        <div class="creado-por">
                            <?php Gral::_echo($vta_ajuste_haber_item->getCreadoPorDescripcion()) ?>
                        </div>
                    </td>	

                    <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                        <div class="fnd_caja_id">
                            <?php if (UsCredencial::getEsAcreditado('FND_CAJA_GESTION_ACCION_FICHA_REASIGNAR_CAJA')) { ?>
                                <?php
                                if ($fnd_cajero_autenticado && $fnd_caja->esFndCajaAbierta() && $fnd_cajero_autenticado->getId() == $fnd_caja->getFndCajeroId()) {
                                    Html::html_dib_select(1, 'cmb_vta_recibo_fnd_caja_id_' . $fnd_caja->getId(), $fnd_cajero_autenticado->getFndCajaAbiertaCmb(), $fnd_caja->getId(), 'textbox cmb_fnd_caja_id' . $error_input_css, '', '', 'cmb_vta_recibo_fnd_caja_id[' . $fnd_caja->getId() . ']');
                                }
                                else {
                                    Gral::_echo($fnd_caja->getDescripcion());
                                }
                                ?>
                                <?php
                            }
                            else {
                                ?>
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

