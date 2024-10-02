<form id="form_buscador_top" name="form_buscador_top" method="post" action="ajax/modulos/vta_recibo_gestion/set_vta_recibo_gestion_buscador_top.php">

    <div class="col fecha-desde">
        <div class="label"><?php Lang::_lang('Desde') ?></div>
        <div class="dato">
            <input id="txt_filtro_desde" name="txt_filtro_desde" type="text" class="textbox date" size="4" title="<?php Lang::_lang('Ingrese la fecha DESDE') ?>" />
            <input type="button" id="cal_txt_filtro_desde" value=" ... ">
            <script type='text/javascript'>
                Calendar.setup({
                    inputField: 'txt_filtro_desde', ifFormat: '%d/%m/%Y', button: 'cal_txt_filtro_desde', onUpdate: function () {
                        setAdmBuscadorTop('vta_recibo_gestion')
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
                        setAdmBuscadorTop('vta_recibo_gestion')
                    }
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

    <div class="col vta_recibo_tipo_estado">
        <div class="label"><?php Lang::_lang('Tipo Estado') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_vta_recibo_tipo_estado_id', Gral::getCmbFiltro(VtaReciboTipoEstado::getVtaReciboTipoEstadosCmb(true), '...'), $cmb_filtro_vta_recibo_tipo_estado_id, 'textbox') ?>
        </div>
    </div>

    <div class="col vta_tipo_recibo">
        <div class="label"><?php Lang::_lang('Tipo de RBO') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_vta_tipo_recibo_id', Gral::getCmbFiltro(VtaTipoRecibo::getVtaTipoRecibosCmb(true), '...'), $cmb_filtro_vta_tipo_recibo_id, 'textbox') ?>
        </div>
    </div>

    <div class="col numero_recibo">
        <div class="label"><?php Lang::_lang('Nro de Recibo') ?></div>
        <input id="txt_buscador_numero_recibo" name="txt_buscador_numero_recibo" type="text" class="textbox" size="7" placeholder="RCB-00000000" title="<?php Lang::_lang('Ingrese el Nro de Recibo que desea buscar') ?>" />
    </div>

    <div class="col">
        <div class="label"><?php Lang::_lang('Busqueda rapida (2 letras min)') ?></div>
        <input id="txt_buscador" name="txt_buscador" type="text" class="textbox" size="20" placeholder="<?php Lang::_lang('Ingrese palabra a buscar') ?>" title="<?php Lang::_lang('Ingrese la palabra que desea buscar') ?>" />
        <img class="txt_buscador_boton" src="imgs/lupa.png" width="20">
    </div>

    <div class="col">
        <div class="label"><?php Lang::_lang('Cant por Pag') ?></div>
        <input id="txt_cantidad_paginas" name="txt_cantidad_paginas" type="text" class="textboxx" size="2" value="<?php echo VtaRecibo::getSesPagCantidad() ?>" title="<?php Lang::_lang('Actualmente se visualizan') ?> <?php echo VtaRecibo::getSesPagCantidad() ?> <?php Lang::_lang('VtaRecibo') ?> <?php Lang::_lang('por Pagina') ?>" />
    </div>

    <div class="col">

        <?php if (UsCredencial::getEsAcreditado('VTA_RECIBO_GESTION_GENERAR_RECIBO')) { ?>
            <label class="boton generar_recibo" title="<?php Lang::_lang('Generar Recibo') ?>" modulo='vta_recibo_gestion'>
                <img src="imgs/btn_add.gif" width="25">
            </label>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado("VTA_RECIBO_GESTION_REGISTRAR_AJUSTE_HABER")) { ?>
            <label class="boton" title="<?php Lang::_lang('Registrar Ajuste Haber') ?>">
                <a href="vta_ajuste_haber_gestion.php">
                    <img src="imgs/icn_AJUSTE.png" width="26">
                </a>
            </label>
        <?php } ?>

        <label class="boton refresh-all" title="<?php Lang::_lang('Actualizar Listado') ?>"><img src="imgs/btn_refresh.png" width="22"></label>
    </div>

    <div id="div_listado_buscador_extendido" class="div_listado_buscador_extendido">

        <div class="col vta_tipo_origen_recibo">
            <div class="label"><?php Lang::_lang('Origen de RBO') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_filtro_vta_tipo_origen_recibo_id', Gral::getCmbFiltro(VtaTipoOrigenRecibo::getVtaTipoOrigenRecibosCmb(true), '...'), $cmb_filtro_vta_tipo_origen_recibo_id, 'textbox') ?>
            </div>
        </div>
        
        <div class="col vta-recibo-condicion-pago">
            <div class="label"><?php Lang::_lang('Condicion Pago') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_filtro_vta_recibo_condicion_pago_id', Gral::getCmbFiltro(VtaReciboCondicionPago::getVtaReciboCondicionPagosCmb(true), '...'), $cmb_filtro_vta_recibo_condicion_pago_id, 'textbox') ?>
            </div>
        </div>

        <div class="col vta-recibo-tipo-pago">
            <div class="label"><?php Lang::_lang('Tipo Pago') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_filtro_vta_recibo_tipo_pago_id', Gral::getCmbFiltro(VtaReciboTipoPago::getVtaReciboTipoPagosCmb(true), '...'), $cmb_filtro_vta_recibo_tipo_pago_id, 'textbox') ?>
            </div>
        </div>
        
    </div>

</form>

