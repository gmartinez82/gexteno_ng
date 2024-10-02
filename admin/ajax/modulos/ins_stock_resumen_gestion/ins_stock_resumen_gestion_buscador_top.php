<form id="form_buscador_top" name="form_buscador_top" method="post" action="ajax/modulos/ins_stock_resumen_gestion/set_ins_stock_resumen_gestion_buscador_top.php">


    <div class="col categoria">
        <div class="label"><?php Lang::_lang('Etiqueta') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_ins_etiqueta_id', Gral::getCmbFiltro(InsEtiqueta::getInsEtiquetasCmb(true), '...'), $cmb_filtro_ins_etiqueta_id, 'textbox') ?>
        </div>
    </div>
    
    <div class="col categoria">
        <div class="label"><?php Lang::_lang('Categoria') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_ins_categoria_id', Gral::getCmbFiltro(InsCategoria::getInsCategoriasCmb(true), '...'), $cmb_filtro_ins_categoria_id, 'textbox selective-input-filtro') ?>
        </div>
    </div>

    <div class="col insumo" style="display: none;">
        <div class="label"><?php Lang::_lang('Clasificacion') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_ins_clasificacion_id', Gral::getCmbFiltro(InsClasificacion::getInsClasificacionsCmb(true), '...'), $cmb_filtro_ins_clasificacion_id, 'textbox') ?>
        </div>
    </div>
    
    <div class="col marca">
        <div class="label"><?php Lang::_lang('Marca') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_ins_marca_id', Gral::getCmbFiltro(InsMarca::getInsMarcasCmb(), '...'), $cmb_filtro_ins_marca_id, 'textbox selective-input-filtro') ?>
        </div>
    </div>    
    
    <div class="col prv-proveedor">
        <div class="label"><?php Lang::_lang('Proveedor') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(true), '...'), $cmb_filtro_prv_proveedor_id, 'textbox selective-input-filtro') ?>
        </div>
    </div>

    <div class="col panol">
        <div class="label"><?php Lang::_lang('Deposito') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_pan_panol_id', Gral::getCmbFiltro(PanPanol::getPanPanolsCmb(), '...'), $cmb_filtro_pan_panol_id, 'textbox') ?>
        </div>
    </div>

    <div class="col panol">
        <div class="label"><?php Lang::_lang('Tipo Estado') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_ins_stock_resumen_tipo_estado_id', Gral::getCmbFiltro(InsStockResumenTipoEstado::getInsStockResumenTipoEstadosCmb(), '...'), $cmb_filtro_ins_stock_resumen_tipo_estado_id, 'textbox') ?>
        </div>
    </div>
    
    <div class="col destacado">
        <div class="label"><?php Lang::_lang('Req Abastec') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_requiere_reabastecimiento', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), $cmb_filtro_requiere_reabastecimiento, 'textbox') ?>
        </div>
    </div>

    <div class="col insumo">
        <div class="label"><?php Lang::_lang('Habilitado') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(true), '...'), $cmb_filtro_estado, 'textbox') ?>
        </div>
    </div>    
    
    <div class="col">
        <div class="label"><?php Lang::_lang('Busq rapida') ?></div>
        <input id="txt_buscador" name="txt_buscador" type="text" class="textbox" size="15" title="<?php Lang::_lang('Ingrese la palabra que desea buscar') ?>" />
        <img class="txt_buscador_boton" src="imgs/lupa.png" width="20">
    </div>

    <div class="col">
        <div class="label"><?php Lang::_lang('Cant por Pag') ?></div>
        <input id="txt_cantidad_paginas" name="txt_cantidad_paginas" type="text" class="textboxx" size="5" value="<?php echo InsStockResumen::getSesPagCantidad() ?>" title="<?php Lang::_lang('Actualmente se visualizan') ?> <?php echo InsStockResumen::getSesPagCantidad() ?> <?php Lang::_lang('InsStockResumen') ?> <?php Lang::_lang('por Pagina') ?>" />
    </div>

    <div class="col">

        <?php if (UsCredencial::getEsAcreditado('INS_STOCK_RESUMEN_GESTION_TOP_ACCION_REGISTRAR_INICIALIZACION')) { ?>
            <label class="boton registrar-inicializacion" title="<?php Lang::_lang('Inicializar Insumo') ?>">
                <img src="imgs/btn_add.gif" alt="add" width="25" />
            </label>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado("INS_STOCK_RESUMEN_GESTION_TOP_ACCION_REGISTRAR_OC_MASIVA")) { ?>
        <label class="boton registrar-oc-masiva" title="<?php Lang::_lang('Registrar OC Masiva') ?>" style="display: none;">
                <img src="imgs/btn_comprar.png" alt="oc" width="16" />
            </label>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado("INS_STOCK_RESUMEN_GESTION_TOP_ACCION_REGISTRAR_PDI_PEDIDO_AGRUPACION_MASIVA")) { ?>
        <label class="boton registrar-pdi-pedido-agrupacion" title="<?php Lang::_lang('Realizar Pedido Interno Masivo') ?>" style="display: nonex;">
                <img src="imgs/btn_panol.png" alt="oc" width="20" />
            </label>
        <?php } ?>
        <label class="boton refresh-all" title="<?php Lang::_lang('Actualizar Listado') ?>"><img src="imgs/btn_refresh.png" width="22"></label>
    </div>
</form>