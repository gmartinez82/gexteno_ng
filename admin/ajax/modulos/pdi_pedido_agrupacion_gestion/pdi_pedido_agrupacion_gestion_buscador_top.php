<?php

?>
<form id="form_buscador_top" name="form_buscador_top" method="post" action="ajax/modulos/pdi_pedido_agrupacion_gestion/set_pdi_pedido_agrupacion_gestion_buscador_top.php">
    
    <div class="col fecha-desde">
        <div class="label"><?php Lang::_lang('Solicitado Desde') ?></div>
        <div class="dato">
            <input id="txt_filtro_desde" name="txt_filtro_desde" type="text" class="textbox date" size="4" title="<?php Lang::_lang('Ingrese la fecha DESDE') ?>" />
            <input type="button" id="cal_txt_filtro_desde" value=" ... ">
            <script type='text/javascript'>
                Calendar.setup({
                    inputField: 'txt_filtro_desde', ifFormat: '%d/%m/%Y', button: 'cal_txt_filtro_desde',onUpdate: function(){}
                });
            </script>
        </div>
    </div>
    
    <div class="col fecha-hasta">
        <div class="label"><?php Lang::_lang('Solicitado Hasta') ?></div>
        <div class="dato">
            <input id="txt_filtro_hasta" name="txt_filtro_hasta" type="text" class="textbox date" size="4" title="<?php Lang::_lang('Ingrese la fecha HASTA') ?>" />
            <input type="button" id="cal_txt_filtro_hasta" value=" ... ">
            <script type='text/javascript'>
                Calendar.setup({
                    inputField: 'txt_filtro_hasta', ifFormat: '%d/%m/%Y', button: 'cal_txt_filtro_hasta',onUpdate: function(){}
                });
            </script>
        </div>
    </div>
    
    <div class="col insumo">
        <div class="label"><?php Lang::_lang('Deposito Origen') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_pan_panol_origen', Gral::getCmbFiltro(PanPanol::getPanPanolsCmb(true), '...'), $cmb_filtro_pan_panol_origen, 'textbox') ?>
        </div>
    </div>
    
    <div class="col insumo">
        <div class="label"><?php Lang::_lang('Deposito Destino') ?></div>
        <div class="dato">
        <?php Html::html_dib_select(1, 'cmb_filtro_pan_panol_destino', Gral::getCmbFiltro(PanPanol::getPanPanolsCmb(true), '...'), $cmb_filtro_pan_panol_destino, 'textbox') ?>
        </div>
    </div>

    <div class="col estado">
        <div class="label"><?php Lang::_lang('Estado Agrupac') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_pdi_pedido_agrupacion_tipo_estado_id', Gral::getCmbFiltro(PdiPedidoAgrupacionTipoEstado::getPdiPedidoAgrupacionTipoEstadosCmb(), '...'), $cmb_filtro_pdi_pedido_agrupacion_tipo_estado_id, 'textbox') ?>
        </div>
    </div>
    
    
    <div class="col estado">
        <div class="label"><?php Lang::_lang('Estado Individual') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_pdi_estado_id', Gral::getCmbFiltro(PdiTipoEstado::getPdiTipoEstadosGestionablesCmb(), '...'), $cmb_filtro_pdi_estado_id, 'textbox') ?>
        </div>
    </div>
    
    <div class="col">
        <div class="label"><?php Lang::_lang('Busqueda rapida (2 letras min)') ?></div>
        <input id="txt_buscador" name="txt_buscador" type="text" class="textbox" size="45" title="<?php Lang::_lang('Ingrese la palabra que desea buscar') ?>" />
        <img class="txt_buscador_boton" src="imgs/lupa.png" width="20">
    </div>
    
    <div class="col">
        <div class="label"><?php Lang::_lang('Cant por Pag') ?></div>
        <input id="txt_cantidad_paginas" name="txt_cantidad_paginas" type="text" class="textboxx" size="2" value="<?php echo PdeOcAgrupacion::getSesPagCantidad() ?>" title="<?php Lang::_lang('Actualmente se visualizan') ?> <?php echo PdeOcAgrupacion::getSesPagCantidad() ?> <?php Lang::_lang('PdeOcAgrupacion') ?> <?php Lang::_lang('por Pagina') ?>" />
    </div>
    
    <div class="col botonera">

        <?php if (UsCredencial::getEsAcreditado('PDI_PEDIDO_AGRUPACION_GESTION_ACCION_AGREGAR')) { ?>
            <a class="boton agregar-pdi-pedido-masivo" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('Pedido Agrupacion') ?>'><img src="imgs/btn_add.gif" width="25"></a>
        <?php } ?>

        <label class="boton refresh-all" title="<?php Lang::_lang('Actualizar Listado') ?>"><img src="imgs/btn_refresh.png" width="22"></label>
    </div>
    
</form>