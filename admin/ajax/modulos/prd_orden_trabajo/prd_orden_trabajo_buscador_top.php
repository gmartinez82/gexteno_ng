<form id="form_buscador_top" name="form_buscador_top" method="post" action="ajax/modulos/prd_orden_trabajo/set_prd_orden_trabajo_buscador_top.php">
    
    
    <div class="col vta_presupuesto_id">
        <div class="label"><?php Lang::_lang('VtaPresupuesto') ?></div>
        <div class="dato">
        
                <?php Html::html_dib_select(1, 'buscador_top_prd_orden_trabajo_vta_presupuesto_id', Gral::getCmbFiltro(VtaPresupuesto::getVtaPresupuestosCmb(), '...'), $criterio->getValorDeCampo('prd_orden_trabajo.vta_presupuesto_id'), 'textbox')?>
            
                <div class="quitar-filtro" style="display: <?php echo ($criterio->getValorDeCampo('prd_orden_trabajo.vta_presupuesto_id')) ? 'block' : 'none' ?>;" title="Quitar Filtro">
                    <img src="imgs/btn_eliminar.png" width="7" /> Quitar
                </div>            
                
        </div>
    </div>
    
    <div class="col vta_presupuesto_ins_insumo_id">
        <div class="label"><?php Lang::_lang('VtaPresupuestoInsInsumo') ?></div>
        <div class="dato">
        
                <?php Html::html_dib_select(1, 'buscador_top_prd_orden_trabajo_vta_presupuesto_ins_insumo_id', Gral::getCmbFiltro(VtaPresupuestoInsInsumo::getVtaPresupuestoInsInsumosCmb(), '...'), $criterio->getValorDeCampo('prd_orden_trabajo.vta_presupuesto_ins_insumo_id'), 'textbox')?>
            
                <div class="quitar-filtro" style="display: <?php echo ($criterio->getValorDeCampo('prd_orden_trabajo.vta_presupuesto_ins_insumo_id')) ? 'block' : 'none' ?>;" title="Quitar Filtro">
                    <img src="imgs/btn_eliminar.png" width="7" /> Quitar
                </div>            
                
        </div>
    </div>
    
    <div class="col cli_cliente_id">
        <div class="label"><?php Lang::_lang('CliCliente') ?></div>
        <div class="dato">
        
                <?php Html::html_dib_select(1, 'buscador_top_prd_orden_trabajo_cli_cliente_id', Gral::getCmbFiltro(CliCliente::getCliClientesCmb(), '...'), $criterio->getValorDeCampo('prd_orden_trabajo.cli_cliente_id'), 'textbox')?>
            
                <div class="quitar-filtro" style="display: <?php echo ($criterio->getValorDeCampo('prd_orden_trabajo.cli_cliente_id')) ? 'block' : 'none' ?>;" title="Quitar Filtro">
                    <img src="imgs/btn_eliminar.png" width="7" /> Quitar
                </div>            
                
        </div>
    </div>
    
    <div class="col prd_tipo_origen_id">
        <div class="label"><?php Lang::_lang('PrdTipoOrigen') ?></div>
        <div class="dato">
        
                <?php Html::html_dib_select(1, 'buscador_top_prd_orden_trabajo_prd_tipo_origen_id', Gral::getCmbFiltro(PrdTipoOrigen::getPrdTipoOrigensCmb(), '...'), $criterio->getValorDeCampo('prd_orden_trabajo.prd_tipo_origen_id'), 'textbox')?>
            
                <div class="quitar-filtro" style="display: <?php echo ($criterio->getValorDeCampo('prd_orden_trabajo.prd_tipo_origen_id')) ? 'block' : 'none' ?>;" title="Quitar Filtro">
                    <img src="imgs/btn_eliminar.png" width="7" /> Quitar
                </div>            
                
        </div>
    </div>
    
    <div class="col prd_proceso_productivo_id">
        <div class="label"><?php Lang::_lang('PrdProcesoProductivo') ?></div>
        <div class="dato">
        
                <?php Html::html_dib_select(1, 'buscador_top_prd_orden_trabajo_prd_proceso_productivo_id', Gral::getCmbFiltro(PrdProcesoProductivo::getPrdProcesoProductivosCmb(), '...'), $criterio->getValorDeCampo('prd_orden_trabajo.prd_proceso_productivo_id'), 'textbox')?>
            
                <div class="quitar-filtro" style="display: <?php echo ($criterio->getValorDeCampo('prd_orden_trabajo.prd_proceso_productivo_id')) ? 'block' : 'none' ?>;" title="Quitar Filtro">
                    <img src="imgs/btn_eliminar.png" width="7" /> Quitar
                </div>            
                
        </div>
    </div>
    
    <div class="col prd_prioridad_id">
        <div class="label"><?php Lang::_lang('PrdPrioridad') ?></div>
        <div class="dato">
        
                <?php Html::html_dib_select(1, 'buscador_top_prd_orden_trabajo_prd_prioridad_id', Gral::getCmbFiltro(PrdPrioridad::getPrdPrioridadsCmb(), '...'), $criterio->getValorDeCampo('prd_orden_trabajo.prd_prioridad_id'), 'textbox')?>
            
                <div class="quitar-filtro" style="display: <?php echo ($criterio->getValorDeCampo('prd_orden_trabajo.prd_prioridad_id')) ? 'block' : 'none' ?>;" title="Quitar Filtro">
                    <img src="imgs/btn_eliminar.png" width="7" /> Quitar
                </div>            
                
        </div>
    </div>
    
    <div class="col ins_insumo_id">
        <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
        <div class="dato">
        
                <?php Html::html_dib_select(1, 'buscador_top_prd_orden_trabajo_ins_insumo_id', Gral::getCmbFiltro(InsInsumo::getInsInsumosCmb(), '...'), $criterio->getValorDeCampo('prd_orden_trabajo.ins_insumo_id'), 'textbox')?>
            
                <div class="quitar-filtro" style="display: <?php echo ($criterio->getValorDeCampo('prd_orden_trabajo.ins_insumo_id')) ? 'block' : 'none' ?>;" title="Quitar Filtro">
                    <img src="imgs/btn_eliminar.png" width="7" /> Quitar
                </div>            
                
        </div>
    </div>
    
    <div class="col prd_orden_trabajo_tipo_estado_id">
        <div class="label"><?php Lang::_lang('PrdOrdenTrabajoTipoEstado') ?></div>
        <div class="dato">
        
                <?php Html::html_dib_select(1, 'buscador_top_prd_orden_trabajo_prd_orden_trabajo_tipo_estado_id', Gral::getCmbFiltro(PrdOrdenTrabajoTipoEstado::getPrdOrdenTrabajoTipoEstadosCmb(), '...'), $criterio->getValorDeCampo('prd_orden_trabajo.prd_orden_trabajo_tipo_estado_id'), 'textbox')?>
            
                <div class="quitar-filtro" style="display: <?php echo ($criterio->getValorDeCampo('prd_orden_trabajo.prd_orden_trabajo_tipo_estado_id')) ? 'block' : 'none' ?>;" title="Quitar Filtro">
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
        <input id="txt_cantidad_paginas" name="txt_cantidad_paginas" type="text" class="textboxx" size="2" value="<?php echo PrdOrdenTrabajo::getSesPagCantidad() ?>" title="<?php Lang::_lang('Actualmente se visualizan') ?> <?php echo PrdOrdenTrabajo::getSesPagCantidad() ?> <?php Lang::_lang('PrdOrdenTrabajo') ?> <?php Lang::_lang('por Pagina') ?>" />
    </div>
    
    <div class="col botonera">
        <input id="btn_buscar" name="btn_buscar" type="button" class="boton" value="<?php Lang::_lang("Buscar") ?>" />
    </div>

    <div class="col">
        <?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_ALTA')){ ?>
        <a class="boton" href='prd_orden_trabajo_alta.php' title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('PrdOrdenTrabajo') ?>'><img src="imgs/btn_add.gif" width="25"></a>
        <?php } ?>

        <label class="boton ver_buscador" title="<?php Lang::_lang('Busqueda Avanzada') ?>" modulo='prd_orden_trabajo'><img src="imgs/btn_lupa.png" width="25"></label>
        <label class="boton refresh-all" title="<?php Lang::_lang('Actualizar Listado') ?>"><img src="imgs/btn_refresh.png" width="22"></label>
    </div>

</form>

