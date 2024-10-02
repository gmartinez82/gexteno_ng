<?php

// se obtiene el estado actual del resumen de stock
$ins_stock_resumen_tipo_estado = $ins_stock_resumen->getInsStockResumenTipoEstado();
$ins_insumo = $ins_stock_resumen->getInsInsumo();
$pan_panol = $ins_stock_resumen->getPanPanol();

$arr_puntos_insumo = $ins_insumo->getInsInsumoPuntosEnPanol($ins_stock_resumen->getPanPanol());
$arr_puntos_sugeridos_insumo = $ins_insumo->getInsInsumoPuntosSugeridosEnPanol($ins_stock_resumen->getPanPanol());

switch ($ins_stock_resumen_tipo_estado->getCodigo()) {
    case InsStockResumenTipoEstado::TIPO_REGULAR: $css_cantidad_contra_puntos = ''; break;
    case InsStockResumenTipoEstado::TIPO_EXCEDIDO: $css_cantidad_contra_puntos = 'punto_maximo_mayor'; break;
    case InsStockResumenTipoEstado::TIPO_REQUIERE_PEDIDO: $css_cantidad_contra_puntos = 'punto_pedido_menor'; break;
    case InsStockResumenTipoEstado::TIPO_MENOR_MINIMO: $css_cantidad_contra_puntos = 'punto_minimo_menor'; break;
    default: $css_cantidad_contra_puntos = '';
}

$css_detalle = '';
if ($ins_stock_resumen->getInsInsumo()->getIdentificable()) {
    $css_detalle = 'detalle';
}

$pde_centro_pedido = $pan_panol->getPdeCentroPedido();
$ins_insumo_costo = $ins_insumo->getInsInsumoCostoActual($pde_centro_pedido);

// potestad sobre panol
$arr_panol_id_potestads = PanPanol::getArrayPanPanolIdsXCredencial();

// ubicacion y puntos de stock
$ins_insumo_pan_panol = $ins_insumo->getUbicacionEnPanol($pan_panol);
$ins_stock_tipo_configuracion = false;
if($ins_insumo_pan_panol){
    $ins_stock_tipo_configuracion = $ins_insumo_pan_panol->getInsStockTipoConfiguracion();    
}

$pde_centro_pedido = $pan_panol->getPdeCentroPedido();

$cantidad_real = $ins_stock_resumen->getCantidadReal();
$cantidad_reservados = $ins_stock_resumen->getCantidadComprometida();
$cantidad_disponible = $ins_stock_resumen->getCantidad();

// se consultan los pedidos PDI activos
$pdi_pedidos_activos = PdiPedido::getPdiPedidosActivos($pan_panol->getId(), $ins_insumo->getId());

//se consultan los pedidos items PDI activos
$pdi_pedido_agrupacion_items = PdiPedidoAgrupacion::getPdiPedidoAgrupacionItemsActivos($pan_panol->getId(), $ins_insumo->getId());

// se consultan los pedidos PDE activos
$pde_pedidos_activos = PdePedido::getPdePedidosActivos($pde_centro_pedido->getId(), $ins_insumo->getId());

// se consultan las OCs activos
$pde_ocs_activos = PdeOc::getPdeOcsActivos($pde_centro_pedido->getId(), $ins_insumo->getId());

// se consultan los items temporales de AOCs
$pde_oc_agrupacion_items = PdeOcAgrupacion::getPdeOcAgrupacionItemsActivos($pde_centro_pedido->getId(), $ins_insumo->getId());

$pan_tipo_panol = $pan_panol->getPanTipoPanol();
?>

<td align='center' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
    <div class="checkbox">
        <input type="checkbox" class="textbox chk_ins_stock_resumen" id="chk_ins_stock_resumen_<?php echo $ins_stock_resumen->getId() ?>" name="chk_ins_stock_resumen[<?php echo $ins_stock_resumen->getId() ?>]" value="<?php echo $ins_stock_resumen->getId() ?>" />
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="avatar">
        <a href="<?php echo $ins_insumo->getPathImagenPrincipal() ?>">
            <img src="<?php echo $ins_insumo->getPathImagenPrincipal(true) ?>" width="40" alt="img-insumo" />
        </a>
    </div>
</td>

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    
    <div class='info-insumo'>

        <div class="categoria">	
            <?php Gral::_echo($ins_insumo->getInsCategoria()->getFamiliaDescripcion()) ?>
        </div>	
        
        <div class="insumo">	
            <?php Gral::_echo($ins_insumo->getDescripcion()) ?>

            <?php if(!$ins_insumo->getControlStock()){ ?>
                <img class="alerta" src='imgs/icn_alerta.png' width='12' border='0' title="El insumo no mueve stock" />
            <?php } ?>
        </div>
        
        <div class="codigo-interno">
            CI: <?php Gral::_echo($ins_insumo->getCodigoInterno()) ?>
        </div>
        
        <div class="codigo-interno">
            <?php Gral::_echo($ins_insumo->getInsMarca()->getDescripcion()) ?>: <?php Gral::_echo($ins_insumo->getCodigoMarca()) ?>
        </div>

        <?php 
        // ---------------------------------------------------------------------
        // se muestran bultos configurados al insumo
        // ---------------------------------------------------------------------
        $ins_insumo->getHtmlInsumoBultoConfiguracion();
        ?>
    </div>

    <?php if (count($pdi_pedidos_activos) > 0) { ?>
        <div class="pdi-pedido-activos">
            <?php foreach ($pdi_pedidos_activos as $pdi_pedido_activo) { ?>
                PDI: <label class="pdi-pedido-activo"><?php Gral::_echo($pdi_pedido_activo->getPdiPedidoDescripcionFull()) ?></label><br />
            <?php } ?>
        </div>
    <?php } ?>

     <?php if (count($pdi_pedido_agrupacion_items) > 0) { ?>
            <div class="pdi-pedido-agrupacion-item-activos">
                <?php foreach ($pdi_pedido_agrupacion_items as $pdi_pedido_agrupacion_item) { ?>
                    APDI: <label class="pdi-pedido-agrupacion-item-activo"><?php Gral::_echo($pdi_pedido_agrupacion_item->getDescripcionFull()) ?> en preparacion</label><br />
                <?php } ?>
            </div>
    <?php } ?>

    <?php if ($pan_tipo_panol->getCodigo() == PanTipoPanol::TIPO_PRINCIPAL) { ?>
        <?php if (count($pde_pedidos_activos) > 0) { ?>
            <div class="pde-pedido-activos">
                <?php foreach ($pde_pedidos_activos as $pde_pedido_activo) { ?>
                    PDE: <label class="pde-pedido-activo"><?php Gral::_echo($pde_pedido_activo->getPdePedidoDescripcionFull()) ?></label><br />
                <?php } ?>
            </div>
        <?php } ?>

        <?php if (count($pde_ocs_activos) > 0) { ?>
            <div class="pde-oc-activos">
                <?php foreach ($pde_ocs_activos as $pde_oc_activo) { ?>
                    OC: <label class="pde-oc-activo"><?php Gral::_echo($pde_oc_activo->getPdeOcDescripcionFull()) ?></label><br />
                <?php } ?>
            </div>
        <?php } ?>
    
        <?php if (count($pde_oc_agrupacion_items) > 0) { ?>
            <div class="pde-oc-agrupacion-item-activos">
                <?php foreach ($pde_oc_agrupacion_items as $pde_oc_agrupacion_item) { ?>
                    AOC: <label class="pde-oc-agrupacion-item-activo"><?php Gral::_echo($pde_oc_agrupacion_item->getDescripcionFull()) ?> en preparacion</label><br />
                <?php } ?>
            </div>
        <?php } ?>
    
    <?php } ?>

</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>

    <div class="pan_panol_id">	
        <div class="pan_panol_descripcion">
            <?php Gral::_echo($ins_stock_resumen->getPanPanol()->getDescripcion()) ?>
        </div>
        <div class="pan_panol_tipo">
            <?php Gral::_echo($ins_stock_resumen->getPanPanol()->getPanTipoPanol()->getDescripcion()) ?>
        </div>
        <?php if ($ins_insumo->getTieneUbicacionEnPanol($pan_panol)) { ?>
            <img class="boton ver ubicacion" src='imgs/icon_ubicacion.png' width='12' border='0' title="Ver ubicacion" />
        <?php } ?>
    </div>

    <?php if ($ins_insumo_pan_panol) { ?>
        <div class="ubicacion">	
            <?php Gral::_echo($ins_insumo_pan_panol->getDescripcion()) ?>
        </div>
    <?php } ?>
</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="ins_clasificacion">
        <?php if ($ins_insumo_pan_panol) { ?>
            <?php Gral::_echo($ins_insumo_pan_panol->getInsClasificacion()->getCodigo()) ?>
        <?php } ?>
    </div>
</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="cantidad_real">
        <?php Gral::_echoFloatDyn($cantidad_real) ?>
    </div>
</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <?php if ($cantidad_reservados > 0) { ?>
        <div class="cantidad_reserva" title="<?php Gral::_echo($cantidad_reservados) ?> Comprometido">
            <?php Gral::_echoFloatDyn($cantidad_reservados) ?>
        </div>
    <?php } else { ?>
        -
    <?php } ?>
</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="cantidad_disponible <?php echo $css_detalle ?> <?php echo $css_cantidad_contra_puntos ?> ">
        <?php Gral::_echoFloatDyn($cantidad_disponible) ?>
    </div>
</td>

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="tipo-estado">
        &nbsp;
        <img src="imgs/ins_stock_resumen_tipo_estado/<?php Gral::_echo(($ins_stock_resumen_tipo_estado) ? $ins_stock_resumen_tipo_estado->getCodigo() : '') ?>.png" width="15" alt="tipo-estado" align="absmiddle">
        <?php Gral::_echo(($ins_stock_resumen_tipo_estado) ? $ins_stock_resumen_tipo_estado->getDescripcion() : '') ?>
    </div>
    <div class="modificado">
        <?php Gral::_echo(Gral::getFechaHoraToWeb($ins_stock_resumen->getModificado())) ?>
    </div>

</td>

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>

    <div class="puntos PUNTO_MINIMO" title="Punto Minimo">
        <?php Gral::_echoInt($arr_puntos_insumo[InsInsumo::PUNTO_MINIMO]) ?>
    </div>
    <div class="puntos PUNTO_PEDIDO" title="Punto de Pedido">
        <?php Gral::_echoInt($arr_puntos_insumo[InsInsumo::PUNTO_PEDIDO]) ?>
    </div>
    <div class="puntos PUNTO_MAXIMO" title="Punto Maximo">
        <?php Gral::_echoInt($arr_puntos_insumo[InsInsumo::PUNTO_MAXIMO]) ?>
    </div>

    <div class="puntos accion">
        <?php if (UsCredencial::getEsAcreditado('INS_STOCK_RESUMEN_GESTION_ACCION_MODIFICAR_PUNTOS_CENTRAL')) { ?>
            <img class="boton editar puntos_panol_central" src='imgs/btn_modi.gif' width='15' border='0' title="Editar Puntos Central" />
        <?php } elseif (in_array($pan_panol->getId(), $arr_panol_id_potestads)) { ?>
            <?php if (UsCredencial::getEsAcreditado('INS_STOCK_RESUMEN_GESTION_ACCION_MODIFICAR_PUNTOS_APODERADO')) { ?>
                <img class="boton editar puntos_panol_apoderado" src='imgs/btn_modi.gif' width='15' border='0' title="Editar Puntos Apoderado" />
            <?php } ?>
        <?php } ?>

        <?php if($ins_stock_tipo_configuracion && $ins_stock_tipo_configuracion->getCodigo() == InsStockTipoConfiguracion::TIPO_AUTOMATICA){ ?>
            <img src='imgs/icon_automatico.png' width='15' border='0' title="Configuracion Automatica de Puntos" class='gen-modal-open' gen-modal-file="ajax/modulos/ins_stock_resumen_gestion/modal_remisiones_mensuales.php?identificador=<?php echo $ins_insumo_pan_panol->getId() ?>" gen-modal-content=".div_modal" gen-modal-width="70%" gen-modal-height="600" gen-modal-titulo="Detalle de Ventas Mensuales" gen-modal-callback="setInit()" />
        <?php }elseif($ins_stock_tipo_configuracion && $ins_stock_tipo_configuracion->getCodigo() == InsStockTipoConfiguracion::TIPO_MANUAL){ ?>
            <img src='imgs/icon_manual.png' width='18' border='0' title="Configuracion Manual de Puntos" class='gen-modal-open' gen-modal-file="ajax/modulos/ins_stock_resumen_gestion/modal_remisiones_mensuales.php?identificador=<?php echo $ins_insumo_pan_panol->getId() ?>" gen-modal-content=".div_modal" gen-modal-width="70%" gen-modal-height="600" gen-modal-titulo="Detalle de Ventas Mensuales" gen-modal-callback="setInit()" />
        <?php } ?>
    </div>

    <?php if($ins_insumo_pan_panol){ ?>
    <div class="puntos-modificado">
        Actualizado el <?php Gral::_echo(Gral::getFechaHoraToWEB($ins_insumo_pan_panol->getModificado())) ?>
    </div>
    <?php } ?>
    
    <?php if($ins_stock_tipo_configuracion && $ins_stock_tipo_configuracion->getCodigo() == InsStockTipoConfiguracion::TIPO_MANUAL){ ?>
        <div class="puntos-modificado-por">
            Por <?php Gral::_echo($ins_insumo_pan_panol->getModificadoPorDescripcion()) ?>
        </div>

            <?php
            if($arr_puntos_sugeridos_insumo && $arr_puntos_sugeridos_insumo[InsInsumo::PUNTO_MAXIMO] > 0){
            ?>
            <div class="puntos PUNTO_MINIMO sugerido" title="Punto Minimo Sugerido">
                <?php Gral::_echoInt($arr_puntos_sugeridos_insumo[InsInsumo::PUNTO_MINIMO]) ?>
            </div>
            <div class="puntos PUNTO_PEDIDO sugerido" title="Punto de Pedido Sugerido">
                <?php Gral::_echoInt($arr_puntos_sugeridos_insumo[InsInsumo::PUNTO_PEDIDO]) ?>
            </div>
            <div class="puntos PUNTO_MAXIMO sugerido" title="Punto Maximo Sugerido">
                <?php Gral::_echoInt($arr_puntos_sugeridos_insumo[InsInsumo::PUNTO_MAXIMO]) ?>
            </div>    
            <?php } ?>
    <?php } ?>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="costo">
        <?php if ($ins_insumo_costo) { ?>
            <?php Gral::_echoImp($ins_insumo_costo->getCosto()) ?>
            <div class="modificado">
                <?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_costo->getModificado())) ?>
            </div>
        <?php } else { ?>
            -
        <?php } ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <ul class="adm_botones_acciones">

        <?php if (UsCredencial::getEsAcreditado('INS_STOCK_RESUMEN_GESTION_ACCION_GENERAR_PDE')) { ?>
            <?php if (in_array($pan_panol->getId(), $arr_panol_id_potestads)) { ?>
                <li class='adm_botones_accion generar-pde' title="Iniciar Compulsa">
                    <img src='imgs/btn_comprar.png' width='13' border='0' align='absmiddle' />
                </li>
            <?php } ?>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('INS_STOCK_RESUMEN_GESTION_ACCION_CONFIG')) { ?>
            <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/ins_stock_resumen_gestion/db_context_acciones.php?id=<?php Gral::_echo($ins_stock_resumen->getId()) ?>' modulo_metodo_init="setInitStockResumen()" title="Mas Opciones">
                <img src='imgs/btn_ajustar.png' width='23' align='absmiddle' />
            </li>
        <?php } ?>

    </ul>

</td>
