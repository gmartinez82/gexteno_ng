<?php
$ins_insumo = $pde_oc->getInsInsumo();
$pde_recepcion = $pde_oc->getPdeRecepcion();

$ins_unidad_medida = $ins_insumo->getInsUnidadMedida();
$fraccionable = $ins_unidad_medida->getFraccionable();
$cantidad_minima = ($fraccionable == 1) ? 0.1 : 1;
$step = ($fraccionable == 1) ? 0.1 : 1;

$gral_tipo_iva = $ins_insumo->getGralTipoIvaCompraObj();
$iva_porcentual = $gral_tipo_iva->getValorIva();
$iva_decimal = $iva_porcentual / 100;

$cantidad_seleccionada = $pde_oc_cantidads[$key];

//$importe_unitario = $pde_oc->getImporteUnidad();
$importe_unitario_sin_descuento = $pde_oc_importe_unitarios[$key];
$importe_unitario_sin_descuento = Gral::getImporteDesdePriceFormatToDB($importe_unitario_sin_descuento);

$porcentaje_descuento = $pde_oc_porcentaje_descuentos[$key];
$porcentaje_descuento = Gral::getImporteDesdePriceFormatToDB($porcentaje_descuento);

if ($porcentaje_descuento > 0) {
    $importe_descuento = ($importe_unitario_sin_descuento * ($porcentaje_descuento / 100));

    $importe_unitario_con_descuento = $importe_unitario_sin_descuento - $importe_descuento;
    $importe_total_con_descuento = $importe_unitario_con_descuento * $cantidad_seleccionada;
} else {
    $importe_unitario_con_descuento = $importe_unitario_sin_descuento;
    $importe_total_con_descuento = $importe_unitario_con_descuento * $cantidad_seleccionada;
}

$importe_total_iva = $importe_total_con_descuento * $iva_decimal;
?>


<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="codigo-pde-orden-venta">
        <?php Gral::_echo($pde_oc->getCodigo()) ?>
    </div>
    <div class="fecha-pde-orden-venta">
        <?php Gral::_echo(Gral::getFechaToWeb($pde_oc->getCreado())) ?>
    </div>
    <div class="pde_oc_tipo_estado_id">	
        <img src="imgs/pde_oc_estado/<?php Gral::_echo($pde_oc->getPdeOcTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="10" />
        <?php Gral::_echo($pde_oc->getPdeOcTipoEstado()->getDescripcion()) ?>
    </div>
</td>

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="descripcion">	
        <?php Gral::_echo($ins_insumo->getDescripcion()) ?>
    </div>
    <div class="codigo-interno">
        CI: <?php Gral::_echo($ins_insumo->getCodigoInterno()) ?>
    </div>
    <div class="marca">
        <?php Gral::_echo($ins_insumo->getInsMarca()->getDescripcion()) ?>: <?php Gral::_echo($ins_insumo->getCodigoMarca()) ?>
    </div>
</td>

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="pde_oc_tipo_estado_remision_id">	
        <img src="imgs/pde_oc_tipo_estado_recepcion/<?php Gral::_echo($pde_oc->getPdeOcTipoEstadoRecepcion()->getCodigo()) ?>.png" alt="tipo-estado" width="10" />
        <?php Gral::_echo($pde_oc->getPdeOcTipoEstadoRecepcion()->getDescripcion()) ?>
    </div>
</td>

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="pde_oc_tipo_estado_facturacion_id">	
        <img src="imgs/pde_oc_tipo_estado_facturacion/<?php Gral::_echo($pde_oc->getPdeOcTipoEstadoFacturacion()->getCodigo()) ?>.png" alt="tipo-estado" width="10" />
        <?php Gral::_echo($pde_oc->getPdeOcTipoEstadoFacturacion()->getDescripcion()) ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="disponible">
        <?php Gral::_echo($cantidad_seleccionada) ?>
    </div>
    <div class="unidad">
        <?php Gral::_echo($ins_unidad_medida->getDescripcion()) ?>
    </div>
</td>

<td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <?php if ($importe_unitario_sin_descuento != $importe_unitario_con_descuento) { ?>
        <div class="importe-unitario bruto">        
            <?php Gral::_echoImp($importe_unitario_sin_descuento) ?>
        </div>
        <div class="importe-unitario neto">        
            <?php Gral::_echoImp($importe_unitario_con_descuento) ?>
        </div>
    <?php } else { ?>
        <div class="importe-unitario neto">        
            <?php Gral::_echoImp($importe_unitario_con_descuento) ?>
        </div>
    <?php } ?>
    
    <?php if($pde_oc->getIvaIncluido()){ ?>
        <label class="texto-iva texto-iva-incluido">
            IVA Incluido
        </label>
    <?php }else{ ?>
        <label class="texto-iva texto-mas-iva">
            + <?php Gral::_echo($ins_insumo->getGralTipoIvaCompraObj()->getDescripcion()) ?>
        </label>
    <?php } ?>
    
</td>

<td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="importe-total neto">
        <?php Gral::_echoImp($importe_total_con_descuento); ?>
    </div>
    
    <?php if($pde_oc->getIvaIncluido()){ ?>
        <label class="texto-iva texto-iva-incluido">
            IVA Incluido
        </label>
    <?php }else{ ?>
        <label class="texto-iva texto-mas-iva">
            + <?php Gral::_echo($ins_insumo->getGralTipoIvaCompraObj()->getDescripcion()) ?>
        </label>
    <?php } ?>
</td>	
