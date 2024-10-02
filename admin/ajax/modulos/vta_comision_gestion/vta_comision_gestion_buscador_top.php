<form id="form_buscador_top" name="form_buscador_top" method="post" action="ajax/modulos/vta_comision_gestion/set_vta_comision_gestion_buscador_top.php">

    <div class="col fecha-desde">
        <div class="label"><?php Lang::_lang('Desde') ?></div>
        <div class="dato">
            <input id="txt_filtro_desde" name="txt_filtro_desde" type="text" class="textbox date" size="4" title="<?php Lang::_lang('Ingrese la fecha DESDE') ?>" />
            <input type="button" id="cal_txt_filtro_desde" value=" ... ">
            <script type='text/javascript'>
                Calendar.setup({
                    inputField: 'txt_filtro_desde', ifFormat: '%d/%m/%Y', button: 'cal_txt_filtro_desde', onUpdate: function () {
                        setAdmBuscadorTop('vta_comision_gestion')
                    }
                });
            </script>
        </div>
    </div>

    <div class="col fecha-hasta">
        <div class="label"><?php Lang::_lang('Hasta') ?></div>
        <div class="dato">
            <input id="txt_filtro_hasta" name="txt_filtro_hasta" type="text" class="textbox date" size="4" title="<?php Lang::_lang('Ingrese la fecha HASTA') ?>" />
            <input type="button" id="cal_txt_filtro_hasta" value=" ... ">
            <script type='text/javascript'>
                Calendar.setup({
                    inputField: 'txt_filtro_hasta', ifFormat: '%d/%m/%Y', button: 'cal_txt_filtro_hasta', onUpdate: function () {
                        setAdmBuscadorTop('vta_comision_gestion')
                    }
                });
            </script>
        </div>
    </div>

    <div class="col vta_preventista">
        <div class="label"><?php Lang::_lang('Preventista') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_vta_preventista_id', Gral::getCmbFiltro(VtaPreventista::getVtaPreventistasCmb(true), '...'), $cmb_filtro_vta_preventista_id, 'textbox') ?>
        </div>
    </div>

    <div class="col vta_comprador">
        <div class="label"><?php Lang::_lang('Comprador') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_vta_comprador_id', Gral::getCmbFiltro(VtaComprador::getVtaCompradorsCmb(true), '...'), $cmb_filtro_vta_comprador_id, 'textbox') ?>
        </div>
    </div>

    <div class="col vta_vendedor">
        <div class="label"><?php Lang::_lang('Vendedor') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_vta_vendedor_id', Gral::getCmbFiltro(VtaVendedor::getVtaVendedorsCmb(true), '...'), $cmb_filtro_vta_vendedor_id, 'textbox') ?>
        </div>
    </div>
    
    <div class="col vta_comision_tipo_estado">
        <div class="label"><?php Lang::_lang('Estado') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_vta_comision_tipo_estado_id', Gral::getCmbFiltro(VtaComisionTipoEstado::getVtaComisionTipoEstadosCmb(true), '...'), $cmb_filtro_vta_comision_tipo_estado_id, 'textbox') ?>
        </div>
    </div>

    <div class="col numero_comprobante">
        <div class="label"><?php Lang::_lang('Num de Comision') ?></div>
        <input id="txt_buscador_numero_comision" name="txt_buscador_numero_comision" type="text" class="textbox" size="15" placeholder="<?php Lang::_lang('Ingrese Num de Comision') ?>" title="<?php Lang::_lang('Ingrese el Nro de Comision que desea buscar') ?>" />
    </div>

    <div class="col">
        <div class="label"><?php Lang::_lang('Busqueda rapida (2 letras min)') ?></div>
        <input id="txt_buscador" name="txt_buscador" type="text" class="textbox" size="15" placeholder="<?php Lang::_lang('Ingrese palabra a buscar') ?>" title="<?php Lang::_lang('Ingrese la palabra que desea buscar') ?>" />
        <img class="txt_buscador_boton" src="imgs/lupa.png" width="20">
    </div>

    <div class="col">
        <div class="label"><?php Lang::_lang('Cant por Pag') ?></div>
        <input id="txt_cantidad_paginas" name="txt_cantidad_paginas" type="text" class="textboxx" size="2" value="<?php echo VtaComision::getSesPagCantidad() ?>" title="<?php Lang::_lang('Actualmente se visualizan') ?> <?php echo VtaComision::getSesPagCantidad() ?> <?php Lang::_lang('VtaComision') ?> <?php Lang::_lang('por Pagina') ?>" />
    </div>

    <div class="col">
        <?php if (UsCredencial::getEsAcreditado('VTA_COMISION_GESTION_ALTA')) { ?>
            <label class="boton agregar-comision" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('VtaComision') ?>'><img src="imgs/btn_add.gif" width="25"></label>
        <?php } ?>

        <label class="boton refresh-all" title="<?php Lang::_lang('Actualizar Listado') ?>"><img src="imgs/btn_refresh.png" width="22"></label>
    </div>

</form>

