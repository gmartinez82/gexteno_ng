<?php
$ins_tipo_lista_precio = InsTipoListaPrecio::getOxCodigo(InsInsumo::TIPO_LISTA_DEFAULT);
$cmb_filtro_ins_tipo_lista_precio_id = $ins_tipo_lista_precio->getId();
?>
<form id="form_buscador_top" name="form_buscador_top" method="post" action="ajax/modulos/ins_insumo_venta_web_gestion/set_ins_insumo_venta_web_gestion_buscador_top.php">

    <div class="col categoria">
        <div class="label"><?php Lang::_lang('Tipo') ?></div>
        <div class="dato">
        <?php Html::html_dib_select(1, 'cmb_filtro_ins_tipo_insumo_id', Gral::getCmbFiltro(InsTipoInsumo::getInsTipoInsumosCmb(true),'...'), $cmb_filtro_ins_tipo_insumo_id, 'textbox') ?>
        </div>
    </div>
    
    <div class="col categoria">
        <div class="label"><?php Lang::_lang('Proveedor') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(true), '...'), $cmb_filtro_prv_proveedor_id, 'textbox selective-input-filtro') ?>
        </div>
    </div>

    <div class="col categoria">
        <div class="label"><?php Lang::_lang('Etiqueta') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_ins_etiqueta_id', Gral::getCmbFiltro(InsEtiqueta::getInsEtiquetasCmb(true), '...'), $cmb_filtro_ins_etiqueta_id, 'textbox selective-input-filtro') ?>
        </div>
    </div>

    <div class="col categoria">
        <div class="label"><?php Lang::_lang('Categoria') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_ins_categoria_id', Gral::getCmbFiltro(InsCategoria::getInsCategoriasCmb(true), '...'), $cmb_filtro_ins_categoria_id, 'textbox selective-input-filtro') ?>
        </div>
    </div>

    <div class="col marca">
        <div class="label"><?php Lang::_lang('Marca Insumo') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_ins_marca_id', Gral::getCmbFiltro(InsMarca::getInsMarcasCmb(), '...'), $cmb_filtro_ins_marca_id, 'textbox selective-input-filtro') ?>
        </div>
    </div>

    <div class="col insumo">
        <div class="label"><?php Lang::_lang('Increm') ?> %</div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_porcentaje_incremento', Gral::getCmbFiltro(GralSiNo::getGralSisCmb(true), '...'), $cmb_filtro_porcentaje_incremento, 'textbox') ?>
        </div>
    </div>

    <div class="col insumo">
        <div class="label"><?php Lang::_lang('Manual') ?> $</div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_importe_manual', Gral::getCmbFiltro(GralSiNo::getGralSisCmb(true), '...'), $cmb_filtro_importe_manual, 'textbox') ?>
        </div>
    </div>
    
    <div class="col">
        <div class="label"><?php Lang::_lang('Busqueda rapida (2 letras min)') ?></div>
        <input id="txt_buscador" name="txt_buscador" type="text" class="textbox" size="20" placeholder="<?php Lang::_lang('Ingrese palabra a buscar') ?>" title="<?php Lang::_lang('Ingrese la palabra que desea buscar') ?>" />
        <img class="txt_buscador_boton" src="imgs/lupa.png" width="20">
    </div>

    <div class="col">
        <div class="label"><?php Lang::_lang('Cant por Pag') ?></div>
        <input id="txt_cantidad_paginas" name="txt_cantidad_paginas" type="text" class="textboxx" size="2" value="<?php echo InsInsumo::getSesPagCantidad() ?>" title="<?php Lang::_lang('Actualmente se visualizan') ?> <?php echo InsInsumo::getSesPagCantidad() ?> <?php Lang::_lang('InsInsumo') ?> <?php Lang::_lang('por Pagina') ?>" />
    </div>

    <div class="col">

        <?php if (UsCredencial::getEsAcreditado("INS_INSUMO_VENTA_WEB_GESTION_HABILITAR_MASIVO")) { ?>
            <label class="boton habilitar-von-masivo" title="<?php Lang::_lang('Habilitar en Tienda') ?>"><img src="imgs/icn_venta_web_1.png" width="22"></label>
        <?php } ?>

    </div>
    
    <div class="clear-fix"></div>


    <div class="col venta-online-sino">
        <div class="label"><?php Lang::_lang('Vta Online') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_venta_web', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(true), '...'), $cmb_filtro_venta_web, 'textbox') ?>
        </div>
    </div>

    <div class="col venta-online-sino">
        <div class="label"><?php Lang::_lang('Vta Mayorista') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_venta_mayorista', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(true), '...'), $cmb_filtro_venta_mayorista, 'textbox') ?>
        </div>
    </div>

    <div class="col venta-online-sino">
        <div class="label"><?php Lang::_lang('Destacado') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_venta_web_destacado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(true), '...'), $cmb_filtro_venta_web_destacado, 'textbox') ?>
        </div>
    </div>
    
    
    <div class="col categoria">
        <div class="label"><?php Lang::_lang('Tipo Lista de Precio') ?></div>
        <div class="dato">
        <?php Html::html_dib_select(1, 'cmb_filtro_ins_tipo_lista_precio_id', InsTipoListaPrecio::getInsTipoListaPreciosCmbF(), $cmb_filtro_ins_tipo_lista_precio_id, 'textbox') ?>
        </div>
    </div>
    
    <div class="col orden">
        <div class="label"><?php Lang::_lang('Ordenar Por') ?></div>
        <div class="dato">
        <?php Html::html_dib_select(1, 'cmb_filtro_ordenar_por', Gral::getCmbFiltro(InsListaPrecio::getOrdenarPorCmb(),'...'), $cmb_filtro_ordenar_por, 'textbox') ?>
        </div>
    </div>    
    

</form>

