<form id="form_buscador_top" name="form_buscador_top" method="post" action="ajax/modulos/prv_insumo_gestion/set_prv_insumo_gestion_buscador_top.php">
    
    <div class="col ins_marca">
        <div class="label"><?php Lang::_lang('Marca') ?></div>
        <div class="dato">
        <?php Html::html_dib_select(1, 'cmb_filtro_ins_marca_id', Gral::getCmbFiltro(InsMarca::getInsMarcasCmb(true),'...'), $cmb_filtro_ins_marca_id, 'textbox') ?>
        </div>
    </div>
    
    <div class="col ins_marca">
        <div class="label"><?php Lang::_lang('Marca OEM') ?></div>
        <div class="dato">
        <?php Html::html_dib_select(1, 'cmb_filtro_ins_marca_pieza_id', Gral::getCmbFiltro(InsMarca::getInsMarcasCmb(true),'...'), $cmb_filtro_ins_marca_pieza_id, 'textbox') ?>
        </div>
    </div>
    
    <div class="col prv_proveedor">
        <div class="label"><?php Lang::_lang('Proveedor') ?></div>
        <div class="dato">
        <?php Html::html_dib_select(1, 'cmb_filtro_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(true),'...'), $cmb_filtro_prv_proveedor_id, 'textbox') ?>
        </div>
    </div>
    
    
    <div class="col">
        <div class="label">
            <?php Lang::_lang('Busqueda rapida (2 letras min)') ?>
        </div>
        <input id="txt_buscador" name="txt_buscador" type="text" class="textbox" size="30" placeholder="<?php Lang::_lang('Ingrese palabra a buscar') ?>" title="<?php Lang::_lang('Ingrese la palabra que desea buscar') ?>" />
        <img class="txt_buscador_boton" src="imgs/lupa.png" width="20">
    </div>
    <div class="col">
        <div class="label"><?php Lang::_lang('Cant por Pag') ?></div>
        <input id="txt_cantidad_paginas" name="txt_cantidad_paginas" type="text" class="textboxx" size="2" value="<?php echo PrvInsumo::getSesPagCantidad() ?>" title="<?php Lang::_lang('Actualmente se visualizan') ?> <?php echo PrvInsumo::getSesPagCantidad() ?> <?php Lang::_lang('PrvInsumo') ?> <?php Lang::_lang('por Pagina') ?>" />
    </div>
    <div class="col">
        <label class="boton refresh-all" title="<?php Lang::_lang('Actualizar Listado') ?>">
            <img src="imgs/refresh.gif" width="25">
        </label>
    </div>
</form>