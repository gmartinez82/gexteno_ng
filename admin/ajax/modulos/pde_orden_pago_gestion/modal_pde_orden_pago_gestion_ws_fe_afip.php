<?php
include "_autoload.php";

$pde_orden_pago = new PdeOrdenPago();

// se obtienen variables si es orden_pago de orden-venta
$chk_pde_comprobantes = Gral::getVars(Gral::VARS_POST, "chk_pde_comprobante", null);
$txt_pde_comprobante_importe_saldos = Gral::getVars(Gral::VARS_POST, "txt_pde_comprobante_importe_saldo", null);
$hdn_pde_comprobante_classs = Gral::getVars(Gral::VARS_POST, "hdn_pde_comprobante_class", null);
$prv_proveedor_id = Gral::getVars(Gral::VARS_POST, "prv_proveedor_id", 0);

// se obtienen variables si es orden_pago de item
//$txt_cantidads = Gral::getVars(Gral::VARS_POST, "txt_cantidad", null);
$txt_descripcions = Gral::getVars(Gral::VARS_POST, "txt_descripcion", null);
$txt_importe_unitarios = Gral::getVars(Gral::VARS_POST, "txt_importe_unitario", null);
$cmb_gral_fp_forma_pago_ids = Gral::getVars(Gral::VARS_POST, "cmb_gral_fp_forma_pago_id", null);

$txt_tributo_importes = Gral::getVars(Gral::VARS_POST, "txt_tributo_importe", null);

//Gral::prr($txt_tributo_importes );
$prv_proveedor_id = Gral::getVars(Gral::VARS_POST, "prv_proveedor_id", 0);
$prv_proveedor = PrvProveedor::getOxId($prv_proveedor_id);
$pde_orden_pago->setPrvProveedorId($prv_proveedor_id);
?>

<div class="datos generar-ws-fe-afip" tipo="<?php echo $tipo ?>">

    <?php
    include "bloque_pde_comprobante_listado_datos_x_prv_proveedor_detalle_modal.php";
    ?>

    <form id='form_generar_ws_fe_afip' name='form_generar_ws_fe_afip' method='POST' action='' >

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
                    <div class="label"><?php Lang::_lang('Localidad') ?></div>
                    <div class="dato"><?php Gral::_echo($prv_proveedor->getGeoLocalidad()->getDescripcionFull()) ?></div>
                </div>


            <?php } else { ?>
                <div class="par">
                    <div class="label"><?php Lang::_lang('Proveedor') ?></div>
                    <div class="dato">Consumidor Final</div>
                </div>
            <?php } ?>

            <div class="par">
                <div class="label"><?php Gral::_echo("Emisor") ?>: </div>
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
                <div class="label"><?php Lang::_lang('Obs') ?></div>
                <div class="dato">
                    <textarea name='txa_observacion' rows='3' cols='50' id='txa_observacion' class='textbox'></textarea>
                    <div class="label-error" id="txa_observacion_error"></div>
                </div>
            </div>
        </div>

        <div class="col col2" id="bloque_pde_orden_pago_listado_items_tabla_totales">
            <?php
                include "bloque_pde_orden_pago_listado_ocs_tabla_totales.php";
            ?>
        </div>

        <div class="label-error" id="error_general_error"></div>
        <div class="label-error" id="generar_orden_pago_online_afip_error"></div>
        <div class="botonera">
            <button class="boton" id='btn_generar_orden_pago_online' name='btn_generar_orden_pago_online' type='button' class='btn_generar_orden_pago_online'><?php Lang::_lang('Registrar Orden de Pago a Proveedor') ?></button>
        </div>

    </form>
</div>

<script>
    setInit();
    setInitPdeOrdenPagoGestion();
</script>