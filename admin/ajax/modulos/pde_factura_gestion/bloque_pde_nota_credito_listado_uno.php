<?php
//$pde_factura_pde_oc
$ins_insumo = $pde_oc->getInsInsumo();

$ins_unidad_medida = $ins_insumo->getInsUnidadMedida();
$fraccionable = $ins_unidad_medida->getFraccionable();
$cantidad_minima = ($fraccionable == 1) ? 0.1 : 1;
$step = ($fraccionable == 1) ? 0.1 : 1;

?>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="check_pde_factura_pde_oc chk_pde_presupuesto_<?php echo $pde_presupuesto->getId() ?>">
        <input type="checkbox" name="chk_pde_factura_pde_oc[<?php echo $pde_factura_pde_oc->getId() ?>]" id="chk_pde_factura_pde_oc_<?php echo $pde_factura_pde_oc->getId() ?>" class="chk_pde_factura_pde_oc" pde_presupuesto_id="<?php echo $pde_presupuesto->getId() ?>"  value="<?php echo $pde_factura_pde_oc->getId() ?>">
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="codigo-pde-presupuesto">
        <?php Gral::_echo($pde_presupuesto->getCodigo()) ?>
    </div>
    <div class="fecha-pde-presupuesto">
        <?php Gral::_echo(Gral::getFechaToWeb($pde_presupuesto->getFecha())) ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="codigo-pde-orden-venta">
        <?php Gral::_echo($pde_oc->getCodigo()) ?>
    </div>
    <div class="fecha-pde-orden-venta">
        <?php Gral::_echo(Gral::getFechaToWeb($pde_oc->getCreado())) ?>
    </div>
</td>

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="descripcion">	
        <?php Gral::_echo($pde_oc->getDescripcion()) ?>
    </div>
</td>

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="pde_oc_tipo_estado_id">	
        <img src="imgs/pde_oc_tipo_estado/<?php Gral::_echo($pde_oc->getPdeOcTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
        <?php Gral::_echo($pde_oc->getPdeOcTipoEstado()->getDescripcion()) ?>
    </div>
</td>

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="pde_oc_tipo_estado_remision_id">	
        <img src="imgs/pde_oc_tipo_estado_remision/<?php Gral::_echo($pde_oc->getPdeOcTipoEstadoRemision()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
        <?php Gral::_echo($pde_oc->getPdeOcTipoEstadoRemision()->getDescripcion()) ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="ins_tipo_lista_precio_id">	
        <?php Gral::_echo($pde_oc->getInsTipoListaPrecio()->getDescripcion()) ?>
    </div>
</td>

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="pde_oc_tipo_estado_facturacion_id">	
        <img src="imgs/pde_oc_tipo_estado_facturacion/<?php Gral::_echo($pde_oc->getPdeOcTipoEstadoFacturacion()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
        <?php Gral::_echo($pde_oc->getPdeOcTipoEstadoFacturacion()->getDescripcion()) ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="cantidad">
        <input step = "<?php echo $step ?>" min="<?php echo $cantidad_minima ?>" max="<?php Gral::_echo($pde_factura_pde_oc->getCantidadDisponibleNotaCredito()) ?>" type="text" id="txt_pde_factura_pde_oc_cantidad_<?php echo $pde_factura_pde_oc->getId() ?>" name="txt_pde_factura_pde_oc_cantidad[<?php echo $pde_factura_pde_oc->getId() ?>]" value="<?php Gral::_echo($pde_factura_pde_oc->getCantidadDisponibleNotaCredito()) ?>" size="2" class="textbox txt_pde_factura_pde_oc_cantidad" />
    </div>
    <div class="disponible">
        <?php Gral::_echo($pde_factura_pde_oc->getCantidadDisponibleNotaCredito()) ?> / <?php Gral::_echo($pde_factura_pde_oc->getCantidad()) ?>
    </div>
    <div class="unidad">
        <?php Gral::_echo($ins_unidad_medida->getDescripcion()) ?>
    </div>
</td>

<td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
        <div class="importe-unitario neto">
            <?php $importe_unitario = $pde_factura_pde_oc->getImporteUnitario(); ?>
            <?php Gral::_echoImp($importe_unitario) ?>
        </div>
</td>

<td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
        <div class="importe-total neto">
            <?php $importe_total = $pde_factura_pde_oc->getImporteTotal(); ?>
            <?php Gral::_echoImp($importe_total) ?>
        </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="importe-iva">	
        <?php Gral::_echoImp($pde_factura_pde_oc->getImporteIva()) ?>
    </div>
    <div class="gral_tipo_iva_id">	
        <?php Gral::_echo($pde_factura_pde_oc->getGralTipoIva()->getDescripcion()) ?>
    </div>
</td>

