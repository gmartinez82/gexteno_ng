<form id="form_buscador_top" name="form_buscador_top" method="post" action="ajax/modulos/ins_insumo_composicion/set_ins_insumo_composicion_buscador_top.php">
    
    
    <div class="col ins_insumo_id">
        <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
        <div class="dato">
        
                <?php Html::html_dib_select(1, 'buscador_top_ins_insumo_composicion_ins_insumo_id', Gral::getCmbFiltro(InsInsumo::getInsInsumosCmb(), '...'), $criterio->getValorDeCampo('ins_insumo_composicion.ins_insumo_id'), 'textbox')?>
            
                <div class="quitar-filtro" style="display: <?php echo ($criterio->getValorDeCampo('ins_insumo_composicion.ins_insumo_id')) ? 'block' : 'none' ?>;" title="Quitar Filtro">
                    <img src="imgs/btn_eliminar.png" width="7" /> Quitar
                </div>            
                
        </div>
    </div>
    
    <div class="col ins_insumo_composicion">
        <div class="label"><?php Lang::_lang('InsInsumoComposicion') ?></div>
        <div class="dato">
        
                <?php Html::html_dib_select(1, 'buscador_top_ins_insumo_composicion_ins_insumo_composicion', Gral::getCmbFiltro(InsInsumo::getInsInsumosCmb(), '...'), $criterio->getValorDeCampo('ins_insumo_composicion.ins_insumo_composicion'), 'textbox')?>
            
                <div class="quitar-filtro" style="display: <?php echo ($criterio->getValorDeCampo('ins_insumo_composicion.ins_insumo_composicion')) ? 'block' : 'none' ?>;" title="Quitar Filtro">
                    <img src="imgs/btn_eliminar.png" width="7" /> Quitar
                </div>            
                
        </div>
    </div>
    
    <div class="col">
        <div class="label"><?php Lang::_lang('Busqueda rapida (2 letras min)') ?></div>
        <input id="txt_buscador" name="txt_buscador" type="text" class="textbox" size="20" value="<?php echo $criterio->getBuscador() ?>" placeholder="<?php Lang::_lang('Ingrese palabra a buscar') ?>" title="<?php Lang::_lang('Ingrese la palabra que desea buscar') ?>" />
        <img class="txt_buscador_boton" src="imgs/lupa.png" width="20">
        
        <div class="quitar-filtro" style="display: <?php echo ($criterio->getBuscador()) ? 'block' : 'none' ?>;" title="Quitar Filtro">
            <img src="imgs/btn_eliminar.png" width="7" /> Quitar
        </div>            
    </div>

    <div class="col">
        <div class="label"><?php Lang::_lang('Cant por Pag') ?></div>
        <input id="txt_cantidad_paginas" name="txt_cantidad_paginas" type="text" class="textboxx" size="2" value="<?php echo InsInsumoComposicion::getSesPagCantidad() ?>" title="<?php Lang::_lang('Actualmente se visualizan') ?> <?php echo InsInsumoComposicion::getSesPagCantidad() ?> <?php Lang::_lang('InsInsumoComposicion') ?> <?php Lang::_lang('por Pagina') ?>" />
    </div>
    
    <div class="col botonera">
        <input id="btn_buscar" name="btn_buscar" type="button" class="boton" value="<?php Lang::_lang("Buscar") ?>" />
    </div>

    <div class="col">
        <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_COMPOSICION_ALTA')){ ?>
        <a class="boton" href='ins_insumo_composicion_alta.php' title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('InsInsumoComposicion') ?>'><img src="imgs/btn_add.gif" width="25"></a>
        <?php } ?>

        <label class="boton ver_buscador" title="<?php Lang::_lang('Busqueda Avanzada') ?>" modulo='ins_insumo_composicion'><img src="imgs/btn_lupa.png" width="25"></label>
        <label class="boton refresh-all" title="<?php Lang::_lang('Actualizar Listado') ?>"><img src="imgs/btn_refresh.png" width="22"></label>
    </div>

</form>

