<form id="form_buscador_top" name="form_buscador_top" method="post" action="ajax/modulos/gral_sucursal_valoracion/set_gral_sucursal_valoracion_buscador_top.php">
    
    
    <div class="col gral_sucursal_valoracion_agrupacion_id">
        <div class="label"><?php Lang::_lang('Agrupacion') ?></div>
        <div class="dato">
        
                <?php Html::html_dib_select(1, 'buscador_top_gral_sucursal_valoracion_gral_sucursal_valoracion_agrupacion_id', Gral::getCmbFiltro(GralSucursalValoracionAgrupacion::getGralSucursalValoracionAgrupacionsCmb(), '...'), $criterio->getValorDeCampo('gral_sucursal_valoracion.gral_sucursal_valoracion_agrupacion_id'), 'textbox')?>
            
                <div class="quitar-filtro" style="display: <?php echo ($criterio->getValorDeCampo('gral_sucursal_valoracion.gral_sucursal_valoracion_agrupacion_id')) ? 'block' : 'none' ?>;" title="Quitar Filtro">
                    <img src="imgs/btn_eliminar.png" width="7" /> Quitar
                </div>            
                
        </div>
    </div>
    
    <div class="col gral_sucursal_valoracion_tipo_item_id">
        <div class="label"><?php Lang::_lang('Tipo Item') ?></div>
        <div class="dato">
        
                <?php Html::html_dib_select(1, 'buscador_top_gral_sucursal_valoracion_gral_sucursal_valoracion_tipo_item_id', Gral::getCmbFiltro(GralSucursalValoracionTipoItem::getGralSucursalValoracionTipoItemsCmb(), '...'), $criterio->getValorDeCampo('gral_sucursal_valoracion.gral_sucursal_valoracion_tipo_item_id'), 'textbox')?>
            
                <div class="quitar-filtro" style="display: <?php echo ($criterio->getValorDeCampo('gral_sucursal_valoracion.gral_sucursal_valoracion_tipo_item_id')) ? 'block' : 'none' ?>;" title="Quitar Filtro">
                    <img src="imgs/btn_eliminar.png" width="7" /> Quitar
                </div>            
                
        </div>
    </div>
    
    <div class="col gral_sucursal_id">
        <div class="label"><?php Lang::_lang('GralSucursal') ?></div>
        <div class="dato">
        
                <?php Html::html_dib_select(1, 'buscador_top_gral_sucursal_valoracion_gral_sucursal_id', Gral::getCmbFiltro(GralSucursal::getGralSucursalsCmb(), '...'), $criterio->getValorDeCampo('gral_sucursal_valoracion.gral_sucursal_id'), 'textbox')?>
            
                <div class="quitar-filtro" style="display: <?php echo ($criterio->getValorDeCampo('gral_sucursal_valoracion.gral_sucursal_id')) ? 'block' : 'none' ?>;" title="Quitar Filtro">
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
        <input id="txt_cantidad_paginas" name="txt_cantidad_paginas" type="text" class="textboxx" size="2" value="<?php echo GralSucursalValoracion::getSesPagCantidad() ?>" title="<?php Lang::_lang('Actualmente se visualizan') ?> <?php echo GralSucursalValoracion::getSesPagCantidad() ?> <?php Lang::_lang('GralSucursalValoracion') ?> <?php Lang::_lang('por Pagina') ?>" />
    </div>
    
    <div class="col botonera">
        <input id="btn_buscar" name="btn_buscar" type="button" class="boton" value="<?php Lang::_lang("Buscar") ?>" />
    </div>

    <div class="col">
        <?php if(UsCredencial::getEsAcreditado('GRAL_SUCURSAL_VALORACION_ALTA')){ ?>
        <a class="boton" href='gral_sucursal_valoracion_alta.php' title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('GralSucursalValoracion') ?>'><img src="imgs/btn_add.gif" width="25"></a>
        <?php } ?>

        <label class="boton ver_buscador" title="<?php Lang::_lang('Busqueda Avanzada') ?>" modulo='gral_sucursal_valoracion'><img src="imgs/btn_lupa.png" width="25"></label>
        <label class="boton refresh-all" title="<?php Lang::_lang('Actualizar Listado') ?>"><img src="imgs/btn_refresh.png" width="22"></label>
    </div>

</form>

