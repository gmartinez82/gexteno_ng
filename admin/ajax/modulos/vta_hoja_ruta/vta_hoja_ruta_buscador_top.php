<form id="form_buscador_top" name="form_buscador_top" method="post" action="ajax/modulos/vta_hoja_ruta/set_vta_hoja_ruta_buscador_top.php">
    
    
    <div class="col gral_ruta_id">
        <div class="label"><?php Lang::_lang('GralRuta') ?></div>
        <div class="dato">
        
                <?php Html::html_dib_select(1, 'buscador_top_vta_hoja_ruta_gral_ruta_id', Gral::getCmbFiltro(GralRuta::getGralRutasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_hoja_ruta.gral_ruta_id'), 'textbox')?>
        </div>
    </div>
    
    <div class="col ope_chofer_id">
        <div class="label"><?php Lang::_lang('OpeChofer') ?></div>
        <div class="dato">
        
                <?php Html::html_dib_select(1, 'buscador_top_vta_hoja_ruta_ope_chofer_id', Gral::getCmbFiltro(OpeChofer::getOpeChofersCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_hoja_ruta.ope_chofer_id'), 'textbox')?>
        </div>
    </div>
    
    <div class="col vta_hoja_ruta_tipo_estado_id">
        <div class="label"><?php Lang::_lang('VtaHojaRutaTipoEstado') ?></div>
        <div class="dato">
        
                <?php Html::html_dib_select(1, 'buscador_top_vta_hoja_ruta_vta_hoja_ruta_tipo_estado_id', Gral::getCmbFiltro(VtaHojaRutaTipoEstado::getVtaHojaRutaTipoEstadosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_hoja_ruta.vta_hoja_ruta_tipo_estado_id'), 'textbox')?>
        </div>
    </div>
    
    <div class="col">
        <div class="label"><?php Lang::_lang('Busqueda rapida (2 letras min)') ?></div>
        <input id="txt_buscador" name="txt_buscador" type="text" class="textbox" size="30" placeholder="<?php Lang::_lang('Ingrese palabra a buscar') ?>" title="<?php Lang::_lang('Ingrese la palabra que desea buscar') ?>" />
        <img class="txt_buscador_boton" src="imgs/lupa.png" width="20">
    </div>

    <div class="col">
        <div class="label"><?php Lang::_lang('Cant por Pag') ?></div>
        <input id="txt_cantidad_paginas" name="txt_cantidad_paginas" type="text" class="textboxx" size="2" value="<?php echo VtaHojaRuta::getSesPagCantidad() ?>" title="<?php Lang::_lang('Actualmente se visualizan') ?> <?php echo VtaHojaRuta::getSesPagCantidad() ?> <?php Lang::_lang('VtaHojaRuta') ?> <?php Lang::_lang('por Pagina') ?>" />
    </div>

    <div class="col">
        <?php if(UsCredencial::getEsAcreditado('VTA_HOJA_RUTA_ALTA')){ ?>
        <a class="boton" href='vta_hoja_ruta_alta.php' title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('VtaHojaRuta') ?>'><img src="imgs/btn_add.gif" width="25"></a>
        <?php } ?>

        <label class="boton ver_buscador" title="<?php Lang::_lang('Busqueda Avanzada') ?>" modulo='vta_hoja_ruta'><img src="imgs/btn_lupa.png" width="25"></label>
        <label class="boton refresh-all" title="<?php Lang::_lang('Actualizar Listado') ?>"><img src="imgs/btn_refresh.png" width="22"></label>
    </div>

</form>

