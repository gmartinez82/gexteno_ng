<form id="form_buscador_top" name="form_buscador_top" method="post" action="ajax/modulos/vta_vendedor_valoracion_agrupacion/set_vta_vendedor_valoracion_agrupacion_buscador_top.php">
    
    
    <div class="col vta_vendedor_id">
        <div class="label"><?php Lang::_lang('VtaVendedor') ?></div>
        <div class="dato">
        
                <?php Html::html_dib_select(1, 'buscador_top_vta_vendedor_valoracion_agrupacion_vta_vendedor_id', Gral::getCmbFiltro(VtaVendedor::getVtaVendedorsCmb(), '...'), $criterio->getValorDeCampo('vta_vendedor_valoracion_agrupacion.vta_vendedor_id'), 'textbox')?>
            
                <div class="quitar-filtro" style="display: <?php echo ($criterio->getValorDeCampo('vta_vendedor_valoracion_agrupacion.vta_vendedor_id')) ? 'block' : 'none' ?>;" title="Quitar Filtro">
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
        <input id="txt_cantidad_paginas" name="txt_cantidad_paginas" type="text" class="textboxx" size="2" value="<?php echo VtaVendedorValoracionAgrupacion::getSesPagCantidad() ?>" title="<?php Lang::_lang('Actualmente se visualizan') ?> <?php echo VtaVendedorValoracionAgrupacion::getSesPagCantidad() ?> <?php Lang::_lang('VtaVendedorValoracionAgrupacion') ?> <?php Lang::_lang('por Pagina') ?>" />
    </div>
    
    <div class="col botonera">
        <input id="btn_buscar" name="btn_buscar" type="button" class="boton" value="<?php Lang::_lang("Buscar") ?>" />
    </div>

    <div class="col">
        <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_VALORACION_AGRUPACION_ALTA')){ ?>
        <a class="boton" href='vta_vendedor_valoracion_agrupacion_alta.php' title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('VtaVendedorValoracionAgrupacion') ?>'><img src="imgs/btn_add.gif" width="25"></a>
        <?php } ?>

        <label class="boton ver_buscador" title="<?php Lang::_lang('Busqueda Avanzada') ?>" modulo='vta_vendedor_valoracion_agrupacion'><img src="imgs/btn_lupa.png" width="25"></label>
        <label class="boton refresh-all" title="<?php Lang::_lang('Actualizar Listado') ?>"><img src="imgs/btn_refresh.png" width="22"></label>
    </div>

</form>

