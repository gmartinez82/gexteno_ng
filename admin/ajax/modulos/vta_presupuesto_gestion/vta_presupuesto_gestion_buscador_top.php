<form id="form_buscador_top" name="form_buscador_top" method="post" action="ajax/modulos/vta_presupuesto_gestion/set_vta_presupuesto_gestion_buscador_top.php">

    <div class="col fecha-desde">
        <div class="label"><?php Lang::_lang('Desde') ?></div>
        <div class="dato">
            <input id="txt_filtro_desde" name="txt_filtro_desde" type="text" class="textbox date" size="4" title="<?php Lang::_lang('Ingrese la fecha DESDE') ?>" />
            <input type="button" id="cal_txt_filtro_desde" value=" ... ">
            <script type='text/javascript'>
                Calendar.setup({
                    inputField: 'txt_filtro_desde', ifFormat: '%d/%m/%Y', button: 'cal_txt_filtro_desde', onUpdate: function () {
                        setAdmBuscadorTop('vta_presupuesto_gestion')
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
                        setAdmBuscadorTop('vta_presupuesto_gestion')
                    }
                });
            </script>
        </div>
    </div>

    <div class="col vta_presupuesto_tipo_estado">
        <div class="label"><?php Lang::_lang('Tipo Estado') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_vta_presupuesto_tipo_estado_id', Gral::getCmbFiltro(VtaPresupuestoTipoEstado::getVtaPresupuestoTipoEstadosCmb(true), '...'), $cmb_filtro_vta_presupuesto_tipo_estado_id, 'textbox') ?>
        </div>
    </div>

    <div class="col cli_cliente">
        <div class="label"><?php Lang::_lang('Cliente') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_cli_cliente_id', Gral::getCmbFiltro(CliCliente::getCliClientesCmb(true), '...'), $cmb_filtro_cli_cliente_id, 'textbox selective-input-filtro') ?>
        </div>
    </div>

    <div class="col gral_sucursal">
        <div class="label"><?php Lang::_lang('Sucursal') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_gral_sucursal_id', Gral::getCmbFiltro(GralSucursal::getGralSucursalsCmb(true), '...'), $cmb_filtro_gral_sucursal_id, 'textbox') ?>
        </div>
    </div>

    <div class="col gral_sucursal">
        <div class="label"><?php Lang::_lang('Sucursal Retiro') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_gral_sucursal_retiro', Gral::getCmbFiltro(GralSucursal::getGralSucursalsCmb(true), '...'), $cmb_filtro_gral_sucursal_retiro, 'textbox') ?>
        </div>
    </div>
    
    <div class="col vta_vendedor">
        <div class="label"><?php Lang::_lang('Vendedor') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_vta_vendedor_id', Gral::getCmbFiltro(VtaVendedor::getVtaVendedorsCmb(true), '...'), $cmb_filtro_vta_vendedor_id, 'textbox') ?>
        </div>
    </div>

    <div class="col vta_vendedor">
        <div class="label"><?php Lang::_lang('Destacado') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_destacado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(true), '...'), $cmb_filtro_destacado, 'textbox') ?>
        </div>
    </div>    

    <div class="col">
        <div class="label"><?php Lang::_lang('Busqueda rapida (2 letras min)') ?></div>
        <input id="txt_buscador" name="txt_buscador" type="text" class="textbox" size="20" placeholder="<?php Lang::_lang('Ingrese palabra a buscar') ?>" title="<?php Lang::_lang('Ingrese la palabra que desea buscar') ?>" />
        <img class="txt_buscador_boton" src="imgs/lupa.png" width="20">
    </div>

    <div class="col">
        <div class="label"><?php Lang::_lang('Cant por Pag') ?></div>
        <input id="txt_cantidad_paginas" name="txt_cantidad_paginas" type="text" class="textboxx" size="2" value="<?php echo VtaPresupuesto::getSesPagCantidad() ?>" title="<?php Lang::_lang('Actualmente se visualizan') ?> <?php echo VtaPresupuesto::getSesPagCantidad() ?> <?php Lang::_lang('VtaPresupuesto') ?> <?php Lang::_lang('por Pagina') ?>" />
    </div>

    <div class="col">
        
        <?php if(UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_GESTION_ACCION_CREAR_NUEVO')){ ?>
            <a class="boton" href='vta_presupuesto_nuevo.php' title='<?php Lang::_lang('Crear Nuevo Presupuesto') ?>'><img src="imgs/btn_add.gif" width="25"></a>
        <?php } ?>
        
        <label class="boton refresh-all" title="<?php Lang::_lang('Actualizar Listado') ?>"><img src="imgs/btn_refresh.png" width="22"></label>
    </div>

    <div id="div_listado_buscador_extendido" class="div_listado_buscador_extendido">

        <div class="col vta_presupuesto_conflicto" style="display: none;">
            <div class="label"><?php Lang::_lang('Conflicto') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_filtro_vta_presupuesto_conflicto', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(true), '...'), $cmb_filtro_vta_presupuesto_conflicto, 'textbox') ?>
            </div>
        </div>
        
        <div class="col vta_presupuesto_tipo_despacho">
            <div class="label"><?php Lang::_lang('Tipo Despacho') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_filtro_vta_presupuesto_tipo_despacho_id', Gral::getCmbFiltro(VtaPresupuestoTipoDespacho::getVtaPresupuestoTipoDespachosCmb(true), '...'), $cmb_filtro_vta_presupuesto_tipo_despacho_id, 'textbox') ?>
            </div>
        </div>
        
        <div class="col vta_presupuesto_activo">
            <div class="label"><?php Lang::_lang('Activo') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_filtro_vta_presupuesto_activo', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(true), '...'), $cmb_filtro_vta_presupuesto_activo, 'textbox') ?>
            </div>
        </div>
        
        <div class="col vta_presupuesto_tipo_estado">
            <div class="label"><?php Lang::_lang('Tipo Origen') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_filtro_vta_presupuesto_tipo_origen_id', Gral::getCmbFiltro(VtaPresupuestoTipoOrigen::getVtaPresupuestoTipoOrigensCmb(true), '...'), $cmb_filtro_vta_presupuesto_tipo_origen_id, 'textbox') ?>
            </div>
        </div>
        
        <div class="col vta_presupuesto_tipo_estado">
            <div class="label"><?php Lang::_lang('Tipo Venta') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_filtro_vta_presupuesto_tipo_venta_id', Gral::getCmbFiltro(VtaPresupuestoTipoVenta::getVtaPresupuestoTipoVentasCmb(true), '...'), $cmb_filtro_vta_presupuesto_tipo_venta_id, 'textbox') ?>
            </div>
        </div>
        
        <div class="col vta_presupuesto_tipo_estado">
            <div class="label"><?php Lang::_lang('Tipo Emision') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_filtro_vta_presupuesto_tipo_emision_id', Gral::getCmbFiltro(VtaPresupuestoTipoEmision::getVtaPresupuestoTipoEmisionsCmb(true), '...'), $cmb_filtro_vta_presupuesto_tipo_estado_id, 'textbox') ?>
            </div>
        </div>
        
        <div class="col ins_tipo_lista_precio">
            <div class="label"><?php Lang::_lang('Lista de Precio') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_filtro_ins_tipo_lista_precio_id', Gral::getCmbFiltro(InsTipoListaPrecio::getInsTipoListaPreciosCmb(true), '...'), $cmb_filtro_ins_tipo_lista_precio_id, 'textbox') ?>
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

    </div>    

</form>

