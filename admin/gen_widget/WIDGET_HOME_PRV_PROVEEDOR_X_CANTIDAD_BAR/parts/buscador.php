<form id='widget_<?php echo $widget_key ?>_form' name='widget_<?php echo $widget_key ?>_form'>
    
    <div class='col par'>
        <div class='label'>
            <?php Lang::_lang('Cantidad'); ?>
        </div>
        <div class='dato'>
            <input id='widget_<?php echo $widget_key ?>_txt_cantidad' name='widget_<?php echo $widget_key ?>_txt_cantidad'  size='3' class='textbox spinner'  type='text' value='<?php Gral::_echo($txt_cantidad) ?>' />
        </div>
    </div>
    
    <div class='col par'>
        <div class='label'>
            <?php Lang::_lang('Req Reabast'); ?>
        </div>
        <div class='dato'>
            <?php Html::html_dib_select(1, 'widget_'.$widget_key.'_cmb_ins_stock_resumen_tipo_estado_requiere_reabastecimiento', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(true), '...'), $widget_cmb_ins_stock_resumen_tipo_estado_requiere_reabastecimiento, 'textbox widget_cmb_ins_stock_resumen_tipo_estado_requiere_reabastecimiento '. $error_input_css); ?>
        </div>
    </div>
    
    <div class='col par'>
        <div class='label'>
            <?php Lang::_lang('Categoria'); ?>
        </div>
        <div class='dato'>
            <?php Html::html_dib_select(1, 'widget_'.$widget_key.'_cmb_prv_categoria_id', Gral::getCmbFiltro(PrvCategoria::getPrvCategoriasCmb(true), '...'), $widget_cmb_prv_categoria_id, 'textbox widget_cmb_prv_categoria_id'. $error_input_css); ?>
        </div>
    </div>
    
    <div class='col par'>
        <div class='label'>
            <?php Lang::_lang('Panol'); ?>
        </div>
        <div class='dato'>
            <?php Html::html_dib_select(1, 'widget_'.$widget_key.'_cmb_pan_panol_id', PanPanol::getPanPanolsCmb(true), $widget_cmb_pan_panol_id, 'textbox widget_cmb_pan_panol_id'. $error_input_css); ?>
        </div>
    </div>
    
    <div class='col par'>
        <div class='label'>
            <?php Lang::_lang('Clasificacion'); ?>
        </div>
        <div class='dato'>
            <?php Html::html_dib_select(1, 'widget_'.$widget_key.'_cmb_ins_clasificacion_id', Gral::getCmbFiltro(InsClasificacion::getInsClasificacionsCmb(true), '...'), $widget_cmb_ins_clasificacion_id, 'textbox widget_cmb_ins_clasificacion_id'. $error_input_css); ?>
        </div>
    </div>
    
    <div class='col par'>
        <div class='label'>
            <?php Lang::_lang('Etiqueta'); ?>
        </div>
        <div class='dato'>
            <?php Html::html_dib_select(1, 'widget_'.$widget_key.'_cmb_ins_etiqueta_id', Gral::getCmbFiltro(InsEtiqueta::getInsEtiquetasCmb(true), '...'), $widget_cmb_ins_etiqueta_id, 'textbox widget_cmb_ins_etiqueta_id'. $error_input_css); ?>
        </div>
    </div>
    
    <div class='col botonera'>
        <button type='button' id='widget_<?php echo $widget_key ?>_btn_buscar' name='widget_<?php echo $widget_key ?>_btn_buscar' class='boton'>Buscar</button>
    </div>
</form>