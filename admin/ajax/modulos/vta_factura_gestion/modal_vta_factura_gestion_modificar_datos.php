<?php
include "_autoload.php";

$vta_factura_id = Gral::getVars(Gral::VARS_GET, 'vta_factura_id', 0);
$vta_factura = VtaFactura::getOxId($vta_factura_id);
?>

<div class="datos modificar-datos" vta_factura_id="<?php Gral::_echo($vta_factura->getId()) ?>">
    <form id='form_modificar_datos' name='form_modificar_datos' method='post' action='' >
        <div class="label-error" id="error_general_error"></div>

        <div class="col c1"> 
            <div class="par">
                <div class="label"><?php Lang::_lang('Factura') ?></div>
                <div class="dato"><?php Gral::_echo('#' . $vta_factura->getCodigo()) ?></div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Forma Pago') ?> / <?php Lang::_lang('Medio Pago') ?> / <?php Lang::_lang('Cuota') ?></div>
                <div class="dato">
                    <?php
                    Html::html_dib_select(1, 'cmb_gral_fp_cuota_id', Gral::getCmbFiltro(GralFpCuota::getGralFpCuotasFullCmb(true), '...'), $vta_factura->getGralFpCuotaId(), 'textbox selective-input-filtrox ' . $error_input_css);
                    ?>
                    <div class="label-error" id="cmb_gral_fp_cuota_id_error"></div>
                </div>
            </div>
            
            <div class="par">
                <div class="label"><?php Lang::_lang('Actividad') ?> / <?php Lang::_lang('Escenario') ?></div>
                <div class="dato">
                    <?php
                    Html::html_dib_select(1, 'cmb_gral_escenario_id', Gral::getCmbFiltro(GralEscenario::getGralEscenariosCmb(true), '...'), $vta_factura->getGralEscenarioId(), 'textbox ' . $error_input_css);
                    ?>
                    <div class="label-error" id="cmb_gral_escenario_id_error"></div>
                </div>
            </div>
            
            <div class="par">
                <div class="label"><?php Lang::_lang('Preventista') ?></div>
                <div class="dato">
                    <?php
                    Html::html_dib_select(1, 'cmb_vta_preventista_id', Gral::getCmbFiltro(VtaPreventista::getVtaPreventistasCmb(), '...'), $vta_factura->getVtaPreventistaId(), 'textbox ' . $error_input_css);
                    ?>
                    <div class="label-error" id="cmb_vta_preventista_id_error"></div>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Comprador') ?></div>
                <div class="dato">
                    <?php
                    Html::html_dib_select(1, 'cmb_vta_comprador_id', Gral::getCmbFiltro(VtaComprador::getVtaCompradorsCmb(), '...'), $vta_factura->getVtaCompradorId(), 'textbox ' . $error_input_css);
                    ?>
                    <div class="label-error" id="cmb_vta_comprador_id_error"></div>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Vendedor') ?></div>
                <div class="dato">
                    <?php
                    Html::html_dib_select(1, 'cmb_vta_vendedor_id', Gral::getCmbFiltro(VtaVendedor::getVtaVendedorsCmb(), '...'), $vta_factura->getVtaVendedorId(), 'textbox ' . $error_input_css);
                    ?>
                    <div class="label-error" id="cmb_vta_vendedor_id_error"></div>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Nro Timbrado') ?></div>
                <div class="dato">
                    <input name='txt_nro_timbrado' type='text' class='textbox' id='txt_nro_timbrado' value='<?php Gral::_echo($vta_factura->getNumeroTimbrado()) ?>' size='15' />
                    <div class="label-error" id="txt_nro_timbrado_error"><?php Gral::_echo($txt_nro_timbrado_error) ?></div>  
                </div>
            </div>
            
            <div class="par">
                <div class="label"><?php Lang::_lang('Fecha Vencimiento') ?></div>
                <div class="dato">
                    <input name='txt_fecha_vencimiento' type='text' class='textbox date' id='txt_fecha_vencimiento' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($vta_factura->getFechaVencimiento())) ?>' size='10' placeholder="dd/mm/aaaa" />
                    <input type='button' id='cal_txt_fecha_vencimiento' value='...' />

                    <script type='text/javascript'>
                        Calendar.setup({
                            inputField: 'txt_fecha_vencimiento', ifFormat: '%d/%m/%Y', button: 'cal_txt_fecha_vencimiento'
                        });
                    </script>
                    <div class="label-error" id="txt_fecha_vencimiento_error"><?php Gral::_echo($txt_fecha_vencimiento_error) ?></div>  
                </div>
            </div>

            <?php if (UsCredencial::getEsAcreditado('VTA_FACTURA_GESTION_ACCION_MODIFICAR_NRO_COMPROBANTE')) { ?>
                <div class="par">
                    <div class="label"><?php Lang::_lang('Nro Factura') ?></div>
                    <div class="dato">
                        <input name='txt_nro_sucursal' type='text' class='textbox nro-sucursal' id='txt_nro_sucursal' value='<?php Gral::_echo($vta_factura->getNumeroSucursal()) ?>' size='3' placeholder="000" />
                        <input name='txt_nro_punto_venta' type='text' class='textbox nro-punto-venta-simple' id='txt_nro_punto_venta' value='<?php Gral::_echo($vta_factura->getNumeroPuntoVenta()) ?>' size='3' placeholder="000" />
                        <input name='txt_nro_comprobante' type='text' class='textbox nro-comprobante' id='txt_nro_comprobante' value='<?php Gral::_echo($vta_factura->getNumeroFactura()) ?>' size='10' placeholder="00000000" />

                        <div class="label-error" id="txt_nro_sucursal_error"><?php Gral::_echo($txt_nro_sucursal_error) ?></div>  
                        <div class="label-error" id="txt_nro_punto_venta_error"><?php Gral::_echo($txt_nro_punto_venta_error) ?></div>  
                        <div class="label-error" id="txt_nro_comprobante_error"><?php Gral::_echo($txt_nro_comprobante_error) ?></div>  
                    </div>
                </div>

                <div class="par">
                    <div class="label"><?php Lang::_lang('CAE') ?></div>
                    <div class="dato">
                        <input name='txt_cae' type='text' class='textbox' id='txt_cae' value='<?php Gral::_echo($vta_factura->getCae()) ?>' size='25' />
                        <div class="label-error" id="txt_cae_error"><?php Gral::_echo($txt_cae_error) ?></div>  
                    </div>
                </div>
            <?php } ?>
            
            <div class="par">
                <div class="label"><?php Lang::_lang('Nota Publica') ?></div>
                <div class="dato">
                    <textarea name='txa_nota_publica' rows='2' cols='70' id='txa_nota_publica' class='textbox'><?php Gral::_echoTxt($vta_factura->getNotaPublica()) ?></textarea>
                    <div class="label-error" id="txa_nota_publica_error"></div>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Observaciones') ?></div>
                <div class="dato">
                    <textarea name='txa_observacion' rows='2' cols='70' id='txa_observacion' class='textbox'><?php Gral::_echoTxt($vta_factura->getObservacion()) ?></textarea>
                    <div class="label-error" id="txa_observacion_error"></div>
                </div>
            </div>

        </div>

        <div class="label-error" id="envio_mail_error"></div>
        <div class="botonera">
            <button class="boton" id='btn_registrar' name='btn_registrar' type='button' class='btn_registrar'><?php Lang::_lang('Guardar') ?></button>
        </div>

    </form>
</div>
<script>
    setInit();
    setInitVtaFacturaGestion();
</script>