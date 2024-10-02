<form id="widget_us_memo_form" name="widget_us_memo_form">

    <div class="col par">
        <div class="label">Desde</div>
        <div class="dato">
            <input type="text" size="7" class="textbox date" id="widget_us_memo_txt_desde" name="widget_us_memo_txt_desde" value="<?php Gral::_echo(Gral::getFechaToWeb($desde)) ?>" />
            <input type='button' id='cal_widget_us_memo_txt_desde' class="btn-calendario" value='...' />

            <script type='text/javascript'>
                Calendar.setup({
                    inputField: 'widget_us_memo_txt_desde', ifFormat: '%d/%m/%Y', button: 'cal_widget_us_memo_txt_desde'
                });
            </script>            
        </div>
    </div>

    <div class="col par">
        <div class=label>Hasta</div>
        <div class="dato">
            <input type="text" size="7" class="textbox date" id="widget_us_memo_txt_hasta" name="widget_us_memo_txt_hasta" value="<?php Gral::_echo(Gral::getFechaToWeb($hasta)) ?>" />
            <input type='button' id='cal_widget_us_memo_txt_hasta' class="btn-calendario" value='...' />

            <script type='text/javascript'>
                Calendar.setup({
                    inputField: 'widget_us_memo_txt_hasta', ifFormat: '%d/%m/%Y', button: 'cal_widget_us_memo_txt_hasta'
                });
            </script>            
        </div>
    </div>

    <div class="col par">
        <div class="label">
            <?php Lang::_lang('Tipo') ?>
        </div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'widget_us_memo_cmb_us_memo_tipo_id', Gral::getCmbFiltro(UsMemoTipo::getUsMemoTiposCmb(true), '...'), $widget_us_memo_cmb_us_memo_tipo_id, 'textbox ' . $error_input_css) ?>
        </div>
    </div>

    <div class="col par">
        <div class=label>Palabra</div>
        <div class="dato">
            <input type="text" size="7" class="textbox" id="widget_us_memo_txt_buscar" name="widget_us_memo_txt_buscar" value="<?php Gral::_echo($widget_us_memo_txt_buscar) ?>" />           
        </div>
    </div>

    <div class="col par">
        <div class="label">
            <?php Lang::_lang('Activo') ?>
        </div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'widget_us_memo_cmb_us_memo_tipo_estado_activo', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(true), '...'), $widget_us_memo_cmb_us_memo_tipo_estado_activo, 'textbox ' . $error_input_css) ?>
        </div>
    </div>

    <?php if ($user && $user->getId() == 1) { ?>
        <div class="col par">
            <div class="label">
                <?php Lang::_lang('Usuario') ?>
            </div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'widget_us_memo_cmb_us_memo_us_usuario_id', Gral::getCmbFiltro(UsUsuario::getUsUsuariosConUsMemosCmb(), '...'), $widget_us_memo_cmb_us_memo_us_usuario_id, 'textbox ') ?>
                <div class="label-error" id="cmb_us_memo_tipo_estado_id_error"></div>
            </div>
        </div>
    <?php } ?>
    
    <div class="col botonera">
        <button type="button" id="widget_us_memo_btn_buscar" name="widget_us_memo_btn_buscar" class="boton">Buscar</button>
    </div>

</form>