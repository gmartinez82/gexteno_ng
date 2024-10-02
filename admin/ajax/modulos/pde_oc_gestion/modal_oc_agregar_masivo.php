<?php
include_once '_autoload.php';


$db_nombre_objeto = 'pde_pedido';
$pde_oc = new PdeOc();

$hdn_error = 1;

if (Gral::esPost()) {
    $id = Gral::getVars(1, 'hdn_id', 0);
    if ($id != 0) {
        $pde_oc = PdeOc::getOxId($id);
    }

    
} else {
    $id = Gral::getVars(2, 'id', 0);
    if ($id != 0) {
        $pde_oc = PdeOc::getOxId($id);
    }

    $txt_vencimiento = Date::sumarDias(date('Y-m-d'), 7);
    
    // -------------------------------------------------------------------------
    // inicializacion masiva desde otra pantalla
    // -------------------------------------------------------------------------
    $chk_ins_stock_resumen = Gral::getVars(Gral::VARS_GET, 'chk_ins_stock_resumen');
    $prv_proveedor_id = Gral::getVars(Gral::VARS_GET, 'prv_proveedor_id', 0);
    $pan_panol_id = Gral::getVars(Gral::VARS_GET, 'pan_panol_id', 0);
    //Gral::prr($chk_ins_stock_resumen);
    
    foreach($chk_ins_stock_resumen as $key => $chk_ins_stock_resumen_uno){
        $ins_stock_resumen = InsStockResumen::getOxId($chk_ins_stock_resumen_uno);
        
        $ins_insumo = $ins_stock_resumen->getInsInsumo();
        $pan_panol = $ins_stock_resumen->getPanPanol();

        $cantidad_sugerida = $ins_stock_resumen->getCantidadSugeridaReabastecimiento();
        
        $arr_insumo_seleccionados[$key]['ins_insumo_id'] = $ins_insumo->getId();
        $arr_insumo_seleccionados[$key]['cantidad'] = $cantidad_sugerida;

        $txt_cantidads[$key] = $cantidad_sugerida;        
        //Gral::prr($arr_insumo_seleccionados);
    }
    // -------------------------------------------------------------------------    
    
    $prv_proveedor = PrvProveedor::getOxId($prv_proveedor_id);
    if($prv_proveedor){
        $cmb_prv_proveedor_id = $prv_proveedor->getId();
    }
}
?>
<form id='form_div_modal' name='form_div_modal' method='post' >
    <div class="datos agregar-masivo" >

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
                    <?php Html::html_dib_select(1, 'cmb_pde_centro_pedido_id', Gral::getCmbFiltro(PdeCentroPedido::getPdeCentroPedidosCmbFxCredencial(), '...'), $cmb_pde_centro_pedido_id, 'textbox') ?>

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
                    <textarea name='txa_observacion' rows='3' cols='45' id='txa_observacion' class='textbox '><?php Gral::_echoTxt($txa_observacion) ?></textarea>

                    <div class="label-error" id="txa_observacion_error"></div>
                </div>
            </div>

        </div>

        <div class="div_listado_pde_oc_items">

            <?php 
            
            include "modal_oc_agregar_masivo_item_datos.php"; 
            ?>

        </div>

        <div class="botonera">
            <input name='btn_guardar_oc_masiva' class="boton" type='button' id='btn_guardar_oc_masiva' value='<?php Lang::_lang('Generar OC Masiva') ?>' />

            <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($pde_oc->getId()) ?>'/>
            <input name='hdn_error' type='hidden' id='hdn_error' class="hdn_error" size='1' value='<?php Gral::_echoTxt($hdn_error) ?>'/>
        </div>

    </div>

</form>
<script>
    setInitPdeOcs();
    setInit();

    setInitDbSuggest();
    setInitDbSuggestBoton();
</script>