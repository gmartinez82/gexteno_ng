<form id="form_buscador_top" name="form_buscador_top" method="post" action="ajax/modulos/pde_recepcion_gestion/set_pde_recepcion_gestion_buscador_top.php">

    <div class="col centro-pedido">
        <div class="label"><?php Lang::_lang('Ctr Pedido') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_pde_centro_pedido_id', Gral::getCmbFiltro(PdeCentroPedido::getPdeCentroPedidosCmbFxCredencial(), '...'), $cmb_filtro_pde_centro_pedido_id, 'textbox') ?>
        </div>
    </div>

    <div class="col centro-pedido">
        <div class="label"><?php Lang::_lang('Proveedor') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmbF(), '...'), $cmb_filtro_prv_proveedor_id, 'textbox selective-input-filtro') ?>
        </div>
    </div>

    <div class="col centro-pedido">
        <div class="label"><?php Lang::_lang('Etiqueta') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_ins_etiqueta_id', Gral::getCmbFiltro(InsEtiqueta::getInsEtiquetasCmbF(), '...'), $cmb_filtro_ins_etiqueta_id, 'textbox') ?>
        </div>
    </div>

    <!--
    <div class="col categoria">
        <div class="label"><?php Lang::_lang('Categoria') ?></div>
        <div class="dato">
    <?php Html::html_dib_select(1, 'cmb_filtro_ins_categoria_id', Gral::getCmbFiltro(InsCategoria::getInsCategoriasCmb(true), '...'), $cmb_filtro_ins_categoria_id, 'textbox') ?>
        </div>
    </div>

    <div class="col insumo">
        <div class="label"><?php Lang::_lang('Insumo') ?></div>
        <div class="dato">
    <?php //Html::html_dib_select(1, 'cmb_filtro_ins_insumo_id', Gral::getCmbFiltro(InsInsumo::getInsInsumosComprablesCmb(), '...'), $cmb_filtro_ins_insumo_id, 'textbox') ?>
        </div>
    </div>
    
    <div class="col tipo">
        <div class="label"><?php Lang::_lang('Tipo') ?></div>
        <div class="dato">
    <?php Html::html_dib_select(1, 'cmb_filtro_pde_tipo_recepcion_id', Gral::getCmbFiltro(PdeTipoRecepcion::getPdeTipoRecepcionsCmb(), '...'), $cmb_filtro_pde_tipo_recepcion_id, 'textbox') ?>
        </div>
    </div>

    <div class="col centro-recepcion">
        <div class="label"><?php Lang::_lang('Ctr Recepc') ?></div>
        <div class="dato">
    <?php Html::html_dib_select(1, 'cmb_filtro_pde_centro_recepcion_id', Gral::getCmbFiltro(PdeCentroRecepcion::getPdeCentroRecepcionsCmbXUsUsuario(), '...'), $cmb_filtro_pde_centro_recepcion_id, 'textbox') ?>
        </div>
    </div>    
    -->

    <div class="col estado">
        <div class="label"><?php Lang::_lang('Estado') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_pde_recepcion_tipo_estado_id', Gral::getCmbFiltro(PdeRecepcionTipoEstado::getPdeRecepcionTipoEstadosCmb(), '...'), $cmb_filtro_pde_recepcion_tipo_estado_id, 'textbox') ?>
        </div>
    </div>

    <div class="col">
        <div class="label"><?php Lang::_lang('Busq (2 letras min)') ?></div>
        <input id="txt_buscador" name="txt_buscador" type="text" class="textbox" size="15" title="<?php Lang::_lang('Ingrese la palabra que desea buscar') ?>" />
        <img class="txt_buscador_boton" src="imgs/lupa.png" width="20">
    </div>

    <div class="col">
        <div class="label"><?php Lang::_lang('Cant por Pag') ?></div>
        <input id="txt_cantidad_paginas" name="txt_cantidad_paginas" type="text" class="textboxx" size="5" value="<?php echo PdeRecepcion::getSesPagCantidad() ?>" title="<?php Lang::_lang('Actualmente se visualizan') ?> <?php echo PdeRecepcion::getSesPagCantidad() ?> <?php Lang::_lang('PdeRecepcion') ?> <?php Lang::_lang('por Pagina') ?>" />
    </div>

    <div class="col botonera">
        <a style="display:none;" class="boton agregar-recepcion" href='pde_recepcion_gestion_alta.php' title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('PdeRecepcion') ?>'><img src="imgs/btn_add.gif" width="25"></a>

        <?php if (false) { ?>
            <?php if (UsCredencial::getEsAcreditado("PDE_RECEPCION_GESTION_GENERAR_PDE_FACTURA")) { ?>
                <label class="boton registrar-pde-factura" title="<?php Lang::_lang('Registrar Factura de Compra') ?>"><img src="imgs/btn_arbol.png" width="26"></label>
            <?php } ?>
        <?php } ?>

        <label class="boton refresh-all" title="<?php Lang::_lang('Actualizar Listado') ?>"><img src="imgs/btn_refresh.png" width="22"></label>
    </div>
</form>

