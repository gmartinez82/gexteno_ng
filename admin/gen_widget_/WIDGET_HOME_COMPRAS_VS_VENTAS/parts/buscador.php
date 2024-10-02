<form id="widget_compras_vs_ventas_form" name="widget_compras_vs_ventas_form">

    <div class="col par">
        <div class="label">Desde</div>
        <div class="dato">
            <input type="text" size="8" class="textbox date" id="widget_compras_vs_ventas_txt_desde" name="widget_compras_vs_ventas_txt_desde" value="<?php Gral::_echo(Gral::getFechaToWeb($desde)) ?>" />
            <input type='button' id='cal_widget_compras_vs_ventas_txt_desde' class="btn-calendario" value='...' />

            <script type='text/javascript'>
                Calendar.setup({
                    inputField: 'widget_compras_vs_ventas_txt_desde', ifFormat: '%d/%m/%Y', button: 'cal_widget_compras_vs_ventas_txt_desde'
                });
            </script>            
        </div>
    </div>

    <div class="col par">
        <div class=label>Hasta</div>
        <div class="dato">
            <input type="text" size="8" class="textbox date" id="widget_compras_vs_ventas_txt_hasta" name="widget_compras_vs_ventas_txt_hasta" value="<?php Gral::_echo(Gral::getFechaToWeb($hasta)) ?>" />
            <input type='button' id='cal_widget_compras_vs_ventas_txt_hasta' class="btn-calendario" value='...' />

            <script type='text/javascript'>
                Calendar.setup({
                    inputField: 'widget_compras_vs_ventas_txt_hasta', ifFormat: '%d/%m/%Y', button: 'cal_widget_compras_vs_ventas_txt_hasta'
                });
            </script>            
        </div>
    </div>

    <div class="col botonera">
        <button type="button" id="widget_compras_vs_ventas_btn_buscar" name="widget_compras_vs_ventas_btn_buscar" class="boton">Buscar</button>
    </div>
</form>