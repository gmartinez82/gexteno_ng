<?php
$ins_insumo = $pde_oc->getInsInsumo();
$pde_recepcion = $pde_oc->getPdeRecepcion();
$prv_insumo = $pde_oc->getPrvInsumo();
$ins_insumo_prv_proveedor = $ins_insumo->getInsInsumoPrvProveedor();
$prv_decuento_comercial = $pde_oc->getPrvDescuentoComercial();
$pde_oc_reclamos = $pde_oc->getPdeOcReclamos();

$ins_unidad_medida = $ins_insumo->getInsUnidadMedida();
$fraccionable = $ins_unidad_medida->getFraccionable();
$cantidad_minima = ($fraccionable == 1) ? 0.1 : 1;
$step = ($fraccionable == 1) ? 0.1 : 1;

$importe_oc = $pde_oc->getImporteUnidad();
if($prv_decuento_comercial){
    $porcentaje_descuento = $prv_decuento_comercial->getPorcentajeDescuento();
    $coeficiente_descuento = ($porcentaje_descuento / 100);
    $importe_descuento_oc = $importe_oc * $coeficiente_descuento;
    
    $importe_oc_con_descuento = $importe_oc;
    $importe_oc = $importe_oc / (1 - $coeficiente_descuento);
}

//$pde_factura_pde_oc = new PdeFacturaPdeOc();

$importe_factura = $pde_factura_pde_oc->getImporteUnitario();
$porcentaje_descuento = $pde_factura_pde_oc->getPorcentajeDescuento();
$importe_factura_con_descuento = $pde_factura_pde_oc->getImporteUnitarioConDescuento();
$importe_factura_total = $pde_factura_pde_oc->getImporteTotalConDescuento();
?>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="contador">
        <?php Gral::_echo($cont) ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="codigo-pde-orden-venta">
        <?php Gral::_echo($pde_oc->getPdeOcAgrupacion()->getCodigo()) ?>
    </div>
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
        
        <img class='pde_oc_reclamos' id='pde_oc_reclamos_<?php echo $pde_oc->getId() ?>' src='imgs/btn_reclamar.png' width='18' align='absmiddle' title='<?php Lang::_lang('La OC tiene reclamos registrados') ?>' style='<?php echo (count($pde_oc_reclamos) > 0) ? '' : 'display:none'; ?>;'>
    </div>
    
    <div class="codigo-interno">
        CI: <?php Gral::_echo($ins_insumo->getCodigoInterno()) ?>
    </div>
    
    <div class="codigo-marca">
        Marca <?php Gral::_echo($ins_insumo->getInsMarca()->getDescripcion()) ?>: <?php Gral::_echo($ins_insumo->getCodigoMarca()) ?>
    </div>    
    
    <?php if($prv_insumo->getId() != 'null'){ ?>
    <div class="codigo-proveedor">
        <?php Gral::_echo($prv_insumo->getInsMarca()->getDescripcion()) ?>: <?php Gral::_echo($prv_insumo->getCodigoProveedor()) ?> | <?php Gral::_echo($prv_insumo->getDescripcion()) ?>
    </div>  
    <?php }elseif($ins_insumo_prv_proveedor){ ?>
    <div class="codigo-proveedor">
        CP: <?php Gral::_echo($ins_insumo_prv_proveedor->getCodigo()) ?>
    </div>  
    <?php } ?>
    
</td>

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="pde_oc_tipo_estado_remision_id">	
        <img src="imgs/pde_oc_tipo_estado_recepcion/<?php Gral::_echo($pde_oc->getPdeOcTipoEstadoRecepcion()->getCodigo()) ?>.png" alt="tipo-estado" width="10" />
        <?php Gral::_echo($pde_oc->getPdeOcTipoEstadoRecepcion()->getDescripcion()) ?>
    </div>
    
    <div class="disponible">
        <?php Gral::_echo($pde_oc->getCantidadTotalRecibida()) ?> / <?php Gral::_echo($pde_oc->getCantidad()) ?>
    </div>
    
</td>

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    
    <div class="pde_oc_tipo_estado_facturacion_id">	
        <img src="imgs/pde_oc_tipo_estado_facturacion/<?php Gral::_echo($pde_oc->getPdeOcTipoEstadoFacturacion()->getCodigo()) ?>.png" alt="tipo-estado" width="10" />
        <?php Gral::_echo($pde_oc->getPdeOcTipoEstadoFacturacion()->getDescripcion()) ?>
    </div>

    <div class="codigo-factura">
        <?php Gral::_echo($pde_factura->getNumeroComprobanteCompleto()) ?>
    </div>    

    <?php if (UsCredencial::getEsAcreditado('PDE_FACTURA_GESTION_GENERAR_FACTURA_DESVINCULAR')) { ?>
        <div class='pde_factura_pde_oc_desvincular'>
            - <?php Lang::_lang('Desvincular') ?>
        </div>
    <?php } ?>    

    <div class="disponible">
        <?php Gral::_echo($pde_oc->getCantidadTotalFacturada()) ?> / <?php Gral::_echo($pde_oc->getCantidad()) ?>
    </div>
    
</td>

<td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    
    <div class="importe-unitario neto estimado">
        <?php Gral::_echoImp($pde_oc->getImporteUnidad()) ?>
    </div>    
    
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    
    <div class="disponible">
        <?php Gral::_echo($pde_factura_pde_oc->getCantidad()) ?>
    </div>
    <div class="unidad">
        <?php Gral::_echo($ins_unidad_medida->getDescripcion()) ?>
    </div>
    
</td>

<td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    
    <div class="importe-unitario neto estimado">
        <?php Gral::_echoImp($importe_factura) ?>
    </div>    
    
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>    
    
    <div class="porcentaje-descuento">
        <?php Gral::_echoFloat($porcentaje_descuento) ?> %
    </div>  
    
</td>

<td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="importe-unitario-con-descuento neto estimado" id="div_p1_importe_unitario_con_descuento_oc_calculado_<?php echo $pde_oc->getId() ?>">
        <?php Gral::_echoImp($importe_factura_con_descuento) ?>
    </div>   
    
    <?php if (UsCredencial::getEsAcreditado('PDE_FACTURA_GESTION_GENERAR_FACTURA_AGREGAR_RECLAMO')) { ?>
        <div class='pde_oc_reclamar'>
            + <?php Lang::_lang('Reclamo') ?>
        </div>
    <?php } ?>    
    
</td>

<td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>    
    
    <div class="importe-total neto estimado" id="div_p1_importe_total_oc_calculado_<?php echo $pde_oc->getId() ?>">
        <?php Gral::_echoImp($importe_factura_total) ?>
    </div>    
    
    <div class="tipo-iva">
        + <?php Gral::_echo($ins_insumo->getGralTipoIvaCompraObj()->getDescripcion()) ?>
    </div>
    <?php
    Html::html_dib_select(1, 'cmb_ordenar_item_'.$pde_factura_pde_oc->getId(), Gral::getCmbFiltro(Gral::getNumerosCmb(count($pde_factura_pde_ocs)), '...'), $pde_factura_pde_oc->getOrden(), 'textbox cmb_ordenar_item' . $error_input_css);
    ?>
</td>

