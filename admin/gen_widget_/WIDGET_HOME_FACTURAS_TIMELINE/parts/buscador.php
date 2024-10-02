<form id="widget_facturas_emitidas_form" name="widget_facturas_emitidas_form">

    <div class="col par">
        <div class="label">Desde</div>
        <div class="dato">
            <input type="text" size="8" class="textbox date" id="widget_facturas_emitidas_txt_desde" name="widget_facturas_emitidas_txt_desde" value="<?php Gral::_echo(Gral::getFechaToWeb($desde)) ?>" />
            <input type='button' id='cal_widget_facturas_emitidas_txt_desde' class="btn-calendario" value='...' />

            <script type='text/javascript'>
                Calendar.setup({
                    inputField: 'widget_facturas_emitidas_txt_desde', ifFormat: '%d/%m/%Y', button: 'cal_widget_facturas_emitidas_txt_desde'
                });
            </script>            
        </div>
    </div>

    <div class="col par">
        <div class=label>Hasta</div>
        <div class="dato">
            <input type="text" size="8" class="textbox date" id="widget_facturas_emitidas_txt_hasta" name="widget_facturas_emitidas_txt_hasta" value="<?php Gral::_echo(Gral::getFechaToWeb($hasta)) ?>" />
            <input type='button' id='cal_widget_facturas_emitidas_txt_hasta' class="btn-calendario" value='...' />

            <script type='text/javascript'>
                Calendar.setup({
                    inputField: 'widget_facturas_emitidas_txt_hasta', ifFormat: '%d/%m/%Y', button: 'cal_widget_facturas_emitidas_txt_hasta'
                });
            </script>            
        </div>
    </div>

    <div class="col par">
        <div class="label">
            <?php Lang::_lang('Preventista'); ?>
        </div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'widget_facturas_emitidas_cmb_vta_preventista_id', Gral::getCmbFiltro(VtaPreventista::getVtaPreventistasCmb(true), '...'), $widget_facturas_emitidas_cmb_vta_preventista_id, 'textbox cmb_vta_comisionista_id ' . $error_input_css) ?>
        </div>
    </div>

    <div class="col par">
        <div class="label">
            <?php Lang::_lang('Vendedor'); ?>
        </div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'widget_facturas_emitidas_cmb_vta_vendedor_id', Gral::getCmbFiltro(VtaVendedor::getVtaVendedorsCmb(true), '...'), $widget_facturas_emitidas_cmb_vta_vendedor_id, 'textbox cmb_vta_comisionista_id ' . $error_input_css) ?>
        </div>
    </div>

    <div class="col botonera">
        <button type="button" id="widget_facturas_emitidas_btn_buscar" name="widget_facturas_emitidas_btn_buscar" class="boton">Buscar</button>
    </div>
</form>