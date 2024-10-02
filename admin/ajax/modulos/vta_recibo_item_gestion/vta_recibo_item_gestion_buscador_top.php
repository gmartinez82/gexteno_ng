<form id="form_buscador_top" name="form_buscador_top" method="post" action="ajax/modulos/vta_recibo_item_gestion/set_vta_recibo_item_gestion_buscador_top.php">
    <div class="col fecha-desde">
        <div class="label"><?php Lang::_lang('Desde') ?></div>
        <div class="dato">
            <input id="buscador_top_creado_desde" name="buscador_top_creado_desde" type="text" class="textbox date" size="10" title="<?php Lang::_lang('Ingrese la fecha DESDE') ?>" />
            <input type="button" id="cal_buscador_top_creado_desde" value=" ... ">
            <script type='text/javascript'>
                Calendar.setup({
                    inputField: 'buscador_top_creado_desde', ifFormat: '%d/%m/%Y', button: 'cal_buscador_top_creado_desde',onUpdate: function(){}
                });
            </script>
        </div>
    </div>

    <div class="col fecha-hasta">
        <div class="label"><?php Lang::_lang('Hasta') ?></div>
        <div class="dato">
            <input id="buscador_top_creado_hasta" name="buscador_top_creado_hasta" type="text" class="textbox date" size="10" title="<?php Lang::_lang('Ingrese la fecha HASTA') ?>" />
            <input type="button" id="cal_buscador_top_creado_hasta" value=" ... ">
            <script type='text/javascript'>
                Calendar.setup({
                    inputField: 'buscador_top_creado_hasta', ifFormat: '%d/%m/%Y', button: 'cal_buscador_top_creado_hasta',onUpdate: function(){}
                });
            </script>
        </div>
    </div>
    
    <div class="col vta_recibo_id">
        <div class="label"><?php Lang::_lang('VtaRecibo') ?></div>
        <div class="dato">
        
                <?php Html::html_dib_select(1, 'buscador_top_vta_recibo_item_vta_recibo_id', Gral::getCmbFiltro(VtaRecibo::getVtaRecibosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo_item.vta_recibo_id'), 'textbox')?>
        </div>
    </div>
    
    <div class="col gral_fp_forma_pago_id">
        <div class="label"><?php Lang::_lang('GralFormaPago') ?></div>
        <div class="dato">
        
                <?php Html::html_dib_select(1, 'buscador_top_vta_recibo_item_gral_fp_forma_pago_id', Gral::getCmbFiltro(GralFpFormaPago::getGralFpFormaPagosCmbRequiereConciliacion(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo_item.gral_fp_forma_pago_id'), 'textbox')?>
        </div>
    </div>
    
    <div class="col gral_tipo_iva_id">
        <div class="label"><?php Lang::_lang('GralTipoIva') ?></div>
        <div class="dato">
        
                <?php Html::html_dib_select(1, 'buscador_top_vta_recibo_item_gral_tipo_iva_id', Gral::getCmbFiltro(GralTipoIva::getGralTipoIvasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo_item.gral_tipo_iva_id'), 'textbox')?>
        </div>
    </div>
    
    <div class="col vta_recibo_concepto_id">
        <div class="label"><?php Lang::_lang('VtaReciboConcepto') ?></div>
        <div class="dato">
        
                <?php Html::html_dib_select(1, 'buscador_top_vta_recibo_item_vta_recibo_concepto_id', Gral::getCmbFiltro(VtaReciboConcepto::getVtaReciboConceptosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo_item.vta_recibo_concepto_id'), 'textbox')?>
        </div>
    </div>
    
    <div class="col conciliado">
        <div class="label"><?php Lang::_lang('Conciliado') ?></div>
        <div class="dato">
        
            <?php Html::html_dib_select(1, 'buscador_top_vta_recibo_item_conciliado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo_item.conciliado'), 'textbox') ?>
            
        </div>
    </div>
    
    <div class="col">
        <div class="label"><?php Lang::_lang('Busqueda rapida (2 letras min)') ?></div>
        <input id="txt_buscador" name="txt_buscador" type="text" class="textbox" size="30" placeholder="<?php Lang::_lang('Ingrese palabra a buscar') ?>" title="<?php Lang::_lang('Ingrese la palabra que desea buscar') ?>" />
        <img class="txt_buscador_boton" src="imgs/lupa.png" width="20">
    </div>

    <div class="col">
        <div class="label"><?php Lang::_lang('Cant por Pag') ?></div>
        <input id="txt_cantidad_paginas" name="txt_cantidad_paginas" type="text" class="textboxx" size="2" value="<?php echo VtaReciboItem::getSesPagCantidad() ?>" title="<?php Lang::_lang('Actualmente se visualizan') ?> <?php echo VtaReciboItem::getSesPagCantidad() ?> <?php Lang::_lang('VtaReciboItem') ?> <?php Lang::_lang('por Pagina') ?>" />
    </div>

    <div class="col">
        <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_ITEM_ALTA')){ ?>
        <a class="boton" href='vta_recibo_item_alta.php' title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('VtaReciboItem') ?>'><img src="imgs/btn_add.gif" width="25"></a>
        <?php } ?>

        <label class="boton ver_buscador" title="<?php Lang::_lang('Busqueda Avanzada') ?>" modulo='vta_recibo_item'><img src="imgs/btn_lupa.png" width="25"></label>
        <label class="boton refresh-all" title="<?php Lang::_lang('Actualizar Listado') ?>"><img src="imgs/btn_refresh.png" width="22"></label>
    </div>

</form>

