<form id="form_buscador_top" name="form_buscador_top" method="post" action="ajax/modulos/vta_ajuste_haber_gestion/set_vta_ajuste_haber_gestion_buscador_top.php">
    
    <div class="col fecha-desde">
        <div class="label"><?php Lang::_lang('Desde') ?></div>
        <div class="dato">
            <input id="txt_filtro_desde" name="txt_filtro_desde" type="text" class="textbox date" size="4" title="<?php Lang::_lang('Ingrese la fecha DESDE') ?>" />
            <input type="button" id="cal_txt_filtro_desde" value=" ... ">
            <script type='text/javascript'>
                Calendar.setup({
                    inputField: 'txt_filtro_desde', ifFormat: '%d/%m/%Y', button: 'cal_txt_filtro_desde',onUpdate: function(){setAdmBuscadorTop('vta_ajuste_haber_gestion')}
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
                    inputField: 'txt_filtro_hasta', ifFormat: '%d/%m/%Y', button: 'cal_txt_filtro_hasta',onUpdate: function(){setAdmBuscadorTop('vta_ajuste_haber_gestion')}
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
    
    <div class="col vta_ajuste_haber_tipo_estado">
        <div class="label"><?php Lang::_lang('Tipo Estado') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_vta_ajuste_haber_tipo_estado_id', Gral::getCmbFiltro(VtaAjusteHaberTipoEstado::getVtaAjusteHaberTipoEstadosCmb(true), '...'), $cmb_filtro_vta_ajuste_haber_tipo_estado_id, 'textbox') ?>
        </div>
    </div>

    <div class="col vta_tipo_ajuste_haber">
        <div class="label"><?php Lang::_lang('Tipo de AjusteHaber') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_vta_tipo_ajuste_haber_id', Gral::getCmbFiltro(VtaTipoAjusteHaber::getVtaTipoAjusteHabersCmb(true), '...'), $cmb_filtro_vta_tipo_ajuste_haber_id, 'textbox') ?>
        </div>
    </div>
    
    <div class="col numero_ajuste_haber">
        <div class="label"><?php Lang::_lang('Nro de Ajuste Haber') ?></div>
        <input id="txt_buscador_numero_ajuste_haber" name="txt_buscador_numero_ajuste_haber" type="text" class="textbox" size="7" placeholder="<?php Gral::_echo(VtaAjusteHaber::PREFIJO_AJUSTE_HABER); ?>00000000" title="<?php Lang::_lang('Ingrese el Nro de Ajuste Haber que desea buscar') ?>" />
    </div>

    <div class="col">
        <div class="label"><?php Lang::_lang('Busqueda rapida (2 letras min)') ?></div>
        <input id="txt_buscador" name="txt_buscador" type="text" class="textbox" size="20" placeholder="<?php Lang::_lang('Ingrese palabra a buscar') ?>" title="<?php Lang::_lang('Ingrese la palabra que desea buscar') ?>" />
        <img class="txt_buscador_boton" src="imgs/lupa.png" width="20">
    </div>

    <div class="col">
        <div class="label"><?php Lang::_lang('Cant por Pag') ?></div>
        <input id="txt_cantidad_paginas" name="txt_cantidad_paginas" type="text" class="textboxx" size="2" value="<?php echo VtaAjusteHaber::getSesPagCantidad() ?>" title="<?php Lang::_lang('Actualmente se visualizan') ?> <?php echo VtaAjusteHaber::getSesPagCantidad() ?> <?php Lang::_lang('VtaAjusteHaber') ?> <?php Lang::_lang('por Pagina') ?>" />
    </div>

    <div class="col">

        <?php if (UsCredencial::getEsAcreditado('VTA_AJUSTE_HABER_GESTION_GENERAR_AJUSTE_HABER')) { ?>
            <label class="boton generar_ajuste_haber" title="<?php Lang::_lang('Generar AjusteHaber') ?>" modulo='vta_ajuste_haber_gestion'><img src="imgs/btn_add.gif" width="25"></label>
        <?php } ?>

        <label class="boton refresh-all" title="<?php Lang::_lang('Actualizar Listado') ?>"><img src="imgs/btn_refresh.png" width="22"></label>
    </div>
    
    <div id="div_listado_buscador_extendido" class="div_listado_buscador_extendido">

        <div class="col vta_tipo_origen_ajuste_haber">
            <div class="label"><?php Lang::_lang('Origen') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_filtro_vta_tipo_origen_ajuste_haber_id', Gral::getCmbFiltro(VtaTipoOrigenAjusteHaber::getVtaTipoOrigenAjusteHabersCmb(true), '...'), $cmb_filtro_vta_tipo_origen_ajuste_haber_id, 'textbox') ?>
            </div>
        </div>

        <div class="col vta-recibo-condicion-pago">
            <div class="label"><?php Lang::_lang('Condicion Pago') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_filtro_vta_ajuste_haber_condicion_pago_id', Gral::getCmbFiltro(VtaAjusteHaberCondicionPago::getVtaAjusteHaberCondicionPagosCmb(true), '...'), $cmb_filtro_vta_ajuste_haber_condicion_pago_id, 'textbox') ?>
            </div>
        </div>

        <div class="col vta-recibo-tipo-pago">
            <div class="label"><?php Lang::_lang('Tipo Pago') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_filtro_vta_ajuste_haber_tipo_pago_id', Gral::getCmbFiltro(VtaAjusteHaberTipoPago::getVtaAjusteHaberTipoPagosCmb(true), '...'), $cmb_filtro_vta_ajuste_haber_tipo_pago_id, 'textbox') ?>
            </div>
        </div>
        
    </div>

</form>

