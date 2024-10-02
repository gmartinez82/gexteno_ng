<?php
include_once '_autoload.php';


$db_nombre_objeto = 'pdi_pedido';
$pdi_pedido_agrupacion = new PdiPedidoAgrupacion();

// -------------------------------------------------------------------------
// inicializacion masiva desde recepcion masiva
// -------------------------------------------------------------------------    
$pdi_pedido_agrupacion_id = Gral::getVars(Gral::VARS_GET, 'pdi_pedido_agrupacion_id', 0);
if ($pdi_pedido_agrupacion_id != 0) {
    $pdi_pedido_agrupacion = PdiPedidoAgrupacion::getOxId($pdi_pedido_agrupacion_id);
    $pdi_pedidos = $pdi_pedido_agrupacion->getPdiPedidos();

    $prv_proveedor = true;
    
    foreach ($pdi_pedidos as $pdi_pedido)
    {
        $key++;
        $pdi_estado_actual = $pdi_pedido->getPdiEstadoActual();

        $arr_insumo_seleccionados[$key]['pdi_pedido_id'] = $pdi_pedido->getId();
        $arr_insumo_seleccionados[$key]['ins_insumo_id'] = $pdi_pedido->getInsInsumoId();
        $arr_insumo_seleccionados[$key]['cantidad'] = $pdi_estado_actual->getCantidad();
        $txt_cantidads[$key] = $pdi_estado_actual->getCantidad();

        $arr_pdi_pedidos[$key] = $pdi_pedido->getId();
    }
}
// -------------------------------------------------------------------------     

$pan_panol_origen = $pdi_pedido_agrupacion->getPanPanolOrigenObj();
$pan_panol_destino = $pdi_pedido_agrupacion->getPanPanolDestinoObj();

//$txt_fecha_recepcion = date('Y-m-d');
?>
<form id='form_div_modal' name='form_div_modal' method='post' >
    <div class="datos-masivo agregar-masivo" pdi_pedido_agrupacion_id="<?php echo ($pdi_pedido_agrupacion) ? $pdi_pedido_agrupacion->getId() : 0 ?>" >
        <div class="div_listado_pdi_pedido_agrupacion_items">
            <?php
            include "modal_pdi_pedido_aceptar_masivo_item_datos.php";
            ?>
        </div>
        <div class="par">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <textarea name='txa_observacion' rows='3' cols='35' id='txa_observacion' class='textbox '><?php Gral::_echoTxt($txa_observacion) ?></textarea>
                <div class="label-error" id="txa_observacion_error"></div>
            </div>
        </div>
        <div class="botonera">
            <div class="label-error" id="lbl_general_error"></div>
            <input id='btn_generar_aceptacion_masiva' name='btn_generar_aceptacion_masiva' class="boton" type='button'  value='<?php Lang::_lang('Generar Aceptacion Masiva') ?>' />
        </div>
    </div>
</form>
<script>
    setInitPdiPedidoAgrupacions();
    setInit();

    setInitDbSuggest();
    setInitDbSuggestBoton();
</script>