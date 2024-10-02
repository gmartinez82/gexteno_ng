<form id='widget_<?php echo $widget_key ?>_form' name='widget_<?php echo $widget_key ?>_form'>
    
    <div class='col par'>
        <div class='label'>Desde</div>
        <div class='dato'>
            <input type='text' size='8' class='textbox date widget_txt_desde' id='widget_<?php echo $widget_key ?>_txt_desde' name='widget_<?php echo $widget_key ?>_txt_desde' value='<?php Gral::_echo(Gral::getFechaToWeb($txt_desde)) ?>' />
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
            <input type='text' size='8' class='textbox date widget_txt_hasta' id='widget_<?php echo $widget_key ?>_txt_hasta' name='widget_<?php echo $widget_key ?>_txt_hasta' value='<?php Gral::_echo(Gral::getFechaToWeb($txt_hasta)) ?>' />
            <input type='button' id='cal_widget_<?php echo $widget_key ?>_txt_hasta' class='btn-calendario' value='...' />
            
            <script type='text/javascript'>
                Calendar.setup({
                    inputField: 'widget_<?php echo $widget_key ?>_txt_hasta', ifFormat: '%d/%m/%Y', button: 'cal_widget_<?php echo $widget_key ?>_txt_hasta'
                });
            </script>
        </div>
    </div>
    
    <div class='col par'>
        <div class='label'>Hora Desde</div>
        <div class='dato'>
            <input type='text' size='7' class='textbox horamin widget_txt_hora_desde' id='widget_<?php echo $widget_key ?>_txt_hora_desde' name='widget_<?php echo $widget_key ?>_txt_hora_desde' value='<?php Gral::_echo($txt_hora_desde) ?>' />
        </div>
    </div>
    
    <div class='col par'>
        <div class=label>Hora Hasta</div>
        <div class='dato'>
            <input type='text' size='7' class='textbox horamin widget_txt_hora_hasta' id='widget_<?php echo $widget_key ?>_txt_hora_hasta' name='widget_<?php echo $widget_key ?>_txt_hora_hasta' value='<?php Gral::_echo($txt_hora_hasta) ?>' />
        </div>
    </div>
    
    <div class="col par">
        <div class=label>Texto</div>
        <div class="dato">
            <input type="text" size="7" class="textbox" id="widget_<?php echo $widget_key ?>_txt_texto" name="widget_<?php echo $widget_key ?>_txt_texto" value="<?php Gral::_echo($widget_txt_texto) ?>" />           
        </div>
    </div>
    
    <div class='col par'>
        <div class='label'>
            <?php Lang::_lang('Usuario'); ?>
        </div>
        <div class='dato'>
            <?php Html::html_dib_select(1, 'widget_'.$widget_key.'_cmb_usuario_id', Gral::getCmbFiltro(UsUsuario::getUsUsuariosCmb(true), '...'), $cmb_usuario_id, 'textbox widget_cmb_usuario_id'. $error_input_css); ?>
        </div>
    </div>
    
    <div class='col par'>
        <div class='label'>
            <?php Lang::_lang('Cantidad'); ?>
        </div>
        <div class='dato'>
            <input id='widget_<?php echo $widget_key ?>_txt_cantidad' name='widget_<?php echo $widget_key ?>_txt_cantidad'  size='3' class='textbox spinner widget_txt_cantidad'  type='text' value='<?php Gral::_echo($txt_cantidad) ?>' />
        </div>
    </div>
    
    <div class='col par'>
        <div class='label'>
            <?php Lang::_lang('Ordenamiento'); ?>
        </div>
        <div class='dato'>
            <?php Html::html_dib_select(1, 'widget_'.$widget_key.'_cmb_ordenamiento', GralSiNo::getOrdenamientoCmb(), $cmb_ordenamiento, 'textbox widget_cmb_ordenamiento '. $error_input_css); ?>
        </div>
    </div>

    <div class='col botonera'>
        <button type='button' id='widget_<?php echo $widget_key ?>_btn_buscar' name='widget_<?php echo $widget_key ?>_btn_buscar' class='boton'>Buscar</button>
    </div>
</form>