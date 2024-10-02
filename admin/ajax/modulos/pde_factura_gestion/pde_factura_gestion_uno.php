<?php
$pde_factura_pde_ocs = $pde_factura->getPdeFacturaPdeOcs(null, null, true);
$pde_factura_items = $pde_factura->getPdeFacturaItems(null, null, true);
$cantidad_items = count($pde_factura_pde_ocs) + count($pde_factura_items);
$pde_tipo_origen_factura = $pde_factura->getPdeTipoOrigenFactura();

$prv_proveedor = $pde_factura->getPrvProveedor();

$pde_factura_pde_nota_creditos = $pde_factura->getPdeFacturaPdeNotaCreditos(null, null, true);
$pde_factura_pde_recibos = $pde_factura->getPdeFacturaPdeRecibos(null, null, true);

$pde_orden_pago_pde_facturas = $pde_factura->getPdeOrdenPagoPdeFacturasActivas();

$pde_factura_imagens = $pde_factura->getPdeFacturaImagens();
$pde_factura_archivos = $pde_factura->getPdeFacturaArchivos();
$pde_factura_gral_centro_costos = $pde_factura->getPdeFacturaGralCentroCostos();
?>

<td align='center' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
    <div class="checkbox" style="display:none;">
        <input type="checkbox" class="textbox chk_pde_factura" id="chk_pde_factura_<?php echo $pde_factura->getId() ?>" name="chk_pde_factura[<?php echo $pde_factura->getId() ?>]" value="<?php echo $pde_factura->getId() ?>" />
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="actividad" title="<?php Gral::_echo($pde_factura->getGralActividad()->getDescripcion()) ?> - <?php Gral::_echo($pde_factura->getGralEscenario()->getDescripcion()) ?>">
        <?php Gral::_echo($pde_factura->getGralActividad()->getCodigoMin()) ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="codigo">
        <?php Gral::_echo($pde_factura->getCodigo()) ?>
    </div>
    <div class="fecha_emision">
        <?php Gral::_echo(Gral::getFechaToWeb($pde_factura->getFechaEmision())) ?>
    </div>
    <div class="tipo-origen <?php Gral::_echo($pde_tipo_origen_factura->getCodigo()) ?>">
        <?php Gral::_echo($pde_tipo_origen_factura->getDescripcion()) ?>
    </div>
</td>

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="persona_descripcion">
        <?php Gral::_echo($pde_factura->getPersonaDescripcion()) ?>
    </div>
    <div class="cuit">
        <?php Gral::_echo('Cuit: ') ?>
        <?php Gral::_echo($pde_factura->getCuit()) ?>
    </div>

    <?php if($pde_factura->getPdeFacturaTipoEstado()->getActivo()){ ?>
        <?php if($pde_factura->getFechaVencimiento() != '1900-01-01'){ ?>
            <div class="fecha-vencimiento <?php echo $pde_factura->getFechaVencimientoDiferenciaDiasCss() ?>">
                Venc: <?php Gral::_echo(Gral::getFechaToWeb($pde_factura->getFechaVencimiento())) ?>, 
                <?php Gral::_echo($pde_factura->getFechaVencimientoDiferenciaDiasDescripcion()) ?>
            </div>
        <?php } ?>
    <?php } ?>
    
    <?php if(trim($pde_factura->getNotaInterna()) != ''){ ?>
    <div class="nota-interna">
        NI: <?php Gral::_echo($pde_factura->getNotaInterna()) ?>
    </div>
    <?php } ?>
    
    <div class="adjuntos">
        <?php if (count($pde_factura_imagens) > 0) { ?>
            <img src="imgs/icn_multimedia_jpg.png" width="20" alt="icon-jpg" title="Tiene <?php echo count($pde_factura_imagens) ?> imágenes" />
        <?php } ?>

        <?php if (count($pde_factura_archivos) > 0) { ?>
            <img src="imgs/icn_multimedia_pdf.png" width="20" alt="icon-jpg" title="Tiene <?php echo count($pde_factura_archivos) ?> archivos" />
        <?php } ?>
    </div>

    <div class="centro-costos">
        <?php foreach ($pde_factura_gral_centro_costos as $pde_factura_gral_centro_costo):   ?>
            <div class="centro-costo">
                <div class="col descripcion-corta">
                    <?php Gral::_echo($pde_factura_gral_centro_costo->getGralCentroCosto()->getDescripcionCorta()); ?>
                </div>
                <div class="col porcentaje-afectado">
                    <?php Gral::_echoInt($pde_factura_gral_centro_costo->getPorcentajeAfectado()); ?>%
                </div>
                <div class="col importe-afectado">
                    <?php Gral::_echoImp($pde_factura_gral_centro_costo->getImporteAfectado()); ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</td>

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="pde_factura_tipo_estado">
        <img src="imgs/pde_factura_tipo_estado/<?php Gral::_echo($pde_factura->getPdeFacturaTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
        <?php Gral::_echo($pde_factura->getPdeFacturaTipoEstado()->getDescripcion()) ?>
    </div>

    <div class="pde-comprobantes-vinculados">
        <?php foreach ($pde_factura_pde_nota_creditos as $pde_factura_pde_nota_credito) { ?>
            <div class="pde-comprobante-vinculado">-
                <?php Gral::_echo($pde_factura_pde_nota_credito->getPdeNotaCredito()->getTipoComprobanteSiglas()) ?>
                <?php Gral::_echo($pde_factura_pde_nota_credito->getPdeNotaCredito()->getNumeroNotaCreditoCompleto()) ?>
                (<?php Gral::_echoImp($pde_factura_pde_nota_credito->getImporteAfectado()) ?>)
            </div>
        <?php } ?>

        <?php foreach ($pde_factura_pde_recibos as $pde_factura_pde_recibo) { ?>
            <div class="pde-comprobante-vinculado">-
                <?php Gral::_echo($pde_factura_pde_recibo->getPdeRecibo()->getCodigo()) ?>
                (<?php Gral::_echoImp($pde_factura_pde_recibo->getImporteAfectado()) ?>)
            </div>
        <?php } ?>

        <?php foreach ($pde_orden_pago_pde_facturas as $pde_orden_pago_pde_factura) { ?>
            <div class="pde-comprobante-vinculado">-
                <?php Gral::_echo($pde_orden_pago_pde_factura->getPdeOrdenPago()->getCodigo()) ?>
                (<?php Gral::_echoImp($pde_orden_pago_pde_factura->getImporteAfectado()) ?>)
            </div>
        <?php } ?>

    </div>

</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="pde_tipo_factura">
        <?php Gral::_echo($pde_factura->getPdeTipoFactura()->getCodigoMin()) ?>
    </div>
</td>

<td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="subtotal">
        <?php //Gral::_echoImp($pde_factura->getPdeFacturaSubtotal(false, PdeComprobante::TIPO_SUBTOTAL_GRAVADO)) ?>
        <?php Gral::_echoImp($pde_factura->getPdeFacturaSubtotal(false, false)) ?>
    </div>

    <?php if ($pde_factura->getPdeFacturaIva() > 0) { ?>
        <div class="iva">
            + IVA: <?php Gral::_echoImp($pde_factura->getPdeFacturaIva()) ?>
        </div>
    <?php } ?>

    <?php if ($pde_factura->getPdeFacturaTributo() > 0) { ?>
        <div class="tributos">
            + Trib: <?php Gral::_echoImp($pde_factura->getPdeFacturaTributo()) ?>
        </div>
    <?php } ?>
</td>

<td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="total">
        <?php Gral::_echoImp($pde_factura->getPdeFacturaTotal()) ?>
    </div>    
    <div class="condicion-venta">
        <?php Gral::_echo($pde_factura->getCondicionVentaDescripcion()) ?>
    </div>
    
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="items">
        <?php Gral::_echo($cantidad_items) ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    
    <div class="periodo-fiscal">
        <?php Gral::_echo($pde_factura->getGralMes()->getDescripcion()) ?> / <?php Gral::_echo($pde_factura->getAnio()) ?>
    </div>
    <div class="numero_timbrado" title="Numero de Timbrado">
        <?php Gral::_echo($pde_factura->getNumeroTimbrado()) ?>
    </div>
    <div class="numero_factura" title="Numero de Factura AFIP">
        <?php Gral::_echo($pde_factura->getNumeroComprobanteCompleto()) ?>
    </div>
    <div class="cae" title="CAE">
        <?php Gral::_echo($pde_factura->getCae()) ?>
    </div>
    <div class="fecha_emision_cae" title="Fecha de Vencimiento de Factura">
        <?php Gral::_echo(Gral::getFechaToWeb($pde_factura->getFechaVencimiento())) ?>
    </div>
    
</td>

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>

    <ul class="adm_botones_acciones" pde_factura_id="<?php echo $pde_factura->getId() ?>">

        <?php if (UsCredencial::getEsAcreditado('PDE_FACTURA_GESTION_ACCION_FICHA')) { ?>
            <li class='adm_botones_accion pde_factura_gestion_ver_ficha'>
                <img src='imgs/btn_ficha.png' width='16' border='0' />
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('PDE_FACTURA_GESTION_ACCION_GIMAGEN')) { ?>
            <li class='adm_botones_accion'>
                <a href='pde_factura_imagen_gestor.php?id=<?php Gral::_echo($pde_factura->getId()) ?>' title='<?php Lang::_lang('Ver Gestor de Imagenes') ?>'>
                    <img src='imgs/icn_multimedia_jpg.png' width='21' border='0' />
                </a>
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('PDE_FACTURA_GESTION_ACCION_GARCHIVO')) { ?>
            <li class='adm_botones_accion'>
                <a href='pde_factura_archivo_gestor.php?id=<?php Gral::_echo($pde_factura->getId()) ?>' title='<?php Lang::_lang('Ver Gestor de Archivos') ?>'>
                    <img src='imgs/icn_multimedia_pdf.png' width='21' border='0' />
                </a>
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('PDE_FACTURA_GESTION_ACCION_CONFIG')) { ?>
            <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/pde_factura_gestion/db_context_acciones.php?id=<?php Gral::_echo($pde_factura->getId()) ?>' modulo_metodo_init="setInitPdeFacturaGestion()">
                <img src='imgs/btn_ajustar.png' width='20' />    	
            </li>
        <?php } ?>

    </ul>
</td>


