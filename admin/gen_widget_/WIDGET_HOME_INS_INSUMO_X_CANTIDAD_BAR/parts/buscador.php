<form id='widget_<?php echo $widget_key ?>_form' name='widget_<?php echo $widget_key ?>_form'>
    <div class='col par'>
        <div class='label'>Desde</div>
        <div class='dato'>
            <input type='text' size='8' class='textbox date' id='widget_<?php echo $widget_key ?>_txt_desde' name='widget_<?php echo $widget_key ?>_txt_desde' value='<?php Gral::_echo(Gral::getFechaToWeb($desde)) ?>' />
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
            <input type='text' size='8' class='textbox date' id='widget_<?php echo $widget_key ?>_txt_hasta' name='widget_<?php echo $widget_key ?>_txt_hasta' value='<?php Gral::_echo(Gral::getFechaToWeb($hasta)) ?>' />
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
            <?php Html::html_dib_select(1, 'widget_'.$widget_key.'_cmb_ins_etiqueta_id', Gral::getCmbFiltro(InsEtiqueta::getInsEtiquetasCmb(true), '...'), $cmb_ins_etiqueta_id, 'textbox'. $error_input_css); ?>
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
            <?php Lang::_lang('Imp Desde'); ?>
        </div>
        <div class='dato'>
            <input id='widget_<?php echo $widget_key ?>_txt_importe_desde' name='widget_<?php echo $widget_key ?>_txt_importe_desde'  size='10' class='textbox moneda'  type='text' value='<?php Gral::_echo(Gral::getImporteDesdeDbToPriceFormat($txt_importe_desde)) ?>' />
        </div>
    </div>

    <div class='col par'>
        <div class='label'>
            <?php Lang::_lang('Imp Hasta'); ?>
        </div>
        <div class='dato'>
            <input id='widget_<?php echo $widget_key ?>_txt_importe_hasta' name='widget_<?php echo $widget_key ?>_txt_importe_hasta'  size='10' class='textbox moneda'  type='text' value='<?php Gral::_echo(Gral::getImporteDesdeDbToPriceFormat($txt_importe_hasta)) ?>' />
        </div>
    </div>

    <div class='col par'>
        <div class='label'>
            <?php Lang::_lang('Cantidad'); ?>
        </div>
        <div class='dato'>
            <input id='widget_<?php echo $widget_key ?>_txt_cantidad' name='widget_<?php echo $widget_key ?>_txt_cantidad'  size='3' class='textbox spinner'  type='text' value='<?php Gral::_echo($txt_cantidad) ?>' />
        </div>
    </div>

    <div class='col botonera'>
        <button type='button' id='widget_<?php echo $widget_key ?>_btn_buscar' name='widget_<?php echo $widget_key ?>_btn_buscar' class='boton'>Buscar</button>
    </div>
</form>