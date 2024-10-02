<?php
//$vta_factura_vta_orden_venta
$ins_insumo = $vta_orden_venta->getInsInsumo();

$ins_unidad_medida = $ins_insumo->getInsUnidadMedida();
$fraccionable = $ins_unidad_medida->getFraccionable();
$cantidad_minima = ($fraccionable == 1) ? 0.1 : 1;
$step = ($fraccionable == 1) ? 0.1 : 1;
?>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="check_vta_factura_vta_orden_venta chk_vta_presupuesto_<?php echo $vta_presupuesto->getId() ?>">
        <input type="checkbox" name="chk_vta_factura_vta_orden_venta[<?php echo $vta_factura_vta_orden_venta->getId() ?>]" id="chk_vta_factura_vta_orden_venta_<?php echo $vta_factura_vta_orden_venta->getId() ?>" class="chk_vta_factura_vta_orden_venta" vta_presupuesto_id="<?php echo $vta_presupuesto->getId() ?>"  value="<?php echo $vta_factura_vta_orden_venta->getId() ?>">
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="codigo-vta-presupuesto">
        <?php Gral::_echo($vta_presupuesto->getCodigo()) ?>
    </div>
    <div class="fecha-vta-presupuesto">
        <?php Gral::_echo(Gral::getFechaToWeb($vta_presupuesto->getFecha())) ?>
    </div>
    <div class="codigo-vta-orden-venta">
        <?php Gral::_echo($vta_orden_venta->getCodigo()) ?>
    </div>
</td>

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="codigo--interno">	
        CI: <?php Gral::_echo($vta_orden_venta->getInsInsumo()->getCodigoInterno()) ?>
    </div>
    <div class="descripcion">	
        <?php Gral::_echo($vta_orden_venta->getDescripcion()) ?>
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
</td>

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="vta_orden_venta_tipo_estado_facturacion_id">	
        <img src="imgs/vta_orden_venta_tipo_estado_facturacion/<?php Gral::_echo($vta_orden_venta->getVtaOrdenVentaTipoEstadoFacturacion()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
        <?php Gral::_echo($vta_orden_venta->getVtaOrdenVentaTipoEstadoFacturacion()->getDescripcion()) ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="cantidad">
        <input step = "<?php echo $step ?>" min="<?php echo $cantidad_minima ?>" max="<?php Gral::_echo($vta_factura_vta_orden_venta->getCantidadDisponibleNotaCredito()) ?>" type="text" id="txt_vta_factura_vta_orden_venta_cantidad_<?php echo $vta_factura_vta_orden_venta->getId() ?>" name="txt_vta_factura_vta_orden_venta_cantidad[<?php echo $vta_factura_vta_orden_venta->getId() ?>]" value="<?php Gral::_echo($vta_factura_vta_orden_venta->getCantidadDisponibleNotaCredito()) ?>" size="2" class="textbox txt_vta_factura_vta_orden_venta_cantidad" />
    </div>
    <div class="disponible">
        <?php Gral::_echo($vta_factura_vta_orden_venta->getCantidadDisponibleNotaCredito()) ?> / <?php Gral::_echo($vta_factura_vta_orden_venta->getCantidad()) ?>
    </div>
    <div class="unidad-medida">
        <?php Gral::_echo($ins_unidad_medida->getDescripcion()) ?>
    </div>
</td>

<td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="importe-unitario neto">
        <?php $importe_unitario = $vta_factura_vta_orden_venta->getImporteUnitario(); ?>
        <?php Gral::_echoImp($importe_unitario) ?>
    </div>
    <div class="ins_tipo_lista_precio_id">	
        <?php Gral::_echo($vta_orden_venta->getInsTipoListaPrecio()->getDescripcionCorta()) ?>
    </div>
</td>

<td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="importe-total neto">
        <?php $importe_total = $vta_factura_vta_orden_venta->getImporteTotal(); ?>
        <?php Gral::_echoImp($importe_total) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="importe-iva">	
        <?php Gral::_echoImp($vta_factura_vta_orden_venta->getImporteIva()) ?>
    </div>
    <div class="gral_tipo_iva_id">	
        <?php Gral::_echo($vta_factura_vta_orden_venta->getGralTipoIva()->getDescripcion()) ?>
    </div>
</td>

