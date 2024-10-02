<form id="form_buscador_top" name="form_buscador_top" method="post" action="ajax/modulos/cli_cliente_gestion/set_cli_cliente_gestion_buscador_top.php">


    <div class="col id">
        <div class="label"><?php Lang::_lang('ID') ?></div>
        <div class="dato">

            <input id="buscador_top_cli_cliente_id" name="buscador_top_cli_cliente_id" type="text" class="textbox" size="4" />

        </div>
    </div>

    <div class="col provincia">
        <div class="label"><?php Lang::_lang('Provincia') ?></div>
        <div class="dato">        
            <?php Html::html_dib_select(1, 'buscador_top_cli_cliente_provincia_id', Gral::getCmbFiltro(GeoProvincia::getGeoProvinciasFullCmb(true), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente.geo_provincia_id'), 'textbox selective-input-filtro') ?>
        </div>
    </div>

    <div class="col localidad">
        <div class="label"><?php Lang::_lang('Localidad') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'buscador_top_cli_cliente_localidad_id', Gral::getCmbFiltro(GeoLocalidad::getGeoLocalidadsFullCmb(true), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente.geo_localidad_id'), 'textbox selective-input-filtro') ?>
        </div>
    </div>

    <div class="col cli_grupo_id">
        <div class="label"><?php Lang::_lang('CliGrupo') ?></div>
        <div class="dato">

            <?php Html::html_dib_select(1, 'buscador_top_cli_cliente_cli_grupo_id', Gral::getCmbFiltro(CliGrupo::getCliGruposCmb(true), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente.cli_grupo_id'), 'textbox') ?>
        </div>
    </div>


    <div class="col cli_categoria_id">
        <div class="label"><?php Lang::_lang('CliCategoria') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'buscador_top_cli_cliente_cli_categoria_id', Gral::getCmbFiltro(CliCategoria::getCliCategoriasCmb(true), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente.cli_categoria_id'), 'textbox') ?>
        </div>
    </div>

    <div class="col habilitado">
        <div class="label"><?php Lang::_lang('Habilitado') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'buscador_top_cli_cliente_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(true), '...'), $buscador_top_cli_cliente_estado, 'textbox') ?>
        </div>
    </div>

    
    <div class="col">
        <div class="label"><?php Lang::_lang('Busqueda rapida (2 letras min)') ?></div>
        <input id="txt_buscador" name="txt_buscador" type="text" class="textbox" size="30" placeholder="<?php Lang::_lang('Ingrese palabra a buscar') ?>" title="<?php Lang::_lang('Ingrese la palabra que desea buscar') ?>" />
        <img class="txt_buscador_boton" src="imgs/lupa.png" width="20">
    </div>

    <div class="col">
        <div class="label"><?php Lang::_lang('Cant por Pag') ?></div>
        <input id="txt_cantidad_paginas" name="txt_cantidad_paginas" type="text" class="textboxx" size="2" value="<?php echo CliCliente::getSesPagCantidad() ?>" title="<?php Lang::_lang('Actualmente se visualizan') ?> <?php echo CliCliente::getSesPagCantidad() ?> <?php Lang::_lang('CliCliente') ?> <?php Lang::_lang('por Pagina') ?>" />
    </div>

    <div class="col">
        
        <?php if (UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA')) { ?>
            <a class="boton" href='cli_cliente_alta.php' title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('CliCliente') ?>'><img src="imgs/btn_add.gif" width="25"></a>
        <?php } ?>
    </div>

    <div class="clear-fix"></div>

    <div>
        
        <div class="col cli-cliente-tipo-estado-venta">
            <div class="label"><?php Lang::_lang('Estado Venta') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'buscador_top_cli_cliente_tipo_estado_venta_id', Gral::getCmbFiltro(CliClienteTipoEstadoVenta::getCliClienteTipoEstadoVentasCmb(true), '...'), $buscador_top_cli_cliente_tipo_estado_venta_id, 'textbox') ?>
            </div>
        </div>    

        <div class="col cli-cliente-tipo-gestion">
            <div class="label"><?php Lang::_lang('Tipo Gestion') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'buscador_top_cli_cliente_tipo_gestion_id', Gral::getCmbFiltro(CliClienteTipoGestion::getCliClienteTipoGestionsCmb(true), '...'), $buscador_top_cli_cliente_tipo_gestion_id, 'textbox') ?>
            </div>
        </div>    

        <div class="col cli-cliente-periodicidad-gestion">
            <div class="label"><?php Lang::_lang('Periodicidad') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'buscador_top_cli_cliente_periodicidad_gestion_id', Gral::getCmbFiltro(CliClientePeriodicidadGestion::getCliClientePeriodicidadGestionsCmb(true), '...'), $buscador_top_cli_cliente_periodicidad_gestion_id, 'textbox') ?>
            </div>
        </div> 

        <?php if(false){ ?>
        <div class="col tienda">
            <div class="label"><?php Lang::_lang('Tienda') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'buscador_top_cli_cliente_tienda', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(true), '...'), $buscador_top_cli_cliente_tienda, 'textbox') ?>
            </div>
        </div>    
        <?php } ?>

        <div class="col vendedor">
            <div class="label"><?php Lang::_lang('Vendedor') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'buscador_top_cli_cliente_vendedor_id', Gral::getCmbFiltro(VtaVendedor::getVtaVendedorsCmb(true), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente.vta_vendedor_id'), 'textbox') ?>
            </div>
        </div>

        <div class="col vendedor">
            <div class="label"><?php Lang::_lang('Sucursal') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'buscador_top_cli_cliente_gral_sucursal_id', Gral::getCmbFiltro(GralSucursal::getGralSucursalsCmb(true), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente.gral_sucursal_id'), 'textbox') ?>
            </div>
        </div>

        <?php if(false){ ?>
        <div class="col gral_tipo_personeria_id">
            <div class="label"><?php Lang::_lang('GralTipoPersoneria') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'buscador_top_cli_cliente_gral_tipo_personeria_id', Gral::getCmbFiltro(GralTipoPersoneria::getGralTipoPersoneriasCmb(true), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente.gral_tipo_personeria_id'), 'textbox') ?>
            </div>
        </div>
        <?php } ?>

        <div class="col gral_tipo_personeria_id">
            <div class="label"><?php Lang::_lang('CliTipoCliente') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'buscador_top_cli_cliente_cli_tipo_cliente_id', Gral::getCmbFiltro(CliTipoCliente::getCliTipoClientesCmb(true), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente.cli_tipo_cliente_id'), 'textbox') ?>
            </div>
        </div>
        
        <div class="col gral_condicion_iva_id">
            <div class="label"><?php Lang::_lang('GralCondicionIva') ?></div>
            <div class="dato">

                <?php Html::html_dib_select(1, 'buscador_top_cli_cliente_gral_condicion_iva_id', Gral::getCmbFiltro(GralCondicionIva::getGralCondicionIvasCmb(true), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente.gral_condicion_iva_id'), 'textbox') ?>
            </div>
        </div>

        <div class="col gral_tipo_documento_id">
            <div class="label"><?php Lang::_lang('GralTipoDocumento') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'buscador_top_cli_cliente_gral_tipo_documento_id', Gral::getCmbFiltro(GralTipoDocumento::getGralTipoDocumentosCmb(true), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente.gral_tipo_documento_id'), 'textbox') ?>
            </div>
        </div>
        
        <?php if(false){ ?>
        <div class="col ruc-valido">
            <div class="label"><?php Lang::_lang('RUC Valido') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'buscador_top_cli_cliente_ruc_valido', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(true), '...'), $buscador_top_cli_cliente_ruc_valido, 'textbox') ?>
            </div>
        </div>
        <?php } ?>
        
        <?php if(true){ ?>
        <div class="col ruc-valido">
            <div class="label"><?php Lang::_lang('Tiene Info SIFEN') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'buscador_top_cli_cliente_tiene_info_sifen', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(true), '...'), $buscador_top_cli_cliente_tiene_info_sifen, 'textbox') ?>
            </div>
        </div>
        <div class="col ruc-valido">
            <div class="label"><?php Lang::_lang('Estado SIFEN') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'buscador_top_cli_cliente_tipo_estado_sifen', Gral::getCmbFiltro(CliClienteInfoSifen::getTipoEstadosCmb(true), '...'), $buscador_top_cli_cliente_tipo_estado_sifen, 'textbox') ?>
            </div>
        </div>
        <?php } ?>
        
    </div>
    
</form>

