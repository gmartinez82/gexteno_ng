<form id="form_buscador_top" name="form_buscador_top" method="post" action="ajax/modulos/vta_vendedor/set_vta_vendedor_buscador_top.php">
    
    
    <div class="col gral_sucursal_id">
        <div class="label"><?php Lang::_lang('GralSucursal') ?></div>
        <div class="dato">
        
                <?php Html::html_dib_select(1, 'buscador_top_vta_vendedor_gral_sucursal_id', Gral::getCmbFiltro(GralSucursal::getGralSucursalsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_vendedor.gral_sucursal_id'), 'textbox')?>
        </div>
    </div>
    
    <div class="col vta_tipo_vendedor_id">
        <div class="label"><?php Lang::_lang('VtaTipoVendedor') ?></div>
        <div class="dato">
        
                <?php Html::html_dib_select(1, 'buscador_top_vta_vendedor_vta_tipo_vendedor_id', Gral::getCmbFiltro(VtaTipoVendedor::getVtaTipoVendedorsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_vendedor.vta_tipo_vendedor_id'), 'textbox')?>
        </div>
    </div>
    
    <div class="col">
        <div class="label"><?php Lang::_lang('Busqueda rapida (2 letras min)') ?></div>
        <input id="txt_buscador" name="txt_buscador" type="text" class="textbox" size="20" placeholder="<?php Lang::_lang('Ingrese palabra a buscar') ?>" title="<?php Lang::_lang('Ingrese la palabra que desea buscar') ?>" />
        <img class="txt_buscador_boton" src="imgs/lupa.png" width="20">
    </div>

    <div class="col">
        <div class="label"><?php Lang::_lang('Cant por Pag') ?></div>
        <input id="txt_cantidad_paginas" name="txt_cantidad_paginas" type="text" class="textboxx" size="2" value="<?php echo VtaVendedor::getSesPagCantidad() ?>" title="<?php Lang::_lang('Actualmente se visualizan') ?> <?php echo VtaVendedor::getSesPagCantidad() ?> <?php Lang::_lang('VtaVendedor') ?> <?php Lang::_lang('por Pagina') ?>" />
    </div>

    <div class="col">
        <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_ALTA')){ ?>
        <a class="boton" href='vta_vendedor_alta.php' title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('VtaVendedor') ?>'><img src="imgs/btn_add.gif" width="25"></a>
        <?php } ?>

        <label class="boton ver_buscador" title="<?php Lang::_lang('Busqueda Avanzada') ?>" modulo='vta_vendedor'><img src="imgs/btn_lupa.png" width="25"></label>
        <label class="boton refresh-all" title="<?php Lang::_lang('Actualizar Listado') ?>"><img src="imgs/btn_refresh.png" width="22"></label>
    </div>

</form>

