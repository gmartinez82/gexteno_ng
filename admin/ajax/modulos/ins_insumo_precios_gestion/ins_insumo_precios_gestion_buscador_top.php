<?php
$cmb_filtro_iva_incluido = Gral::getSes(DbConfig::CONFIG_SISTEMA_CODIGO.DbConfig::CONFIG_CONF_PROYECTO_MIN.'INS_INSUMO_PRECIOS_GESTION_FILTRO_IVA_INCLUIDO');
if (trim($cmb_filtro_iva_incluido) == '') {
    $cmb_filtro_iva_incluido = 0;
}

$ins_tipo_lista_precio = InsTipoListaPrecio::getOxCodigo(InsInsumo::TIPO_LISTA_DEFAULT);
if($ins_tipo_lista_precio){
    $cmb_filtro_ins_tipo_lista_precio_id = $ins_tipo_lista_precio->getId();
}
?>
<form id="form_buscador_top" name="form_buscador_top" method="post" action="ajax/modulos/ins_insumo_precios_gestion/set_ins_insumo_precios_gestion_buscador_top.php">

    <div class="col fecha-desde">
        <div class="label"><?php Lang::_lang('Ult Modif Desde') ?></div>
        <div class="dato">
            <input id="txt_filtro_desde" name="txt_filtro_desde" type="text" class="textbox date" size="6" title="<?php Lang::_lang('Ingrese la fecha DESDE') ?>" />
            <input type="button" id="cal_txt_filtro_desde" value=" ... ">
            <script type='text/javascript'>
                Calendar.setup({
                    inputField: 'txt_filtro_desde', ifFormat: '%d/%m/%Y', button: 'cal_txt_filtro_desde', onUpdate: function () {
                    }
                });
            </script>
        </div>
    </div>

    <div class="col fecha-hasta">
        <div class="label"><?php Lang::_lang('Ult Modif Hasta') ?></div>
        <div class="dato">
            <input id="txt_filtro_hasta" name="txt_filtro_hasta" type="text" class="textbox date" size="6" title="<?php Lang::_lang('Ingrese la fecha HASTA') ?>" />
            <input type="button" id="cal_txt_filtro_hasta" value=" ... ">
            <script type='text/javascript'>
                Calendar.setup({
                    inputField: 'txt_filtro_hasta', ifFormat: '%d/%m/%Y', button: 'cal_txt_filtro_hasta', onUpdate: function () {
                    }
                });
            </script>
        </div>
    </div>    
    
    <div class="col categoria">
        <div class="label"><?php Lang::_lang('Tipo') ?></div>
        <div class="dato">
        <?php Html::html_dib_select(1, 'cmb_filtro_ins_tipo_insumo_id', Gral::getCmbFiltro(InsTipoInsumo::getInsTipoInsumosCmb(true),'...'), $cmb_filtro_ins_tipo_insumo_id, 'textbox') ?>
        </div>
    </div>
    
    <div class="col proveedor">
        <div class="label"><?php Lang::_lang('Proveedor') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(true), '...'), $cmb_filtro_prv_proveedor_id, 'textbox selective-input-filtro') ?>
        </div>
    </div>

    <div class="col etiqueta">
        <div class="label"><?php Lang::_lang('Etiqueta') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_ins_etiqueta_id', Gral::getCmbFiltro(InsEtiqueta::getInsEtiquetasCmb(true), '...'), $cmb_filtro_ins_etiqueta_id, 'textbox selective-input-filtro') ?>
        </div>
    </div>

    <div class="col marca">
        <div class="label"><?php Lang::_lang('Marca Insumo') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_ins_marca_id', Gral::getCmbFiltro(InsMarca::getInsMarcasCmb(), '...'), $cmb_filtro_ins_marca_id, 'textbox selective-input-filtro') ?>
        </div>
    </div>

    <div class="col venta-online">
        <div class="label"><?php Lang::_lang('Vta Online') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_venta_web', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(true), '...'), $cmb_filtro_venta_web, 'textbox') ?>
        </div>
    </div>
    
    <div class="col">
        <div class="label"><?php Lang::_lang('Busq rapida') ?></div>
        <input id="txt_buscador" name="txt_buscador" type="text" class="textbox" size="15" placeholder="<?php Lang::_lang('Ingrese palabra a buscar') ?>" title="<?php Lang::_lang('Ingrese la palabra que desea buscar') ?>" />
        <img class="txt_buscador_boton" src="imgs/lupa.png" width="20">
    </div>

    <div class="col">
        <div class="label"><?php Lang::_lang('Cant por Pag') ?></div>
        <input id="txt_cantidad_paginas" name="txt_cantidad_paginas" type="text" class="textboxx" size="2" value="<?php echo InsInsumo::getSesPagCantidad() ?>" title="<?php Lang::_lang('Actualmente se visualizan') ?> <?php echo InsInsumo::getSesPagCantidad() ?> <?php Lang::_lang('InsInsumo') ?> <?php Lang::_lang('por Pagina') ?>" />
    </div>

    <div class="col">

        <?php if (UsCredencial::getEsAcreditado("INS_INSUMO_PRECIOS_GESTION_VINCULAR_CATEGORIA")) { ?>
            <label class="boton vincular-categoria" title="<?php Lang::_lang('Vincular Categorias') ?>"><img src="imgs/btn_arbol.png" width="26"></label>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado("INS_INSUMO_PRECIOS_GESTION_MODIFICAR")) { ?>
            <label class="boton modificar-importe" title="<?php Lang::_lang('Modificar Importes') ?>"><img src="imgs/btn_importe.png" width="18"></label>
        <?php } ?>

        <label class="boton refresh-all" title="<?php Lang::_lang('Actualizar Listado') ?>"><img src="imgs/btn_refresh.png" width="22"></label>

    </div>
    
    <div class="clear-fix"></div>

    <div class="col venta-online">
        <div class="label"><?php Lang::_lang('IVA Incluido') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_iva_incluido', GralSiNo::getGralSiNosCmb(true), $cmb_filtro_iva_incluido, 'textbox') ?>
        </div>
    </div>
    
    <div class="col fecha-desde">
        <div class="label"><?php Lang::_lang('Costo Desde') ?></div>
        <div class="dato">
            <input id="txt_filtro_costo_desde" name="txt_filtro_costo_desde" type="text" class="textbox" size="4" title="<?php Lang::_lang('Ingrese costo DESDE') ?>" />
        </div>
    </div>

    <div class="col fecha-hasta">
        <div class="label"><?php Lang::_lang('Costo Hasta') ?></div>
        <div class="dato">
            <input id="txt_filtro_costo_hasta" name="txt_filtro_costo_hasta" type="text" class="textbox" size="4" title="<?php Lang::_lang('Ingrese costo HASTA') ?>" />
        </div>
    </div>    
    
    <div class="col categoria">
        <div class="label"><?php Lang::_lang('Categoria') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_ins_categoria_id', Gral::getCmbFiltro(InsCategoria::getInsCategoriasCmb(true), '...'), $cmb_filtro_ins_categoria_id, 'textbox selective-input-filtro') ?>
        </div>
    </div>

    <div class="col descuento">
        <div class="label"><?php Lang::_lang('Descuento') ?> %</div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_porcentaje_descuento', Gral::getCmbFiltro(GralSiNo::getGralSisCmb(true), '...'), $cmb_filtro_porcentaje_descuento, 'textbox') ?>
        </div>
    </div>
    
    <div class="col incremento">
        <div class="label"><?php Lang::_lang('Increm') ?> %</div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_porcentaje_incremento', Gral::getCmbFiltro(GralSiNo::getGralSisCmb(true), '...'), $cmb_filtro_porcentaje_incremento, 'textbox') ?>
        </div>
    </div>

    <div class="col manual-incremento">
        <div class="label"><?php Lang::_lang('Manual') ?> $</div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_importe_manual', Gral::getCmbFiltro(GralSiNo::getGralSisCmb(true), '...'), $cmb_filtro_importe_manual, 'textbox') ?>
        </div>
    </div>
    
    <div class="col lista-precio">
        <div class="label"><?php Lang::_lang('Tipo Lista de Precio') ?></div>
        <div class="dato">
        <?php Html::html_dib_select(1, 'cmb_filtro_ins_tipo_lista_precio_id', InsTipoListaPrecio::getInsTipoListaPreciosCmb(true), $cmb_filtro_ins_tipo_lista_precio_id, 'textbox') ?>
        </div>
    </div>
    
    <div class="col orden">
        <div class="label"><?php Lang::_lang('Ordenar Por') ?></div>
        <div class="dato">
        <?php Html::html_dib_select(1, 'cmb_filtro_ordenar_por', Gral::getCmbFiltro(InsListaPrecio::getOrdenarPorCmb(),'...'), $cmb_filtro_ordenar_por, 'textbox') ?>
        </div>
    </div>    
    

</form>

