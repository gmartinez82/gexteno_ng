<form id="form_buscador_top" name="form_buscador_top" method="post" action="ajax/modulos/vta_factura_gestion/set_vta_factura_gestion_buscador_top.php">

    <div class="col fecha-desde">
        <div class="label"><?php Lang::_lang('Desde') ?></div>
        <div class="dato">
            <input id="txt_filtro_desde" name="txt_filtro_desde" type="text" class="textbox date" size="4" title="<?php Lang::_lang('Ingrese la fecha DESDE') ?>" />
            <input type="button" id="cal_txt_filtro_desde" value=" ... ">
            <script type='text/javascript'>
                Calendar.setup({
                    inputField: 'txt_filtro_desde', ifFormat: '%d/%m/%Y', button: 'cal_txt_filtro_desde', onUpdate: function () {
                        setAdmBuscadorTop('vta_factura_gestion')
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
                        setAdmBuscadorTop('vta_factura_gestion')
                    }
                });
            </script>
        </div>
    </div>

    <div class="col gral_condicion_iva">
        <div class="label"><?php Lang::_lang('Condicion IVA') ?></div>
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
            <?php Html::html_dib_select(1, 'cmb_filtro_vta_factura_tipo_estado_id', Gral::getCmbFiltro(VtaFacturaTipoEstado::getVtaFacturaTipoEstadosCmb(true), '...'), $cmb_filtro_vta_factura_tipo_estado_id, 'textbox') ?>
        </div>
    </div>

    <div class="col vta_tipo_factura">
        <div class="label"><?php Lang::_lang('Tipo de Factura') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_vta_tipo_factura_id', Gral::getCmbFiltro(VtaTipoFactura::getVtaTipoFacturasCmb(true), '...'), $cmb_filtro_vta_tipo_factura_id, 'textbox') ?>
        </div>
    </div>
    
    <div class="col vta_tipo_origen_factura">
        <div class="label"><?php Lang::_lang('Origen de Factura') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_vta_tipo_origen_factura_id', Gral::getCmbFiltro(VtaTipoOrigenFactura::getVtaTipoOrigenFacturasCmb(true), '...'), $cmb_filtro_vta_tipo_origen_factura_id, 'textbox') ?>
        </div>
    </div>
    
    <div class="col destacado">
        <div class="label"><?php Lang::_lang('Sin Autorizacion') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_sin_cae', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), $cmb_filtro_sin_cae, 'textbox') ?>
        </div>
    </div>
    

    <div class="col numero_nota_debito">
        <div class="label"><?php Lang::_lang('Nro de Factura') ?></div>
        <input id="txt_buscador_numero_factura" name="txt_buscador_numero_factura" type="text" class="textbox" size="8" placeholder="0000-00000000" title="<?php Lang::_lang('Ingrese el Nro de Factura que desea buscar') ?>" />
    </div>

    <div class="col">
        <div class="label"><?php Lang::_lang('Busqueda rapida') ?></div>
        <input id="txt_buscador" name="txt_buscador" type="text" class="textbox" size="15" placeholder="<?php Lang::_lang('Ingrese palabra a buscar') ?>" title="<?php Lang::_lang('Ingrese la palabra que desea buscar') ?>" />
        <img class="txt_buscador_boton" src="imgs/lupa.png" width="20">
    </div>

    <div class="col">
        <div class="label"><?php Lang::_lang('Cant por Pag') ?></div>
        <input id="txt_cantidad_paginas" name="txt_cantidad_paginas" type="text" class="textboxx" size="2" value="<?php echo VtaFactura::getSesPagCantidad() ?>" title="<?php Lang::_lang('Actualmente se visualizan') ?> <?php echo VtaFactura::getSesPagCantidad() ?> <?php Lang::_lang('VtaFactura') ?> <?php Lang::_lang('por Pagina') ?>" />
    </div>

    <div class="col">

        <?php if (UsCredencial::getEsAcreditado('VTA_FACTURA_GESTION_GENERAR_FACTURA')) { ?>
            <label class="boton generar_factura" title="<?php Lang::_lang('Generar Factura de OV') ?>" modulo='vta_factura_gestion'><img src="imgs/btn_add.gif" width="25"></label>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_FACTURA_GESTION_GENERAR_FACTURA_ITEM')) { ?>
            <label class="boton generar_factura_item" title="<?php Lang::_lang('Generar Factura por Item') ?>" modulo='vta_factura_gestion'><img src="imgs/btn_add.gif" width="25"></label>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado("VTA_FACTURA_GESTION_REGISTRAR_DESCUENTO_FINANCIERO")) { ?>
            <label class="boton registrar-descuento-financiero" title="<?php Lang::_lang('Registrar Descuento Financiero') ?>" style="display: none;">
                <img src="imgs/btn_arbol.png" width="26">
            </label>
        <?php } ?>
            
        <?php if (UsCredencial::getEsAcreditado("VTA_FACTURA_GESTION_REGISTRAR_AJUSTE_DEBE")) { ?>
            <label class="boton" title="<?php Lang::_lang('Registrar Ajuste Debe') ?>">
                <a href="vta_ajuste_debe_gestion.php">
                    <img src="imgs/icn_AJUSTE.png" width="24">
                </a>
            </label>
        <?php } ?>    

    </div>

    <div id="div_listado_buscador_extendido" class="div_listado_buscador_extendido">

        <?php if (UsCredencial::getEsAcreditado('VTA_FACTURA_GESTION_BUSCADOR_TOP_FILTROS_COMISIONISTAS')) { ?>

            <div class="col vta-punto-venta">
                <div class="label"><?php Lang::_lang('Punto Venta') ?></div>
                <div class="dato">
                    <?php Html::html_dib_select(1, 'cmb_filtro_vta_punto_venta_id', Gral::getCmbFiltro(VtaPuntoVenta::getVtaPuntoVentasCmb(true), '...'), $cmb_filtro_vta_punto_venta_id, 'textbox') ?>
                </div>
            </div>
        
            <div class="col gral_sucursal">
                <div class="label"><?php Lang::_lang('Sucursal') ?></div>
                <div class="dato">
                    <?php Html::html_dib_select(1, 'cmb_filtro_gral_sucursal_id', Gral::getCmbFiltro(GralSucursal::getGralSucursalsCmb(true), '...'), $cmb_filtro_gral_sucursal_id, 'textbox') ?>
                </div>
            </div>
        
            <div class="col vta_comprador" style="display: none;">
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

            <div class="col vta_preventista" style="display: none;">
                <div class="label"><?php Lang::_lang('Preventista') ?></div>
                <div class="dato">
                    <?php Html::html_dib_select(1, 'cmb_filtro_vta_preventista_id', Gral::getCmbFiltro(VtaPreventista::getVtaPreventistasCmb(true), '...'), $cmb_filtro_vta_preventista_id, 'textbox') ?>
                </div>
            </div>
        
            <div class="col vta_comprador">
                <div class="label"><?php Lang::_lang('Actividad') ?></div>
                <div class="dato">
                    <?php Html::html_dib_select(1, 'cmb_filtro_gral_actividad_id', Gral::getCmbFiltro(GralActividad::getGralActividadsCmb(true), '...'), $cmb_filtro_gral_actividad_id, 'textbox') ?>
                </div>
            </div>

            <div class="col vta_comprador">
                <div class="label"><?php Lang::_lang('Escenario') ?></div>
                <div class="dato">
                    <?php Html::html_dib_select(1, 'cmb_filtro_gral_escenario_id', Gral::getCmbFiltro(GralEscenario::getGralEscenariosCmb(true), '...'), $cmb_filtro_gral_escenario_id, 'textbox') ?>
                </div>
            </div>
        
        <?php } ?>

    </div>

</form>

