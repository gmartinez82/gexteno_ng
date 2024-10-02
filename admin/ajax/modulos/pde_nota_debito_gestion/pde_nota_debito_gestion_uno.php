<?php
$cantidad_items = $pde_nota_debito->getPdeNotaDebitoCantidadItems();
$pde_tipo_origen_nota_debito = $pde_nota_debito->getPdeTipoOrigenNotaDebito();

$prv_proveedor = $pde_nota_debito->getPrvProveedor();

$pde_nota_debito_pde_nota_creditos = $pde_nota_debito->getPdeNotaDebitoPdeNotaCreditos(null, null, true);
$pde_nota_debito_pde_recibos = $pde_nota_debito->getPdeNotaDebitoPdeRecibos(null, null, true);

$pde_orden_pago_pde_nota_debitos = $pde_nota_debito->getPdeOrdenPagoPdeNotaDebitosActivas();

$pde_nota_debito_imagens = $pde_nota_debito->getPdeNotaDebitoImagens();
$pde_nota_debito_archivos = $pde_nota_debito->getPdeNotaDebitoArchivos();
?>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="vermasinfo" identificador="<?php echo $pde_nota_debito->getId() ?>" modulo="pde_nota_debito_gestion">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="actividad" title="<?php Gral::_echo($pde_nota_debito->getGralActividad()->getDescripcion()) ?> - <?php Gral::_echo($pde_nota_debito->getGralEscenario()->getDescripcion()) ?>">
        <?php Gral::_echo($pde_nota_debito->getGralActividad()->getCodigoMin()) ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="codigo">
        <?php Gral::_echo($pde_nota_debito->getCodigo()) ?>
    </div>
    <div class="fecha_emision">
        <?php Gral::_echo(Gral::getFechaToWeb($pde_nota_debito->getFechaEmision())) ?>
    </div>
    <div class="tipo-origen <?php Gral::_echo($pde_tipo_origen_nota_debito->getCodigo()) ?>">
        <?php Gral::_echo($pde_tipo_origen_nota_debito->getDescripcion()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>    
    <div class="persona_descripcion">
        <?php Gral::_echo($pde_nota_debito->getPersonaDescripcion()) ?>
    </div>
    <div class="cuit">
        <?php Gral::_echo('Cuit: ') ?>
        <?php Gral::_echo($pde_nota_debito->getCuit()) ?>
    </div>

    <div class="adjuntos">
        <?php if (count($pde_nota_debito_imagens) > 0) { ?>
            <img src="imgs/icn_multimedia_jpg.png" width="20" alt="icon-jpg" title="Tiene <?php echo count($pde_nota_debito_imagens) ?> imágenes" />
        <?php } ?>

        <?php if (count($pde_nota_debito_archivos) > 0) { ?>
            <img src="imgs/icn_multimedia_pdf.png" width="20" alt="icon-jpg" title="Tiene <?php echo count($pde_nota_debito_archivos) ?> archivos" />
        <?php } ?>
    </div>

</td>

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="pde_nota_debito_tipo_estado">
        <img src="imgs/pde_nota_debito_tipo_estado/<?php Gral::_echo($pde_nota_debito->getPdeNotaDebitoTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
        <?php Gral::_echo($pde_nota_debito->getPdeNotaDebitoTipoEstado()->getDescripcion()) ?>
    </div>

    <div class="vta-comprobantes-vinculados">
        <?php foreach ($pde_nota_debito_pde_nota_creditos as $pde_nota_debito_pde_nota_credito) { ?>
            <div class="vta-comprobante-vinculado">-
                <?php Gral::_echo($pde_nota_debito_pde_nota_credito->getPdeNotaCredito()->getTipoComprobanteSiglas()) ?>
                <?php Gral::_echo($pde_nota_debito_pde_nota_credito->getPdeNotaCredito()->getNumeroNotaCreditoCompleto()) ?>
                (<?php Gral::_echoImp($pde_nota_debito_pde_nota_credito->getImporteAfectado()) ?>)
            </div>
        <?php } ?>

        <?php foreach ($pde_nota_debito_pde_recibos as $pde_nota_debito_pde_recibo) { ?>
            <div class="vta-comprobante-vinculado">-
                <?php Gral::_echo($pde_nota_debito_pde_recibo->getPdeRecibo()->getCodigo()) ?>
                (<?php Gral::_echoImp($pde_nota_debito_pde_recibo->getImporteAfectado()) ?>)
            </div>
        <?php } ?>

        <?php foreach ($pde_orden_pago_pde_nota_debitos as $pde_orden_pago_pde_nota_debito) { ?>
            <div class="vta-comprobante-vinculado">-
                <?php Gral::_echo($pde_orden_pago_pde_nota_debito->getPdeOrdenPago()->getCodigo()) ?>
                (<?php Gral::_echoImp($pde_orden_pago_pde_nota_debito->getImporteAfectado()) ?>)
            </div>
        <?php } ?>        
    </div>

</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="pde_tipo_nota_debito">	
        <?php Gral::_echo($pde_nota_debito->getPdeTipoNotaDebito()->getCodigoMin()) ?>
    </div>
</td>

<td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="subtotal">
        <?php Gral::_echoImp($pde_nota_debito->getPdeNotaDebitoSubtotal()) ?>
    </div>

    <?php if ($pde_nota_debito->getPdeNotaDebitoIva() > 0) { ?>
        <div class="iva">
            + IVA: <?php Gral::_echoImp($pde_nota_debito->getPdeNotaDebitoIva()) ?>
        </div>
    <?php } ?>

    <?php if ($pde_nota_debito->getPdeNotaDebitoTributo() > 0) { ?>
        <div class="tributos">
            + Trib: <?php Gral::_echoImp($pde_nota_debito->getPdeNotaDebitoTributo()) ?>
        </div>
    <?php } ?>
</td>

<td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="total">
        <?php Gral::_echoImp($pde_nota_debito->getPdeNotaDebitoTotal()) ?>
    </div>
    <div class="condicion-venta">
        <?php Gral::_echo($pde_nota_debito->getCondicionVentaDescripcion()) ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="items">
        <?php Gral::_echo($cantidad_items) ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>

    <div class="periodo-fiscal">
        <?php Gral::_echo($pde_nota_debito->getGralMes()->getDescripcion()) ?> / <?php Gral::_echo($pde_nota_debito->getAnio()) ?>
    </div>
    <div class="numero_timbrado" title="Numero de Timbrado">
        <?php Gral::_echo($pde_nota_debito->getNumeroTimbrado()) ?>
    </div>
    <div class="numero_nota_debito"  title="Numero de Nota de Debito AFIP">
        <?php Gral::_echo($pde_nota_debito->getNumeroComprobanteCompleto()) ?>
    </div>
    <div class="fecha_emision_cae" title="Fecha de Vencimiento de ND">
        <?php Gral::_echo(Gral::getFechaToWeb($pde_nota_debito->getFechaVencimiento())) ?>
    </div>

</td>		

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <ul class="adm_botones_acciones" pde_nota_debito_id="<?php echo $pde_nota_debito->getId() ?>">

        <?php if (UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_GESTION_ACCION_FICHA')) { ?>
            <li class='adm_botones_accion pde_nota_debito_gestion_ver_ficha'>
                <img src='imgs/btn_ficha.png' width='16' border='0' />
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_GESTION_ACCION_GIMAGEN')) { ?>
            <li class='adm_botones_accion'>
                <a href='pde_nota_debito_imagen_gestor.php?id=<?php Gral::_echo($pde_nota_debito->getId()) ?>' title='<?php Lang::_lang('Ver Gestor de Imagenes') ?>'>
                    <img src='imgs/icn_multimedia_jpg.png' width='21' border='0' />
                </a>
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_GESTION_ACCION_GARCHIVO')) { ?>
            <li class='adm_botones_accion'>
                <a href='pde_nota_debito_archivo_gestor.php?id=<?php Gral::_echo($pde_nota_debito->getId()) ?>' title='<?php Lang::_lang('Ver Gestor de Archivos') ?>'>
                    <img src='imgs/icn_multimedia_pdf.png' width='21' border='0' />
                </a>
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_GESTION_ACCION_MODIFICAR')) { ?>
            <?php if ($pde_nota_debito->getPdeNotaDebitoTipoEstado()->getCodigo() == PdeNotaDebitoTipoEstado::TIPO_PENDIENTE) { ?>
                <?php if (count($pde_orden_pago_pde_nota_debitos) == 0) { ?>
                    <li class='adm_botones_accion modificar-datos'>
                        <img src='imgs/btn_modi.gif' width='20' border='0' />
                    </li>
                <?php } ?>
            <?php } ?>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_GESTION_ACCION_CONFIG')) { ?>
            <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/pde_nota_debito_gestion/db_context_acciones.php?id=<?php Gral::_echo($pde_nota_debito->getId()) ?>' modulo_metodo_init="setInitPdeNotaDebitoGestion()">
                <img src='imgs/btn_ajustar.png' width='20' />    	
            </li>
        <?php } ?>

    </ul>
</td>


