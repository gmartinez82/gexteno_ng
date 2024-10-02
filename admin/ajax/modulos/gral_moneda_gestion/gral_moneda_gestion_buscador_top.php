<form id="form_buscador_top" name="form_buscador_top" method="post" action="ajax/modulos/gral_moneda_gestion/set_gral_moneda_gestion_buscador_top.php">
    
    <div class="col vta_factura_tipo_estado">
        <div class="label"><?php Lang::_lang('Moneda') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_gral_moneda_id', Gral::getCmbFiltro(GralMoneda::getGralMonedasCmb(true), '...'), $cmb_filtro_gral_moneda_id, 'textbox') ?>
        </div>
    </div>
    
    <div class="col">
        <div class="label"><?php Lang::_lang('Busqueda rapida (2 letras min)') ?></div>
        <input id="txt_buscador" name="txt_buscador" type="text" class="textbox" size="30" title="<?php Lang::_lang('Ingrese la palabra que desea buscar') ?>" />
        <img class="txt_buscador_boton" src="imgs/lupa.png" width="20">
    </div>

    <div class="col">
        <div class="label"><?php Lang::_lang('Cant por Pag') ?></div>
        <input id="txt_cantidad_paginas" name="txt_cantidad_paginas" type="text" class="textboxx" size="5" value="<?php echo GralMoneda::getSesPagCantidad() ?>" title="<?php Lang::_lang('Actualmente se visualizan') ?> <?php echo GralMoneda::getSesPagCantidad() ?> <?php Lang::_lang('GralMoneda') ?> <?php Lang::_lang('por Pagina') ?>" />
    </div>

    <div class="col">
        <a class="boton" href='gral_moneda_alta.php' title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('GralMoneda') ?>'><img src="imgs/btn_add.gif" width="25"></a>
        <label class="boton ver_buscador" title="<?php Lang::_lang('Busqueda Avanzada') ?>" modulo='gral_moneda_gestion'><img src="imgs/btn_lupa.png" width="25"></label>
        <label class="boton refresh-all" title="<?php Lang::_lang('Actualizar Listado') ?>"><img src="imgs/refresh.gif" width="25"></label>
    </div>
</form>

