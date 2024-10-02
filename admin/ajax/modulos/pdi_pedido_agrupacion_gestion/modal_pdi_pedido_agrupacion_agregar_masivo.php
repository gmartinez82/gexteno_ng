<?php
include_once '_autoload.php';

$db_nombre_objeto = 'pde_pedido';
$pdi_pedido_agrupacion = new PdiPedidoAgrupacion();

// -------------------------------------------------------------------------
// inicializacion masiva desde edicion
// -------------------------------------------------------------------------    
$pdi_pedido_agrupacion_id = Gral::getVars(Gral::VARS_GET, 'pdi_pedido_agrupacion_id', 0, Gral::TIPO_INTEGER);
if ($pdi_pedido_agrupacion_id != 0)
{
    $pdi_pedido_agrupacion = PdiPedidoAgrupacion::getOxId($pdi_pedido_agrupacion_id);
    $pdi_pedido_agrupacion_items = $pdi_pedido_agrupacion->getPdiPedidoAgrupacionItems();
    $cmb_pan_panol_origen = $pdi_pedido_agrupacion->getPanPanolOrigen();
    $cmb_pan_panol_destino = $pdi_pedido_agrupacion->getPanPanolDestino();
    $cmb_pdi_urgencia_id = $pdi_pedido_agrupacion->getPdiUrgenciaId();
    
    $pan_panol_origen = $pdi_pedido_agrupacion->getPanPanolOrigenObj();
    $pan_panol_destino = $pdi_pedido_agrupacion->getPanPanolDestinoObj();
    $txa_observacion = $pdi_pedido_agrupacion->getObservacion();
    
    foreach ($pdi_pedido_agrupacion_items as $pdi_pedido_agrupacion_item)
    {
        $key++;
        $arr_insumo_seleccionados[$key]['ins_insumo_id'] = $pdi_pedido_agrupacion_item->getInsInsumoId();
        $arr_insumo_seleccionados[$key]['cantidad']      = $pdi_pedido_agrupacion_item->getCantidad();
        $txt_cantidads[$key]                             = $pdi_pedido_agrupacion_item->getCantidad();
    }
}
// -------------------------------------------------------------------------    



// -------------------------------------------------------------------------
// inicializacion masiva desde pantalla de stock desde nuevo resumen de stock
// -------------------------------------------------------------------------
$chk_ins_stock_resumen = Gral::getVars(Gral::VARS_POST, 'chk_ins_stock_resumen');
if (is_array($chk_ins_stock_resumen))
{
    $pan_panol_id = Gral::getVars(Gral::VARS_POST, 'pan_panol_id', 0, Gral::TIPO_INTEGER);
    //Gral::prr($chk_ins_stock_resumen);

    $key = 0;
    foreach ($chk_ins_stock_resumen as $ins_stock_resumen_id => $chk_ins_stock_resumen_uno)
    {
        $key++;
        $ins_stock_resumen = InsStockResumen::getOxId($chk_ins_stock_resumen_uno);

        $ins_insumo = $ins_stock_resumen->getInsInsumo();

        $cantidad_sugerida = $ins_stock_resumen->getCantidadSugeridaReabastecimiento();

        $arr_insumo_seleccionados[$key]['ins_insumo_id'] = $ins_insumo->getId();
        $arr_insumo_seleccionados[$key]['cantidad'] = $cantidad_sugerida;

        if ($cantidad_sugerida <= 0) {
            $cantidad_sugerida = 1;
        }

        $txt_cantidads[$key] = $cantidad_sugerida;
        //Gral::prr($arr_insumo_seleccionados);
    }

    $pan_panol_origen = PanPanol::getOxId($pan_panol_id);
    if ($pan_panol_origen)
    {
        $cmb_pan_panol_origen = $pan_panol_origen->getId();
    }
}


// -------------------------------------------------------------------------
// inicializacion masiva desde pantalla de stock por insumo nueva
// -------------------------------------------------------------------------
$chk_ins_insumo = Gral::getVars(Gral::VARS_POST, 'chk_insumo_id');
if (is_array($chk_ins_insumo))
{
    $pan_panol_id = Gral::getVars(Gral::VARS_POST, 'pan_panol_id', 0, Gral::TIPO_INTEGER);
    $pan_panol_origen = PanPanol::getOxId($pan_panol_id);
    
    $key = 0;
    foreach ($chk_ins_insumo as $ins_insumo_id => $chk_ins_insumo_uno)
    {
        $key++;
        
        $ins_insumo = InsInsumo::getOxId($chk_ins_insumo_uno);
        $ins_stock_resumen = $ins_insumo->getInsStockResumenEnPanol($pan_panol_origen);
        $cantidad_sugerida = $ins_stock_resumen->getCantidadSugeridaReabastecimiento();
        
        $arr_insumo_seleccionados[$key]['ins_insumo_id'] = $ins_insumo->getId();
        $arr_insumo_seleccionados[$key]['cantidad'] = $cantidad_sugerida;
        
        if ($cantidad_sugerida <= 0) {
            $cantidad_sugerida = 1;
        }
        
        $txt_cantidads[$key] = $cantidad_sugerida;
    }
    
    if ($pan_panol_origen)
    {
        $cmb_pan_panol_origen = $pan_panol_origen->getId();
    }
}
?>

<form id='form_pedido_masivo' name='form_pedido_masivo' method='post'  >
    <div class="datos-masivo agregar-masivo" pdi_pedido_agrupacion_id="<?php echo ($pdi_pedido_agrupacion) ? $pdi_pedido_agrupacion->getId() : 0 ?>" >

        <div class="col c1">

            <div class="par">
                <div class="label"><?php Lang::_lang('Origen') ?></div>
                <div class="dato">
                    <?php Html::html_dib_select(1, 'cmb_pan_panol_origen', Gral::getCmbFiltro(PanPanol::getPanPanolsCmbFxCredencial(), '...'), $cmb_pan_panol_origen, 'textbox') ?>

                    <div class="label-error" id="cmb_pan_panol_origen_error"></div>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Destino') ?></div>
                <div class="dato">
                    <?php Html::html_dib_select(1, 'cmb_pan_panol_destino', Gral::getCmbFiltro(PanPanol::getPanPanolsCmbF(), '...'), $cmb_pan_panol_destino, 'textbox') ?>

                    <div class="label-error" id="cmb_pan_panol_destino_error"></div>
                </div>
            </div>

        </div>

        <div class="col c2">

            <div class="par">
                <div class="label"><?php Lang::_lang('Urgencia') ?></div>
                <div class="dato">
                    <?php Html::html_dib_select(1, 'cmb_pdi_urgencia_id', Gral::getCmbFiltro(PdiUrgencia::getPdiUrgenciasCmb(), '...'), $cmb_pdi_urgencia_id, 'textbox') ?>

                    <div class="label-error" id="cmb_pdi_urgencia_id_error"></div>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Observaciones') ?></div>
                <div class="dato">
                    <textarea name='txa_observacion' rows='3' cols='35' id='txa_observacion' class='textbox '><?php Gral::_echoTxt($txa_observacion) ?></textarea>

                    <div class="label-error" id="txa_observacion_error"></div>
                </div>
            </div>

        </div>

        <div class="div_listado_pdi_pedido_agrupacion_items">
            <?php
            include "modal_pdi_pedido_agrupacion_agregar_item_datos.php";
            ?>
        </div>

        <div class="botonera">
            <div class="label-error" id="lbl_general_error"></div>
            <input id='btn_guardar' name='btn_guardar' class="boton" type='button' value='<?php Lang::_lang('Guardar Temporalmente') ?>' />
            <input id='btn_generar_pdi_pedido_masiva' name='btn_generar_pdi_pedido_masiva' class="boton" type='button' value='<?php Lang::_lang('Generar PDI Masivo') ?>' />
        </div>

    </div>

</form>
<script>
    setInitPdiPedidoAgrupacions();
    setInit();

    setInitDbSuggest();
    setInitDbSuggestBoton();
</script>