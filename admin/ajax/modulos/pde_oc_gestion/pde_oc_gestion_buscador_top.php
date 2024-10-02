<form id="form_buscador_top" name="form_buscador_top" method="post" action="ajax/modulos/pde_oc_gestion/set_pde_oc_gestion_buscador_top.php">

    <div class="col centro-pedido">
        <div class="label"><?php Lang::_lang('Ctr Pedido') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_pde_centro_pedido_id', Gral::getCmbFiltro(PdeCentroPedido::getPdeCentroPedidosCmbFxCredencial(), '...'), $cmb_filtro_pde_centro_pedido_id, 'textbox') ?>
        </div>
    </div>

    <div class="col proveedor">
        <div class="label"><?php Lang::_lang('Proveedor') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(true), '...'), $cmb_filtro_prv_proveedor_id, 'textbox selective-input-filtro') ?>
        </div>
    </div>

    <div class="col categoria">
        <div class="label"><?php Lang::_lang('Categoria') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_ins_categoria_id', Gral::getCmbFiltro(InsCategoria::getInsCategoriasCmb(true), '...'), $cmb_filtro_ins_categoria_id, 'textbox') ?>
        </div>
    </div>

    <div class="col estado">
        <div class="label"><?php Lang::_lang('Estado') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_pde_oc_estado_id', Gral::getCmbFiltro(PdeOcTipoEstado::getPdeOcTipoEstadosCmb(), '...'), $cmb_filtro_pde_oc_estado_id, 'textbox') ?>
        </div>
    </div>

    <div class="col estado-recepcion">
        <div class="label"><?php Lang::_lang('Estado RCP') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_pde_oc_tipo_estado_recepcion_id', Gral::getCmbFiltro(PdeOcTipoEstadoRecepcion::getPdeOcTipoEstadoRecepcionsCmb(), '...'), $cmb_filtro_pde_oc_tipo_estado_recepcion_id, 'textbox') ?>
        </div>
    </div>

    <div class="col estado-facturacion">
        <div class="label"><?php Lang::_lang('Estado FAC') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_pde_oc_tipo_estado_facturacion_id', Gral::getCmbFiltro(PdeOcTipoEstadoFacturacion::getPdeOcTipoEstadoFacturacionsCmb(), '...'), $cmb_filtro_pde_oc_tipo_estado_facturacion_id, 'textbox') ?>
        </div>
    </div>
    
    <div class="col destacado">
        <div class="label"><?php Lang::_lang('Destacado') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_destacado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), $cmb_filtro_destacado, 'textbox') ?>
        </div>
    </div>

    <div class="col">
        <div class="label"><?php Lang::_lang('Busqueda rapida (2 letras min)') ?></div>
        <input id="txt_buscador" name="txt_buscador" type="text" class="textbox" size="15" title="<?php Lang::_lang('Ingrese la palabra que desea buscar') ?>" />
        <img class="txt_buscador_boton" src="imgs/lupa.png" width="20">
    </div>

    <div class="col">
        <div class="label"><?php Lang::_lang('Cant por Pag') ?></div>
        <input id="txt_cantidad_paginas" name="txt_cantidad_paginas" type="text" class="textboxx" size="5" value="<?php echo PdeOc::getSesPagCantidad() ?>" title="<?php Lang::_lang('Actualmente se visualizan') ?> <?php echo PdeOc::getSesPagCantidad() ?> <?php Lang::_lang('PdeOc') ?> <?php Lang::_lang('por Pagina') ?>" />
    </div>

    <div class="col botonera">
        <?php if (UsCredencial::getEsAcreditado('PDE_OC_GESTION_ACCION_AGREGAR')) { ?>
            <a class="boton agregar-oc" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('PdeOc') ?>'><img src="imgs/btn_add.gif" width="25"></a>
        <?php } ?>
            
        <label class="boton refresh-all" title="<?php Lang::_lang('Actualizar Listado') ?>"><img src="imgs/btn_refresh.png" width="22"></label>
    </div>
</form>

