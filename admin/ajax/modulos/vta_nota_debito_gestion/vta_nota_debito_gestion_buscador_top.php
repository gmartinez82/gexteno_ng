<form id="form_buscador_top" name="form_buscador_top" method="post" action="ajax/modulos/vta_nota_debito_gestion/set_vta_nota_debito_gestion_buscador_top.php">

    <div class="col fecha-desde">
        <div class="label"><?php Lang::_lang('Desde') ?></div>
        <div class="dato">
            <input id="txt_filtro_desde" name="txt_filtro_desde" type="text" class="textbox date" size="4" title="<?php Lang::_lang('Ingrese la fecha DESDE') ?>" />
            <input type="button" id="cal_txt_filtro_desde" value=" ... ">
            <script type='text/javascript'>
                Calendar.setup({
                    inputField: 'txt_filtro_desde', ifFormat: '%d/%m/%Y', button: 'cal_txt_filtro_desde',onUpdate: function(){setAdmBuscadorTop('vta_nota_debito_gestion')}
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
                    inputField: 'txt_filtro_hasta', ifFormat: '%d/%m/%Y', button: 'cal_txt_filtro_hasta',onUpdate: function(){setAdmBuscadorTop('vta_nota_debito_gestion')}
                });
            </script>
        </div>
    </div>

    <div class="col gral_condicion_iva">
        <div class="label"><?php Lang::_lang('Condicion Iva') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_gral_condicion_iva_id', Gral::getCmbFiltro(GralCondicionIva::getGralCondicionIvasCmb(true), '...'), $cmb_filtro_gral_condicion_iva_id, 'textbox') ?>
        </div>
    </div>
    
    <div class="col cli_cliente">
        <div class="label"><?php Lang::_lang('Cliente') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_cli_cliente_id', Gral::getCmbFiltro(CliCliente::getCliClientesCmb(true), '...'), $cmb_filtro_cli_cliente_id, 'textbox selective-input-filtro') ?>
        </div>
    </div>

    <div class="col vta_factura_tipo_estado">
        <div class="label"><?php Lang::_lang('Tipo Estado') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_vta_nota_debito_tipo_estado_id', Gral::getCmbFiltro(VtaNotaDebitoTipoEstado::getVtaNotaDebitoTipoEstadosCmb(true), '...'), $cmb_filtro_vta_nota_debito_tipo_estado_id, 'textbox') ?>
        </div>
    </div>
    
    <div class="col vta_tipo_nota_debito">
        <div class="label"><?php Lang::_lang('Tipo de ND') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_vta_tipo_nota_debito_id', Gral::getCmbFiltro(VtaTipoNotaDebito::getVtaTipoNotaDebitosCmb(true), '...'), $cmb_filtro_vta_tipo_nota_debito_id, 'textbox') ?>
        </div>
    </div>

    <div class="col vta_tipo_origen_nota_debito">
        <div class="label"><?php Lang::_lang('Origen de ND') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_vta_tipo_origen_nota_debito_id', Gral::getCmbFiltro(VtaTipoOrigenNotaDebito::getVtaTipoOrigenNotaDebitosCmb(true), '...'), $cmb_filtro_vta_tipo_origen_nota_debito_id, 'textbox') ?>
        </div>
    </div>

    <div class="col numero_nota_debito">
        <div class="label"><?php Lang::_lang('Nro de ND') ?></div>
        <input id="txt_buscador_numero_nota_debito" name="txt_buscador_numero_nota_debito" type="text" class="textbox" size="7" placeholder="0000-00000000" title="<?php Lang::_lang('Ingrese el Nro de ND que desea buscar') ?>" />
    </div>
    
    <div class="col">
        <div class="label"><?php Lang::_lang('Busqueda rapida (2 letras min)') ?></div>
        <input id="txt_buscador" name="txt_buscador" type="text" class="textbox" size="15" placeholder="<?php Lang::_lang('Ingrese palabra a buscar') ?>" title="<?php Lang::_lang('Ingrese la palabra que desea buscar') ?>" />
        <img class="txt_buscador_boton" src="imgs/lupa.png" width="20">
    </div>

    <div class="col">
        <div class="label"><?php Lang::_lang('Cant por Pag') ?></div>
        <input id="txt_cantidad_paginas" name="txt_cantidad_paginas" type="text" class="textboxx" size="2" value="<?php echo VtaNotaDebito::getSesPagCantidad() ?>" title="<?php Lang::_lang('Actualmente se visualizan') ?> <?php echo VtaNotaDebito::getSesPagCantidad() ?> <?php Lang::_lang('VtaNotaDebito') ?> <?php Lang::_lang('por Pagina') ?>" />
    </div>

    <div class="col">

        <?php if (UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_GESTION_GENERAR_NOTA_DEBITO')) { ?>
            <label class="boton generar_nota_debito" title="<?php Lang::_lang('Generar Nota de Debito') ?>" modulo='vta_nota_debito_gestion'><img src="imgs/btn_add.gif" width="25"></label>
        <?php } ?>

        <label class="boton refresh-all" title="<?php Lang::_lang('Actualizar Listado') ?>"><img src="imgs/btn_refresh.png" width="22"></label>
    </div>

</form>

