<form id="form_buscador_top" name="form_buscador_top" method="post" action="ajax/modulos/cli_cliente/set_cli_cliente_buscador_top.php">
    
    
    <div class="col id">
        <div class="label"><?php Lang::_lang('ID') ?></div>
        <div class="dato">
        
                <input id="buscador_top_cli_cliente_id" name="buscador_top_cli_cliente_id" type="text" class="textbox" size="4" />
            
        </div>
    </div>
    
    <div class="col gral_tipo_personeria_id">
        <div class="label"><?php Lang::_lang('GralTipoPersoneria') ?></div>
        <div class="dato">
        
                <?php Html::html_dib_select(1, 'buscador_top_cli_cliente_gral_tipo_personeria_id', Gral::getCmbFiltro(GralTipoPersoneria::getGralTipoPersoneriasCmb(), '...'), $criterio->getValorDeCampo('cli_cliente.gral_tipo_personeria_id'), 'textbox')?>
            
                <div class="quitar-filtro" style="display: <?php echo ($criterio->getValorDeCampo('cli_cliente.gral_tipo_personeria_id')) ? 'block' : 'none' ?>;" title="Quitar Filtro">
                    <img src="imgs/btn_eliminar.png" width="7" /> Quitar
                </div>            
                
        </div>
    </div>
    
    <div class="col gral_condicion_iva_id">
        <div class="label"><?php Lang::_lang('GralCondicionIva') ?></div>
        <div class="dato">
        
                <?php Html::html_dib_select(1, 'buscador_top_cli_cliente_gral_condicion_iva_id', Gral::getCmbFiltro(GralCondicionIva::getGralCondicionIvasCmb(), '...'), $criterio->getValorDeCampo('cli_cliente.gral_condicion_iva_id'), 'textbox')?>
            
                <div class="quitar-filtro" style="display: <?php echo ($criterio->getValorDeCampo('cli_cliente.gral_condicion_iva_id')) ? 'block' : 'none' ?>;" title="Quitar Filtro">
                    <img src="imgs/btn_eliminar.png" width="7" /> Quitar
                </div>            
                
        </div>
    </div>
    
    <div class="col cli_tipo_cliente_id">
        <div class="label"><?php Lang::_lang('CliTipoCliente') ?></div>
        <div class="dato">
        
                <?php Html::html_dib_select(1, 'buscador_top_cli_cliente_cli_tipo_cliente_id', Gral::getCmbFiltro(CliTipoCliente::getCliTipoClientesCmb(), '...'), $criterio->getValorDeCampo('cli_cliente.cli_tipo_cliente_id'), 'textbox')?>
            
                <div class="quitar-filtro" style="display: <?php echo ($criterio->getValorDeCampo('cli_cliente.cli_tipo_cliente_id')) ? 'block' : 'none' ?>;" title="Quitar Filtro">
                    <img src="imgs/btn_eliminar.png" width="7" /> Quitar
                </div>            
                
        </div>
    </div>
    
    <div class="col gral_tipo_documento_id">
        <div class="label"><?php Lang::_lang('GralTipoDocumento') ?></div>
        <div class="dato">
        
                <?php Html::html_dib_select(1, 'buscador_top_cli_cliente_gral_tipo_documento_id', Gral::getCmbFiltro(GralTipoDocumento::getGralTipoDocumentosCmb(), '...'), $criterio->getValorDeCampo('cli_cliente.gral_tipo_documento_id'), 'textbox')?>
            
                <div class="quitar-filtro" style="display: <?php echo ($criterio->getValorDeCampo('cli_cliente.gral_tipo_documento_id')) ? 'block' : 'none' ?>;" title="Quitar Filtro">
                    <img src="imgs/btn_eliminar.png" width="7" /> Quitar
                </div>            
                
        </div>
    </div>
    
    <div class="col cli_grupo_id">
        <div class="label"><?php Lang::_lang('CliGrupo') ?></div>
        <div class="dato">
        
                <?php Html::html_dib_select(1, 'buscador_top_cli_cliente_cli_grupo_id', Gral::getCmbFiltro(CliGrupo::getCliGruposCmb(), '...'), $criterio->getValorDeCampo('cli_cliente.cli_grupo_id'), 'textbox')?>
            
                <div class="quitar-filtro" style="display: <?php echo ($criterio->getValorDeCampo('cli_cliente.cli_grupo_id')) ? 'block' : 'none' ?>;" title="Quitar Filtro">
                    <img src="imgs/btn_eliminar.png" width="7" /> Quitar
                </div>            
                
        </div>
    </div>
    
    <div class="col cli_categoria_id">
        <div class="label"><?php Lang::_lang('CliCategoria') ?></div>
        <div class="dato">
        
                <?php Html::html_dib_select(1, 'buscador_top_cli_cliente_cli_categoria_id', Gral::getCmbFiltro(CliCategoria::getCliCategoriasCmb(), '...'), $criterio->getValorDeCampo('cli_cliente.cli_categoria_id'), 'textbox')?>
            
                <div class="quitar-filtro" style="display: <?php echo ($criterio->getValorDeCampo('cli_cliente.cli_categoria_id')) ? 'block' : 'none' ?>;" title="Quitar Filtro">
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
        <input id="txt_cantidad_paginas" name="txt_cantidad_paginas" type="text" class="textboxx" size="2" value="<?php echo CliCliente::getSesPagCantidad() ?>" title="<?php Lang::_lang('Actualmente se visualizan') ?> <?php echo CliCliente::getSesPagCantidad() ?> <?php Lang::_lang('CliCliente') ?> <?php Lang::_lang('por Pagina') ?>" />
    </div>
    
    <div class="col botonera">
        <input id="btn_buscar" name="btn_buscar" type="button" class="boton" value="<?php Lang::_lang("Buscar") ?>" />
    </div>

    <div class="col">
        <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA')){ ?>
        <a class="boton" href='cli_cliente_alta.php' title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('CliCliente') ?>'><img src="imgs/btn_add.gif" width="25"></a>
        <?php } ?>

        <label class="boton ver_buscador" title="<?php Lang::_lang('Busqueda Avanzada') ?>" modulo='cli_cliente'><img src="imgs/btn_lupa.png" width="25"></label>
        <label class="boton refresh-all" title="<?php Lang::_lang('Actualizar Listado') ?>"><img src="imgs/btn_refresh.png" width="22"></label>
    </div>

</form>

