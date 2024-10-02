<form id="form_buscador_top" name="form_buscador_top" method="post" action="ajax/modulos/prd_linea_produccion_prd_param_operacion_prd_equipo/set_prd_linea_produccion_prd_param_operacion_prd_equipo_buscador_top.php">
    
    
    <div class="col prd_linea_produccion_id">
        <div class="label"><?php Lang::_lang('PrdLineaProduccion') ?></div>
        <div class="dato">
        
                <?php Html::html_dib_select(1, 'buscador_top_prd_linea_produccion_prd_param_operacion_prd_equipo_prd_linea_produccion_id', Gral::getCmbFiltro(PrdLineaProduccion::getPrdLineaProduccionsCmb(), '...'), $criterio->getValorDeCampo('prd_linea_produccion_prd_param_operacion_prd_equipo.prd_linea_produccion_id'), 'textbox')?>
            
                <div class="quitar-filtro" style="display: <?php echo ($criterio->getValorDeCampo('prd_linea_produccion_prd_param_operacion_prd_equipo.prd_linea_produccion_id')) ? 'block' : 'none' ?>;" title="Quitar Filtro">
                    <img src="imgs/btn_eliminar.png" width="7" /> Quitar
                </div>            
                
        </div>
    </div>
    
    <div class="col prd_param_operacion_id">
        <div class="label"><?php Lang::_lang('PrdParamOperacion') ?></div>
        <div class="dato">
        
                <?php Html::html_dib_select(1, 'buscador_top_prd_linea_produccion_prd_param_operacion_prd_equipo_prd_param_operacion_id', Gral::getCmbFiltro(PrdParamOperacion::getPrdParamOperacionsCmb(), '...'), $criterio->getValorDeCampo('prd_linea_produccion_prd_param_operacion_prd_equipo.prd_param_operacion_id'), 'textbox')?>
            
                <div class="quitar-filtro" style="display: <?php echo ($criterio->getValorDeCampo('prd_linea_produccion_prd_param_operacion_prd_equipo.prd_param_operacion_id')) ? 'block' : 'none' ?>;" title="Quitar Filtro">
                    <img src="imgs/btn_eliminar.png" width="7" /> Quitar
                </div>            
                
        </div>
    </div>
    
    <div class="col prd_equipo_id">
        <div class="label"><?php Lang::_lang('PrdEquipo') ?></div>
        <div class="dato">
        
                <?php Html::html_dib_select(1, 'buscador_top_prd_linea_produccion_prd_param_operacion_prd_equipo_prd_equipo_id', Gral::getCmbFiltro(PrdEquipo::getPrdEquiposCmb(), '...'), $criterio->getValorDeCampo('prd_linea_produccion_prd_param_operacion_prd_equipo.prd_equipo_id'), 'textbox')?>
            
                <div class="quitar-filtro" style="display: <?php echo ($criterio->getValorDeCampo('prd_linea_produccion_prd_param_operacion_prd_equipo.prd_equipo_id')) ? 'block' : 'none' ?>;" title="Quitar Filtro">
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
        <input id="txt_cantidad_paginas" name="txt_cantidad_paginas" type="text" class="textboxx" size="2" value="<?php echo PrdLineaProduccionPrdParamOperacionPrdEquipo::getSesPagCantidad() ?>" title="<?php Lang::_lang('Actualmente se visualizan') ?> <?php echo PrdLineaProduccionPrdParamOperacionPrdEquipo::getSesPagCantidad() ?> <?php Lang::_lang('PrdLineaProduccionPrdParamOperacionPrdEquipo') ?> <?php Lang::_lang('por Pagina') ?>" />
    </div>
    
    <div class="col botonera">
        <input id="btn_buscar" name="btn_buscar" type="button" class="boton" value="<?php Lang::_lang("Buscar") ?>" />
    </div>

    <div class="col">
        <?php if(UsCredencial::getEsAcreditado('PRD_LINEA_PRODUCCION_PRD_PARAM_OPERACION_PRD_EQUIPO_ALTA')){ ?>
        <a class="boton" href='prd_linea_produccion_prd_param_operacion_prd_equipo_alta.php' title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('PrdLineaProduccionPrdParamOperacionPrdEquipo') ?>'><img src="imgs/btn_add.gif" width="25"></a>
        <?php } ?>

        <label class="boton ver_buscador" title="<?php Lang::_lang('Busqueda Avanzada') ?>" modulo='prd_linea_produccion_prd_param_operacion_prd_equipo'><img src="imgs/btn_lupa.png" width="25"></label>
        <label class="boton refresh-all" title="<?php Lang::_lang('Actualizar Listado') ?>"><img src="imgs/btn_refresh.png" width="22"></label>
    </div>

</form>

