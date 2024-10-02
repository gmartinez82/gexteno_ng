<form id="form_buscador_top" name="form_buscador_top" method="post" action="ajax/modulos/vta_remito_ajuste_gestion/set_vta_remito_ajuste_gestion_buscador_top.php">

    <div class="col fecha-desde">
        <div class="label"><?php Lang::_lang('Desde') ?></div>
        <div class="dato">
            <input id="txt_filtro_desde" name="txt_filtro_desde" type="text" class="textbox date" size="7" title="<?php Lang::_lang('Ingrese la fecha DESDE') ?>" />
            <input type="button" id="cal_txt_filtro_desde" value=" ... ">
            <script type='text/javascript'>
                Calendar.setup({
                    inputField: 'txt_filtro_desde', ifFormat: '%d/%m/%Y', button: 'cal_txt_filtro_desde', onUpdate: function () {
                        setAdmBuscadorTop('vta_remito_ajuste_gestion')
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
                        setAdmBuscadorTop('vta_remito_ajuste_gestion')
                    }
                });
            </script>
        </div>
    </div>

    <div class="col vta_remito_ajuste_tipo_estado">
        <div class="label"><?php Lang::_lang('Tipo Estado') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_vta_remito_ajuste_tipo_estado_id', Gral::getCmbFiltro(VtaRemitoAjusteTipoEstado::getVtaRemitoAjusteTipoEstadosCmb(true), '...'), $cmb_filtro_vta_remito_ajuste_tipo_estado_id, 'textbox') ?>
        </div>
    </div>

    <div class="col pan_panol">
        <div class="label"><?php Lang::_lang('Deposito') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_pan_panol_id', Gral::getCmbFiltro(PanPanol::getPanPanolsCmb(true), '...'), $cmb_filtro_pan_panol_id, 'textbox') ?>
        </div>
    </div>
    
    <div class="col cli_cliente">
        <div class="label"><?php Lang::_lang('Cliente') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_cli_cliente_id', Gral::getCmbFiltro(CliCliente::getCliClientesCmb(true), '...'), $cmb_filtro_cli_cliente_id, 'textbox selective-input-filtro') ?>
        </div>
    </div>

    <div class="col">
        <div class="label"><?php Lang::_lang('Busqueda rapida (2 letras min)') ?></div>
        <input id="txt_buscador" name="txt_buscador" type="text" class="textbox" size="30" placeholder="<?php Lang::_lang('Ingrese palabra a buscar') ?>" title="<?php Lang::_lang('Ingrese la palabra que desea buscar') ?>" />
        <img class="txt_buscador_boton" src="imgs/lupa.png" width="20">
    </div>

    <div class="col">
        <div class="label"><?php Lang::_lang('Cant por Pag') ?></div>
        <input id="txt_cantidad_paginas" name="txt_cantidad_paginas" type="text" class="textboxx" size="2" value="<?php echo VtaRemitoAjuste::getSesPagCantidad() ?>" title="<?php Lang::_lang('Actualmente se visualizan') ?> <?php echo VtaRemitoAjuste::getSesPagCantidad() ?> <?php Lang::_lang('VtaRemitoAjuste') ?> <?php Lang::_lang('por Pagina') ?>" />
    </div>

    <div class="col">

        <?php if (UsCredencial::getEsAcreditado('VTA_REMITO_AJUSTE_GESTION_GENERAR')) { ?>    
            <label class="boton generar_remito_ajuste" title="<?php Lang::_lang('Generar Remito') ?>" modulo='vta_remito_ajuste_gestion'><img src="imgs/btn_add.gif" width="25"></label>
        <?php } ?>

        <label class="boton ver_buscador" title="<?php Lang::_lang('Busqueda Avanzada') ?>" modulo='vta_remito_ajuste_gestion'><img src="imgs/btn_lupa.png" width="25"></label>
        <label class="boton refresh-all" title="<?php Lang::_lang('Actualizar Listado') ?>"><img src="imgs/btn_refresh.png" width="22"></label>
    </div>

    <div id="div_listado_buscador_extendido" class="div_listado_buscador_extendido">

        <div class="col vta_remito_tipo_estado">
            <div class="label"><?php Lang::_lang('Tipo Remito Ajuste') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_filtro_vta_tipo_remito_ajuste_id', Gral::getCmbFiltro(VtaTipoRemitoAjuste::getVtaTipoRemitoAjustesCmb(true), '...'), $cmb_filtro_vta_tipo_remito_ajuste_id, 'textbox') ?>
            </div>
        </div>
        
        <div class="col vta_remito_tipo_despacho">
            <div class="label"><?php Lang::_lang('Tipo Despacho') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_filtro_vta_remito_tipo_despacho_id', Gral::getCmbFiltro(VtaRemitoTipoDespacho::getVtaRemitoTipoDespachosCmb(true), '...'), $cmb_filtro_vta_remito_tipo_despacho_id, 'textbox') ?>
            </div>
        </div>
        
        <div class="col gral_sucursal">
            <div class="label"><?php Lang::_lang('Sucursal Retiro') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_filtro_gral_sucursal_retiro', Gral::getCmbFiltro(GralSucursal::getGralSucursalsCmb(true), '...'), $cmb_filtro_gral_sucursal_retiro, 'textbox') ?>
            </div>
        </div>
        
        <div class="col gral_ruta">
            <div class="label"><?php Lang::_lang('Ruta de Clientes') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_filtro_gral_ruta_cliente_id', Gral::getCmbFiltro(GralRuta::getGralRutasCmb(true), '...'), $cmb_filtro_gral_ruta_cliente_id, 'textbox') ?>
            </div>
        </div>

        <div class="col gral_ruta">
            <div class="label"><?php Lang::_lang('Ruta') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_filtro_gral_ruta_id', Gral::getCmbFiltro(GralRuta::getGralRutasCmb(true), '...'), $cmb_filtro_gral_ruta_id, 'textbox') ?>
            </div>
        </div>

        <div class="col gral_ruta">
            <div class="label"><?php Lang::_lang('Hoja Ruta') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_filtro_vta_hoja_ruta_id', Gral::getCmbFiltro(VtaHojaRuta::getVtaHojaRutasCmb(true), '...'), $cmb_filtro_vta_hoja_ruta_id, 'textbox') ?>
            </div>
        </div>

        <div class="col insumo">
            <div class="label"><?php Lang::_lang('Con Hoja Ruta') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_filtro_con_hoja_ruta', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(true), '...'), $cmb_filtro_con_hoja_ruta, 'textbox') ?>
            </div>
        </div>        

    </div>

</form>

