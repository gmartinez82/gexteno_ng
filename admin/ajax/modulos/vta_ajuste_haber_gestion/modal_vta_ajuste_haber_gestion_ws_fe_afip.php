<?php
include "_autoload.php";
include_once Gral::getPathAbs() . "admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs() . "admin/control/init.php";

$user = UsUsuario::autenticado();
$fnd_cajero = $user->getFndCajeroXFndCajeroUsUsuario();

$vta_ajuste_haber = new VtaAjusteHaber();

//$txt_cantidads = Gral::getVars(Gral::VARS_POST, "txt_cantidad", null);
$txt_descripcions = Gral::getVars(Gral::VARS_POST, "txt_descripcion", null);
//$cmb_gral_tipo_iva_ids = Gral::getVars(Gral::VARS_POST, "cmb_gral_tipo_iva_id", null);
$cmb_gral_fp_forma_pago_ids = Gral::getVars(Gral::VARS_POST, "cmb_gral_fp_forma_pago_id", null);
$cmb_vta_ajuste_haber_concepto_ids = Gral::getVars(Gral::VARS_POST, "cmb_vta_ajuste_haber_concepto_id", null);
$txt_importe_unitarios = Gral::getVars(Gral::VARS_POST, "txt_importe_unitario", null);

$cli_cliente_id = Gral::getVars(Gral::VARS_POST, "cli_cliente_id", 0);
$cli_cliente = CliCliente::getOxId($cli_cliente_id);

if ($cli_cliente) {
    $vta_ajuste_haber->setCliClienteId($cli_cliente_id);

    // -------------------------------------------------------------------------
    // se determina el preventista que corresponde al cliente, si lo tuviese
    // -------------------------------------------------------------------------    
    $vta_preventista = $cli_cliente->getVtaPreventistaXCliClienteVtaPreventista();
    if ($vta_preventista) {
        $vta_preventista_id = $vta_preventista->getId();
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
        $vta_ajuste_haber->setVtaPuntoVentaId($vta_punto_venta->getId());
    }
}

// -------------------------------------------------------------------------
// se determina el punto de venta que corresponde a la sucursal, si lo tuviese
// -------------------------------------------------------------------------    
if ($gral_sucursal_autenticada) {
    $vta_punto_venta = $gral_sucursal_autenticada->getVtaPuntoVentaXGralSucursalVtaPuntoVenta();
    if ($vta_punto_venta) {
        $vta_punto_venta_id = $vta_punto_venta->getId();
        $gral_empresa = $vta_punto_venta->getGralEmpresa();
        $gral_empresa_id = $gral_empresa->getId();

        // se presetea el punto de venta
        $vta_ajuste_haber->setVtaPuntoVentaId($vta_punto_venta->getId());
    }
}

?>

<div class="datos generar-ws-fe-afip">
    <div class="label-error" id="error_cliente_error"></div>

    <form id='form_generar_ws_fe_afip' name='form_generar_ws_fe_afip' method='POST' action='' >

        <?php include "bloque_vta_ajuste_haber_listado_items_x_cli_cliente_modal.php"; ?>

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
                <div class="label"><?php Lang::_lang('Localidad') ?></div>
                <div class="dato"><?php Gral::_echo($cli_cliente->getGeoLocalidad()->getDescripcionFull()) ?></div>
            </div>
            
            <div class="par">
                <div class="label"><?php Lang::_lang('Tipo Ajuste Haber') ?></div>
                <div class="dato">
                    <?php
                    Html::html_dib_select(1, 'cmb_vta_tipo_ajuste_haber_id', Gral::getCmbFiltro(VtaTipoAjusteHaber::getVtaTipoAjusteHabersCmb(), '...'), $cmb_vta_tipo_ajuste_haber_id, 'textbox ' . $error_input_css);
                    ?>
                    <div class="label-error" id="cmb_vta_tipo_ajuste_haber_id_error"></div>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Origen Ajuste Haber') ?></div>
                <div class="dato">
                    <?php
                    Html::html_dib_select(1, 'cmb_vta_tipo_origen_ajuste_haber_id', Gral::getCmbFiltro(VtaTipoOrigenAjusteHaber::getVtaTipoOrigenAjusteHabersCmb(), '...'), $cmb_vta_tipo_origen_ajuste_haber_id, 'textbox ' . $error_input_css);
                    ?>
                    <div class="label-error" id="cmb_vta_tipo_origen_ajuste_haber_id_error"></div>
                </div>
            </div>
            
            <div class="par" style="display: none;">
                <div class="label"><?php Lang::_lang('Preventista') ?></div>
                <div class="dato">
                    <?php
                    Html::html_dib_select(1, 'cmb_vta_preventista_id', Gral::getCmbFiltro(VtaPreventista::getVtaPreventistasCmb(), '...'), $vta_preventista_id, 'textbox ' . $error_input_css);
                    ?>
                    <div class="label-error" id="cmb_vta_preventista_id_error"></div>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Condicion Pago') ?></div>
                <div class="dato">
                    <?php
                    Html::html_dib_select(1, 'cmb_vta_ajuste_haber_condicion_pago_id', Gral::getCmbFiltro(VtaAjusteHaberCondicionPago::getVtaAjusteHaberCondicionPagosCmb(true), '...'), $cmb_vta_ajuste_haber_condicion_pago_id, 'textbox ' . $error_input_css);
                    ?>
                    <div class="label-error" id="cmb_vta_ajuste_haber_condicion_pago_id_error"></div>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Tipo Pago') ?></div>
                <div class="dato">
                    <?php
                    Html::html_dib_select(1, 'cmb_vta_ajuste_haber_tipo_pago_id', Gral::getCmbFiltro(VtaAjusteHaberTipoPago::getVtaAjusteHaberTipoPagosCmb(true), '...'), $cmb_vta_ajuste_haber_tipo_pago_id, 'textbox ' . $error_input_css);
                    ?>
                    <div class="label-error" id="cmb_vta_ajuste_haber_tipo_pago_id_error"></div>
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
                <div class="label"><?php Lang::_lang('Caja Afectada') ?></div>
                <div class="dato">
                    <?php
                    if ($fnd_cajero) {
                        Html::html_dib_select(1, 'cmb_fnd_caja_id', Gral::getCmbFiltro($fnd_cajero->getFndCajaAbiertaCmb(), '...'), $cmb_fnd_caja_id, 'textbox ' . $error_input_css);
                    } else {
                        echo 'No se afectan cajas';
                    }
                    ?>
                    <div class="label-error" id="cmb_fnd_caja_id_error"></div>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Fecha AJT') ?></div>
                <div class="dato">
                    <input name='txt_fecha' type='text' class='textbox date' id='txt_fecha' value='<?php Gral::_echoTxt(Gral::getFechaToWeb(date('Y-m-d'))) ?>' size='10' placeholder="dd/mm/aaaa" />
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
                <div class="label"><?php Lang::_lang('Nro OP Cliente') ?></div>
                <div class="dato">
                    <input name='txt_codigo_op_cliente' type='text' class='textbox' id='txt_codigo_op_cliente' value='<?php Gral::_echoTxt($vta_ajuste_haber->getCodigoOpCliente()) ?>' size='20' />
                    </script>
                    <div class="label-error" id="txt_codigo_op_cliente_error"><?php Gral::_echo($txt_codigo_op_cliente_error) ?></div>  
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Nota Interna') ?></div>
                <div class="dato">
                    <div class="comentario">Solo lo visualizarán los usuarios de la empresa a este comentario.</div>
                    <textarea name='txa_nota_interna' rows='1' cols='70' id='txa_nota_interna' class='textbox'><?php Gral::_echoTxt($vta_ajuste_haber->getNotaInterna()) ?></textarea>
                    <div class="label-error" id="txa_nota_interna_error"></div>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Nota Publica') ?></div>
                <div class="dato">
                    <div class="comentario">Este comentario se imprime en el comprobante. Agregar aquí comentarios para el cliente.</div>
                    <textarea name='txa_nota_publica' rows='1' cols='70' id='txa_nota_publica' class='textbox'><?php Gral::_echoTxt($vta_ajuste_haber->getNotaPublica()) ?></textarea>
                    <div class="label-error" id="txa_nota_publica_error"></div>
                </div>
            </div>        
                        
            <div class="par">
                <div class="label"><?php Lang::_lang('Observaciones') ?></div>
                <div class="dato">
                    <textarea name='txa_observacion' rows='1' cols='50' id='txa_observacion' class='textbox'></textarea>
                    <div class="label-error" id="txa_observacion_error"></div>
                </div>
            </div>
        </div>

        <div class="col col2">
            <?php include "bloque_vta_ajuste_haber_listado_items_tabla_totales.php"; ?>
        </div>

        <div class="label-error" id="generar_ajuste_haber_online_afip_error"></div>
        <div class="botonera">
            <button class="boton" id='btn_generar_ajuste_haber_online' name='btn_generar_ajuste_haber_online' type='button' class='btn_generar_ajuste_haber_online'><?php Lang::_lang('Generar Ajuste Haber') ?></button>
        </div>

    </form>
</div>

<script>
    setInit();
    setInitVtaAjusteHaberGestion();
</script>