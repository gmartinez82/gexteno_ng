<?php
include "_autoload.php";

$pde_nota_credito = new PdeNotaCredito();
$txt_cantidads = Gral::getVars(Gral::VARS_POST, "txt_cantidad", null);
$txt_descripcions = Gral::getVars(Gral::VARS_POST, "txt_descripcion", null);
$cmb_gral_tipo_iva_ids = Gral::getVars(Gral::VARS_POST, "cmb_gral_tipo_iva_id", null);
$cmb_pde_nota_credito_concepto_ids = Gral::getVars(Gral::VARS_POST, "cmb_pde_nota_credito_concepto_id", null);
$txt_importe_unitarios = Gral::getVars(Gral::VARS_POST, "txt_importe_unitario", null);
$txt_importe_ivas = Gral::getVars(Gral::VARS_POST, "txt_importe_iva", null);
$txt_importe_tributos = Gral::getVars(Gral::VARS_POST, "txt_importe_tributo", null);
$txt_importe_totals = Gral::getVars(Gral::VARS_POST, "txt_importe_total", null);

$prv_proveedor_id = Gral::getVars(Gral::VARS_POST, "prv_proveedor_id", 0);
$prv_proveedor = PrvProveedor::getOxId($prv_proveedor_id);
$pde_nota_credito->setPrvProveedorId($prv_proveedor_id);

$arr_vacio[0]['cod'] = '';
$arr_vacio[0]['descripcion'] = '...';
?>

<div class="datos generar-ws-fe-afip">
    <div class="label-error" id="error_cliente_error"></div>

    <form id='form_generar_ws_fe_afip' name='form_generar_ws_fe_afip' method='POST' action='' >

        <?php include "bloque_pde_nota_credito_listado_items_x_prv_proveedor_modal.php"; ?>

        <div class="label-error" id="error_general_error"></div>
        <div class="label-error" id="error_general"></div>

        <div class="col col1">

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
                    //Gral::_echo(PdeNotaCredito::getDeterminacionTipoNotaCredito($prv_proveedor_id)->getDescripcion())
                    $cmb_pde_tipo_nota_credito_id = PdeNotaCredito::getDeterminacionTipoNotaCredito($prv_proveedor_id)->getId();
                    Html::html_dib_select(1, 'cmb_pde_tipo_nota_credito_id', Gral::getCmbFiltro(PdeTipoNotaCredito::getPdeTipoNotaCreditosCmb(), '...'), $cmb_pde_tipo_nota_credito_id, 'textbox ' . $error_input_css);
                    ?>
                    <div class="label-error" id="cmb_pde_tipo_nota_credito_id_error"></div>
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
                <div class="label"><?php Lang::_lang('Fecha NC') ?></div>
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
            
            <div class="par">
                <div class="label"><?php Lang::_lang('Nro Timbrado') ?></div>
                <div class="dato">
                    <input name='txt_nro_timbrado' type='text' class='textbox' id='txt_nro_timbrado' value='<?php Gral::_echo($pde_nota_credito->getNumeroTimbrado()) ?>' size='15' />
                    <div class="label-error" id="txt_nro_timbrado_error"><?php Gral::_echo($txt_nro_timbrado_error) ?></div>  
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Nro NC') ?></div>
                <div class="dato">
                    <input name='txt_nro_punto_venta' type='text' class='textbox nro-punto-venta' id='txt_nro_punto_venta' value='<?php Gral::_echo($txt_nro_punto_venta) ?>' size='6' placeholder="000-000" />
                    <input name='txt_nro_comprobante' type='text' class='textbox nro-comprobante' id='txt_nro_comprobante' value='<?php Gral::_echo($txt_nro_comprobante) ?>' size='10' placeholder="00000000" />

                    <div class="label-error" id="txt_nro_punto_venta_error"><?php Gral::_echo($txt_nro_punto_venta_error) ?></div>  
                    <div class="label-error" id="txt_nro_comprobante_error"><?php Gral::_echo($txt_nro_comprobante_error) ?></div>  
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Gral::_echo("Vincular a") ?>: </div>
                <div class="dato">
                    <?php
                    $gral_empresa_id = 0;
                    Html::html_dib_select(1, 'cmb_gral_empresa_id', Gral::getCmbFiltro(GralEmpresa::getGralEmpresasCmb(), '...'), $gral_empresa_id, 'textbox ' . $error_input_css);
                    ?>
                    <div class="label-error" id="cmb_gral_empresa_id_error"></div>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Gral::_echo("Ctr Ped") ?>: </div>
                <div class="dato">
                    <?php
                    $pde_centro_pedido_id = 0;
                    Html::html_dib_select(1, 'cmb_pde_centro_pedido_id', Gral::getCmbFiltro($arr_vacio, '...'), $pde_centro_pedido_id, 'textbox ' . $error_input_css);
                    ?>
                    <div class="label-error" id="cmb_pde_centro_pedido_id_error"></div>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Observaciones') ?></div>
                <div class="dato">
                    <textarea name='txa_observacion' rows='3' cols='40' id='txa_observacion' class='textbox'></textarea>
                    <div class="label-error" id="txa_observacion_error"></div>
                </div>
            </div>
        </div>

        <div class="col col2">
            <?php include "bloque_pde_nota_credito_listado_items_tabla_totales.php"; ?>            
        </div>

        <div class="label-error" id="generar_nota_credito_online_afip_error"></div>
        <div class="botonera">
            <button class="boton" prv_proveedor_id="<?php echo $prv_proveedor_id ?>" id='btn_generar_nota_credito_online' name='btn_generar_nota_credito_online' type='button' class='btn_generar_nota_credito_online'><?php Lang::_lang('Registrar NC de Proveedores') ?></button>
        </div>

    </form>
</div>

<script>
    setInit();
    setInitPdeNotaCreditoGestion();
</script>