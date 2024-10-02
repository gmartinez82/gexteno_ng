<?php
include "_autoload.php";

$vta_nota_debito = new VtaNotaDebito();

$txt_cantidads = Gral::getVars(Gral::VARS_POST, "txt_cantidad", null);
$txt_descripcions = Gral::getVars(Gral::VARS_POST, "txt_descripcion", null);
$cmb_gral_tipo_iva_ids = Gral::getVars(Gral::VARS_POST, "cmb_gral_tipo_iva_id", null);
$cmb_vta_nota_debito_concepto_ids = Gral::getVars(Gral::VARS_POST, "cmb_vta_nota_debito_concepto_id", null);
$txt_importe_unitarios = Gral::getVars(Gral::VARS_POST, "txt_importe_unitario", null);
$txt_importe_ivas = Gral::getVars(Gral::VARS_POST, "txt_importe_iva", null);
$txt_importe_tributos = Gral::getVars(Gral::VARS_POST, "txt_importe_tributo", null);
$txt_importe_totals = Gral::getVars(Gral::VARS_POST, "txt_importe_total", null);
$cmb_aplica_percepcion_iibbs = Gral::getVars(Gral::VARS_POST, "cmb_aplica_percepcion_iibb", null);

$cli_cliente_id = Gral::getVars(Gral::VARS_POST, "cli_cliente_id", 0);
$cli_cliente = CliCliente::getOxId($cli_cliente_id);

if ($cli_cliente) {
    $vta_nota_debito->setCliClienteId($cli_cliente_id);

    // -------------------------------------------------------------------------
    // se determina el preventista que corresponde al cliente, si lo tuviese
    // -------------------------------------------------------------------------    
    $vta_preventista = $cli_cliente->getVtaPreventistaXCliClienteVtaPreventista();
    if ($vta_preventista) {
        $vta_preventista_id = $vta_preventista->getId();
    }

    // -------------------------------------------------------------------------
    // se determina la actividad que corresponde al cliente, si lo tuviese
    // -------------------------------------------------------------------------    
    $gral_actividad = $cli_cliente->getGralActividadXCliClienteGralActividad();
    if ($gral_actividad) {
        $gral_actividad_id = $gral_actividad->getId();
    }

    // -------------------------------------------------------------------------
    // se determina el punto de venta que corresponde al cliente, si lo tuviese
    // -------------------------------------------------------------------------    
    $vta_punto_venta = $cli_cliente->getVtaPuntoVentaXCliClienteVtaPuntoVenta();
    if ($vta_punto_venta) {
        $vta_punto_venta_id = $vta_punto_venta->getId();
        $gral_empresa = $vta_punto_venta->getGralEmpresa();
        $gral_empresa_id = $gral_empresa->getId();

        // se presetea el punto de venta
        $vta_nota_debito->setVtaPuntoVentaId($vta_punto_venta->getId());
    }
}

$gral_condicion_iva = VtaNotaDebito::getDeterminacionGralCondicionIva($cli_cliente_id);
if ($gral_condicion_iva) {
    $vta_nota_debito->setGralCondicionIvaId($gral_condicion_iva->getId());
}

$cv_dias_vencimiento = ConfVariable::getVtaComprobanteDiasVencimientoDefault();
$txt_fecha_vencimiento = Date::sumarDias(date('Y-m-d'), $cv_dias_vencimiento);

$vta_nota_debito->setNumeroTimbrado(ConfVariable::NUMERO_TIMBRADO_EKUATIA)
?>

<div class="datos generar-ws-fe-afip" tipo="item">
    <div class="label-error" id="error_cliente_error"></div>

    <?php include "bloque_vta_nota_debito_listado_items_x_cli_cliente_modal.php"; ?>

    <form id='form_generar_ws_fe_afip' name='form_generar_ws_fe_afip' method='POST' action='' >

        <div class="label-error" id="error_general_error"></div>
        <div class="label-error" id="error_general"></div>

        <div class="col col1">

            <div class="par">
                <div class="label"><?php Lang::_lang('Cliente') ?></div>
                <div class="dato"><?php Gral::_echo($cli_cliente->getRazonSocial()) ?></div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('CUIT') ?></div>
                <div class="dato"><?php Gral::_echo($cli_cliente->getCuit()) ?></div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Cond IVA') ?></div>
                <div class="dato"><?php Gral::_echo($cli_cliente->getGralCondicionIva()->getDescripcion()) ?></div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Tipo') ?></div>
                <div class="dato"><?php Gral::_echo(VtaNotaDebito::getDeterminacionTipoNotaDebito($cli_cliente_id)->getDescripcion()) ?></div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Localidad') ?></div>
                <div class="dato"><?php Gral::_echo($cli_cliente->getGeoLocalidad()->getDescripcionFull()) ?></div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Preventista') ?></div>
                <div class="dato">
                    <?php
                    Html::html_dib_select(1, 'cmb_vta_preventista_id', Gral::getCmbFiltro(VtaPreventista::getVtaPreventistasCmb(), '...'), $vta_preventista_id, 'textbox ' . $error_input_css);
                    ?>
                    <div class="label-error" id="cmb_vta_preventista_id_error"></div>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Actividad') ?></div>
                <div class="dato">
                    <?php
                    Html::html_dib_select(1, 'cmb_gral_actividad_id', Gral::getCmbFiltro(GralActividad::getGralActividadsCmb(), '...'), $gral_actividad_id, 'textbox ' . $error_input_css);
                    ?>
                    <div class="label-error" id="cmb_gral_actividad_id_error"></div>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Gral::_echo("Escenario") ?></div>
                <div class="dato">
                    <?php
                    if ($gral_actividad) {
                        Html::html_dib_select(1, 'cmb_gral_escenario_id', Gral::getCmbFiltro($gral_actividad->getGralEscenariosCmb(), '...'), $gral_escenario_id, 'textbox ' . $error_input_css);
                    } else {
                        Html::html_dib_select(1, 'cmb_gral_escenario_id', Gral::getCmbFiltro(array(), '...'), $gral_escenario_id, 'textbox ' . $error_input_css);
                    }
                    ?>
                    <div class="label-error" id="cmb_gral_escenario_id_error"></div>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Forma de Pago') ?></div>
                <div class="dato">
                    <?php
                    $gral_fp_forma_pago_id = 0;
                    Html::html_dib_select(1, 'cmb_gral_fp_forma_pago_id', Gral::getCmbFiltro(GralFpFormaPago::getGralFpFormaPagosCmbDeVenta(), '...'), $gral_fp_forma_pago_id, 'textbox ' . $error_input_css);
                    ?>
                    <div class="label-error" id="cmb_gral_fp_forma_pago_id_error"></div>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Fecha Vencimiento') ?></div>
                <div class="dato">
                    <input name='txt_fecha_vencimiento' type='text' class='textbox date' id='txt_fecha_vencimiento' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($txt_fecha_vencimiento)) ?>' size='10' placeholder="dd/mm/aaaa" />
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
                <div class="label"><?php Gral::_echo("Facturadora") ?></div>
                <div class="dato">
                    <?php
                    Html::html_dib_select(1, 'cmb_gral_empresa_id', Gral::getCmbFiltro(GralEmpresa::getGralEmpresasCmb(), '...'), $gral_empresa_id, 'textbox ' . $error_input_css);
                    ?>
                    <div class="label-error" id="cmb_gral_empresa_id_error"></div>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Gral::_echo("Pto Vta") ?></div>
                <div class="dato">
                    <?php
                    if ($vta_punto_venta) {
                        Html::html_dib_select(1, 'cmb_vta_punto_venta_id', Gral::getCmbFiltro($gral_empresa->getVtaPuntoVentasCmb(), '...'), $vta_punto_venta_id, 'textbox ' . $error_input_css);
                    } else {
                        Html::html_dib_select(1, 'cmb_vta_punto_venta_id', Gral::getCmbFiltro(array(), '...'), $vta_punto_venta_id, 'textbox ' . $error_input_css);
                    }
                    ?>
                    <div class="label-error" id="cmb_vta_punto_venta_id_error"></div>
                </div>
            </div>
            
            <div class="par">
                <div class="label"><?php Lang::_lang('Nro Timbrado') ?></div>
                <div class="dato">
                    <input name='txt_nro_timbrado' type='text' class='textbox' id='txt_nro_timbrado' value='<?php Gral::_echo($vta_nota_debito->getNumeroTimbrado()) ?>' size='15' />
                    <div class="label-error" id="txt_nro_timbrado_error"><?php Gral::_echo($txt_nro_timbrado_error) ?></div>  
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Nota Publica') ?></div>
                <div class="dato">
                    <textarea name='txa_nota_publica' rows='3' cols='50' id='txa_nota_publica' class='textbox'></textarea>
                    <div class="label-error" id="txa_nota_publica_error"></div>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Nota Privada') ?></div>
                <div class="dato">
                    <textarea name='txa_observacion' rows='3' cols='50' id='txa_observacion' class='textbox'></textarea>
                    <div class="label-error" id="txa_observacion_error"></div>
                </div>
            </div>

        </div>

        <div class="col col2" id="bloque_vta_nota_debito_listado_items_tabla_totales">
            <?php include "bloque_vta_nota_debito_listado_items_tabla_totales.php"; ?>            
        </div>

        <div class="label-error" id="generar_nota_debito_online_afip_error"></div>
        <div class="botonera">
            <button class="boton" cli_cliente_id="<?php echo $cli_cliente_id ?>" id='btn_generar_nota_debito_online' name='btn_generar_nota_debito_online' type='button' class='btn_generar_nota_debito_online'><?php Lang::_lang('Generar Nota de Debito') ?></button>
        </div>

    </form>
</div>

<script>
    setInit();
    setInitVtaNotaDebitoGestion();
</script>