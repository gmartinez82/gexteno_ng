<form id='widget_<?php echo $widget_key ?>_form' name='widget_<?php echo $widget_key ?>_form'>
    
    <div class='col par'>
        <div class='label'>
            <?php Lang::_lang('Panol'); ?>
        </div>
        <div class='dato'>
            <?php Html::html_dib_select(1, 'widget_'.$widget_key.'_cmb_pan_panol_id', Gral::getCmbFiltro(PanPanol::getPanPanolsCmb(true), '...'), $widget_cmb_pan_panol_id, 'textbox widget_cmb_pan_panol_id '. $error_input_css); ?>
        </div>
    </div>
    
    <div class='col par'>
        <div class='label'>
            <?php Lang::_lang('Proveedor'); ?>
        </div>
        <div class='dato'>
            <?php Html::html_dib_select(1, 'widget_'.$widget_key.'_cmb_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(true), '...'), $widget_cmb_prv_proveedor_id, 'textbox widget_cmb_prv_proveedor_id '. $error_input_css); ?>
        </div>
    </div>
    
    <div class='col par'>
        <div class='label'>
            <?php Lang::_lang('Categoria'); ?>
        </div>
        <div class='dato'>
            <?php Html::html_dib_select(1, 'widget_'.$widget_key.'_cmb_ins_categoria_id', Gral::getCmbFiltro(InsCategoria::getInsCategoriasCmb(true), '...'), $widget_cmb_ins_categoria_id, 'textbox widget_cmb_ins_categoria_id '. $error_input_css); ?>
        </div>
    </div>
    
    <div class='col par'>
        <div class='label'>
            <?php Lang::_lang('Etiqueta'); ?>
        </div>
        <div class='dato'>
            <?php Html::html_dib_select(1, 'widget_'.$widget_key.'_cmb_ins_etiqueta_id', Gral::getCmbFiltro(InsEtiqueta::getInsEtiquetasCmb(true), '...'), $widget_cmb_ins_etiqueta_id, 'textbox widget_cmb_ins_etiqueta_id '. $error_input_css); ?>
        </div>
    </div>
    
    <div class='col par'>
        <div class='label'>
            <?php Lang::_lang('Marca'); ?>
        </div>
        <div class='dato'>
            <?php Html::html_dib_select(1, 'widget_'.$widget_key.'_cmb_ins_marca_id', Gral::getCmbFiltro(InsMarca::getInsMarcasCmb(true), '...'), $widget_cmb_ins_marca_id, 'textbox widget_cmb_ins_marca_id '. $error_input_css); ?>
        </div>
    </div>
    
    <div class='col par'>
        <div class='label'>
            <?php Lang::_lang('Req Pedido'); ?>
        </div>
        <div class='dato'>
            <?php Html::html_dib_select(1, 'widget_'.$widget_key.'_cmb_gral_requiere_pedido', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(true), '...'), $widget_cmb_gral_requiere_pedido, 'textbox widget_cmb_gral_requiere_pedido '. $error_input_css); ?>
        </div>
    </div>
    
    <div class='col botonera'>
        <button type='button' id='widget_<?php echo $widget_key ?>_btn_buscar' name='widget_<?php echo $widget_key ?>_btn_buscar' class='boton'>Buscar</button>
    </div>
</form>