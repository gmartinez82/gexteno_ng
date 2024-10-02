<?php
include_once '_autoload.php';

$db_nombre_objeto = 'pde_pedido';
$pde_oc_agrupacion = new PdeOcAgrupacion();

// -------------------------------------------------------------------------
// inicializacion masiva desde edicion
// -------------------------------------------------------------------------    
$pde_oc_agrupacion_id = Gral::getVars(Gral::VARS_GET, 'pde_oc_agrupacion_id', 0);
if ($pde_oc_agrupacion_id != 0) {
    $pde_oc_agrupacion = PdeOcAgrupacion::getOxId($pde_oc_agrupacion_id);
    
    $pde_oc_agrupacion_items = $pde_oc_agrupacion->getPdeOcAgrupacionItems();
    $cmb_prv_proveedor_id = $pde_oc_agrupacion->getPrvProveedorId();
    $cmb_pde_centro_pedido_id = $pde_oc_agrupacion->getPdeCentroPedidoId();
    $cmb_pde_centro_recepcion_id = $pde_oc_agrupacion->getPdeCentroRecepcionId();
    $txa_observacion = $pde_oc_agrupacion->getObservacion();
    $cmb_prv_descuento_financiero_id = $pde_oc_agrupacion->getPrvDescuentoFinancieroId();
    $cmb_iva_incluido = $pde_oc_agrupacion->getIvaIncluido();

    $prv_proveedor = $pde_oc_agrupacion->getPrvProveedor();
    $pde_centro_pedido = $pde_oc_agrupacion->getPdeCentroPedido();

    foreach ($pde_oc_agrupacion_items as $pde_oc_agrupacion_item) {
        $key++;
        $arr_insumo_seleccionados[$key]['ins_insumo_id'] = $pde_oc_agrupacion_item->getInsInsumoId();
        $arr_insumo_seleccionados[$key]['cantidad'] = $pde_oc_agrupacion_item->getCantidad();
        
        $iva_incluido = $pde_oc_agrupacion_item->getIvaIncluido();
        $gral_tipo_iva_id = $pde_oc_agrupacion_item->getGralTipoIvaId();

        $txt_cantidads[$key] = $pde_oc_agrupacion_item->getCantidad();
        $txt_importe_ocs[$key] = $pde_oc_agrupacion_item->getImporteUnidadNeto($iva_incluido, $gral_tipo_iva_id);
        $cmb_prv_descuento_comercial_ids[$key] = ($pde_oc_agrupacion_item->getPrvDescuentoComercialId()) ? $pde_oc_agrupacion_item->getPrvDescuentoComercialId() : 0;
        $chk_afecta_costo_checked[$key] = ($pde_oc_agrupacion_item->getAfectaCosto()) ? "checked='checked'" : "";
    }
}
// -------------------------------------------------------------------------    

$txt_vencimiento = Date::sumarDias(date('Y-m-d'), 7);

// -------------------------------------------------------------------------
// inicializacion masiva desde pantalla de stock
// -------------------------------------------------------------------------
$chk_ins_stock_resumen = Gral::getVars(Gral::VARS_POST, 'chk_ins_stock_resumen');
if (is_array($chk_ins_stock_resumen)) {
    $prv_proveedor_id = Gral::getVars(Gral::VARS_POST, 'prv_proveedor_id', 0);
    $pan_panol_id = Gral::getVars(Gral::VARS_POST, 'pan_panol_id', 0);
    //Gral::prr($chk_ins_stock_resumen);

    $key = 0;
    foreach ($chk_ins_stock_resumen as $ins_stock_resumen_id => $chk_ins_stock_resumen_uno) {
        $key++;
        $ins_stock_resumen = InsStockResumen::getOxId($chk_ins_stock_resumen_uno);

        $ins_insumo = $ins_stock_resumen->getInsInsumo();
        $pan_panol = $ins_stock_resumen->getPanPanol();

        $cantidad_sugerida = $ins_stock_resumen->getCantidadSugeridaReabastecimiento();

        $arr_insumo_seleccionados[$key]['ins_insumo_id'] = $ins_insumo->getId();
        $arr_insumo_seleccionados[$key]['cantidad'] = $cantidad_sugerida;

        if ($cantidad_sugerida <= 0) {
            $cantidad_sugerida = 1;
        }

        $txt_cantidads[$key] = $cantidad_sugerida;
        $txt_importe_ocs[$key] = 0;
        //Gral::prr($arr_insumo_seleccionados);
    }

    $prv_proveedor = PrvProveedor::getOxId($prv_proveedor_id);
    if ($prv_proveedor) {
        $cmb_prv_proveedor_id = $prv_proveedor->getId();
        $cmb_iva_incluido = $prv_proveedor->getIvaIncluido();
        $iva_incluido = $prv_proveedor->getIvaIncluido();        
    }

    $pan_panol = PanPanol::getOxId($pan_panol_id);
    if ($pan_panol) {
        $cmb_pan_panol_id = $pan_panol->getId();
        $cmb_pde_centro_pedido_id = $pan_panol->getPdeCentroPedidoId();

        $pde_centro_pedido = $pan_panol->getPdeCentroPedido();
    }
}


// -------------------------------------------------------------------------
// inicializacion masiva desde pantalla de stock por insumo nueva
// -------------------------------------------------------------------------
$chk_ins_insumo = Gral::getVars(Gral::VARS_POST, 'chk_insumo_id');
if (is_array($chk_ins_insumo)){
    $prv_proveedor_id = Gral::getVars(Gral::VARS_POST, 'prv_proveedor_id', 0);
    $pan_panol_id = Gral::getVars(Gral::VARS_POST, 'pan_panol_id', 0);
    //Gral::prr($chk_ins_stock_resumen);
    
    $pan_panol = PanPanol::getOxId($pan_panol_id);
    
    $key = 0;
    foreach ($chk_ins_insumo as $ins_insumo_id => $chk_ins_insumo_uno) {
        $key++;
        
        $ins_insumo = InsInsumo::getOxId($chk_ins_insumo_uno);
        $ins_stock_resumen = $ins_insumo->getInsStockResumenEnPanol($pan_panol);
        
        //$ins_stock_resumen = InsStockResumen::getOxId($chk_ins_stock_resumen_uno);
        
        //$ins_insumo = $ins_stock_resumen->getInsInsumo();
        //$pan_panol = $ins_stock_resumen->getPanPanol();
        
        $cantidad_sugerida = $ins_stock_resumen->getCantidadSugeridaReabastecimiento();
        
        $arr_insumo_seleccionados[$key]['ins_insumo_id'] = $ins_insumo->getId();
        $arr_insumo_seleccionados[$key]['cantidad'] = $cantidad_sugerida;
        
        if ($cantidad_sugerida <= 0) {
            $cantidad_sugerida = 1;
        }
        
        $txt_cantidads[$key] = $cantidad_sugerida;
        $txt_importe_ocs[$key] = 0;
        //Gral::prr($arr_insumo_seleccionados);
    }
    
    $prv_proveedor = PrvProveedor::getOxId($prv_proveedor_id);
    if ($prv_proveedor) {
        $cmb_prv_proveedor_id = $prv_proveedor->getId();
    }
    
    //$pan_panol = PanPanol::getOxId($pan_panol_id);
    if ($pan_panol) {
        $cmb_pan_panol_id = $pan_panol->getId();
        $cmb_pde_centro_pedido_id = $pan_panol->getPdeCentroPedidoId();

        $pde_centro_pedido = $pan_panol->getPdeCentroPedido();
    }
}

//Gral::prr($txt_importe_ocs);
?>
<form id='form_div_modal' name='form_div_modal' method='post' >
    <div class="datos agregar-masivo" pde_oc_agrupacion_id="<?php echo ($pde_oc_agrupacion) ? $pde_oc_agrupacion->getId() : 0 ?>" >

        <div class="col c1">

            <div class="par">
                <div class="label"><?php Lang::_lang('Vencimiento') ?></div>
                <div class="dato">
                    <input name='txt_vencimiento' type='text' class='textbox' id='txt_vencimiento' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($txt_vencimiento)) ?>' size='10' />
                    <input type='button' id='cal_txt_vencimiento' value='...' />

                    <script type='text/javascript'>
                        Calendar.setup({
                            inputField: 'txt_vencimiento', ifFormat: '%d/%m/%Y', button: 'cal_txt_vencimiento'
                        });
                    </script>

                    <div class="label-error" id="txt_vencimiento_error"></div>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Centro Pedido') ?></div>
                <div class="dato">
                    <?php Html::html_dib_select(1, 'cmb_pde_centro_pedido_id', Gral::getCmbFiltro(PdeCentroPedido::getPdeCentroPedidosCmb(), '...'), $cmb_pde_centro_pedido_id, 'textbox') ?>

                    <div class="label-error" id="cmb_pde_centro_pedido_id_error"></div>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('PrvProveedor') ?></div>
                <div class="dato">
                    <?php Html::html_dib_select(1, 'cmb_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(), '...'), $cmb_prv_proveedor_id, 'textbox') ?>

                    <div class="label-error" id="cmb_prv_proveedor_id_error"></div>
                </div>
            </div>

        </div>

        <div class="col c2">

            <div class="par">
                <div class="label"><?php Lang::_lang('Centro Rec') ?></div>
                <div class="dato">
                    <?php Html::html_dib_select(1, 'cmb_pde_centro_recepcion_id', Gral::getCmbFiltro(PdeCentroRecepcion::getPdeCentroRecepcionsCmb(), '...'), $cmb_pde_centro_recepcion_id, 'textbox') ?>

                    <div class="label-error" id="cmb_pde_centro_recepcion_id_error"></div>
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

        <div class="div_listado_pde_oc_agrupacion_items">
            <?php
            include "modal_oc_agregar_masivo_item_datos.php";
            ?>
        </div>

        <div class="botonera">
            <div class="label-error" id="lbl_general_error"></div>

            <?php if (UsCredencial::getEsAcreditado('PDE_OC_AGRUPACION_GESTION_ACCION_GENERAR_TEMPORAL')) { ?>
                <input name='btn_guardar' class="boton" type='button' id='btn_guardar' value='<?php Lang::_lang('Guardar Temporalmente') ?>' />
            <?php } ?>
            <?php if (UsCredencial::getEsAcreditado('PDE_OC_AGRUPACION_GESTION_ACCION_GENERAR_AOC')) { ?>
                <input name='btn_generar_oc_masiva' class="boton" type='button' id='btn_generar_oc_masiva' value='<?php Lang::_lang('Generar OC Masiva') ?>' />
            <?php } ?>
                
        </div>

    </div>

</form>
<script>
    setInitPdeOcAgrupacions();
    setInit();

    setInitDbSuggest();
    setInitDbSuggestBoton();
</script>