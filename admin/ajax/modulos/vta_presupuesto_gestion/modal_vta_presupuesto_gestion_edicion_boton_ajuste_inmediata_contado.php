<?php
include "_autoload.php";
include_once Gral::getPathAbs() . "admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs() . "admin/control/init.php";

$vta_presupuesto_id = Gral::getVars(Gral::VARS_POST, "vta_presupuesto_id", 0);
$chk_vta_presupuesto_ins_insumo = Gral::getVars(Gral::VARS_POST, 'chk_vta_presupuesto_ins_insumo');

$vta_presupuesto = VtaPresupuesto::getOxId($vta_presupuesto_id);

// -----------------------------------------------------------------------------
// se controla que el presupuesto sobre el que se esta operando se encuentre activo
// para evitar doble factura y recibo por problemas con servidores de AFIP
// -----------------------------------------------------------------------------
include "control_vta_presupuesto_activo.php";
// -----------------------------------------------------------------------------

$arr_vta_presupuesto_ins_insumos_seleccionados = $vta_presupuesto->getEsVentaParcial($chk_vta_presupuesto_ins_insumo);
$vta_presupuesto_ins_insumos = $vta_presupuesto->getVtaPresupuestoInsInsumos(null, null, true);

$presupuesto_mueve_stock = $vta_presupuesto->getVtaPresupuestoMueveStock();

$gral_fp_forma_pago_id = $vta_presupuesto->getGralFpFormaPagoId();

$cmb_porcentaje_iva = ($vta_presupuesto->getPorcentaje() != 'null') ? $vta_presupuesto->getPorcentaje() : 100;
$porcentaje_iva = $cmb_porcentaje_iva;

$cli_cliente_id = 0;
$cli_cliente = $vta_presupuesto->getCliCliente();
if ($cli_cliente->getId() != 'null') {
    $cli_cliente_id = $cli_cliente->getId();

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
        //$vta_factura->setVtaPuntoVentaId($vta_punto_venta->getId());
    }
}

// -------------------------------------------------------------------------
// se determina el punto de venta que corresponde a la sucursal, si lo tuviese
// -------------------------------------------------------------------------    
if (!$vta_punto_venta) {
    $vta_punto_venta = $gral_sucursal_autenticada->getVtaPuntoVentaXGralSucursalVtaPuntoVenta();
    if ($vta_punto_venta) {
        $vta_punto_venta_id = $vta_punto_venta->getId();
        $gral_empresa = $vta_punto_venta->getGralEmpresa();
        $gral_empresa_id = $gral_empresa->getId();
    }
}

// -------------------------------------------------------------------------
// se determina el escenario de acuerdo al vendedor
// -------------------------------------------------------------------------    
if (!$gral_escenario) {
    $gral_escenario = $vta_vendedor_autenticado->getGralEscenarioXVtaVendedorGralEscenario();
    if ($gral_escenario) {
        $gral_escenario_id = $gral_escenario->getId();
        $gral_actividad = $gral_escenario->getGralActividad();
        $gral_actividad_id = $gral_actividad->getId();
    }
}

// -------------------------------------------------------------------------
// se determina la forma de pago por default, si no esta predefinida
// -------------------------------------------------------------------------    
$vta_presupuesto_gral_fp_forma_pago_id = $vta_presupuesto->getGralFpFormaPagoId();
if ($vta_presupuesto_gral_fp_forma_pago_id != 'null') {
    $gral_fp_forma_pago_id = $vta_presupuesto_gral_fp_forma_pago_id;
}

// -------------------------------------------------------------------------
// se determina la forma de pago por default, si no esta predefinida
// -------------------------------------------------------------------------    
if ($gral_fp_forma_pago_id == 'null') {
    $gral_fp_cuota = GralFpCuota::getOxPorDefault(1);
    if ($gral_fp_cuota) {
        $gral_fp_cuota_id = $gral_fp_cuota->getId();
        $gral_fp_medio_pago = $gral_fp_cuota->getGralFpMedioPago();
        $gral_fp_medio_pago_id = $gral_fp_medio_pago->getId();
        $gral_fp_forma_pago = $gral_fp_medio_pago->getGralFpFormaPago();
        $gral_fp_forma_pago_id = $gral_fp_forma_pago->getId();
    }
}

$gral_condicion_iva = VtaFactura::getDeterminacionGralCondicionIva($cli_cliente_id);

$vta_presupuesto_importe_total_con_iva = $vta_presupuesto->getImporteTotalPresupuestoConIva();

// -------------------------------------------------------------------------
// se inicializa variable de configuracion 
// -------------------------------------------------------------------------
$cv_importe_minimo_exigencia_info_comprador_consumidor_final = ConfVariable::getVtaComprobanteMinimoExigenciaInfoCompradorConsumidorFinal();

// --------------------------------------------------------
// se inicializan variables para vta recibo item generico
// --------------------------------------------------------
$vta_recibo_concepto = VtaReciboConcepto::getOxCodigo(VtaReciboConcepto::TIPO_COBRO_FACTURA);
$cmb_vta_recibo_item_generico_vta_recibo_concepto_id = ($vta_recibo_concepto) ? $vta_recibo_concepto->getId() : 0;
$txt_vta_recibo_item_generico_descripcion = 'Cobro de Venta Inmediato';
$txt_vta_recibo_item_generico_referencia = '';
$txt_vta_recibo_item_generico_importe_unitario = $vta_presupuesto->getImporteTotalPresupuestoConIva();
$cmb_vta_recibo_item_generico_gral_fp_forma_pago_id = $gral_fp_forma_pago_id;

$pan_panols_cmbfx_credencial = PanPanol::getPanPanolsCmbFxCredencial();

$user = UsUsuario::autenticado();
$fnd_cajero = $user->getFndCajeroXFndCajeroUsUsuario();
?>

<div class="datos confirmacion">

    <?php if ($arr_vta_presupuesto_ins_insumos_seleccionados['CANTIDAD'] == 0) { ?>
        <div class="mensaje cantidad">Debe elegir al menos uno de los items para generar las Ordenes de Venta</div>
    <?php } else { ?>

        <form id='form_vta_presupuesto_gestion_edicion_confirmacion' name='form_vta_presupuesto_gestion_edicion_confirmacion' method='post' action='' vta_presupuesto_id="<?php Gral::_echo($vta_presupuesto->getId()) ?>" origen="ajuste_inmediato_contado">
            <div class="bloque-venta-inmediata-info-adicional-facturacion">

                <div class="col c1">
                    
                    <div class="par" style="display: none;">
                        <div class="label"><?php Lang::_lang('Preventista') ?></div>
                        <div class="dato">
                            <?php
                            Html::html_dib_select(1, 'cmb_confirmacion_vta_preventista_id', Gral::getCmbFiltro(VtaPreventista::getVtaPreventistasCmb(), '...'), $vta_preventista_id, 'textbox ' . $error_input_css);
                            ?>
                            <div class="label-error" id="cmb_confirmacion_vta_preventista_id_error"></div>
                        </div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Gral::_echo("Forma de Pago") ?></div>
                        <div class="dato">
                            <?php
                            $vta_presupuesto_gral_fp_forma_pago_id = $vta_presupuesto->getGralFpFormaPagoId();
                            if ($vta_presupuesto_gral_fp_forma_pago_id != 'null') {
                                $gral_fp_forma_pago_id = $vta_presupuesto_gral_fp_forma_pago_id;
                            }
                            Html::html_dib_select(1, 'cmb_confirmacion_gral_fp_forma_pago_id', Gral::getCmbFiltro(GralFpFormaPago::getGralFpFormaPagosCmb(), '...'), $gral_fp_forma_pago_id, 'textbox ' . $error_input_css);
                            ?>
                            <?php
                            $vta_presupuesto_gral_fp_medio_pago_id = $vta_presupuesto->getGralFpMedioPagoId();
                            if ($vta_presupuesto_gral_fp_medio_pago_id != 'null' || $vta_presupuesto_gral_fp_forma_pago_id != 'null') {
                                $c = new Criterio();
                                $c->add(GralFpMedioPago::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $vta_presupuesto_gral_fp_forma_pago_id, Criterio::IGUAL);
                                $c->addTabla(GralFpMedioPago::GEN_TABLA);
                                $c->setCriterios();

                                Html::html_dib_select(1, 'cmb_confirmacion_gral_fp_medio_pago_id', Gral::getCmbFiltro(GralFpMedioPago::getGralFpMedioPagosCmbF(null, $c), '...'), $vta_presupuesto_gral_fp_medio_pago_id, 'textbox ' . $error_input_css);
                            } else {
                                if ($gral_fp_cuota && $gral_fp_forma_pago) {
                                    Html::html_dib_select(1, 'cmb_confirmacion_gral_fp_medio_pago_id', Gral::getCmbFiltro($gral_fp_forma_pago->getGralFpMedioPagosCmb(), '...'), $gral_fp_medio_pago_id, 'textbox ' . $error_input_css);
                                } else {
                                    Html::html_dib_select(1, 'cmb_confirmacion_gral_fp_medio_pago_id', Gral::getCmbFiltro(array(), '...'), $gral_fp_medio_pago_id, 'textbox ' . $error_input_css);
                                }
                            }
                            ?>
                            <?php
                            $vta_presupuesto_gral_fp_cuota_id = $vta_presupuesto->getGralFpCuotaId();
                            if ($vta_presupuesto_gral_fp_cuota_id != 'null') {
                                $c = new Criterio();
                                $c->add(GralFpCuota::GEN_ATTR_GRAL_FP_MEDIO_PAGO_ID, $vta_presupuesto_gral_fp_medio_pago_id, Criterio::IGUAL);
                                $c->addTabla(GralFpCuota::GEN_TABLA);
                                $c->setCriterios();

                                Html::html_dib_select(1, 'cmb_confirmacion_gral_fp_cuota_id', Gral::getCmbFiltro(GralFpCuota::getGralFpCuotasCmbF(null, $c), '...'), $vta_presupuesto_gral_fp_cuota_id, 'textbox ' . $error_input_css);
                            } else {
                                if ($gral_fp_cuota && $gral_fp_medio_pago) {
                                    Html::html_dib_select(1, 'cmb_confirmacion_gral_fp_cuota_id', Gral::getCmbFiltro($gral_fp_medio_pago->getGralFpCuotasCmb(), '...'), $gral_fp_cuota_id, 'textbox ' . $error_input_css);
                                } else {
                                    Html::html_dib_select(1, 'cmb_confirmacion_gral_fp_cuota_id', Gral::getCmbFiltro(array(), '...'), $gral_fp_cuota_id, 'textbox ' . $error_input_css);
                                }
                            }
                            ?>
                            <div class="label-error" id="cmb_confirmacion_gral_fp_forma_pago_id_error"></div>
                            <div class="label-error" id="cmb_confirmacion_gral_fp_medio_pago_id_error"></div>
                            <div class="label-error" id="cmb_confirmacion_gral_fp_cuota_id_error"></div>
                        </div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Gral::_echo("Emisora") ?></div>
                        <div class="dato">
                            <?php
                            Html::html_dib_select(1, 'cmb_confirmacion_gral_empresa_id', Gral::getCmbFiltro(GralEmpresa::getGralEmpresasCmb(), '...'), $gral_empresa_id, 'textbox ' . $error_input_css);
                            ?>
                            <?php
                            if ($vta_punto_venta) {
                                Html::html_dib_select(1, 'cmb_confirmacion_vta_punto_venta_id', Gral::getCmbFiltro($gral_empresa->getVtaPuntoVentasCmb(), '...'), $vta_punto_venta_id, 'textbox ' . $error_input_css);
                            } else {
                                Html::html_dib_select(1, 'cmb_confirmacion_vta_punto_venta_id', Gral::getCmbFiltro($arr_vacio, '...'), $vta_punto_venta_id, 'textbox ' . $error_input_css);
                            }
                            ?>
                            <div class="label-error" id="cmb_confirmacion_gral_empresa_id_error"></div>
                            <div class="label-error" id="cmb_confirmacion_vta_punto_venta_id_error"></div>
                        </div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Deposito') ?></div>
                        <div class="dato">
                            <?php
                            if (count($pan_panols_cmbfx_credencial) > 1) {
                                Html::html_dib_select(1, 'cmb_confirmacion_pan_panol_id', Gral::getCmbFiltro($pan_panols_cmbfx_credencial, '...'), $cmb_pan_panol_id, 'textbox ' . $error_input_css);
                            } else {
                                Html::html_dib_select(1, 'cmb_confirmacion_pan_panol_id', $pan_panols_cmbfx_credencial, $cmb_pan_panol_id, 'textbox ' . $error_input_css);
                            }
                            ?>
                            <div class="label-error" id="cmb_confirmacion_pan_panol_id_error"></div>
                        </div>
                    </div>
                    
                    <div class="par">
                        <div class="label"><?php Gral::_echo("Tipo Remito") ?>: </div>
                        <div class="dato">
                            <?php
                            Html::html_dib_select(1, 'cmb_confirmacion_vta_tipo_remito_ajuste_id', VtaTipoRemitoAjuste::getVtaTipoRemitoAjustesCmb(true), $cmb_confirmacion_vta_tipo_remito_ajuste_id, 'textbox ' . $error_input_css);
                            ?>
                            <div class="label-error" id="cmb_confirmacion_vta_tipo_remito_ajuste_id_error"></div>
                        </div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Caja Afectada') ?></div>
                        <div class="dato">
                            <?php
                            if ($fnd_cajero) {
                                if (count($fnd_cajero->getFndCajaAbiertaCmb()) > 1) {
                                    Html::html_dib_select(1, 'cmb_fnd_caja_id', Gral::getCmbFiltro($fnd_cajero->getFndCajaAbiertaCmb(), '...'), $cmb_fnd_caja_id, 'textbox ' . $error_input_css);
                                } else {
                                    Html::html_dib_select(1, 'cmb_fnd_caja_id', $fnd_cajero->getFndCajaAbiertaCmb(), $cmb_fnd_caja_id, 'textbox ' . $error_input_css);
                                }
                            } else {
                                echo 'No se afectan cajas';
                            }
                            ?>
                            <div class="label-error" id="cmb_fnd_caja_id_error"></div>
                        </div>
                    </div>
                    
                    <div class="par">
                        <div class="label"><?php Gral::_echo("Nota Publica") ?></div>
                        <div class="dato">
                            <textarea name='txa_confirmacion_nota_publica' rows='1' cols='40' id='txa_nota_publica' class='textbox'><?php Gral::_echoTxt($vta_presupuesto->getObservacion()) ?></textarea>
                            <div class="label-error" id="txa_confirmacion_nota_publica_error"></div>
                        </div>
                    </div>
                    
                    <div class="par" style="display: nonex;">
                        <div class="label"><?php Lang::_lang('Porcentaje IVA') ?></div>
                        <div class="dato">
                            <?php Html::html_dib_select(1, 'cmb_porcentaje_iva', Gral::getCmbFiltro(Gral::getNumerosCmb(100, 100, 10), '...'), $cmb_porcentaje_iva, 'textbox') ?> %
                            <div class="label-error" id="cmb_porcentaje_iva_error"></div>
                        </div>
                    </div> 
                                        
                </div>

                <div class="col c2">

                    <?php if ($cli_cliente_id) { ?>

                        <div class="par">
                            <div class="label"><?php Lang::_lang('Cliente') ?></div>
                            <div class="dato"><?php Gral::_echo($cli_cliente->getRazonSocial()) ?></div>
                        </div>

                        <div class="par">
                            <div class="label"><?php Gral::_echo($cli_cliente->getGralTipoDocumento()->getDescripcion()) ?></div>
                            <div class="dato"><?php Gral::_echo($cli_cliente->getCuit()) ?></div>
                        </div>
                    
                        <div class="par">
                            <div class="label"><?php Lang::_lang('Cond IVA') ?></div>
                            <div class="dato"><?php Gral::_echo($gral_condicion_iva->getDescripcion()) ?> - <?php Gral::_echo(VtaFactura::getDeterminacionTipoFactura($cli_cliente_id)->getDescripcion()) ?></div>
                        </div>

                        <div class="par">
                            <div class="label"><?php Lang::_lang('Localidad') ?></div>
                            <div class="dato"><?php Gral::_echo($cli_cliente->getGeoLocalidad()->getDescripcionFull()) ?></div>
                        </div>

                        <div class="par">
                            <div class="label"><?php Lang::_lang('Emitir a') ?></div>
                            <div class="dato">
                                <?php Html::html_dib_select(1, 'cmb_confirmacion_cli_cliente_id', CliCliente::getCliClientesCmbXCliGrupo($cli_cliente), $cli_cliente_id, 'textbox ' . $error_input_css); ?>
                                <div class="label-error" id="cmb_cli_cliente_id_error"></div>
                            </div>
                        </div>

                    <?php } else { ?>

                        <div class="par">
                            <div class="label"><?php Lang::_lang('Cond IVA') ?></div>
                            <div class="dato"><?php Gral::_echo($gral_condicion_iva->getDescripcion()) ?> - <?php Gral::_echo(VtaFactura::getDeterminacionTipoFactura($cli_cliente_id)->getDescripcion()) ?></div>
                        </div>

                        <div class="par">
                            <div class="label"><?php Lang::_lang('Presup a') ?></div>
                            <div class="dato">
                                <?php Gral::_echo($vta_presupuesto->getPersonaDescripcion()) ?>
                            </div>
                        </div>

                        <div class="par">
                            <div class="label"><?php Lang::_lang('Emitir a') ?></div>
                            <div class="dato">
                                <input name='txt_confirmacion_persona_descripcion' type='text' class='textbox' id='txt_confirmacion_persona_descripcion' value='<?php Gral::_echoTxt($vta_presupuesto->getPersonaDescripcion()) ?>' size='40' />
                                <div class="label-error" id="txt_confirmacion_persona_descripcion_error"><?php Gral::_echo($txt_confirmacion_persona_descripcion_error) ?></div>  
                            </div>
                        </div>            

                        <div class="par">
                            <div class="label"><?php Lang::_lang('Tipo Doc') ?></div>
                            <div class="dato">
                                <?php
                                Html::html_dib_select(1, 'cmb_confirmacion_gral_tipo_documento_id', Gral::getCmbFiltro(GralTipoDocumento::getGralTipoDocumentosCmb(), '...'), $vta_presupuesto->getGralTipoDocumentoId(), 'textbox ' . $error_input_css);
                                ?>
                                <input name='txt_confirmacion_persona_documento' type='text' class='textbox' id='txt_confirmacion_persona_documento' value='<?php Gral::_echoTxt($vta_presupuesto->getPersonaDocumento()) ?>' size='20' />
                                <div class="label-error" id="cmb_confirmacion_gral_tipo_documento_id_error"></div>
                                <div class="label-error" id="txt_confirmacion_persona_documento_error"><?php Gral::_echo($txt_confirmacion_persona_documento_error) ?></div>  
                            </div>
                        </div>

                        <div class="par">
                            <div class="label"><?php Lang::_lang('Email') ?></div>
                            <div class="dato">
                                <input name='txt_confirmacion_persona_email' type='text' class='textbox' id='txt_confirmacion_persona_email' value='<?php Gral::_echoTxt($vta_presupuesto->getPersonaEmail()) ?>' size='40' />
                                <div class="label-error" id="txt_confirmacion_persona_email_error"><?php Gral::_echo($txt_confirmacion_persona_email_error) ?></div>  
                            </div>
                        </div>

                        <?php if ($vta_presupuesto_importe_total_con_iva >= $cv_importe_minimo_exigencia_info_comprador_consumidor_final) { ?>                    
                            <div class="consumidor-final-solicitud-datos-alerta">
                                Supera los <?php Gral::_echoImp($cv_importe_minimo_exigencia_info_comprador_consumidor_final) ?>. Debera solicitar informacion del comprador.
                            </div>
                        <?php } ?>   

                    <?php } ?>                    

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Actividad') ?></div>
                        <div class="dato">
                            <?php
                            $vta_presupuesto_gral_actividad_id = $vta_presupuesto->getGralActividadId();
                            if ($vta_presupuesto_gral_actividad_id != 'null') {
                                Html::html_dib_select(1, 'cmb_confirmacion_gral_actividad_id', Gral::getCmbFiltro(GralActividad::getGralActividadsCmb(), '...'), $vta_presupuesto_gral_actividad_id, 'textbox ' . $error_input_css);
                            } else {
                                Html::html_dib_select(1, 'cmb_confirmacion_gral_actividad_id', Gral::getCmbFiltro(GralActividad::getGralActividadsCmb(), '...'), $gral_actividad_id, 'textbox ' . $error_input_css);
                            }
                            ?>
                            <div class="label-error" id="cmb_confirmacion_gral_actividad_id_error"></div>
                        </div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Gral::_echo("Escenario") ?></div>
                        <div class="dato">
                            <?php
                            $vta_presupuesto_gral_escenario_id = $vta_presupuesto->getGralEscenarioId();
                            if ($vta_presupuesto_gral_escenario_id != 'null') {

                                $c = new Criterio();
                                $c->add(GralEscenario::GEN_ATTR_GRAL_ACTIVIDAD_ID, $vta_presupuesto_gral_actividad_id, Criterio::IGUAL);
                                $c->addTabla(GralEscenario::GEN_TABLA);
                                $c->setCriterios();

                                Html::html_dib_select(1, 'cmb_confirmacion_gral_escenario_id', Gral::getCmbFiltro(GralEscenario::getGralEscenariosCmbF(null, $c), '...'), $vta_presupuesto_gral_escenario_id, 'textbox ' . $error_input_css);
                            } elseif ($gral_actividad) {
                                Html::html_dib_select(1, 'cmb_confirmacion_gral_escenario_id', Gral::getCmbFiltro($gral_actividad->getGralEscenariosCmb(), '...'), $gral_escenario_id, 'textbox ' . $error_input_css);
                            } else {
                                Html::html_dib_select(1, 'cmb_confirmacion_gral_escenario_id', Gral::getCmbFiltro(array(), '...'), $gral_escenario_id, 'textbox ' . $error_input_css);
                            }
                            ?>
                            <div class="label-error" id="cmb_confirmacion_gral_escenario_id_error"></div>
                        </div>
                    </div>
                                        
                </div>                

            </div>

            <?php 
            $key = 1;
            ?>
            <div class="div_dato_recibo_item_generico">
                <?php include Gral::getPathAbs().'admin/ajax/modulos/vta_presupuesto_gestion/bloque_presupuesto_importe_totales.php'; ?>   
                <?php include Gral::getPathAbs().'admin/ajax/modulos/vta_recibo_item_generico/bloque_vta_recibo_item_generico_datos.php'; ?>          
            </div>

        </form>

        <?php 
        $restriccion_venta_por_stock = false;
        include Gral::getPathAbs().'admin/ajax/modulos/vta_presupuesto_gestion/bloque_vta_presupuesto_stock.php'; 
        ?>           

        <?php if(!$restriccion_venta_por_stock){ ?>
            <?php if ($arr_vta_presupuesto_ins_insumos_seleccionados['TOTAL'] == 0) { ?>
                <div class="mensaje parcial">Esta a punto de generar una APROBACION PARCIAL de presupuesto incluyendo <?php echo count($arr_vta_presupuesto_ins_insumos_seleccionados['SELECCIONADOS']) ?> item/s.</div>
            <?php } else { ?>
                <div class="mensaje total">Esta a punto de generar una APROBACION TOTAL de presupuesto</div>
            <?php } ?>

            <div class="botonera confirmacion ajuste">
                <button type="button" class="boton" id="btn_presupuesto_generar_ajuste_inmediata_contado_confirmar" name="btn_presupuesto_generar_ajuste_inmediata_contado_confirmar">
                    <div class="titulo">Ajuste Inmediato Contado</div>
                    <div class="comentario">Genera OV + Remito Ajuste + Ajuste Debe + Ajuste Haber</div>               
                </button>
            </div>
            <?php }else{ ?>
                <div class="bloque-mensaje-restriccion por-inexistencia-stock">
                    Alguno de los productos no cumple con el stock requerido para concretar la venta.
                </div>
        <?php } ?>
    <?php } ?>

</div>