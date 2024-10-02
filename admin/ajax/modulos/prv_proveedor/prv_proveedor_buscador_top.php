<form id="form_buscador_top" name="form_buscador_top" method="post" action="ajax/modulos/prv_proveedor/set_prv_proveedor_buscador_top.php">
    
    
    <div class="col id">
        <div class="label"><?php Lang::_lang('ID') ?></div>
        <div class="dato">
        
                <input id="buscador_top_prv_proveedor_id" name="buscador_top_prv_proveedor_id" type="text" class="textbox" size="4" />
            
        </div>
    </div>
    
    <div class="col prv_tipo_id">
        <div class="label"><?php Lang::_lang('PrvTipo') ?></div>
        <div class="dato">
        
                <?php Html::html_dib_select(1, 'buscador_top_prv_proveedor_prv_tipo_id', Gral::getCmbFiltro(PrvTipo::getPrvTiposCmb(), '...'), $criterio->getValorDeCampo('prv_proveedor.prv_tipo_id'), 'textbox')?>
            
                <div class="quitar-filtro" style="display: <?php echo ($criterio->getValorDeCampo('prv_proveedor.prv_tipo_id')) ? 'block' : 'none' ?>;" title="Quitar Filtro">
                    <img src="imgs/btn_eliminar.png" width="7" /> Quitar
                </div>            
                
        </div>
    </div>
    
    <div class="col gral_tipo_personeria_id">
        <div class="label"><?php Lang::_lang('GralTipoPersoneria') ?></div>
        <div class="dato">
        
                <?php Html::html_dib_select(1, 'buscador_top_prv_proveedor_gral_tipo_personeria_id', Gral::getCmbFiltro(GralTipoPersoneria::getGralTipoPersoneriasCmb(), '...'), $criterio->getValorDeCampo('prv_proveedor.gral_tipo_personeria_id'), 'textbox')?>
            
                <div class="quitar-filtro" style="display: <?php echo ($criterio->getValorDeCampo('prv_proveedor.gral_tipo_personeria_id')) ? 'block' : 'none' ?>;" title="Quitar Filtro">
                    <img src="imgs/btn_eliminar.png" width="7" /> Quitar
                </div>            
                
        </div>
    </div>
    
    <div class="col gral_condicion_iva_id">
        <div class="label"><?php Lang::_lang('GralCondicionIva') ?></div>
        <div class="dato">
        
                <?php Html::html_dib_select(1, 'buscador_top_prv_proveedor_gral_condicion_iva_id', Gral::getCmbFiltro(GralCondicionIva::getGralCondicionIvasCmb(), '...'), $criterio->getValorDeCampo('prv_proveedor.gral_condicion_iva_id'), 'textbox')?>
            
                <div class="quitar-filtro" style="display: <?php echo ($criterio->getValorDeCampo('prv_proveedor.gral_condicion_iva_id')) ? 'block' : 'none' ?>;" title="Quitar Filtro">
                    <img src="imgs/btn_eliminar.png" width="7" /> Quitar
                </div>            
                
        </div>
    </div>
    
    <div class="col prv_grupo_id">
        <div class="label"><?php Lang::_lang('PrvGrupo') ?></div>
        <div class="dato">
        
                <?php Html::html_dib_select(1, 'buscador_top_prv_proveedor_prv_grupo_id', Gral::getCmbFiltro(PrvGrupo::getPrvGruposCmb(), '...'), $criterio->getValorDeCampo('prv_proveedor.prv_grupo_id'), 'textbox')?>
            
                <div class="quitar-filtro" style="display: <?php echo ($criterio->getValorDeCampo('prv_proveedor.prv_grupo_id')) ? 'block' : 'none' ?>;" title="Quitar Filtro">
                    <img src="imgs/btn_eliminar.png" width="7" /> Quitar
                </div>            
                
        </div>
    </div>
    
    <div class="col prv_categoria_id">
        <div class="label"><?php Lang::_lang('PrvCategoria') ?></div>
        <div class="dato">
        
                <?php Html::html_dib_select(1, 'buscador_top_prv_proveedor_prv_categoria_id', Gral::getCmbFiltro(PrvCategoria::getPrvCategoriasCmb(), '...'), $criterio->getValorDeCampo('prv_proveedor.prv_categoria_id'), 'textbox')?>
            
                <div class="quitar-filtro" style="display: <?php echo ($criterio->getValorDeCampo('prv_proveedor.prv_categoria_id')) ? 'block' : 'none' ?>;" title="Quitar Filtro">
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
        <input id="txt_cantidad_paginas" name="txt_cantidad_paginas" type="text" class="textboxx" size="2" value="<?php echo PrvProveedor::getSesPagCantidad() ?>" title="<?php Lang::_lang('Actualmente se visualizan') ?> <?php echo PrvProveedor::getSesPagCantidad() ?> <?php Lang::_lang('PrvProveedor') ?> <?php Lang::_lang('por Pagina') ?>" />
    </div>
    
    <div class="col botonera">
        <input id="btn_buscar" name="btn_buscar" type="button" class="boton" value="<?php Lang::_lang("Buscar") ?>" />
    </div>

    <div class="col">
        <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_ALTA')){ ?>
        <a class="boton" href='prv_proveedor_alta.php' title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('PrvProveedor') ?>'><img src="imgs/btn_add.gif" width="25"></a>
        <?php } ?>

        <label class="boton ver_buscador" title="<?php Lang::_lang('Busqueda Avanzada') ?>" modulo='prv_proveedor'><img src="imgs/btn_lupa.png" width="25"></label>
        <label class="boton refresh-all" title="<?php Lang::_lang('Actualizar Listado') ?>"><img src="imgs/btn_refresh.png" width="22"></label>
    </div>

</form>

