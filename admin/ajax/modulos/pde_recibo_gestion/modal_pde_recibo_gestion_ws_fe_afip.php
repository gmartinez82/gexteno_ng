<?php
include "_autoload.php";

$user = UsUsuario::autenticado();
$fnd_cajero = $user->getFndCajeroXFndCajeroUsUsuario();

//$txt_cantidads = Gral::getVars(Gral::VARS_POST, "txt_cantidad", null);
$txt_descripcions = Gral::getVars(Gral::VARS_POST, "txt_descripcion", null);
//$cmb_gral_tipo_iva_ids = Gral::getVars(Gral::VARS_POST, "cmb_gral_tipo_iva_id", null);
$cmb_gral_fp_forma_pago_ids = Gral::getVars(Gral::VARS_POST, "cmb_gral_fp_forma_pago_id", null);
$cmb_pde_recibo_concepto_ids = Gral::getVars(Gral::VARS_POST, "cmb_pde_recibo_concepto_id", null);
$txt_importe_unitarios = Gral::getVars(Gral::VARS_POST, "txt_importe_unitario", null);

$prv_proveedor_id = Gral::getVars(Gral::VARS_POST, "prv_proveedor_id", 0);
$prv_proveedor = PrvProveedor::getOxId($prv_proveedor_id);

$arr_vacio[0]['cod'] = '';
$arr_vacio[0]['descripcion'] = '...';
?>

<div class="datos generar-ws-fe-afip">
    <div class="label-error" id="error_cliente_error"></div>

    <form id='form_generar_ws_fe_afip' name='form_generar_ws_fe_afip' method='POST' action='' >

        <?php include "bloque_pde_recibo_listado_items_x_prv_proveedor_modal.php"; ?>

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
                <div class="dato"><?php Gral::_echo(PdeFactura::getDeterminacionTipoFactura($prv_proveedor_id)->getDescripcion()) ?></div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Localidad') ?></div>
                <div class="dato"><?php Gral::_echo($prv_proveedor->getGeoLocalidad()->getDescripcionFull()) ?></div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Condicion Pago') ?></div>
                <div class="dato">
                    <?php
                    Html::html_dib_select(1, 'cmb_pde_recibo_condicion_pago_id', Gral::getCmbFiltro(PdeReciboCondicionPago::getPdeReciboCondicionPagosCmb(true), '...'), $cmb_pde_recibo_condicion_pago_id, 'textbox ' . $error_input_css);
                    ?>
                    <div class="label-error" id="cmb_pde_recibo_condicion_pago_id_error"></div>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Tipo Pago') ?></div>
                <div class="dato">
                    <?php
                    Html::html_dib_select(1, 'cmb_pde_recibo_tipo_pago_id', Gral::getCmbFiltro(PdeReciboTipoPago::getPdeReciboTipoPagosCmb(true), '...'), $cmb_pde_recibo_tipo_pago_id, 'textbox ' . $error_input_css);
                    ?>
                    <div class="label-error" id="cmb_pde_recibo_tipo_pago_id_error"></div>
                </div>
            </div>
            
            <div class="par">
                <div class="label"><?php Lang::_lang('Fecha Emison') ?></div>
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
                <div class="label"><?php Lang::_lang('Nro Recibo') ?></div>
                <div class="dato">
                    <input name='txt_nro_punto_venta' type='text' class='textbox nro-punto-venta' id='txt_nro_punto_venta' value='<?php Gral::_echo($txt_nro_punto_venta) ?>' size='6' placeholder="000-000" />
                    <input name='txt_nro_comprobante' type='text' class='textbox nro-comprobante' id='txt_nro_comprobante' value='<?php Gral::_echo($txt_nro_comprobante) ?>' size='10' placeholder="0000000" />

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
                <div class="label"><?php Lang::_lang('Caja Afectada') ?></div>
                <div class="dato">
                    <?php
                    if($fnd_cajero){
                        Html::html_dib_select(1, 'cmb_fnd_caja_id', Gral::getCmbFiltro($fnd_cajero->getFndCajaAbiertaCmb(), '...'), $cmb_fnd_caja_id, 'textbox ' . $error_input_css);
                    }else{
                        echo 'No se afectan cajas';
                    }
                    ?>
                    <div class="label-error" id="cmb_fnd_caja_id_error"></div>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Observaciones') ?></div>
                <div class="dato">
                    <textarea name='txa_observacion' rows='3' cols='50' id='txa_observacion' class='textbox'></textarea>
                    <div class="label-error" id="txa_observacion_error"></div>
                </div>
            </div>
        </div>

        <div class="col col2">
            <?php include "bloque_pde_recibo_listado_items_tabla_totales.php"; ?>
        </div>

        <div class="label-error" id="generar_recibo_online_afip_error"></div>
        <div class="botonera">
            <button class="boton" id='btn_generar_recibo_online' name='btn_generar_recibo_online' type='button' class='btn_generar_recibo_online'><?php Lang::_lang('Registrar Recibo de Proveedores') ?></button>
        </div>

    </form>
</div>

<script>
    setInit();
    setInitPdeReciboGestion();
</script>