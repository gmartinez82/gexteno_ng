<form id="form_buscador_top" name="form_buscador_top" method="post" action="ajax/modulos/vta_hoja_ruta_gestion/set_vta_hoja_ruta_gestion_buscador_top.php">
    
    <div class="col fecha-desde">
        <div class="label"><?php Lang::_lang('Desde') ?></div>
        <div class="dato">
            <input id="txt_filtro_desde" name="txt_filtro_desde" type="text" class="textbox date" size="7" title="<?php Lang::_lang('Ingrese la fecha DESDE') ?>" />
            <input type="button" id="cal_txt_filtro_desde" value=" ... ">
            <script type='text/javascript'>
                Calendar.setup({
                    inputField: 'txt_filtro_desde', ifFormat: '%d/%m/%Y', button: 'cal_txt_filtro_desde', onUpdate: function () {
                        //setAdmBuscadorTop('vta_remito_gestion')
                    }
                });
            </script>
        </div>
    </div>

    <div class="col fecha-hasta">
        <div class="label"><?php Lang::_lang('Hasta') ?></div>
        <div class="dato">
            <input id="txt_filtro_hasta" name="txt_filtro_hasta" type="text" class="textbox date" size="7" title="<?php Lang::_lang('Ingrese la fecha HASTA') ?>" />
            <input type="button" id="cal_txt_filtro_hasta" value=" ... ">
            <script type='text/javascript'>
                Calendar.setup({
                    inputField: 'txt_filtro_hasta', ifFormat: '%d/%m/%Y', button: 'cal_txt_filtro_hasta', onUpdate: function () {
                        //setAdmBuscadorTop('vta_remito_gestion')
                    }
                });
            </script>
        </div>
    </div>

    <div class="col gral_ruta_id">
        <div class="label"><?php Lang::_lang('Gral Ruta') ?></div>
        <div class="dato">
        
                <?php Html::html_dib_select(1, 'buscador_top_vta_hoja_ruta_gral_ruta_id', Gral::getCmbFiltro(GralRuta::getGralRutasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_hoja_ruta.gral_ruta_id'), 'textbox')?>
        </div>
    </div>
    
    <div class="col ope_chofer_id">
        <div class="label"><?php Lang::_lang('Chofer') ?></div>
        <div class="dato">
        
                <?php Html::html_dib_select(1, 'buscador_top_vta_hoja_ruta_ope_chofer_id', Gral::getCmbFiltro(OpeChofer::getOpeChofersCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_hoja_ruta.ope_chofer_id'), 'textbox')?>
        </div>
    </div>
    
    <div class="col vta_hoja_ruta_tipo_estado_id">
        <div class="label"><?php Lang::_lang('Ruta Tipo Estado') ?></div>
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
        <img src='imgs/btn_add.gif' width='25' title="Inicializar Hoja de Ruta" class='gen-modal-open' gen-modal-file="ajax/modulos/vta_hoja_ruta_gestion/modal_hoja_ruta.php" gen-modal-content=".div_modal" gen-modal-width="70%" gen-modal-height="600" gen-modal-titulo="Inicializar hoja de ruta" gen-modal-callback="setInit()"/>
        <?php } ?>

        <label class="boton refresh-all" title="<?php Lang::_lang('Actualizar Listado') ?>"><img src="imgs/btn_refresh.png" width="22"></label>
    </div>

</form>