<?php
$ins_insumo = $vta_orden_venta->getInsInsumo();
$vta_remito = $vta_orden_venta->getVtaRemito();

$ins_unidad_medida = $ins_insumo->getInsUnidadMedida();
$fraccionable = $ins_unidad_medida->getFraccionable();
$cantidad_minima = ($fraccionable == 1) ? 0.1 : 1;
$step = ($fraccionable == 1) ? 0.1 : 1;
?>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="check_vta_orden_venta chk_vta_presupuesto_<?php echo $vta_presupuesto->getId() ?>">
        <input type="checkbox" name="chk_vta_orden_venta[<?php echo $vta_orden_venta->getId() ?>]" id="chk_vta_orden_venta_<?php echo $vta_orden_venta->getId() ?>" class="chk_vta_orden_venta" vta_presupuesto_id="<?php echo $vta_presupuesto->getId() ?>"  value="<?php echo $vta_orden_venta->getId() ?>">
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="codigo-vta-presupuesto">
        <?php Gral::_echo($vta_presupuesto->getCodigo()) ?>
    </div>
    <div class="fecha-vta-presupuesto">
        <?php Gral::_echo(Gral::getFechaToWeb($vta_presupuesto->getFecha())) ?>
    </div>

    <hr>

    <div class="codigo-vta-orden-venta">
        <?php Gral::_echo($vta_orden_venta->getCodigo()) ?>
    </div>
    <div class="fecha-vta-orden-venta">
        <?php Gral::_echo(Gral::getFechaToWeb($vta_orden_venta->getCreado())) ?>
    </div>
</td>

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="descripcion">	
        <?php Gral::_echo($vta_orden_venta->getDescripcion()) ?>
    </div>    
    <div class="codigo-interno">	
        C.I.: <?php Gral::_echo($ins_insumo->getCodigoInterno()) ?>
    </div>    
</td>

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="vta_orden_venta_tipo_estado_id">	
        <img src="imgs/vta_orden_venta_tipo_estado/<?php Gral::_echo($vta_orden_venta->getVtaOrdenVentaTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
        <?php Gral::_echo($vta_orden_venta->getVtaOrdenVentaTipoEstado()->getDescripcion()) ?>
    </div>
</td>

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="vta_orden_venta_tipo_estado_remision_id">	
        <img src="imgs/vta_orden_venta_tipo_estado_remision/<?php Gral::_echo($vta_orden_venta->getVtaOrdenVentaTipoEstadoRemision()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
        <?php Gral::_echo($vta_orden_venta->getVtaOrdenVentaTipoEstadoRemision()->getDescripcion()) ?>
    </div>
    <div class="cantidad-remito">
        <?php Gral::_echoInt($vta_orden_venta->getCantidadEnRemito()) ?> / <?php Gral::_echoInt($vta_orden_venta->getCantidad()) ?>
    </div>
</td>

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="vta_orden_venta_tipo_estado_facturacion_id">	
        <img src="imgs/vta_orden_venta_tipo_estado_facturacion/<?php Gral::_echo($vta_orden_venta->getVtaOrdenVentaTipoEstadoFacturacion()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
        <?php Gral::_echo($vta_orden_venta->getVtaOrdenVentaTipoEstadoFacturacion()->getDescripcion()) ?>
    </div>
    <div class="cantidad-factura">
        <?php Gral::_echoInt($vta_orden_venta->getCantidadEnFactura() + $vta_orden_venta->getCantidadEnAjusteDebe()) ?> / <?php Gral::_echoInt($vta_orden_venta->getCantidad()) ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="cantidad">
        <input step = "<?php echo $step ?>" min="<?php echo $cantidad_minima ?>" max="<?php Gral::_echo($vta_orden_venta->getCantidadDisponibleEnAjusteDebe()) ?>" type="text" id="txt_vta_orden_venta_cantidad_<?php echo $vta_orden_venta->getId() ?>" name="txt_vta_orden_venta_cantidad[<?php echo $vta_orden_venta->getId() ?>]" value="<?php Gral::_echo($vta_orden_venta->getCantidadDisponibleEnAjusteDebe()) ?>" size="3" class="textbox txt_vta_orden_venta_cantidad" />
    </div>
    <div class="unidad">
        <?php Gral::_echo($ins_unidad_medida->getDescripcion()) ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="descuento">	
        <?php Gral::_echo($vta_orden_venta->getDescuento()) ?>%
    </div>
</td>

<td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <?php if ($vta_orden_venta->getDescuento() > 0) { ?>
        <div class="importe-unitario bruto">
            <?php Gral::_echoImp($vta_orden_venta->getImporteUnitario()) ?>
        </div>
    <?php } ?>

    <div class="importe-unitario neto">
        <?php $importe_unitario = $vta_orden_venta->getImporteUnitarioConDescuento() ?>
        <?php Gral::_echoImp($importe_unitario) ?>
    </div>
    
    <div class="ins_tipo_lista_precio_id">	
        <?php Gral::_echo($vta_orden_venta->getInsTipoListaPrecio()->getDescripcion()) ?>
    </div>
    
</td>

<td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <?php if ($vta_orden_venta->getDescuento() > 0) { ?>
        <div class="importe-total bruto">
            <?php Gral::_echoImp($vta_orden_venta->getImporteUnitario() * $vta_orden_venta->getCantidad()) ?>
        </div>
    <?php } ?>

    <div class="importe-total neto">
        <?php $importe_total = $importe_unitario * $vta_orden_venta->getCantidad(); ?>
        <?php Gral::_echoImp($importe_total); ?>
    </div>
    <div class="importe-iva">	
        <label class="gral_tipo_iva_id">	
            + <?php Gral::_echo($vta_orden_venta->getGralTipoIva()->getDescripcion()) ?>
        </label>
        <?php Gral::_echoImp($vta_orden_venta->getIvaVtaOrdenVenta()) ?>
    </div>
</td>
