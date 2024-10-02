<?php
$widget_modulo_desde = date('Y-m-d');
$widget_modulo_hasta = date('Y-m-d');
$widget_modulo_hora_desde = '00:00';
$widget_modulo_hora_hasta = '23:59';
$widget_modulo_cantidad = 10;
?>
<div class="gen-widget-modulo-buscador">

    <form id='widget_modulo_<?php echo $codigo ?>_buscador_form' name='widget_modulo_<?php echo $codigo ?>_buscador_form'>

        <div class='col par'>
            <div class='label'>Desde</div>
            <div class='dato'>
                <input type='text' size='8' class='textbox date' id='widget_modulo_<?php echo $codigo ?>_txt_desde' name='widget_modulo_<?php echo $codigo ?>_txt_desde' value='<?php Gral::_echo(Gral::getFechaToWeb($widget_modulo_desde)) ?>' filtro="widget_txt_desde" />
                <input type='button' id='cal_widget_modulo_<?php echo $codigo ?>_txt_desde' class='btn-calendario' value='...' />

                <script type='text/javascript'>
                    Calendar.setup({
                        inputField: 'widget_modulo_<?php echo $codigo ?>_txt_desde', ifFormat: '%d/%m/%Y', button: 'cal_widget_modulo_<?php echo $codigo ?>_txt_desde'
                    });
                </script>
            </div>
        </div>

        <div class='col par'>
            <div class=label>Hasta</div>
            <div class='dato'>
                <input type='text' size='8' class='textbox date' id='widget_modulo_<?php echo $codigo ?>_txt_hasta' name='widget_modulo_<?php echo $codigo ?>_txt_hasta' value='<?php Gral::_echo(Gral::getFechaToWeb($widget_modulo_hasta)) ?>' filtro="widget_txt_hasta" />
                <input type='button' id='cal_widget_modulo_<?php echo $codigo ?>_txt_hasta' class='btn-calendario' value='...' />

                <script type='text/javascript'>
                    Calendar.setup({
                        inputField: 'widget_modulo_<?php echo $codigo ?>_txt_hasta', ifFormat: '%d/%m/%Y', button: 'cal_widget_modulo_<?php echo $codigo ?>_txt_hasta'
                    });
                </script>
            </div>
        </div>
        
        <div class='col par'>
            <div class='label'>Hora Desde</div>
            <div class='dato'>
                <input type='text' size='7' class='textbox horamin' id='widget_modulo_<?php echo $codigo ?>_txt_hora_desde' name='widget_modulo_<?php echo $codigo ?>_txt_hora_desde' value='<?php Gral::_echo($widget_modulo_hora_desde) ?>' filtro="widget_txt_hora_desde" />
            </div>
        </div>

        <div class='col par'>
            <div class=label>Hora Hasta</div>
            <div class='dato'>
                <input type='text' size='7' class='textbox horamin' id='widget_modulo_<?php echo $codigo ?>_txt_hora_hasta' name='widget_modulo_<?php echo $codigo ?>_txt_hora_hasta' value='<?php Gral::_echo($widget_modulo_hora_hasta) ?>' filtro="widget_txt_hora_hasta" />
            </div>
        </div>
        
        <div class='col par'>
            <div class='label'>
                <?php Lang::_lang('Usuario'); ?>
            </div>
            <div class='dato'>
                <?php Html::html_dib_select(1, 'widget_'.$widget_key.'_cmb_usuario_id', Gral::getCmbFiltro(UsUsuario::getUsUsuariosCmb(true), '...'), $cmb_usuario_id, 'textbox'. $error_input_css, $ancho = '', 'filtro="widget_cmb_usuario_id"'); ?>
            </div>
        </div>

        <div class='col par'>
            <div class='label'>
                <?php Lang::_lang('Grupo'); ?>
            </div>
            <div class='dato'>
                <?php Html::html_dib_select(1, 'widget_'.$widget_key.'_cmb_grupo_id', Gral::getCmbFiltro(UsGrupo::getUsGruposCmb(true), '...'), $cmb_grupo_id, 'textbox'. $error_input_css, $ancho = '', 'filtro="widget_cmb_grupo_id"'); ?>
            </div>
        </div>
        
        <div class='col par'>
            <div class='label'>
                <?php Lang::_lang('Pagina'); ?>
            </div>
            <div class='dato'>
                <?php Html::html_dib_select(1, 'widget_'.$widget_key.'_cmb_pagina', Gral::getCmbFiltro(UsNavegacion::getPaginasCmb(true), '...'), $cmb_pagina, 'textbox'. $error_input_css, $ancho = '', 'filtro="widget_cmb_pagina"'); ?>
            </div>
        </div>
        
        <div class='col par'>
            <div class='label'>
                <?php Lang::_lang('Cantidad'); ?>
            </div>
            <div class='dato'>
                <input id='widget_<?php echo $widget_key ?>_txt_cantidad' name='widget_<?php echo $widget_key ?>_txt_cantidad'  size='3' class='textbox spinner'  type='text' value='<?php Gral::_echo($widget_modulo_cantidad) ?>' filtro="widget_txt_cantidad" />
            </div>
        </div>

        <div class='col botonera'>
            <button type='button' id='widget_modulo_<?php echo $codigo ?>_btn_buscar' name='widget_modulo_<?php echo $codigo ?>_btn_buscar' class='boton boton-buscar'>Buscar</button>
        </div>
    </form>  

</div>