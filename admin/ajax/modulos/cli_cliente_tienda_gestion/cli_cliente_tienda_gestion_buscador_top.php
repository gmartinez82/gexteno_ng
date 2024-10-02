<form id="form_buscador_top" name="form_buscador_top" method="post" action="ajax/modulos/cli_cliente_tienda_gestion/set_cli_cliente_tienda_gestion_buscador_top.php">
    
    <div class="col provincia">
        <div class="label"><?php Lang::_lang('Provincia') ?></div>
        <div class="dato">        
            <?php Html::html_dib_select(1, 'buscador_top_cli_cliente_tienda_provincia_id', Gral::getCmbFiltro(GeoProvincia::getGeoProvinciasFullCmb(true), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente_tienda.geo_provincia_id'), 'textbox selective-input-filtro') ?>
        </div>
    </div>

    <div class="col localidad">
        <div class="label"><?php Lang::_lang('Localidad') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'buscador_top_cli_cliente_tienda_localidad_id', Gral::getCmbFiltro(GeoLocalidad::getGeoLocalidadsFullCmb(true), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente_tienda.geo_localidad_id'), 'textbox selective-input-filtro') ?>
        </div>
    </div>

    
    <div class="col cli_categoria_id">
        <div class="label"><?php Lang::_lang('Categoria') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'buscador_top_cli_cliente_tienda_cli_categoria_id', Gral::getCmbFiltro(CliCategoria::getCliCategoriasCmb(true), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente_tienda.cli_categoria_id'), 'textbox') ?>
        </div>
    </div>

    <div class="col habilitado">
        <div class="label"><?php Lang::_lang('Habilitado') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'buscador_top_cli_cliente_tienda_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(true), '...'), $buscador_top_cli_cliente_tienda_estado, 'textbox') ?>
        </div>
    </div>

    <div class="col habilitado">
        <div class="label"><?php Lang::_lang('Verificar') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'buscador_top_cli_cliente_tienda_verificar', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(true), '...'), $buscador_top_cli_cliente_tienda_verificar, 'textbox') ?>
        </div>
    </div>

    <div class="col gral_tipo_personeria_id">
        <div class="label"><?php Lang::_lang('Personeria') ?></div>
        <div class="dato">
        
                <?php Html::html_dib_select(1, 'buscador_top_cli_cliente_tienda_gral_tipo_personeria_id', Gral::getCmbFiltro(GralTipoPersoneria::getGralTipoPersoneriasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente_tienda.gral_tipo_personeria_id'), 'textbox')?>
        </div>
    </div>
    
    <div class="col gral_condicion_iva_id">
        <div class="label"><?php Lang::_lang('Condicion Iva') ?></div>
        <div class="dato">
        
                <?php Html::html_dib_select(1, 'buscador_top_cli_cliente_tienda_gral_condicion_iva_id', Gral::getCmbFiltro(GralCondicionIva::getGralCondicionIvasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente_tienda.gral_condicion_iva_id'), 'textbox')?>
        </div>
    </div>
    
    <div class="col">
        <div class="label"><?php Lang::_lang('Busqueda rapida (2 letras min)') ?></div>
        <input id="txt_buscador" name="txt_buscador" type="text" class="textbox" size="20" placeholder="<?php Lang::_lang('Ingrese palabra a buscar') ?>" title="<?php Lang::_lang('Ingrese la palabra que desea buscar') ?>" />
        <img class="txt_buscador_boton" src="imgs/lupa.png" width="20">
    </div>

    <div class="col">
        <div class="label"><?php Lang::_lang('Cant por Pag') ?></div>
        <input id="txt_cantidad_paginas" name="txt_cantidad_paginas" type="text" class="textboxx" size="2" value="<?php echo CliClienteTienda::getSesPagCantidad() ?>" title="<?php Lang::_lang('Actualmente se visualizan') ?> <?php echo CliClienteTienda::getSesPagCantidad() ?> <?php Lang::_lang('CliClienteTienda') ?> <?php Lang::_lang('por Pagina') ?>" />
    </div>

    <div class="col">
        <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_TIENDA_ALTA')){ ?>
        <a class="boton" href='cli_cliente_tienda_alta.php' title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('CliClienteTienda') ?>'><img src="imgs/btn_add.gif" width="25"></a>
        <?php } ?>

        <label class="boton ver_buscador" title="<?php Lang::_lang('Busqueda Avanzada') ?>" modulo='cli_cliente_tienda'><img src="imgs/btn_lupa.png" width="25"></label>
        <label class="boton refresh-all" title="<?php Lang::_lang('Actualizar Listado') ?>"><img src="imgs/btn_refresh.png" width="22"></label>
    </div>

</form>

