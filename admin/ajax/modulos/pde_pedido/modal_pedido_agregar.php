<?php
include_once '_autoload.php';

$db_nombre_objeto = 'pde_pedido';

$id = Gral::getVars(2, 'pedido_id', 0);
$ins_stock_resumen_id = Gral::getVars(2, 'ins_stock_resumen_id', 0);

$pde_pedido = new PdePedido();
if ($id != 0) {
    $pde_pedido = PdePedido::getOxId($id);
} elseif ($ins_stock_resumen_id != 0) {
    $ins_stock_resumen = InsStockResumen::getOxId($ins_stock_resumen_id);
    $ins_insumo = $ins_stock_resumen->getInsInsumo();
    $pan_panol = $ins_stock_resumen->getPanPanol();
    $pde_centro_pedido = $pan_panol->getPdeCentroPedido();

    $arr_puntos_insumo = $ins_insumo->getInsInsumoPuntosEnPanol($pan_panol);

    $vencimiento = Date::sumarDias(date('Y-m-d'), 7);
    $pde_pedido->setVencimiento($vencimiento);

    $pde_pedido->setPdeCentroPedidoId($pde_centro_pedido->getId());
    $pde_pedido->setInsInsumoId($ins_insumo->getId());

    $cantidad_sugerida = $ins_stock_resumen->getCantidadSugeridaReabastecimiento();
    $pde_pedido->setCantidad($cantidad_sugerida);
} else {
    $vencimiento = Date::sumarDias(date('Y-m-d'), 7);
    $pde_pedido->setVencimiento($vencimiento);

    // inicializacion si se solicita desde PDI Automatico
    $pdi_pedido_id = Gral::getVars(2, 'pdi_pedido_id', 0);
    $pdi_pedido = PdiPedido::getOxId($pdi_pedido_id);
    if ($pdi_pedido) {
        $pde_pedido->setInsInsumoId($pdi_pedido->getInsInsumoId());
        $pde_pedido->setCantidad($pdi_pedido->getPdiEstadoActual()->getCantidad());

        $ins_insumo = $pde_pedido->getInsInsumo();
    }
}
?>
<form id='form_div_modal' name='form_div_modal' method='post' action='<?php echo Gral::getPath('path_http') . "admin/ajax/modulos/pde_pedido/modal_pedido_agregar.php" ?>' >
    <div class="datos agregar pde-agregar" tabindex="1">

        <div class="col general">

            <div class="par">
                <div class="label"><?php Lang::_lang('Centro Pedido') ?></div>
                <div class="dato">
                    <?php Html::html_dib_select(1, 'cmb_pde_centro_pedido_id', Gral::getCmbFiltro(PdeCentroPedido::getPdeCentroPedidosCmb(), '...'), $pde_pedido->getPdeCentroPedidoId(), 'textbox') ?>

                    <div class="error label-error" id="cmb_pde_centro_pedido_id_error"></div>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Insumo') ?></div>
                <div class="dato">
                    <?php echo Html::html_get_dbsuggest(1, 'dbsug_ins_insumo', 'ajax/modulos/ins_insumo_gestion/ins_insumo_gestion_dbsuggest_custom.php?comprable=1', false, true, true, 'Ingrese ...', ($pde_pedido->getInsInsumo()) ? $pde_pedido->getInsInsumo()->getId() : null, ($pde_pedido->getInsInsumo()) ? $pde_pedido->getInsInsumo()->getDescripcion() : '', 35) ?>

                    <div class="error label-error" id="cmb_ins_insumo_id_error"></div>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Urgencia') ?></div>
                <div class="dato">
                    <?php Html::html_dib_select(1, 'cmb_pde_urgencia_id', Gral::getCmbFiltro(PdeUrgencia::getPdeUrgenciasCmb(), '...'), $pde_pedido->getPdeUrgenciaId(), 'textbox') ?>

                    <div class="error label-error" id="cmb_pde_urgencia_id_error"></div>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Cantidad') ?></div>
                <div class="dato">
                    <input name='txt_cantidad' type='text' class='textbox spinner' id='txt_cantidad' value='<?php Gral::_echo($pde_pedido->getCantidad()) ?>' size='5' />

                    <div class="error label-error" id="txt_cantidad_error"></div>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Vencimiento') ?></div>
                <div class="dato">
                    <input name='txt_vencimiento' type='text' class='textbox' id='txt_vencimiento' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($pde_pedido->getVencimiento())) ?>' size='20' />
                    <input type='button' id='cal_txt_vencimiento' value='...' />

                    <script type='text/javascript'>
                        Calendar.setup({
                            inputField: 'txt_vencimiento', ifFormat: '%d/%m/%Y', button: 'cal_txt_vencimiento'
                        });
                    </script>

                    <div class="error label-error" id="txt_vencimiento_error"></div>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Comentarios a Proveedor') ?></div>
                <div class="dato">
                    <textarea name='txa_comentario_proveedor' rows='5' cols='45' id='txa_comentario_proveedor' class='textbox '><?php Gral::_echoTxt($pde_pedido->getComentarioProveedor()) ?></textarea>

                    <div class="error label-error" id="txa_comentario_proveedor_error"></div>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Observaciones') ?></div>
                <div class="dato">
                    <textarea name='txa_observacion' rows='6' cols='45' id='txa_observacion' class='textbox '><?php Gral::_echoTxt($pde_pedido->getObservacion()) ?></textarea>

                    <div class="error label-error" id="txa_observacion_error"></div>
                </div>
            </div>

            <div class="botonera">
                <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($pde_pedido->getId()) ?>'/>

                <input name='btn_guardar' class="btn_guardar boton" type='button' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
            </div>	  
        </div>

        <div class="col proveedores">
            <h3 style="margin:1px!important;">Proveedores</h3>

            <div class="buscador">
                <input type="text" name="txt_proveedor_buscador" id="txt_proveedor_buscador" value="" class="textbox" />
                <img src="imgs/btn_lupa.png" align="absmiddle" class="buscador-boton" width="20">
            </div>

            <div class="bloque-datos">
                <?php include "bloque_agregar_proveedores.php" ?>
                <div class="error label-error" id="chk_proveedor_error"></div>
            </div>
        </div>

        <!--
        <div class="col marcas">
            <h3 style="margin:1px!important;">Marcas</h3>

            <div class="buscador">
                <input type="text" name="txt_marca_buscador" id="txt_marca_buscador" value="" class="textbox" />
                <img src="imgs/btn_lupa.png" align="absmiddle" class="buscador-boton" width="20">
            </div>

            <div class="bloque-datos">
        <?php //include "bloque_agregar_marcas.php" ?>
                <div class="error label-error" id="chk_marca_error"></div>
            </div>
            
        </div>
        -->

    </div>

</form>
<script>
    setInit();
    setInitPdePedidos();
</script>