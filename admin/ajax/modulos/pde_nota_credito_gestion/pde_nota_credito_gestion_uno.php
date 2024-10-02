<?php
$cantidad_items = $pde_nota_credito->getPdeNotaCreditoCantidadItems();
$pde_tipo_origen_nota_credito = $pde_nota_credito->getPdeTipoOrigenNotaCredito();

$prv_proveedor = $pde_nota_credito->getPrvProveedor();

$pde_factura_pde_nota_creditos = $pde_nota_credito->getPdeFacturaPdeNotaCreditos(null, null, true);
$pde_nota_debito_pde_nota_creditos = $pde_nota_credito->getPdeNotaDebitoPdeNotaCreditos(null, null, true);

$pde_nota_credito_imagens = $pde_nota_credito->getPdeNotaCreditoImagens();
$pde_nota_credito_archivos = $pde_nota_credito->getPdeNotaCreditoArchivos();
?>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="vermasinfo" identificador="<?php echo $pde_nota_credito->getId() ?>" modulo="pde_nota_credito_gestion">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="actividad" title="<?php Gral::_echo($pde_nota_credito->getGralActividad()->getDescripcion()) ?> - <?php Gral::_echo($pde_nota_credito->getGralEscenario()->getDescripcion()) ?>">
        <?php Gral::_echo($pde_nota_credito->getGralActividad()->getCodigoMin()) ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="codigo">
        <?php Gral::_echo($pde_nota_credito->getCodigo()) ?>
    </div>
    <div class="fecha_emision">
        <?php Gral::_echo(Gral::getFechaToWeb($pde_nota_credito->getFechaEmision())) ?>
    </div>
    <div class="tipo-origen <?php Gral::_echo($pde_tipo_origen_nota_credito->getCodigo()) ?>">
        <?php Gral::_echo($pde_tipo_origen_nota_credito->getDescripcion()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>    
    <div class="persona_descripcion">
        <?php Gral::_echo($pde_nota_credito->getPersonaDescripcion()) ?>
    </div>
    <div class="cuit">
        <?php Gral::_echo('Cuit: ') ?>
        <?php Gral::_echo($pde_nota_credito->getCuit()) ?>
    </div>

    <div class="adjuntos">
        <?php if (count($pde_nota_credito_imagens) > 0) { ?>
            <img src="imgs/icn_multimedia_jpg.png" width="20" alt="icon-jpg" title="Tiene <?php echo count($pde_nota_credito_imagens) ?> imágenes" />
        <?php } ?>

        <?php if (count($pde_nota_credito_archivos) > 0) { ?>
            <img src="imgs/icn_multimedia_pdf.png" width="20" alt="icon-jpg" title="Tiene <?php echo count($pde_nota_credito_archivos) ?> archivos" />
        <?php } ?>
    </div>

</td>

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="pde_nota_credito_tipo_estado">
        <img src="imgs/pde_nota_credito_tipo_estado/<?php Gral::_echo($pde_nota_credito->getPdeNotaCreditoTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
        <?php Gral::_echo($pde_nota_credito->getPdeNotaCreditoTipoEstado()->getDescripcion()) ?>
    </div>

    <div class="vta-comprobantes-vinculados">
        <?php foreach ($pde_factura_pde_nota_creditos as $pde_factura_pde_nota_credito) { ?>
            <div class="vta-comprobante-vinculado">
                <?php Gral::_echo($pde_factura_pde_nota_credito->getPdeFactura()->getTipoComprobanteSiglas()) ?>
                <?php Gral::_echo($pde_factura_pde_nota_credito->getPdeFactura()->getNumeroFacturaCompleto()) ?>
                (<?php Gral::_echoImp($pde_factura_pde_nota_credito->getImporteAfectado()) ?>)
            </div>
        <?php } ?>
        <?php foreach ($pde_nota_debito_pde_nota_creditos as $pde_nota_debito_pde_nota_credito) { ?>
            <div class="vta-comprobante-vinculado">
                <?php Gral::_echo($pde_nota_debito_pde_nota_credito->getPdeNotaDebito()->getTipoComprobanteSiglas()) ?>
                <?php Gral::_echo($pde_nota_debito_pde_nota_credito->getPdeNotaDebito()->getNumeroNotaDebitoCompleto()) ?>
                (<?php Gral::_echoImp($pde_nota_debito_pde_nota_credito->getImporteAfectado()) ?>)
            </div>
        <?php } ?>
    </div>    

</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="pde_tipo_nota_credito">	
        <?php Gral::_echo($pde_nota_credito->getPdeTipoNotaCredito()->getCodigoMin()) ?>
    </div>
</td>

<td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="subtotal">
        <?php Gral::_echoImp($pde_nota_credito->getPdeNotaCreditoSubtotal(PdeComprobante::TIPO_SUBTOTAL_GRAVADO)) ?>
    </div>

    <?php if ($pde_nota_credito->getPdeNotaCreditoIva() > 0) { ?>
        <div class="iva">
            + IVA: <?php Gral::_echoImp($pde_nota_credito->getPdeNotaCreditoIva()) ?>
        </div>
    <?php } ?>

    <?php if ($pde_nota_credito->getPdeNotaCreditoTributo() > 0) { ?>
        <div class="tributos">
            + Trib: <?php Gral::_echoImp($pde_nota_credito->getPdeNotaCreditoTributo()) ?>
        </div>
    <?php } ?>
</td>

<td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="total">
        <?php Gral::_echoImp($pde_nota_credito->getPdeNotaCreditoTotal()) ?>
    </div>
    <div class="condicion-venta">
        <?php Gral::_echo($pde_nota_credito->getCondicionVentaDescripcion()) ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="items">
        <?php Gral::_echo($cantidad_items) ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>

    <div class="periodo-fiscal">
        <?php Gral::_echo($pde_nota_credito->getGralMes()->getDescripcion()) ?> / <?php Gral::_echo($pde_nota_credito->getAnio()) ?>
    </div>
    <div class="numero_timbrado" title="Numero de Timbrado">
        <?php Gral::_echo($pde_nota_credito->getNumeroTimbrado()) ?>
    </div>
    <div class="numero_nota_credito" title="Numero de Nota de Credito AFIP">
        <?php Gral::_echo($pde_nota_credito->getNumeroComprobanteCompleto()) ?>
    </div>
    
</td>		

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <ul class="adm_botones_acciones" pde_nota_credito_id="<?php echo $pde_nota_credito->getId() ?>">

        <?php if (UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_GESTION_ACCION_FICHA')) { ?>
            <li class='adm_botones_accion pde_nota_credito_gestion_ver_ficha'>
                <img src='imgs/btn_ficha.png' width='16' border='0' />
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_GESTION_ACCION_GIMAGEN')) { ?>
            <li class='adm_botones_accion'>
                <a href='pde_nota_credito_imagen_gestor.php?id=<?php Gral::_echo($pde_nota_credito->getId()) ?>' title='<?php Lang::_lang('Ver Gestor de Imagenes') ?>'>
                    <img src='imgs/icn_multimedia_jpg.png' width='21' border='0' />
                </a>
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_GESTION_ACCION_GARCHIVO')) { ?>
            <li class='adm_botones_accion'>
                <a href='pde_nota_credito_archivo_gestor.php?id=<?php Gral::_echo($pde_nota_credito->getId()) ?>' title='<?php Lang::_lang('Ver Gestor de Archivos') ?>'>
                    <img src='imgs/icn_multimedia_pdf.png' width='21' border='0' />
                </a>
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_GESTION_ACCION_MODIFICAR')) { ?>
            <?php if ($pde_nota_credito->getPdeNotaCreditoTipoEstado()->getCodigo() == PdeNotaCreditoTipoEstado::TIPO_PENDIENTE) { ?>
                <li class='adm_botones_accion modificar-datos'>
                    <img src='imgs/btn_modi.gif' width='20' border='0' />
                </li>
            <?php } ?>
        <?php } ?>            

        <?php if (UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_GESTION_ACCION_CONFIG')) { ?>
            <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/pde_nota_credito_gestion/db_context_acciones.php?id=<?php Gral::_echo($pde_nota_credito->getId()) ?>' modulo_metodo_init="setInitPdeNotaCreditoGestion()">
                <img src='imgs/btn_ajustar.png' width='20' />    	
            </li>
        <?php } ?>

    </ul>
</td>


