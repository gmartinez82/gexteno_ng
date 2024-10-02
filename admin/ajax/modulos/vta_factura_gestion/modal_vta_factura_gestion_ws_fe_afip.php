<?php
include "_autoload.php";
include_once Gral::getPathAbs() . "admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs() . "admin/control/init.php";

$tipo = Gral::getVars(Gral::VARS_POST, "tipo", '');

$vta_factura = new VtaFactura();

// se obtienen variables si es factura de orden-venta
$vta_orden_venta_ids = Gral::getVars(Gral::VARS_POST, "chk_vta_orden_venta", null);
$vta_orden_venta_cantidads = Gral::getVars(Gral::VARS_POST, "txt_vta_orden_venta_cantidad", null);

// se obtienen variables si es factura de item
$txt_cantidads = Gral::getVars(Gral::VARS_POST, "txt_cantidad", null);
$txt_descripcions = Gral::getVars(Gral::VARS_POST, "txt_descripcion", null);
$cmb_gral_tipo_iva_ids = Gral::getVars(Gral::VARS_POST, "cmb_gral_tipo_iva_id", null);
$cmb_vta_factura_concepto_ids = Gral::getVars(Gral::VARS_POST, "cmb_vta_factura_concepto_id", null);
$txt_importe_unitarios = Gral::getVars(Gral::VARS_POST, "txt_importe_unitario", null);
$txt_importe_ivas = Gral::getVars(Gral::VARS_POST, "txt_importe_iva", null);
$txt_importe_tributos = Gral::getVars(Gral::VARS_POST, "txt_importe_tributo", null);
$txt_importe_totals = Gral::getVars(Gral::VARS_POST, "txt_importe_total", null);

$cli_cliente_id = Gral::getVars(Gral::VARS_POST, "cli_cliente_id", 0);
$vta_presupuesto_id = Gral::getVars(Gral::VARS_POST, 'vta_presupuesto_id', 0); // se recupera id cuando nace desde gestion de OV
$vta_presupuesto_id = Gral::getVars(Gral::VARS_POST, 'chk_vta_presupuesto_id', 0); // se sobreescribe de acuerdo al presupuesto seleccionado por el usuario

$vta_presupuesto_seleccionado = VtaPresupuesto::getOxId($vta_presupuesto_id);

$cli_cliente = CliCliente::getOxId($cli_cliente_id);
if ($cli_cliente) {
    $vta_factura->setCliClienteId($cli_cliente->getId());

    // -------------------------------------------------------------------------
    // se determina el preventista que corresponde al cliente, si lo tuviese
    // -------------------------------------------------------------------------    
    $vta_preventista = $cli_cliente->getVtaPreventistaXCliClienteVtaPreventista();
    if ($vta_preventista) {
        $vta_preventista_id = $vta_preventista->getId();
    }

    // -------------------------------------------------------------------------
    // se determina el comprador que corresponde al cliente, si lo tuviese
    // -------------------------------------------------------------------------    
    $vta_comprador = $cli_cliente->getVtaCompradorXCliClienteVtaComprador();
    if ($vta_comprador) {
        $vta_comprador_id = $vta_comprador->getId();
    }

    // -------------------------------------------------------------------------
    // se determina el vendedor que corresponde al cliente, si lo tuviese
    // -------------------------------------------------------------------------    
    $vta_vendedor = $cli_cliente->getVtaVendedorXCliClienteVtaVendedor();
    if ($vta_vendedor) {
        $vta_vendedor_id = $vta_vendedor->getId();
    }

    // -------------------------------------------------------------------------
    // se determina la actividad que corresponde al cliente, si lo tuviese
    // -------------------------------------------------------------------------    
    $gral_actividad = $cli_cliente->getGralActividadXCliClienteGralActividad();
    if ($gral_actividad) {
        $gral_actividad_id = $gral_actividad->getId();
    }

    // -------------------------------------------------------------------------
    // se determina la forma de pago que corresponde al cliente, si lo tuviese
    // -------------------------------------------------------------------------    
    $gral_fp_cuota = $cli_cliente->getGralFpCuotaXCliClienteGralFpCuota();
    if ($gral_fp_cuota) {
        $gral_fp_cuota_id = $gral_fp_cuota->getId();
        $gral_fp_medio_pago = $gral_fp_cuota->getGralFpMedioPago();
        $gral_fp_medio_pago_id = $gral_fp_medio_pago->getId();
        $gral_fp_forma_pago = $gral_fp_medio_pago->getGralFpFormaPago();
        $gral_fp_forma_pago_id = $gral_fp_forma_pago->getId();
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
        $vta_factura->setVtaPuntoVentaId($vta_punto_venta->getId());
    }
} else {
    foreach ($vta_orden_venta_ids as $vta_orden_venta_id) {
        $vta_orden_venta = VtaOrdenVenta::getOxId($vta_orden_venta_id);
        $vta_presupuesto = $vta_orden_venta->getVtaPresupuesto();
        $cli_cliente = $vta_presupuesto->getCliCliente();
        $cli_cliente_id = $cli_cliente->getId();

        if ($cli_cliente_id == 'null') {
            $cli_cliente = false;
        }
    }
}

// -------------------------------------------------------------------------
// se determina el punto de venta que corresponde a la sucursal, si lo tuviese
// -------------------------------------------------------------------------    
if($vta_presupuesto_seleccionado){
    $gral_sucursal = $vta_presupuesto_seleccionado->getGralSucursal();
    if ($gral_sucursal->getId() != 'null' && false) {
        $vta_punto_venta = $gral_sucursal->getVtaPuntoVentaXGralSucursalVtaPuntoVenta();
        if ($vta_punto_venta) {
            $vta_punto_venta_id = $vta_punto_venta->getId();
            $gral_empresa = $vta_punto_venta->getGralEmpresa();
            $gral_empresa_id = $gral_empresa->getId();

            // se presetea el punto de venta
            $vta_factura->setVtaPuntoVentaId($vta_punto_venta->getId());
        }
    } else {
        if ($gral_sucursal_autenticada) {
            $vta_punto_venta = $gral_sucursal_autenticada->getVtaPuntoVentaXGralSucursalVtaPuntoVenta();
            if ($vta_punto_venta) {
                $vta_punto_venta_id = $vta_punto_venta->getId();
                $gral_empresa = $vta_punto_venta->getGralEmpresa();
                $gral_empresa_id = $gral_empresa->getId();

                // se presetea el punto de venta
                $vta_factura->setVtaPuntoVentaId($vta_punto_venta->getId());
            }
        }
    }
}

// -------------------------------------------------------------------------
// Excepcion para KYA
// Punto de Venta Facturador de Cuentas Corrientes GARUPA 0041
// -------------------------------------------------------------------------    
$vta_punto_venta_facturador_ctacte = VtaPuntoVenta::getOxCodigo('0041');
if ($vta_punto_venta_facturador_ctacte) {
    $vta_punto_venta_id = $vta_punto_venta_facturador_ctacte->getId();
    $gral_empresa = $vta_punto_venta_facturador_ctacte->getGralEmpresa();
    $gral_empresa_id = $gral_empresa->getId();

    // se presetea el punto de venta facturador de cuentas corrientes
    $vta_factura->setVtaPuntoVentaId($vta_punto_venta_facturador_ctacte->getId());
}

// -------------------------------------------------------------------------
// se determina forma de pago desde presupuesto
// -------------------------------------------------------------------------    
if ($vta_presupuesto_seleccionado) {
    $vta_vendedor_id = $vta_presupuesto_seleccionado->getVtaVendedorId();
    $vta_vendedor = $vta_presupuesto_seleccionado->getVtaVendedor();
    $gral_actividad_id = $vta_presupuesto_seleccionado->getGralActividadId();
    $gral_escenario_id = $vta_presupuesto_seleccionado->getGralEscenarioId();
    $cli_centro_recepcion_id = $vta_presupuesto_seleccionado->getCliCentroRecepcionId();
    
    $gral_fp_cuota = $vta_presupuesto_seleccionado->getGralFpCuota();
    if ($gral_fp_cuota) {
        $gral_fp_cuota_id = $gral_fp_cuota->getId();
        $gral_fp_medio_pago = $gral_fp_cuota->getGralFpMedioPago();
        $gral_fp_medio_pago_id = $gral_fp_medio_pago->getId();
        $gral_fp_forma_pago = $gral_fp_medio_pago->getGralFpFormaPago();
        $gral_fp_forma_pago_id = $gral_fp_forma_pago->getId();
    }
}

// -------------------------------------------------------------------------
// se determina el escenario de acuerdo al presupuesto
// -------------------------------------------------------------------------
if($vta_presupuesto_seleccionado){
    $gral_escenario = $vta_presupuesto_seleccionado->getGralEscenario();
    if ($gral_escenario->getId() != 'null') {
        $gral_escenario_id = $gral_escenario->getId();
        $gral_actividad = $gral_escenario->getGralActividad();
        $gral_actividad_id = $gral_actividad->getId();
    } else {
        // -------------------------------------------------------------------------
        // se determina el escenario de acuerdo al vendedor del presupuesto
        // -------------------------------------------------------------------------    
        $gral_escenario = $vta_vendedor->getGralEscenarioXVtaVendedorGralEscenario();
        if ($gral_escenario) {
            $gral_escenario_id = $gral_escenario->getId();
            $gral_actividad = $gral_escenario->getGralActividad();
            $gral_actividad_id = $gral_actividad->getId();
        }
    }
}

$gral_condicion_iva = VtaFactura::getDeterminacionGralCondicionIva($cli_cliente_id);
if ($gral_condicion_iva) {
    $vta_factura->setGralCondicionIvaId($gral_condicion_iva->getId());
}

$cv_dias_vencimiento = ConfVariable::getVtaComprobanteDiasVencimientoVentas();
$txt_fecha_vencimiento = Date::sumarDias(date('Y-m-d'), $cv_dias_vencimiento);

$vta_factura->setNumeroTimbrado(ConfVariable::NUMERO_TIMBRADO_EKUATIA)
?>
<div class="datos generar-ws-fe-afip" tipo="<?php echo $tipo ?>">

    <?php
    if ($tipo == 'orden-venta') {
        include "bloque_vta_orden_venta_listado_datos_x_cli_cliente_detalle_modal.php";
    }
    if ($tipo == 'item') {
        include "bloque_vta_factura_listado_items_x_cli_cliente_modal.php";
    }
    ?>

    <form id='form_generar_ws_fe_afip' name='form_generar_ws_fe_afip' method='POST' action='' >

        <div class="label-error" id="error_general_error"></div>

        <div class="col col1">

            <?php if ($cli_cliente) { ?>

                <div class="par">
                    <div class="label"><?php Lang::_lang('Cond IVA') ?></div>
                    <div class="dato"><?php Gral::_echo($gral_condicion_iva->getDescripcion()) ?></div>
                </div>

                <div class="par">
                    <div class="label"><?php Lang::_lang('Tipo') ?></div>
                    <div class="dato"><?php Gral::_echo(VtaFactura::getDeterminacionTipoFactura($cli_cliente_id)->getDescripcion()) ?></div>
                </div>

                <div class="par">
                    <div class="label"><?php Lang::_lang('Cliente') ?></div>
                    <div class="dato"><?php Gral::_echo($cli_cliente->getRazonSocial()) ?></div>
                </div>

                <div class="par">
                    <div class="label"><?php Lang::_lang('CUIT') ?></div>
                    <div class="dato"><?php Gral::_echo($cli_cliente->getCuit()) ?></div>
                </div>

                <div class="par">
                    <div class="label"><?php Lang::_lang('Localidad') ?></div>
                    <div class="dato"><?php Gral::_echo($cli_cliente->getGeoLocalidad()->getDescripcionFull()) ?></div>
                </div>

                <div class="par">
                    <div class="label"><?php Lang::_lang('Facturar a') ?></div>
                    <div class="dato">
                        <?php Html::html_dib_select(1, 'cmb_cli_cliente_id', CliCliente::getCliClientesCmbXCliGrupo($cli_cliente), $cli_cliente_id, 'textbox ' . $error_input_css); ?>
                        <div class="label-error" id="cmb_cli_cliente_id_error"></div>
                    </div>
                </div>

            <?php } else { ?>

                <div class="par">
                    <div class="label"><?php Lang::_lang('Cond IVA') ?></div>
                    <div class="dato"><?php Gral::_echo($gral_condicion_iva->getDescripcion()) ?></div>
                </div>

                <div class="par">
                    <div class="label"><?php Lang::_lang('Tipo') ?></div>
                    <div class="dato"><?php Gral::_echo(VtaFactura::getDeterminacionTipoFactura($cli_cliente_id)->getDescripcion()) ?></div>
                </div>

                <div class="par">
                    <div class="label"><?php Lang::_lang('Presup a') ?></div>
                    <div class="dato">
                        <?php Gral::_echo($vta_presupuesto->getPersonaDescripcion()) ?>
                    </div>
                </div>

                <div class="par">
                    <div class="label"><?php Lang::_lang('Facturar a') ?></div>
                    <div class="dato">
                        <input name='txt_persona_descripcion' type='text' class='textbox' id='txt_persona_descripcion' value='<?php Gral::_echoTxt($vta_presupuesto->getPersonaDescripcion()) ?>' size='40' />
                        <div class="label-error" id="txt_persona_descripcion_error"><?php Gral::_echo($txt_persona_descripcion_error) ?></div>  
                    </div>
                </div>            

                <div class="par">
                    <div class="label"><?php Lang::_lang('Tipo Doc') ?></div>
                    <div class="dato">
                        <?php
                        Html::html_dib_select(1, 'cmb_gral_tipo_documento_id', Gral::getCmbFiltro(GralTipoDocumento::getGralTipoDocumentosCmb(), '...'), $vta_presupuesto->getGralTipoDocumentoId(), 'textbox ' . $error_input_css);
                        ?>
                        <div class="label-error" id="cmb_gral_tipo_documento_id_error"></div>
                    </div>
                </div>

                <div class="par">
                    <div class="label"><?php Lang::_lang('Documento') ?></div>
                    <div class="dato">
                        <input name='txt_persona_documento' type='text' class='textbox' id='txt_persona_documento' value='<?php Gral::_echoTxt($vta_presupuesto->getPersonaDocumento()) ?>' size='20' />
                        <div class="label-error" id="txt_persona_documento_error"><?php Gral::_echo($txt_persona_documento_error) ?></div>  
                    </div>
                </div>

                <div class="par">
                    <div class="label"><?php Lang::_lang('Email') ?></div>
                    <div class="dato">
                        <input name='txt_persona_email' type='text' class='textbox' id='txt_persona_email' value='<?php Gral::_echoTxt($vta_presupuesto->getPersonaEmail()) ?>' size='40' />
                        <div class="label-error" id="txt_persona_email_error"><?php Gral::_echo($txt_persona_email_error) ?></div>  
                    </div>
                </div>

            <?php } ?>

            <?php if ($vta_presupuesto_seleccionado) { ?>
                <div class="par">
                    <div class="label"><?php Lang::_lang('Presupuesto') ?></div>
                    <div class="dato">
                        <?php Gral::_echo($vta_presupuesto_seleccionado->getCodigo()) ?>
                    </div>
                </div>
            <?php }else{ ?>
                <div class="par">
                    <div class="label"><?php Lang::_lang('Sucursal') ?></div>
                    <div class="dato">
                        <?php
                        Html::html_dib_select(1, 'cmb_gral_sucursal_id', Gral::getCmbFiltro(GralSucursal::getGralSucursalsCmbPorAlcance(), '...'), $gral_sucursal_id, 'textbox ' . $error_input_css);
                        ?>
                        <div class="label-error" id="cmb_gral_sucursal_id_error"></div>
                    </div>
                </div>
            <?php } ?>
            
            <div class="par">
                <div class="label"><?php Lang::_lang('Centro de Recepcion') ?></div>
                <div class="dato">
                    <?php
                    Html::html_dib_select(1, 'cmb_cli_centro_recepcion_id', Gral::getCmbFiltro($cli_cliente->getCliCentroRecepcionsCmb(), '...'), $cli_centro_recepcion_id, 'textbox ' . $error_input_css);
                    ?>
                    <div class="label-error" id="cmb_cli_centro_recepcion_id_error"></div>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Vendedor') ?></div>
                <div class="dato">
                    <?php
                    Html::html_dib_select(1, 'cmb_vta_vendedor_id', Gral::getCmbFiltro(VtaVendedor::getVtaVendedorsCmb(), '...'), $vta_vendedor_id, 'textbox ' . $error_input_css);
                    ?>
                    <div class="label-error" id="cmb_vta_vendedor_id_error"></div>
                </div>
            </div>

            <?php if (false) { ?>
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
                    <div class="label"><?php Lang::_lang('Comprador') ?></div>
                    <div class="dato">
                        <?php
                        Html::html_dib_select(1, 'cmb_vta_comprador_id', Gral::getCmbFiltro(VtaComprador::getVtaCompradorsCmb(), '...'), $vta_comprador_id, 'textbox ' . $error_input_css);
                        ?>
                        <div class="label-error" id="cmb_vta_comprador_id_error"></div>
                    </div>
                </div>
            <?php } ?>

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
                    Html::html_dib_select(1, 'cmb_gral_fp_forma_pago_id', Gral::getCmbFiltro(GralFpFormaPago::getGralFpFormaPagosCmbDeVenta(), '...'), $gral_fp_forma_pago_id, 'textbox ' . $error_input_css);
                    ?>
                    <div class="label-error" id="cmb_gral_fp_forma_pago_id_error"></div>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Gral::_echo("Medio de Pago") ?></div>
                <div class="dato">
                    <?php
                    if ($gral_fp_cuota && $gral_fp_forma_pago) {
                        Html::html_dib_select(1, 'cmb_gral_fp_medio_pago_id', Gral::getCmbFiltro($gral_fp_forma_pago->getGralFpMedioPagosCmb(), '...'), $gral_fp_medio_pago_id, 'textbox ' . $error_input_css);
                    } else {
                        Html::html_dib_select(1, 'cmb_gral_fp_medio_pago_id', Gral::getCmbFiltro(array(), '...'), $gral_fp_medio_pago_id, 'textbox ' . $error_input_css);
                    }
                    ?>
                    <div class="label-error" id="cmb_gral_fp_medio_pago_id_error"></div>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Gral::_echo("Cuotas") ?></div>
                <div class="dato">
                    <?php
                    if ($gral_fp_cuota && $gral_fp_medio_pago) {
                        Html::html_dib_select(1, 'cmb_gral_fp_cuota_id', Gral::getCmbFiltro($gral_fp_medio_pago->getGralFpCuotasCmb(), '...'), $gral_fp_cuota_id, 'textbox ' . $error_input_css);
                    } else {
                        Html::html_dib_select(1, 'cmb_gral_fp_cuota_id', Gral::getCmbFiltro(array(), '...'), $gral_fp_cuota_id, 'textbox ' . $error_input_css);
                    }
                    ?>
                    <div class="label-error" id="cmb_gral_fp_cuota_id_error"></div>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Fecha Emision') ?></div>
                <div class="dato">
                    <?php Gral::_echo(Gral::getFechaToWEB(date('Y-m-d'))) ?>
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
                <div class="label"><?php Lang::_lang('Nota Publica') ?></div>
                <div class="dato">
                    <textarea name='txa_nota_publica' rows='2' cols='50' id='txa_nota_publica' class='textbox'></textarea>
                    <div class="label-error" id="txa_nota_publica_error"></div>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Nota Privada') ?></div>
                <div class="dato">
                    <textarea name='txa_observacion' rows='2' cols='50' id='txa_observacion' class='textbox'></textarea>
                    <div class="label-error" id="txa_observacion_error"></div>
                </div>
            </div>

        </div>

        <div class="col col2" id="bloque_vta_factura_listado_items_tabla_totales">
            <?php
            include "bloque_vta_factura_gestion_tabla_totales.php";
            ?>
        </div>

        <div class="botonera">
            <button class="boton" id='btn_generar_factura_online' name='btn_generar_factura_online' type='button' class='btn_generar_factura_online'><?php Lang::_lang('Generar Factura') ?></button>
            <div class="label-error-botonera" id="generar_factura_online_afip_error"></div>
        </div>

    </form>
</div>

<script>
    setInit();
    setInitVtaFacturaGestion();
</script>