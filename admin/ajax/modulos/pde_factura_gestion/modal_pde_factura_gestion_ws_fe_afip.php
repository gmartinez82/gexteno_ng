<?php
include "_autoload.php";

$tipo = Gral::getVars(Gral::VARS_POST, "tipo", '');

$pde_factura = new PdeFactura();

// se obtienen variables si es factura de orden-venta
$pde_oc_ids = Gral::getVars(Gral::VARS_POST, "chk_pde_oc", null);
$pde_oc_cantidads = Gral::getVars(Gral::VARS_POST, "txt_pde_oc_cantidad", null);
$pde_oc_importe_unitarios = Gral::getVars(Gral::VARS_POST, "txt_pde_oc_importe_unitario", null);
$pde_oc_porcentaje_descuentos = Gral::getVars(Gral::VARS_POST, "txt_pde_oc_porcentaje_descuento", null);

// se obtienen variables si es factura de item
$txt_cantidads = Gral::getVars(Gral::VARS_POST, "txt_cantidad", null);
$txt_descripcions = Gral::getVars(Gral::VARS_POST, "txt_descripcion", null);
$cmb_gral_tipo_iva_ids = Gral::getVars(Gral::VARS_POST, "cmb_gral_tipo_iva_id", null);
$cmb_pde_factura_concepto_ids = Gral::getVars(Gral::VARS_POST, "cmb_pde_factura_concepto_id", null);
$txt_importe_unitarios = Gral::getVars(Gral::VARS_POST, "txt_importe_unitario", null);
$txt_importe_ivas = Gral::getVars(Gral::VARS_POST, "txt_importe_iva", null);
$txt_importe_tributos = Gral::getVars(Gral::VARS_POST, "txt_importe_tributo", null);
$txt_importe_totals = Gral::getVars(Gral::VARS_POST, "txt_importe_total", null);

$prv_proveedor_id = Gral::getVars(Gral::VARS_POST, "prv_proveedor_id", 0);
$prv_proveedor = PrvProveedor::getOxId($prv_proveedor_id);
$pde_factura->setPrvProveedorId($prv_proveedor_id);
?>

<div class="datos generar-ws-fe-afip" tipo="<?php echo $tipo ?>">

    <?php
    if ($tipo == 'orden-venta') {
        include "bloque_pde_oc_listado_datos_x_prv_proveedor_detalle_modal.php";
    }
    if ($tipo == 'item') {
        include "bloque_pde_factura_listado_items_x_prv_proveedor_modal.php";
    }
    ?>

    <form id='form_generar_ws_fe_afip' name='form_generar_ws_fe_afip' method='POST' action='' >
        <div class="label-error" id="error_general_error"></div>

        <div class="col col1">

            <?php if ($prv_proveedor) { ?>
                <div class="par">
                    <div class="label"><?php Lang::_lang('Proveedor') ?></div>
                    <div class="dato"><?php Gral::_echo($prv_proveedor->getRazonSocial()) ?></div>
                </div>

                <div class="par">
                    <div class="label"><?php Lang::_lang('CUIT') ?></div>
                    <div class="dato"><?php Gral::_echo($prv_proveedor->getCuit()) ?></div>
                </div>

                <div class="par">
                    <div class="label"><?php Lang::_lang('Cond IVA') ?></div>
                    <div class="dato"><?php Gral::_echo($prv_proveedor->getGralCondicionIva()->getDescripcion()) ?></div>
                </div>

                <div class="par">
                    <div class="label"><?php Lang::_lang('Tipo') ?></div>
                    <div class="dato">
                        <?php
                        $cmb_pde_tipo_factura_id = PdeFactura::getDeterminacionTipoFactura($prv_proveedor_id)->getId();
                        Html::html_dib_select(1, 'cmb_pde_tipo_factura_id', Gral::getCmbFiltro(PdeTipoFactura::getPdeTipoFacturasCmb(), '...'), $cmb_pde_tipo_factura_id, 'textbox ' . $error_input_css);
                        ?>
                        <div class="label-error" id="cmb_pde_tipo_factura_id_error"></div>
                    </div>
                </div>

                <div class="par">
                    <div class="label"><?php Lang::_lang('Localidad') ?></div>
                    <div class="dato"><?php Gral::_echo($prv_proveedor->getGeoLocalidad()->getDescripcionFull()) ?></div>
                </div>

                <div class="par">
                    <div class="label"><?php Lang::_lang('Forma de Pago') ?></div>
                    <div class="dato">
                        <?php
                        $gral_fp_forma_pago_id = 0;
                        Html::html_dib_select(1, 'cmb_gral_fp_forma_pago_id', Gral::getCmbFiltro(GralFpFormaPago::getGralFpFormaPagosCmbDeCompra(), '...'), $gral_fp_forma_pago_id, 'textbox ' . $error_input_css);
                        ?>
                        <div class="label-error" id="cmb_gral_fp_forma_pago_id_error"></div>
                    </div>
                </div>
            
                <div class="par">
                    <div class="label"><?php Lang::_lang('Actividad') ?></div>
                    <div class="dato">
                        <?php
                        $gral_actividad_id = 0;
                        Html::html_dib_select(1, 'cmb_gral_actividad_id', Gral::getCmbFiltro(GralActividad::getGralActividadsCmb(), '...'), $gral_actividad_id, 'textbox ' . $error_input_css);
                        ?>
                        <div class="label-error" id="cmb_gral_actividad_id_error"></div>
                    </div>
                </div>

                <div class="par">
                    <div class="label"><?php Gral::_echo("Escenario") ?>: </div>
                    <div class="dato">
                        <?php
                        $gral_escenario_id = 0;
                        Html::html_dib_select(1, 'cmb_gral_escenario_id', Gral::getCmbFiltro(array(), '...'), $gral_escenario_id, 'textbox ' . $error_input_css);
                        ?>
                        <div class="label-error" id="cmb_gral_escenario_id_error"></div>
                    </div>
                </div>

                <div class="par">
                    <div class="label"><?php Lang::_lang('Factura de') ?></div>
                    <div class="dato">
                        <?php Html::html_dib_select(1, 'cmb_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmbXPrvGrupo($prv_proveedor), '...'), $prv_proveedor_id, 'textbox ' . $error_input_css); ?>
                        <div class="label-error" id="cmb_prv_proveedor_id_error"></div>
                    </div>
                </div>

                <div class="par">
                    <div class="label"><?php Lang::_lang('Fecha Factura') ?></div>
                    <div class="dato">
                        <input name='txt_fecha' type='text' class='textbox date' id='txt_fecha' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($txt_fecha)) ?>' size='10' placeholder="dd/mm/aaaa" />
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
                        $gral_mes_id = date('m');
                        $cmb_anio = date('Y');
                        Html::html_dib_select(1, 'cmb_gral_mes_id', GralMes::getGralMessCmb(), $gral_mes_id, 'textbox ' . $error_input_css);
                        Html::html_dib_select(1, 'cmb_anio', Gral::getAniosCmb(1), $cmb_anio, 'textbox ' . $error_input_css);
                        ?>
                        <div class="label-error" id="cmb_gral_mes_id_error"></div>
                    </div>
                </div>

                <div class="par" style="display: none;">
                    <div class="label"><?php Lang::_lang('Nro Despacho AFIP') ?></div>
                    <div class="dato">
                        <div class="comentario">Solo para comprobantes de importacion</div>
                        <input name='txt_nro_despacho' type='text' class='textbox' id='txt_nro_despacho' value='<?php Gral::_echo($pde_factura->getNumeroDespacho()) ?>' size='25' />
                        <div class="label-error" id="txt_nro_despacho_error"><?php Gral::_echo($txt_nro_despacho_error) ?></div>  
                    </div>
                </div>
            
                <div class="par">
                    <div class="label"><?php Lang::_lang('Nro Timbrado') ?></div>
                    <div class="dato">
                        <input name='txt_nro_timbrado' type='text' class='textbox' id='txt_nro_timbrado' value='<?php Gral::_echo($pde_factura->getNumeroTimbrado()) ?>' size='15' />
                        <div class="label-error" id="txt_nro_timbrado_error"><?php Gral::_echo($txt_nro_timbrado_error) ?></div>  
                    </div>
                </div>
            
                <div class="par">
                    <div class="label"><?php Lang::_lang('Nro Factura') ?></div>
                    <div class="dato">
                        <input name='txt_nro_punto_venta' type='text' class='textbox nro-punto-venta' id='txt_nro_punto_venta' value='<?php Gral::_echo($txt_nro_punto_venta) ?>' size='6' placeholder="000-000" />
                        <input name='txt_nro_comprobante' type='text' class='textbox nro-comprobante' id='txt_nro_comprobante' value='<?php Gral::_echo($txt_nro_comprobante) ?>' size='10' placeholder="00000000" />

                        <div class="label-error" id="txt_nro_punto_venta_error"><?php Gral::_echo($txt_nro_punto_venta_error) ?></div>  
                        <div class="label-error" id="txt_nro_comprobante_error"><?php Gral::_echo($txt_nro_comprobante_error) ?></div>  
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

            <?php } else { ?>
                <div class="par">
                    <div class="label"><?php Lang::_lang('Proveedor') ?></div>
                    <div class="dato">Consumidor Final</div>
                </div>
            <?php } ?>

            <div class="par">
                <div class="label"><?php Gral::_echo("Factura a") ?>: </div>
                <div class="dato">
                    <?php
                    $gral_empresa_id = 0;
                    Html::html_dib_select(1, 'cmb_gral_empresa_id', Gral::getCmbFiltro(GralEmpresa::getGralEmpresasCmb(), '...'), $gral_empresa_id, 'textbox ' . $error_input_css);
                    ?>
                    <div class="label-error" id="cmb_gral_empresa_id_error"></div>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Gral::_echo("Centro Pedido") ?>: </div>
                <div class="dato">
                    <?php
                    $pde_centro_pedido_id = 0;
                    Html::html_dib_select(1, 'cmb_pde_centro_pedido_id', Gral::getCmbFiltro($arr_vacio, '...'), $pde_centro_pedido_id, 'textbox ' . $error_input_css);
                    ?>
                    <div class="label-error" id="cmb_pde_centro_pedido_id_error"></div>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Gral::_echo("Centro Costo") ?>: </div>
                <div class="dato">
                    <?php
                    Html::html_dib_select(1, 'cmb_gral_centro_costo_id', Gral::getCmbFiltro(GralCentroCosto::getGralCentroCostosCmb(true), '...'), $gral_centro_costo_id, 'textbox ' . $error_input_css);
                    ?>
                    <div class="label-error" id="cmb_gral_centro_costo_id_error"></div>
                </div>
            </div>
            
            <div class="par">
                <div class="label"><?php Lang::_lang('Obs') ?></div>
                <div class="dato">
                    <textarea name='txa_observacion' rows='3' cols='50' id='txa_observacion' class='textbox'></textarea>
                    <div class="label-error" id="txa_observacion_error"></div>
                </div>
            </div>
        </div>

        <div class="col col2" id="bloque_pde_factura_listado_items_tabla_totales">
            <?php
            if ($tipo == 'orden-venta') {
                include "bloque_pde_factura_listado_ocs_tabla_totales.php";
            }
            if ($tipo == 'item') {
                include "bloque_pde_factura_listado_items_tabla_totales.php";
            }
            ?>

            <div class="par">
                <div class="label"><?php Gral::_echo("Descuento Financiero") ?>: </div>
                <div class="dato">
                        <div class="comentario">Seleccionar si el proveedor tiene descuentos financieros estipulados.</div>
                    <?php
                    Html::html_dib_select(1, 'cmb_prv_descuento_financiero_id', Gral::getCmbFiltro($prv_proveedor->getPrvDescuentoFinancierosCmb(), '...'), $cmb_prv_descuento_financiero_id, 'textbox ' . $error_input_css);
                    ?>
                    <div class="label-error" id="cmb_gral_empresa_id_error"></div>
                </div>
            </div>

        </div>

        <div class="label-error" id="generar_factura_online_afip_error"></div>
        <div class="botonera">
            <button class="boton" id='btn_generar_factura_online' name='btn_generar_factura_online' type='button' class='btn_generar_factura_online'><?php Lang::_lang('Registrar Factura de Proveedores') ?></button>
        </div>

    </form>
</div>

<script>
    setInit();
    setInitPdeFacturaGestion();
</script>