<?php
$cantidad_items = $pde_recibo->getPdeReciboCantidadItems();
$pde_tipo_origen_recibo = $pde_recibo->getPdeTipoOrigenRecibo();

$prv_proveedor = $pde_recibo->getPrvProveedor();

$pde_factura_pde_recibos = $pde_recibo->getPdeFacturaPdeRecibos(null, null, true);
$pde_nota_debito_pde_recibos = $pde_recibo->getPdeNotaDebitoPdeRecibos(null, null, true);

$pde_recibo_imagens = $pde_recibo->getPdeReciboImagens();
$pde_recibo_archivos = $pde_recibo->getPdeReciboArchivos();
?>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="vermasinfo" identificador="<?php echo $pde_recibo->getId() ?>" modulo="pde_recibo_gestion">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="codigo">
        <?php Gral::_echo($pde_recibo->getCodigo()) ?>
    </div>
    <div class="fecha_emision">
        <?php Gral::_echo(Gral::getFechaToWeb($pde_recibo->getFechaEmision())) ?>
    </div>
    <div class="tipo-origen <?php Gral::_echo($pde_tipo_origen_recibo->getCodigo()) ?>">
        <?php Gral::_echo($pde_tipo_origen_recibo->getDescripcion()) ?>
    </div>    
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>    
    <div class="persona_descripcion">
        <?php Gral::_echo($pde_recibo->getPersonaDescripcion()) ?>
    </div>
    <div class="cuit">
        <?php Gral::_echo('Cuit: ') ?>
        <?php Gral::_echo($pde_recibo->getCuit()) ?>
    </div>

    <div class="adjuntos avatar">
        <?php if (count($pde_recibo_imagens) > 0) { ?>
            <?php foreach ($pde_recibo_imagens as $pde_recibo_imagen) { ?>
                <a class="fotox" href="<?php Gral::_echo($pde_recibo_imagen->getPathImagen()) ?>">
                    <img src="imgs/icn_multimedia_jpg.png" width="20" alt="icon-jpg" title="<?php Gral::_echo($pde_recibo_imagen->getDescripcion()) ?>" />
                </a>
            <?php } ?>
        <?php } ?>

        <?php if (count($pde_recibo_archivos) > 0) { ?>
            <?php foreach ($pde_recibo_archivos as $pde_recibo_archivo) { ?>
                <a class="archivo" href="<?php Gral::_echo($pde_recibo_archivo->getPathArchivo()) ?>" target="_blank">
                    <img src="imgs/icn_multimedia_pdf.png" width="20" alt="icon-jpg" title="<?php Gral::_echo($pde_recibo_archivo->getDescripcion()) ?>" />
                </a>
            <?php } ?>
        <?php } ?>
    </div>

</td>

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="pde_recibo_tipo_estado">
        <img src="imgs/pde_recibo_tipo_estado/<?php Gral::_echo($pde_recibo->getPdeReciboTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
        <?php Gral::_echo($pde_recibo->getPdeReciboTipoEstado()->getDescripcion()) ?>
    </div>

    <div class="pde-comprobantes-vinculados">
        <?php foreach ($pde_factura_pde_recibos as $pde_factura_pde_recibo) { ?>
            <div class="pde-comprobante-vinculado">
                <?php Gral::_echo($pde_factura_pde_recibo->getPdeFactura()->getTipoComprobanteSiglas()) ?>
                <?php Gral::_echo($pde_factura_pde_recibo->getPdeFactura()->getNumeroFacturaCompleto()) ?>
                (<?php Gral::_echoImp($pde_factura_pde_recibo->getImporteAfectado()) ?>)
            </div>
        <?php } ?>
        <?php foreach ($pde_nota_debito_pde_recibos as $pde_nota_debito_pde_recibo) { ?>
            <div class="pde-comprobante-vinculado">
                <?php Gral::_echo($pde_nota_debito_pde_recibo->getPdeNotaDebito()->getTipoComprobanteSiglas()) ?>
                <?php Gral::_echo($pde_nota_debito_pde_recibo->getPdeNotaDebito()->getNumeroNotaDebitoCompleto()) ?>
                (<?php Gral::_echoImp($pde_nota_debito_pde_recibo->getImporteAfectado()) ?>)
            </div>
        <?php } ?>
    </div>

</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="pde_tipo_recibo">	
        <?php Gral::_echo($pde_recibo->getPdeTipoRecibo()->getCodigoMin()) ?>
    </div>
</td>

<td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="subtotal">
        <?php Gral::_echoImp($pde_recibo->getPdeReciboSubtotal()) ?>
    </div>

    <?php if ($pde_recibo->getPdeReciboIva() > 0) { ?>
        <div class="iva">
            + IVA: <?php Gral::_echoImp($pde_recibo->getPdeReciboIva()) ?>
        </div>
    <?php } ?>

    <?php if ($pde_recibo->getPdeReciboTributo() > 0) { ?>
        <div class="tributos">
            + Trib: <?php Gral::_echoImp($pde_recibo->getPdeReciboTributo()) ?>
        </div>
    <?php } ?>
</td>

<td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="total">
        <?php Gral::_echoImp($pde_recibo->getPdeReciboTotal()) ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="items">
        <?php Gral::_echo($cantidad_items) ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado         ?> <?php echo $publicado         ?>'>

    <div class="numero_recibo"  title="Numero de Comprobante">
        <?php Gral::_echo($pde_recibo->getNumeroComprobanteCompleto()) ?>
    </div>
    <div class="pde-recibo-condicion-pago">	
        <?php Gral::_echo($pde_recibo->getPdeReciboCondicionPago()->getDescripcion()) ?>
    </div>
    <div class="pde-recibo-tipo-pago">	
        <?php Gral::_echo($pde_recibo->getPdeReciboTipoPago()->getDescripcion()) ?>
    </div>
    
</td>	


<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <ul class="adm_botones_acciones" pde_recibo_id="<?php echo $pde_recibo->getId() ?>">

        <?php if (UsCredencial::getEsAcreditado('PDE_RECIBO_GESTION_ACCION_FICHA')) { ?>
            <li class='adm_botones_accion pde_recibo_gestion_ver_ficha'>
                <img src='imgs/btn_ficha.png' width='16' border='0' />
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('PDE_RECIBO_GESTION_ACCION_GIMAGEN')) { ?>
            <li class='adm_botones_accion'>
                <a href='pde_recibo_imagen_gestor.php?id=<?php Gral::_echo($pde_recibo->getId()) ?>' title='<?php Lang::_lang('Ver Gestor de Imagenes') ?>'>
                    <img src='imgs/icn_multimedia_jpg.png' width='20' border='0' />
                </a>
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('PDE_RECIBO_GESTION_ACCION_GARCHIVO')) { ?>
            <li class='adm_botones_accion'>
                <a href='pde_recibo_archivo_gestor.php?id=<?php Gral::_echo($pde_recibo->getId()) ?>' title='<?php Lang::_lang('Ver Gestor de Archivos') ?>'>
                    <img src='imgs/icn_multimedia_pdf.png' width='20' border='0' />
                </a>
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('PDE_RECIBO_GESTION_ACCION_MODIFICAR')) { ?>
            <?php if ($pde_recibo->getPdeReciboTipoEstado()->getCodigo() == PdeReciboTipoEstado::TIPO_PENDIENTE || $pde_recibo->getNumeroReciboCompleto() == '0000-00000000') { ?>
                <li class='adm_botones_accion modificar-datos'>
                    <img src='imgs/btn_modi.gif' width='20' border='0' />
                </li>
            <?php } ?>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('PDE_RECIBO_GESTION_ACCION_CONFIG')) { ?>
            <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/pde_recibo_gestion/db_context_acciones.php?id=<?php Gral::_echo($pde_recibo->getId()) ?>' modulo_metodo_init="setInitPdeReciboGestion()">
                <img src='imgs/btn_ajustar.png' width='20' />    	
            </li>
        <?php } ?>

    </ul>
</td>


