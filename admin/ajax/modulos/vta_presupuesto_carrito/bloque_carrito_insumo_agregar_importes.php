<?php
$gral_tipo_iva_venta = $ins_insumo->getGralTipoIvaVentaObj();

$importe_venta = $ins_insumo->getInsInsumoImporteVentaActual($ins_tipo_lista_precio);
$importe_venta_con_iva = $ins_insumo->getInsInsumoImporteVentaActual($ins_tipo_lista_precio, $incluye_iva = true);

$importe_venta_total = $importe_venta * $cantidad;
$importe_venta_total_con_iva = $importe_venta_con_iva * $cantidad;

if($ins_insumo_bulto){
    $cantidad_bulto = $ins_insumo_bulto->getCantidad();
    $importe_venta_total = $importe_venta * $cantidad * $cantidad_bulto;
    $importe_venta_total_con_iva = $importe_venta_con_iva * $cantidad * $cantidad_bulto;    
}

//$vta_politica_descuento = $ins_insumo->getVtaPoliticaDescuentoActiva($ins_tipo_lista_precio);
$vta_politica_descuento_rango_aplica = $ins_insumo->getVtaPoliticaDescuentoRangoActiva($ins_tipo_lista_precio, $cantidad);

$vta_politica_descuento_rangos = array();
if ($vta_politica_descuento) {
    $vta_politica_descuento_rangos = $vta_politica_descuento->getVtaPoliticaDescuentoRangos(null, null, true, array(array('campo' => 'orden', 'orden' => 'asc')));
}
$pan_panol_autenticado = $gral_sucursal_autenticada->getPanPanolVinculado();
$ins_stock_resumen = $ins_insumo->getInsStockResumenEnPanol($pan_panol_autenticado);
$cantidad_stock = 0;
if($ins_stock_resumen){
        $cantidad_stock = $ins_stock_resumen->getCantidad();
}
$cantidad_stock_futuro = $cantidad_stock - $cantidad;

$css_stock_alerta = '';
if($cantidad_stock_futuro == 0){
    $css_stock_alerta = 'alerta-amarilla';
}elseif($cantidad_stock_futuro < 0){
    $css_stock_alerta = 'alerta-roja';    
}
?>
<div class="bloque-carrito-importes-datos">

    <div class="bloque-total">
        <div class="bloque-total-titulo">
            Importe de Venta
        </div>

        <div class="bloque-total-datos">
            <table>
                <tr>
                    <th width="110" class="adm_tbl_encabezado_gris_claro">Cantidad</th>
                    
                    <?php if($vta_vendedor_autenticado->getVtaTipoVendedor()->getCodigo() == VtaTipoVendedor::TIPO_SUCURSAL){ ?>
                        <th width="110" class="adm_tbl_encabezado_gris_claro">Stock en <?php Gral::_echo($pan_panol_autenticado->getCodigoCorto()) ?></th>
                        <th width="110" class="adm_tbl_encabezado_gris_claro">Stock Futuro</th>
                    <?php } ?>
                    
                    <?php if ($ins_insumo_bulto) { ?>
                        <th width="130" class="adm_tbl_encabezado_gris_claro">Bulto</th>
                    <?php } ?>
                    <th width="140" class="adm_tbl_encabezado_gris_claro">Unitario</th>
                    <th width="180" class="adm_tbl_encabezado_gris_claro">Total</th>
                </tr>
                <tr>
                    <td align="center" class="adm_tbl_lineas">
                        <div class="cantidad">
                            <?php Gral::_echoFloatDyn($cantidad) ?>
                        </div>
                    </td>
                    
                    <?php if($vta_vendedor_autenticado->getVtaTipoVendedor()->getCodigo() == VtaTipoVendedor::TIPO_SUCURSAL){ ?>
                    <td align="center" class="adm_tbl_lineas">
                        <div class="cantidad">
                            <?php Gral::_echoFloatDyn($cantidad_stock) ?>
                        </div>
                    </td>
                    <td align="center" class="adm_tbl_lineas stock <?php echo $css_stock_alerta ?>">
                        <div class="cantidad">
                            <?php Gral::_echoFloatDyn($cantidad_stock_futuro) ?>
                        </div>
                    </td>
                    <?php } ?>
                    
                    <?php if ($ins_insumo_bulto) { ?>
                        <td align="center" class="adm_tbl_lineas">
                            <div class="bulto">
                                <?php Gral::_echo($ins_insumo_bulto->getDescripcion()) ?>
                            </div>
                        </td>
                    <?php } ?>
                    <td align="right" class="adm_tbl_lineas">
                        <div class="importe-unitario">
                            <?php Gral::_echoImp($importe_venta) ?>
                            <label class="label-mas-iva" title="<?php Gral::_echo($gral_tipo_iva_venta->getDescripcion()) ?>">
                                + IVA
                            </label>
                        </div>
                        <div class="importe-unitario-con-iva">
                            <?php Gral::_echoImp($importe_venta_con_iva) ?>
                        </div>
                    </td>
                    <td align="right" class="adm_tbl_lineas td-importe-total">
                        <div class="importe-total">
                            <?php Gral::_echoImp($importe_venta_total) ?>
                            <label class="label-mas-iva" title="<?php Gral::_echo($gral_tipo_iva_venta->getDescripcion()) ?>">
                                + IVA
                            </label>
                        </div>
                        <div class="importe-total-con-iva">
                            <?php Gral::_echoImp($importe_venta_total_con_iva) ?>
                        </div>
                    </td>
                </tr>
                
                <?php if($ins_lista_precio->getCantidadMinimaVenta() > 0){ ?>
                <tr>
                    <th width="110" class="adm_tbl_encabezado_gris_claro">Minima Venta</th>
                    
                </tr>
                <tr>
                    <td align="center" class="adm_tbl_lineas">
                        <div class="cantidad-minima-venta">
                            <?php Gral::_echoFloatDyn($ins_lista_precio->getCantidadMinimaVenta()) ?>
                            
                            <div class="ins-unidad-medida-descripcion">
                                <?php Gral::_echo($ins_insumo->getInsUnidadMedida()->getDescripcion()) ?>
                            </div>
                        </div>
                    </td>
                </tr>
                <?php } ?>
                
            </table>
        </div>
    </div>

    <?php if ($vta_politica_descuento && false) { ?>
        <div class="bloque-politica-descuentos">

            <div class="bloque-politica-descuentos-titulo">
                Política de Descuentos
            </div>

            <div class="bloque-politica-descuentos-comentario">
                Afectado por <strong><?php Gral::_echo($vta_politica_descuento->getDescripcion()) ?></strong>
            </div>

            <div class="bloque-politica-descuentos-rangos">

                <table>
                    <tr>
                        <th width="170" class="adm_tbl_encabezado_gris_claro">Rango</th>
                        <th width="60" class="adm_tbl_encabezado_gris_claro" title="Porcentaje Descuento">Porc</th>
                        <th width="60" class="adm_tbl_encabezado_gris_claro" title="Porcentaje de Negociacion">Neg</th>
                        <th width="120" class="adm_tbl_encabezado_gris_claro">Unitario</th>
                        <th width="140" class="adm_tbl_encabezado_gris_claro">Total</th>
                    </tr>
                    <?php
                    foreach ($vta_politica_descuento_rangos as $vta_politica_descuento_rango) {

                        $css_aplica_politica_descuentos = false;
                        if ($vta_politica_descuento_rango_aplica && $vta_politica_descuento_rango_aplica->getId() == $vta_politica_descuento_rango->getId()) {
                            $css_aplica_politica_descuentos = true;
                        }
                        ?>
                        <tr>
                            <td align="left" class="adm_tbl_lineas <?php echo ($css_aplica_politica_descuentos) ? 'aplica' : '' ?>">
                                &FilledVerySmallSquare; <?php Gral::_echo($vta_politica_descuento_rango->getDescripcion()) ?>
                            </td>
                            <td align="center" class="adm_tbl_lineas <?php echo ($css_aplica_politica_descuentos) ? 'aplica' : '' ?>">
                                <?php Gral::_echo($vta_politica_descuento_rango->getPorcentajeDescuento()) ?>%
                            </td>
                            <td align="center" class="adm_tbl_lineas <?php echo ($css_aplica_politica_descuentos) ? 'aplica' : '' ?>">
                                <?php Gral::_echo($vta_politica_descuento_rango->getPorcentajeNegociacion()) ?>%
                            </td>
                            <td align="right" class="adm_tbl_lineas <?php echo ($css_aplica_politica_descuentos) ? 'aplica' : '' ?>">
                                <div class="importe-unitario">
                                    <?php Gral::_echoImp($vta_politica_descuento_rango->getImporteCalculadoUnitario($importe_venta)) ?>
                                </div>
                                <div class="importe-unitario-descuento">
                                    <?php Gral::_echoImp($vta_politica_descuento_rango->getImporteCalculadoUnitarioDescuento($importe_venta)) ?> OFF
                                </div>
                            </td>
                            <?php if ($vta_politica_descuento_rango_aplica) { ?>
                                <?php if ($vta_politica_descuento_rango_aplica->getId() == $vta_politica_descuento_rango->getId()) { ?>
                                    <td align="right" class="adm_tbl_lineas td-importe-total <?php echo ($css_aplica_politica_descuentos) ? 'aplica' : '' ?>">
                                        <div class="importe-total">
                                            <?php Gral::_echoImp($vta_politica_descuento_rango->getImporteCalculadoTotal($importe_venta, $cantidad)) ?>
                                        </div>
                                        <div class="importe-total-descuento">
                                            <?php Gral::_echoImp($vta_politica_descuento_rango->getImporteCalculadoTotalDescuento($importe_venta, $cantidad)) ?> OFF
                                        </div>
                                    </td>
                                <?php } ?>
                            <?php } ?>
                        </tr>
                    <?php } ?>
                </table>

            </div>

        </div>
    <?php } ?>


</div>
