<form id='widget_<?php echo $widget_key ?>_form' name='widget_<?php echo $widget_key ?>_form'>
    
    <div class='col par'>
        <div class='label'>
            <?php Lang::_lang('Mes') ?>
        </div>
        <div class='dato'>
            <?php Html::html_dib_select(1, 'widget_'.$widget_key.'_cmb_gral_mes_id', GralMes::getGralMessCmb(true), $widget_cmb_gral_mes_id, 'textbox widget_cmb_gral_mes_id '. $error_input_css); ?>
        </div>
    </div>

    <div class='col par'>
        <div class='label'>
            <?php Lang::_lang('Anio') ?>
        </div>
        <div class='dato'>
            <?php Html::html_dib_select(1, 'widget_'.$widget_key.'_cmb_anio', Gral::getAniosCmb(3), $widget_cmb_anio, 'textbox widget_cmb_anio '. $error_input_css); ?>
        </div>
    </div>
    
    <div class='col par'>
        <div class='label'>
            <?php Lang::_lang('Punto Venta'); ?>
        </div>
        <div class='dato'>
            <?php Html::html_dib_select(1, 'widget_'.$widget_key.'_cmb_vta_punto_venta_id', Gral::getCmbFiltro(VtaPuntoVenta::getVtaPuntoVentasCmb(true), '...'), $widget_cmb_vta_punto_venta_id, 'textbox widget_cmb_vta_punto_venta_id '. $error_input_css); ?>
        </div>
    </div>
    
    <div class='col botonera'>
        <button type='button' id='widget_<?php echo $widget_key ?>_btn_buscar' name='widget_<?php echo $widget_key ?>_btn_buscar' class='boton'>Buscar</button>
    </div>
</form>