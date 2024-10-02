<?php
include "_autoload.php";

$pde_nota_debito_id = Gral::getVars(Gral::VARS_GET, 'pde_nota_debito_id', 0);
$pde_nota_debito = PdeNotaDebito::getOxId($pde_nota_debito_id);
$prv_proveedor = $pde_nota_debito->getPrvProveedor();

$gral_mes_id = $pde_nota_debito->getGralMesId();
$cmb_anio = $pde_nota_debito->getAnio();
?>

<div class="datos modificar-datos" pde_nota_debito_id="<?php Gral::_echo($pde_nota_debito->getId()) ?>">
    <form id='form_modificar_datos' name='form_modificar_datos' method='post' action='' >
        <div class="label-error" id="error_general_error"></div>

        <div class="col c1"> 
            <div class="par">
                <div class="label"><?php Lang::_lang('Nota de Debito') ?></div>
                <div class="dato"><?php Gral::_echo('#' . $pde_nota_debito->getCodigo()) ?></div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Tipo') ?></div>
                <div class="dato">
                    <?php
                    Html::html_dib_select(1, 'cmb_pde_tipo_nota_debito_id', Gral::getCmbFiltro(PdeTipoNotaDebito::getPdeTipoNotaDebitosCmb(), '...'), $pde_nota_debito->getPdeTipoNotaDebitoId(), 'textbox ' . $error_input_css);
                    ?>
                    <div class="label-error" id="cmb_pde_tipo_nota_debito_id_error"></div>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Nota de Debito de') ?></div>
                <div class="dato">
                    <?php Html::html_dib_select(1, 'cmb_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(), '...'), $pde_nota_debito->getPrvProveedorId(), 'textbox ' . $error_input_css); ?>
                    <div class="label-error" id="cmb_prv_proveedor_id_error"></div>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Fecha ND') ?></div>
                <div class="dato">
                    <input name='txt_fecha' type='text' class='textbox date' id='txt_fecha' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($pde_nota_debito->getFechaEmision())) ?>' size='10' placeholder="dd/mm/aaaa" />
                    <input type='button' id='cal_txt_fecha' value='...' />

                    <script type='text/javascript'>
                        Calendar.setup({
                            inputField: 'txt_fecha', ifFormat: '%d/%m/%Y', button: 'cal_txt_fecha'
                        });
                    </script>
                    <div class="label-error" id="txt_fecha_error"><?php Gral::_echo($txt_fecha_error) ?></div>  
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Periodo') ?></div>
                <div class="dato">
                    <?php
                    Html::html_dib_select(1, 'cmb_gral_mes_id', GralMes::getGralMessCmb(), $gral_mes_id, 'textbox ' . $error_input_css);
                    Html::html_dib_select(1, 'cmb_anio', Gral::getAniosCmb(1), $cmb_anio, 'textbox ' . $error_input_css);
                    ?>
                    <div class="label-error" id="cmb_gral_mes_id_error"></div>
                </div>
            </div>
            
            <div class="par">
                <div class="label"><?php Lang::_lang('Nro Timbrado') ?></div>
                <div class="dato">
                    <input name='txt_nro_timbrado' type='text' class='textbox' id='txt_nro_timbrado' value='<?php Gral::_echo($pde_nota_debito->getNumeroTimbrado()) ?>' size='15' />
                    <div class="label-error" id="txt_nro_timbrado_error"><?php Gral::_echo($txt_nro_timbrado_error) ?></div>  
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Nro ND') ?></div>
                <div class="dato">
                    <input name='txt_nro_punto_venta' type='text' class='textbox' id='txt_nro_punto_venta' value='<?php Gral::_echo($pde_nota_debito->getNumeroPuntoVenta()) ?>' size='6' placeholder="000-000" />
                    <input name='txt_nro_comprobante' type='text' class='textbox' id='txt_nro_comprobante' value='<?php Gral::_echo($pde_nota_debito->getNumeroNotaDebito()) ?>' size='10' placeholder="0000000" />

                    <div class="label-error" id="txt_nro_punto_venta_error"><?php Gral::_echo($txt_nro_punto_venta_error) ?></div>  
                    <div class="label-error" id="txt_nro_comprobante_error"><?php Gral::_echo($txt_nro_comprobante_error) ?></div>  
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Fecha Vencimiento') ?></div>
                <div class="dato">
                    <input name='txt_fecha_vencimiento' type='text' class='textbox date' id='txt_fecha_vencimiento' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($pde_nota_debito->getFechaVencimiento())) ?>' size='10' placeholder="dd/mm/aaaa" />
                    <input type='button' id='cal_txt_fecha_vencimiento' value='...' />

                    <script type='text/javascript'>
                        Calendar.setup({
                            inputField: 'txt_fecha_vencimiento', ifFormat: '%d/%m/%Y', button: 'cal_txt_fecha_vencimiento'
                        });
                    </script>
                    <div class="label-error" id="txt_fecha_vencimiento_error"><?php Gral::_echo($txt_fecha_vencimiento_error) ?></div>  
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Observaciones') ?></div>
                <div class="dato">
                    <textarea name='txa_observacion' rows='3' cols='50' id='txa_observacion' class='textbox'><?php Gral::_echoTxt($pde_nota_debito->getObservacion()) ?></textarea>
                    <div class="label-error" id="txa_observacion_error"></div>
                </div>
            </div>

        </div>

        <div class="col c2">
            <table border='0' align='center' class='detalle_pde_comprobante_total' id='detalle_pde_comprobante_total'>
                <tr class="otros-tributos">
                    <td colspan="3" align="center">
                        <strong>
                            <?php Lang::_lang('Tributos Aplicados') ?>
                        </strong>
                    </td>
                </tr>
                <?php
                foreach (PdeTributo::getPdeTributos(null, null, true) as $pde_tributo) {
                    $importe_tributo = $pde_nota_debito->getImporteTributoImporte($pde_tributo->getCodigo());
                    $importe_tributo_formateado = Gral::getImporteDesdeDbToPriceFormat($importe_tributo);
                    ?>
                    <tr class="otros-tributos">
                        <td>&nbsp;</td>
                        <td>
                            <?php Lang::_lang($pde_tributo->getDescripcion()) ?>
                        </td>
                        <td align='right'>
                            <input type="text" size="10" id="txt_comprobante_tributo_<?php echo $pde_tributo->getId() ?>" name="txt_comprobante_tributo[<?php echo $pde_tributo->getId() ?>]" class="moneda textbox txt_comprobante_tributo" value="<?php Gral::_echo(($importe_tributo != 0) ? $importe_tributo_formateado : ''); ?>" />
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>              

        <div class="label-error" id="envio_mail_error"></div>
        <div class="botonera">
            <button class="boton" id='btn_registrar' name='btn_registrar' type='button' class='btn_registrar'><?php Lang::_lang('Guardar') ?></button>
        </div>

    </form>
</div>
<script>
    setInit();
    setInitPdeNotaDebitoGestion();
</script>