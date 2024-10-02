<form id='widget_<?php echo $widget_key ?>_form' name='widget_<?php echo $widget_key ?>_form'>
    
    <div class='col par'>
        <div class='label'>Desde</div>
        <div class='dato'>
            <input type='text' size='8' class='textbox date widget_txt_desde' id='widget_<?php echo $widget_key ?>_txt_desde' name='widget_<?php echo $widget_key ?>_txt_desde' value='<?php Gral::_echo(Gral::getFechaToWeb($desde)) ?>' />
            <input type='button' id='cal_widget_<?php echo $widget_key ?>_txt_desde' class='btn-calendario' value='...' />
            
            <script type='text/javascript'>
                Calendar.setup({
                    inputField: 'widget_<?php echo $widget_key ?>_txt_desde', ifFormat: '%d/%m/%Y', button: 'cal_widget_<?php echo $widget_key ?>_txt_desde'
                });
            </script>
        </div>
    </div>
    
    <div class='col par'>
        <div class=label>Hasta</div>
        <div class='dato'>
            <input type='text' size='8' class='textbox date widget_txt_hasta' id='widget_<?php echo $widget_key ?>_txt_hasta' name='widget_<?php echo $widget_key ?>_txt_hasta' value='<?php Gral::_echo(Gral::getFechaToWeb($hasta)) ?>' />
            <input type='button' id='cal_widget_<?php echo $widget_key ?>_txt_hasta' class='btn-calendario' value='...' />
            
            <script type='text/javascript'>
                Calendar.setup({
                    inputField: 'widget_<?php echo $widget_key ?>_txt_hasta', ifFormat: '%d/%m/%Y', button: 'cal_widget_<?php echo $widget_key ?>_txt_hasta'
                });
            </script>
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
            <?php Lang::_lang('Tipo Insumo'); ?>
        </div>
        <div class='dato'>
            <?php Html::html_dib_select(1, 'widget_'.$widget_key.'_cmb_ins_tipo_insumo_id', Gral::getCmbFiltro(InsTipoInsumo::getInsTipoInsumosCmb(true), '...'), $cmb_ins_tipo_insumo_id, 'textbox'. $error_input_css); ?>
        </div>
    </div>
    
    <div class='col par'>
        <div class='label'>
            <?php Lang::_lang('Tipo Lista Precio'); ?>
        </div>
        <div class='dato'>
            <?php Html::html_dib_select(1, 'widget_'.$widget_key.'_cmb_ins_tipo_lista_precio_id', Gral::getCmbFiltro(InsTipoListaPrecio::getInsTipoListaPreciosCmb(true), '...'), $cmb_ins_tipo_lista_precio_id, 'textbox'. $error_input_css); ?>
        </div>
    </div>
    
    <div class='col par'>
        <div class='label'>
            <?php Lang::_lang('Sucursal'); ?>
        </div>
        <div class='dato'>
            <?php Html::html_dib_select(1, 'widget_'.$widget_key.'_cmb_gral_sucursal_id', Gral::getCmbFiltro(GralSucursal::getGralSucursalsCmb(true), '...'), $widget_cmb_gral_sucursal_id, 'textbox widget_cmb_gral_sucursal_id '. $error_input_css); ?>
        </div>
    </div>
    
    <div class='col par'>
        <div class='label'>
            <?php Lang::_lang('Actividad'); ?>
        </div>
        <div class='dato'>
            <?php Html::html_dib_select(1, 'widget_'.$widget_key.'_cmb_gral_actividad_id', Gral::getCmbFiltro(GralActividad::getGralActividadsCmb(true), '...'), $widget_cmb_gral_actividad_id, 'textbox widget_cmb_gral_actividad_id '. $error_input_css); ?>
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

    <div class='col botonera'>
        <button type='button' id='widget_<?php echo $widget_key ?>_btn_buscar' name='widget_<?php echo $widget_key ?>_btn_buscar' class='boton'>Buscar</button>
    </div>
</form>