<?php
$ins_insumo = $vta_presupuesto_ins_insumo->getInsInsumo();
$vta_presupuesto = $vta_presupuesto_ins_insumo->getVtaPresupuesto();
$gral_tipo_iva = $ins_insumo->getGralTipoIvaVentaObj();
$ins_insumo_costo = $ins_insumo->getInsInsumoCostoActual();

$vta_vendedor_id = $vta_presupuesto->getVtaVendedorId();

$css_insumo_descripcion = '';
if ($vta_presupuesto_ins_insumo->getDescripcion() != $ins_insumo->getDescripcion()) {
    $css_insumo_descripcion = 'modificado';
}

$cantidad = $vta_presupuesto_ins_insumo->getCantidad();
$importe_unitario = $vta_presupuesto_ins_insumo->getImporteUnitario();
$importe_unitario_con_descuento = $vta_presupuesto_ins_insumo->getImporteUnitarioConDescuento();

$importe_unitario_actual = $vta_presupuesto_ins_insumo->getImporteUnitarioActual();
$importe_unitario_actual_con_descuento = $vta_presupuesto_ins_insumo->getImporteUnitarioActualConDescuento();

$ins_lista_precio = $vta_presupuesto_ins_insumo->getInsListaPrecio();
//$ins_tipo_lista_precio = $ins_lista_precio->getInsTipoListaPrecio();
$ins_tipo_lista_precio = $vta_presupuesto->getInsTipoListaPrecio();

$ins_insumo_bultos = $ins_insumo->getInsInsumoBultosOrdenados($ins_tipo_lista_precio); // bultos

// -----------------------------------------------------------------------------
// se determina si hay conflicto
// -----------------------------------------------------------------------------
$css_importe_actualizado = '';
$vta_presupuesto_conflicto = $vta_presupuesto_ins_insumo->setControlVtaPresupuestoConflicto();

if ($vta_presupuesto_conflicto) {
    $css_importe_actualizado = 'importe-actualizado-conflicto';
    $hay_conflicto_general = true;
}
// -----------------------------------------------------------------------------

$ins_unidad_medida = $ins_insumo->getInsUnidadMedida();
$fraccionable = $ins_unidad_medida->getFraccionable();

$cantidad_minima = ($fraccionable == 1) ? 0.01 : 1;
$step = ($fraccionable == 1) ? 0.01 : 1;


// -----------------------------------------------------------------------------
// se determina si existe descuento por etiqueta y vendedor
// -----------------------------------------------------------------------------
$descuento_maximo = $ins_insumo->getDescuentoMaximoXVtaVendedor($vta_vendedor_id);

// -----------------------------------------------------------------------------
// se determina si existe descuento por rango y se toma el descuento de negociacion de alli
// -----------------------------------------------------------------------------
$vta_politica_descuento_rango_aplica = $ins_insumo->getVtaPoliticaDescuentoRangoActiva($ins_tipo_lista_precio, $cantidad);
if ($vta_politica_descuento_rango_aplica) {
    $descuento_maximo = $vta_politica_descuento_rango_aplica->getPorcentajeNegociacion();
}

// -----------------------------------------------------------------------------
// se determina si existe descuento por lista de precio
// -----------------------------------------------------------------------------
if ($ins_tipo_lista_precio->getPorcentajeDescuentoMaximo() != 0) {
    $descuento_maximo = $ins_tipo_lista_precio->getPorcentajeDescuentoMaximo();
}

// -----------------------------------------------------------------------------
// se determina si existe descuento especifico por lista de precio
// -----------------------------------------------------------------------------
if ($ins_lista_precio->getPorcentajeDescuento() != $descuento_maximo && $ins_lista_precio->getPorcentajeDescuento() > 0) {
    $descuento_maximo = $ins_lista_precio->getPorcentajeDescuento();
}

// -----------------------------------------------------------------------------
// se determina cantidad minima de venta por lista de precio
// -----------------------------------------------------------------------------
$cantidad_minima_venta = 0;
if($ins_lista_precio->getCantidadMinimaVenta() > 0){
    $cantidad_minima_venta = $ins_lista_precio->getCantidadMinimaVenta();
}


// -----------------------------------------------------------------------------
// se determina si el item ya genero OV
// -----------------------------------------------------------------------------
$vta_orden_venta = $vta_presupuesto_ins_insumo->getVtaOrdenVenta();
// -----------------------------------------------------------------------------

if ($ins_insumo_costo) {
    $dias_desde_actualizacion_costo = Date::getDiferenciaTiempo('d', $ins_insumo_costo->getModificado(), date('Y-m-d'));

    $arr_fechas = Date::getArrFecha($ins_insumo_costo->getModificado());
    if ($arr_fechas['anio'] == date('Y') && $arr_fechas['mes'] == date('m')) {
        $css_estado_desde_actualizacion_costo = 'MES_ACTUAL';
    } elseif ($arr_fechas['anio'] == date('Y') && $arr_fechas['mes'] == str_pad((date('m') - 1), 0, STR_PAD_LEFT)) {
        $css_estado_desde_actualizacion_costo = 'MES_ANTERIOR';
    } else {
        $css_estado_desde_actualizacion_costo = 'MES_MUYANTERIOR';
    }
}

//$pan_panol_seleccionado = PanPanol::getOxId(1);
if ($pan_panol_seleccionado) {
    $ins_stock_resumen = $ins_insumo->getInsStockResumenEnPanol($pan_panol_seleccionado);
    $cantidad_reservados = $ins_insumo->getInsInsumoReservasActivasCantidadEnPanol($pan_panol_seleccionado);
}

$prd_orden_trabajo = false;
if ( $vta_presupuesto_ins_insumo->getPrdOrdenTrabajo() )
{
    $prd_orden_trabajo = $vta_presupuesto_ins_insumo->getPrdOrdenTrabajo();
}

?>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="cont">
        <?php Gral::_echo($cont) ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="seleccion">
        <?php if (!$vta_orden_venta) { ?>
            <?php if (UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_EDICION_GESTION_ACCION_CHECKBOX_ITEM')) { ?>        
                <input type="checkbox" class="textbox chk_vta_presupuesto_ins_insumo" id="chk_vta_presupuesto_ins_insumo_<?php echo $vta_presupuesto_ins_insumo->getId() ?>" name="chk_vta_presupuesto_ins_insumo[<?php echo $vta_presupuesto_ins_insumo->getId() ?>]" value="<?php echo $vta_presupuesto_ins_insumo->getId() ?>" checked="checked">
            <?php }else{ ?>
                <input type="checkbox" class="textbox chk_vta_presupuesto_ins_insumo" id="chk_vta_presupuesto_ins_insumo_<?php echo $vta_presupuesto_ins_insumo->getId() ?>" name="chk_vta_presupuesto_ins_insumo[<?php echo $vta_presupuesto_ins_insumo->getId() ?>]" value="<?php echo $vta_presupuesto_ins_insumo->getId() ?>" checked="checked" style="display: none;">
            <?php } ?>
        <?php } ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    
    <?php if($cantidad_minima_venta > 0){ ?>
        <div class="cantidad-minima-venta" title="Cantidad Minima de Venta">
            Min <strong><?php Gral::_echoFloatDyn($cantidad_minima_venta) ?></strong>
        </div>
    <?php } ?>
    
    
    <div class="cantidad">
        <?php if (!$vta_orden_venta) { ?>
            <input step = "<?php echo $step ?>" min="<?php echo $cantidad_minima ?>" type="text" id="txt_vta_presupuesto_ins_insumo_cantidad_<?php echo $vta_presupuesto_ins_insumo->getId() ?>" name="txt_cantidad[<?php echo $vta_presupuesto_ins_insumo->getId() ?>]" value="<?php Gral::_echo($vta_presupuesto_ins_insumo->getCantidad()) ?>" size="3" class="textbox txt_cantidad spinner spinner_cantidad" />
        <?php } else { ?>
            <?php Gral::_echo($vta_presupuesto_ins_insumo->getCantidad()) ?>
        <?php } ?>
    </div>

    <?php if ($ins_tipo_lista_precio->getBultoCerrado()) { ?>
        <?php if (count($ins_insumo_bultos) > 0) { ?>
            <div class="cantidad-total-calculado">
                <?php  Gral::_echoFloatDyn($vta_presupuesto_ins_insumo->getCantidad() * $vta_presupuesto_ins_insumo->getCantidadBulto())?>                
            </div>    
        <?php } ?>
    <?php } ?>
    
    <div class="unidad-medida">
        <?php Gral::_echo($ins_insumo->getInsUnidadMedida()->getDescripcion()) ?>
    </div>   
    
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
        
    <div class="codigo-interno">
        <?php Gral::_echo($ins_insumo->getCodigoInterno()) ?>
    </div>

    <?php if ($ins_tipo_lista_precio->getBultoCerrado()) { ?>
        <?php if (count($ins_insumo_bultos) > 0) { ?>
            <div class="ins-insumo-bulto">
                <?php //Html::html_dib_select(1, 'cmb_ins_insumo_bulto_id_' . $vta_presupuesto_ins_insumo->getId(), Gral::getCmbFiltro($ins_insumo->getInsInsumoBultosOrdenadosCmb(), '...'), $vta_presupuesto_ins_insumo->getInsInsumoBultoId(), 'textbox cmb_ins_insumo_bulto_id') ?>
                <?php Html::html_dib_select(1, 'cmb_ins_insumo_bulto_id_' . $vta_presupuesto_ins_insumo->getId(), $ins_insumo->getInsInsumoBultosOrdenadosCmb($ins_tipo_lista_precio), $vta_presupuesto_ins_insumo->getInsInsumoBultoId(), 'textbox cmb_ins_insumo_bulto_id') ?>
            </div>
        <?php } ?>
    <?php } ?>
</td>

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    
    <div class="avatar foto">
        <a href="<?php echo $ins_insumo->getPathImagenPrincipal() ?>" rel="imagen-insumo-<?php echo $ins_insumo->getId() ?>">
            <img src="<?php echo $ins_insumo->getPathImagenPrincipal(true) ?>" alt="img" width="25" />
        </a>
    </div>
    
    <div class="insumo-info">
        <div class="marca">
            <?php Gral::_echo($ins_insumo->getInsMarca()->getDescripcion()) ?>
        </div>
        
        <?php if (UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_EDICION_GESTION_ACCION_EDITAR_DESCRIPCION')) { ?>
            <?php if (!$vta_orden_venta) { ?>
                <div class="descripcion_edicion">
                    <img src='imgs/btn_modi.gif' width='16' border='0' />
                </div>
            <?php } ?>
        <?php } ?>
        
        <div class="descripcion <?php echo $css_insumo_descripcion ?>">
            <?php Gral::_echo($vta_presupuesto_ins_insumo->getDescripcion()) ?>
        </div>
    </div>
    
    <?php include "bloque_insumo_ultima_compra.php"; ?>
    
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <?php if (UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_EDICION_GESTION_ACCION_EDITAR_DESCUENTO')) { ?>
        <div class="descuento <?php echo ($vta_presupuesto_ins_insumo->getDescuento() > 0) ? 'descuento-aplicado' : '' ?>" title="<?php Gral::_echo('Descuento maximo permitido ' . $descuento_maximo . '%') ?>">
            <?php if ($descuento_maximo != 0) { ?>
                <?php if (!$vta_orden_venta) { ?>
                    <input max="<?php echo $descuento_maximo ?>" type="text" id="txt_descuento_<?php echo $vta_presupuesto_ins_insumo->getId() ?>" value="<?php Gral::_echo($vta_presupuesto_ins_insumo->getDescuento()) ?>" size="2" class="textbox txt_descuento spinner" /> %
                    <div class="descuento-rango-comentario">0-<?php Gral::_echoFloatDyn($descuento_maximo) ?></div>
                <?php } else { ?>
                    <?php Gral::_echo($vta_presupuesto_ins_insumo->getDescuento()); ?> %
                <?php } ?>
            <?php } else { ?>
                -
            <?php } ?>
        </div>
    <?php } else { ?>
        -
    <?php } ?>
</td>	

<td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>

    <?php if ($vta_presupuesto_ins_insumo->getDescuento() > 0 || $vta_presupuesto_ins_insumo->getImportePoliticaDescuento() > 0) { ?>
        <div class="importe-unitario bruto" title="<?php Gral::_echoImp($importe_unitario_actual) ?>">
            <?php Gral::_echoImp($importe_unitario) ?>
        </div>
    <?php } ?>

    <?php if (UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_EDICION_GESTION_ACCION_EDITAR_IMPORTE')) { ?>
        <input type="text" class="textbox txt_importe_unitario moneda-d5" id="txt_importe_unitario_<?php echo $vta_presupuesto_ins_insumo->getId() ?>" name="txt_importe_unitario[<?php echo $vta_presupuesto_ins_insumo->getId() ?>]" value="<?php echo Gral::getImporteDesdeDbToPriceFormat($vta_presupuesto_ins_insumo->getImporteUnitarioConDescuento(), 5) ?>" size="9" />
        
        <div class="importe-unitario neto <?php echo $css_importe_actualizado ?> min" title="Importe Unitario: <?php Gral::_echoImp($importe_unitario_actual_con_descuento) ?>">
            <?php Gral::_echoImp($importe_unitario_con_descuento, false, false, false, 2) ?>
        </div>
    <?php }else{ ?>
        <div class="importe-unitario neto <?php echo $css_importe_actualizado ?>" title="Importe Unitario: <?php Gral::_echoImp($importe_unitario_actual_con_descuento) ?>">
            <?php Gral::_echoImp($importe_unitario_con_descuento, false, false, false, 2) ?>
        </div>
    <?php } ?>
        

    <?php if ($vta_presupuesto_ins_insumo->getDescuento() > 0 || $vta_presupuesto_ins_insumo->getImportePoliticaDescuento() > 0) { ?>
        <div class="descuento-aplicado-label">OFF <?php Gral::_echoFloatDyn($vta_presupuesto_ins_insumo->getDescuento()) ?>%</div>
    <?php } ?>
        
    <?php if ($vta_presupuesto_conflicto) { ?>
            <img src='imgs/icn_alerta.png' width='14' border='0' title="Conflicto de Precios - Precio Actual: <?php Gral::_echoImp($vta_presupuesto_conflicto->getImporteActualizado()) ?>"/>
    <?php } ?>

</td>	

<td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>

    <?php if ($vta_presupuesto_ins_insumo->getDescuento() > 0) { ?>
        <div class="importe-subtotal bruto" title="<?php Gral::_echoImp($importe_unitario_actual * $cantidad) ?>">
            <?php Gral::_echoImp($importe_unitario * $cantidad) ?>
        </div>
    <?php } ?>

    <div class="importe-subtotal neto <?php echo $css_importe_actualizado ?>" title="Importe Subtotal: <?php Gral::_echoImp($importe_unitario_actual_con_descuento * $cantidad) ?>">
        <?php Gral::_echoImp($vta_presupuesto_ins_insumo->getImporteSubtotal()); ?>
    </div>

    <div class="importe-costo-modificado <?php echo $css_estado_desde_actualizacion_costo ?>" title="Actualizado por <?php Gral::_echo($ins_insumo_costo->getModificadoPorDescripcion()) ?>">
        hace <?php echo $dias_desde_actualizacion_costo ?> días
    </div>    

</td>

<td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>

    <div class="importe-total" title="IVA Incluido">
        <?php Gral::_echoImp($vta_presupuesto_ins_insumo->getImporteTotal()); ?>
    </div>

    <div class="iva-incluido">
        <?php Gral::_echo($vta_presupuesto_ins_insumo->getGralTipoIva()->getDescripcion()) ?> Incl
    </div>

    <?php if (UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_EDICION_GESTION_ACCION_EDITAR_TIPO_IVA')) { ?>
        <?php if ($vta_presupuesto->getVtaPresupuestoTipoVenta()->getCodigo() == VtaPresupuestoTipoVenta::TIPO_VENTA_Z) { ?>
            <?php if ($vta_presupuesto_ins_insumo->getGralTipoIvaId() == $ins_insumo->getGralTipoIvaVentaZ()) { ?>
                <div class="iva-edicion">
                    <?php Html::html_dib_select(1, 'cmb_gral_tipo_iva_id_' . $vta_presupuesto_ins_insumo->getId(), GralTipoIva::getGralTipoIvasParaVentasZCmb(true), $vta_presupuesto_ins_insumo->getGralTipoIvaId(), 'textbox cmb_gral_tipo_iva_id') ?>
                </div>
            <?php }else{ ?>
                <div class="iva-edicion" title="Tipo de IVA Personalizado - Conf <?php echo $ins_insumo->getGralTipoIvaVentaZObj()->getDescripcion() ?>">
                    <?php Html::html_dib_select(1, 'cmb_gral_tipo_iva_id_' . $vta_presupuesto_ins_insumo->getId(), GralTipoIva::getGralTipoIvasParaVentasZCmb(), $vta_presupuesto_ins_insumo->getGralTipoIvaId(), 'textbox cmb_gral_tipo_iva_id alert') ?>
                </div>
            <?php } ?>
        <?php } ?>
    <?php } ?>
    
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>

    <?php if ($pan_panol_seleccionado) { ?>
        <div class="stock-con-panol-seleccionado">

            <?php if ($ins_stock_resumen) { ?>
                <div class="stock-cantidad">
                    <?php Gral::_echo($ins_stock_resumen->getCantidad()) ?>

                    <?php if ($cantidad_reservados > 0) { ?>
                        <label class="stock-reservados" title="+ <?php Gral::_echo($cantidad_reservados) ?> <?php Lang::_lang('Insumos Comprometida') ?>">
                            + <?php Gral::_echo($cantidad_reservados) ?>
                        </label>
                    <?php } ?>

                    <?php if ($vta_presupuesto_ins_insumo->getCantidad() > $ins_stock_resumen->getCantidad()) { ?>
                        <img src="imgs/icn_alerta.png" width="10" title="La cantidad elegida supera la cantidad en stock" />
                    <?php } ?>

                </div>
                <div class="stock-unidad-medida">
                    <?php Gral::_echo($ins_insumo->getInsUnidadMedida()->getDescripcion()) ?>
                </div>

            <?php } else { ?>
                N/I
            <?php } ?>

        </div>
    <?php } else { ?>
        <div class="stock-sin-panol-seleccionado" title="Debe elegir un panol">
            -
        </div>
    <?php } ?>

</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <ul class="adm_botones_acciones">

        <?php if (!$vta_orden_venta) { ?>
            <?php if (UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_EDICION_GESTION_ACCION_DESVINCULAR_PRODUCTO')) { ?>
                <li class='adm_botones_accion presupuesto_gestion_edicion vta-presupuesto-gestion-edicion-cancelar'>
                    <img src='imgs/btn_cancelar.png' width='16' border='0' title="Cancelar item"/>
                </li>
            <?php } ?>
        <?php } ?>

    </ul>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <ul class="adm_botones_acciones">
        <?php if ( ! $prd_orden_trabajo ): ?>

            <?php if ( $ins_insumo->getEsFabricable() ): ?>
                <?php if (UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_EDICION_GESTION_ACCION_CREAR_OT_PRESUPUESTO')) { ?>
                    <li class='adm_botones_accion presupuesto_gestion_edicion vta-presupuesto-gestion-crear-ot-presupuesto'>
                        <img src='imgs/btn_add.gif' width='16' border='0' title="Orden de trabajo" class='gen-modal-open' gen-modal-file="ajax/modulos/vta_presupuesto_gestion/modal_orden_trabajo.php?vta_presupuesto_ins_insumo_id=<?php echo $vta_presupuesto_ins_insumo->getId(); ?>" gen-modal-content=".div_modal" gen-modal-width="70%" gen-modal-height="600" gen-modal-titulo="Crear Orden de Trabajo" gen-modal-callback="setInit()"/>
                    </li>
                <?php } ?>
            <?php endif; ?>

        <?php
        else:
        ?>
        <div class="ot-codigo">
        <?php Gral::_echo($prd_orden_trabajo->getCodigo()) ?>
        </div>    
        <div class="ot-tipo-estado">
            <img src="imgs/prd_orden_trabajo_tipo_estado/<?php Gral::_echo($prd_orden_trabajo->getPrdOrdenTrabajoTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
            <?php Gral::_echo($prd_orden_trabajo->getPrdOrdenTrabajoTipoEstado()->getDescripcion()) ?>
        </div>
        <?php
        endif;
        ?>
    </ul>
</td>
