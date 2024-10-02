<?php
include_once '_autoload.php';
?>
<form id='form_div_modal' name='form_div_modal' method='post' action='<?php echo Gral::getPath('path_http') . "admin/ajax/modulos/ins_stock_transformacion_gestion/modal_transformacion_agregar.php" ?>' >
    <div class="datos agregar" >

        <div class="col insumo-origen">

            <div class="par">
                <div class="label"><?php Lang::_lang('Centro Pedido') ?></div>
                <div class="dato">
                    <?php Html::html_dib_select(1, 'cmb_pan_panol_id', Gral::getCmbFiltro(PanPanol::getPanPanolsCmbFxCredencial(), '...'), $cmb_pan_panol_id, 'textbox') ?>

                    <div class="error label-error" id="cmb_pan_panol_id_error"></div>
                </div>
            </div>

            <div class="par" style="display: none;">
                <div class="label"><?php Lang::_lang('Categoria') ?></div>
                <div class="dato">
                    <?php Html::html_dib_select(1, 'cmb_ins_categoria_id', Gral::getCmbFiltro(InsCategoria::getInsCategoriasCmb(), '...'), $cmb_ins_categoria_id, 'textbox') ?>

                    <div class="error label-error" id="cmb_ins_categoria_id_error"></div>
                </div>
            </div>

            <div class="par" style="display: none;">
                <div class="label"><?php Lang::_lang('Insumo') ?></div>
                <div class="dato">
                    <?php Html::html_dib_select(1, 'cmb_ins_insumo_id', Gral::getCmbFiltro(InsInsumo::getInsInsumosTransformablesOrigenCmb(), '...'), $cmb_ins_insumo_id, 'textbox') ?>

                    <div class="error label-error" id="cmb_ins_insumo_id_error"></div>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Insumo') ?></div>
                <div class="dato">
                    <?php echo Html::html_get_dbsuggest(1, 'dbsug_ins_insumo', 'ajax/modulos/ins_insumo_gestion/ins_insumo_gestion_dbsuggest_custom.php?transformable_origen=1', false, true, true, 'Ingrese ...', ($ins_insumo) ? $ins_insumo->getId() : null, ($ins_insumo) ? $ins_insumo->getDescripcion() : '', 30, '', ""); ?>

                    <div class="error"><?php Gral::_echo($dbsug_ins_insumo_id_error) ?></div>
                </div>
            </div>

            <div class="bloque-stock-panol">
                &nbsp;
            </div>

        </div>

        <div class="col insumo-destino">
            <h3>Transformar a</h3>

            <div class="bloque-datos">

            </div>

        </div>

    </div>

</form>
<script>
    setInit();
    setInitInsStockTransformacion();
</script>