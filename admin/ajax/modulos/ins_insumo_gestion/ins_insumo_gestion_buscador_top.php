<?php
$cmb_filtro_tipo_visualizacion = Gral::getSes('GEXTENO_KYA_INS_INSUMO_GESTION_FILTRO_TIPO_VISUALIZACION');
if (trim($cmb_filtro_tipo_visualizacion) == '') {
    $cmb_filtro_tipo_visualizacion = InsInsumo::TIPO_VISUALIZACION_DEFAULT;
}
if ($vta_presupuesto_activo) {
    $ins_tipo_lista_precio = InsTipoListaPrecio::getOxId($vta_presupuesto_activo->getInsTipoListaPrecioId());
}
if(!$ins_tipo_lista_precio){
    //$ins_tipo_lista_precio = InsTipoListaPrecio::getOxCodigo(InsInsumo::TIPO_LISTA_DEFAULT);
    $ins_tipo_lista_precio = InsTipoListaPrecio::getTipoListaPrecioPorDefaultParaUsuario($us_usuario_autenticado, $vta_vendedor_autenticado);    
    if($ins_tipo_lista_precio){
        $cmb_filtro_ins_tipo_lista_precio_id = $ins_tipo_lista_precio->getId();
    }
}else{
    $cmb_filtro_ins_tipo_lista_precio_id = $ins_tipo_lista_precio->getId();
}
?>
<form id="form_buscador_top" name="form_buscador_top" method="post" action="ajax/modulos/ins_insumo_gestion/set_ins_insumo_gestion_buscador_top.php">

    <div class="col descuento" style="display: nonex;">
        <div class="label">% <?php Lang::_lang('Desc Personaliz') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_porcentaje_descuento', Gral::getCmbFiltro(GralSiNo::getGralSisCmb(true), '...'), $cmb_filtro_porcentaje_descuento, 'textbox') ?>
        </div>
    </div>
    
    <div class="col etiqueta">
        <div class="label"><?php Lang::_lang('Etiqueta') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_ins_etiqueta_id', Gral::getCmbFiltro(InsEtiqueta::getInsEtiquetasCmb(true), '...'), $cmb_filtro_ins_etiqueta_id, 'textbox selective-input-filtro') ?>
        </div>
    </div>

    <div class="col marca">
        <div class="label"><?php Lang::_lang('Marca') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_ins_marca_id', Gral::getCmbFiltro(InsMarca::getInsMarcasCmb(), '...'), $cmb_filtro_ins_marca_id, 'textbox selective-input-filtro') ?>
        </div>
    </div>    

    <div class="col">
        <div class="label"><?php Lang::_lang('Cod Interno') ?></div>
        <input id="txt_buscador_codigo_interno" name="txt_buscador_codigo_interno" type="text" class="textbox" size="10" placeholder="<?php Lang::_lang('Ingrese codigo interno a buscar') ?>" title="<?php Lang::_lang('Ingrese el codigo interno que desea buscar') ?>" />
        <img id="btn_buscador_codigo_interno" class="txt_buscador_boton" src="imgs/lupa.png" width="20">
    </div>

    <div class="col">
        <div class="label"><?php Lang::_lang('Busqueda rapida') ?></div>
        <input id="txt_buscador" name="txt_buscador" type="text" class="textbox" size="30" placeholder="<?php Lang::_lang('Ingrese palabra a buscar') ?>" title="<?php Lang::_lang('Ingrese la palabra que desea buscar') ?>" />
        <img class="txt_buscador_boton" src="imgs/lupa.png" width="20">
    </div>

    <div class="col tipo-visualizacion">
        <div class="label"><?php Lang::_lang('Visualizacion') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_tipo_visualizacion', Gral::getTipoVisualizacionAdmCmb(), $cmb_filtro_tipo_visualizacion, 'textbox') ?>
        </div>
    </div>

    <div class="col">
        <div class="label"><?php Lang::_lang('Cant por Pag') ?></div>
        <input id="txt_cantidad_paginas" name="txt_cantidad_paginas" type="text" class="textboxx" size="2" value="<?php echo InsInsumo::getSesPagCantidad() ?>" title="<?php Lang::_lang('Actualmente se visualizan') ?> <?php echo InsInsumo::getSesPagCantidad() ?> <?php Lang::_lang('InsInsumo') ?> <?php Lang::_lang('por Pagina') ?>" />
    </div>

    <div class="col">
        <?php if (UsCredencial::getEsAcreditado('INS_INSUMO_ALTA')) { ?>
            <a class="boton" href='ins_insumo_alta.php' title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('InsInsumo') ?>'><img src="imgs/btn_add.gif" width="25"></a>
        <?php } ?>

        <label class="boton refresh-all" title="<?php Lang::_lang('Actualizar Listado') ?>"><img src="imgs/btn_refresh.png" width="22"></label>
    </div>

    <div class="clear-fix"></div>

    <div class="col categoria">
        <div class="label"><?php Lang::_lang('Categoria') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_ins_categoria_id', Gral::getCmbFiltro(InsCategoria::getInsCategoriasCmb(true), '...'), $cmb_filtro_ins_categoria_id, 'textbox selective-input-filtro') ?>
        </div>
    </div>

    <div class="col" style="display: none;">
        <div class="label"><?php Lang::_lang('Atributos') ?></div>
        <input id="txt_buscador_atributo" name="txt_buscador_atributo" type="text" class="textbox" size="30" placeholder="<?php Lang::_lang('Ingrese atributos a buscar') ?>" title="<?php Lang::_lang('Ingrese los atributos que desea buscar') ?>" />
        <img class="txt_buscador_boton" src="imgs/lupa.png" width="20">
    </div>

    <div class="col es-consumible">
        <div class="label"><?php Lang::_lang('Es Materia Prima') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_es_consumible', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(true), '...'), $criterio->getValorDeCampo('ins_insumo.es_consumible'), 'textbox') ?>
        </div>
    </div>    
    
    <div class="col es-vendible">
        <div class="label"><?php Lang::_lang('Es Vendible') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_es_vendible', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(true), '...'), $criterio->getValorDeCampo('ins_insumo.es_vendible'), 'textbox') ?>
        </div>
    </div>    
    
    <?php if (UsCredencial::getEsAcreditado('INS_INSUMO_GESTION_FILTRO_ESTADO')) { ?>
        <div class="col estado">
            <div class="label"><?php Lang::_lang('Habilitado') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_filtro_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(true), '...'), $criterio->getValorDeCampo('ins_insumo.estado'), 'textbox') ?>
            </div>
        </div>    
    <?php } ?>

    <div class="col categoria">
        <div class="label"><?php Lang::_lang('Tipo') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_ins_tipo_insumo_id', Gral::getCmbFiltro(InsTipoInsumo::getInsTipoInsumosCmb(true), '...'), $cmb_filtro_ins_tipo_insumo_id, 'textbox') ?>
        </div>
    </div>

    <?php if($vta_vendedor_autenticado){ ?>
    <div class="col categoria">
        <div class="label"><?php Lang::_lang('Tipo Lista de Precio') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_ins_tipo_lista_precio_id', $vta_vendedor_autenticado->getInsTipoListaPreciosHabilitadasParaVendedorCmb(), $cmb_filtro_ins_tipo_lista_precio_id, 'textbox') ?>
        </div>
    </div>
    <?php } ?>

    <div class="col orden">
        <div class="label"><?php Lang::_lang('Ordenar Por') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_ordenar_por', Gral::getCmbFiltro(InsInsumo::getOrdenarPorCmb(), '...'), $cmb_filtro_ordenar_por, 'textbox') ?>
        </div>
    </div>    

</form>

