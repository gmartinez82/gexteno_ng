<?php
$cantidad = $pde_oc->getCantidad();
$cantidad_total_recibida = $pde_oc->getCantidadTotalRecibida();
$cantidad_total_facturada = $pde_oc->getCantidadTotalFacturada();

if($pde_oc->getIvaIncluido()){
    $importe_unitario_estimado = $pde_oc->getImporteUnidadConIva();
    $importe_total_estimado = $pde_oc->getImporteTotalConIva();
}else{
    $importe_unitario_estimado = $pde_oc->getImporteUnidad();
    $importe_total_estimado = $pde_oc->getImporteTotal();
}

$pde_factura_pde_oc = $pde_oc->getPdeFacturaPdeOc(null, null, true);

$importe_unitario_real = 0;
$importe_total_real = 0;
if ($pde_factura_pde_oc) {
    $importe_unitario_real = $pde_factura_pde_oc->getImporteUnitarioConDescuento();
}

// se determina color a mostrar en funcion a el estado de recepcion
if ($cantidad_total_recibida == 0) {
    $css_cantidad_total_recibida = 'cantidad-recepcion-nada';
} elseif ($cantidad == $cantidad_total_recibida) {
    $css_cantidad_total_recibida = 'cantidad-recepcion-total';
} else {
    $css_cantidad_total_recibida = 'cantidad-recepcion-parcial';
}

// se determina color a mostrar en funcion a el estado de facturacion
if ($cantidad_total_facturada == 0) {
    $css_cantidad_total_facturada = 'cantidad-facturacion-nada';
} elseif ($cantidad == $cantidad_total_facturada) {
    $css_cantidad_total_facturada = 'cantidad-facturacion-total';
} else {
    $css_cantidad_total_facturada = 'cantidad-facturacion-parcial';
}
?>
<td align='center' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
    <div class="vermasinfo" identificador="<?php echo $pde_oc->getId() ?>" modulo="pde_oc">+</div>        
</td>

<td align='center' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
    <div class="codigo-agrupacion" title="<?php Gral::_echo($pde_oc_agrupacion->getId()) ?>">
        <?php Gral::_echo($pde_oc_agrupacion->getCodigo()) ?>
    </div>
    <div class="codigo" title="<?php Gral::_echo($pde_oc->getId()) ?>">
        <?php Gral::_echo($pde_oc->getCodigo()) ?>
    </div>
    <div class="creado">
        <?php Gral::_echo(Gral::getFechaToWeb($pde_oc->getCreado())) ?>
    </div>
    <div class="creado-por">
        <?php Gral::_echo($pde_oc->getCreadoPorDescripcion()) ?>
    </div>
</td>

<td align='left' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
    <div class="proveedor">
        <?php Gral::_echo($pde_oc->getPrvProveedor()->getDescripcion()) ?>
    </div>
    <div class="descripcion">
        <?php Gral::_echo($pde_oc->getInsInsumo()->getDescripcion()) ?>
    </div>
    <div class="codigo-interno">
        CI: <?php Gral::_echo($pde_oc->getInsInsumo()->getCodigoInterno()) ?>
    </div>
    <div class="marca">
        <?php Gral::_echo($pde_oc->getInsInsumo()->getInsMarca()->getDescripcion()) ?>: <?php Gral::_echo($pde_oc->getInsInsumo()->getCodigoMarca()) ?>
    </div>


    <div class="emails_enviados">
        <?php foreach ($pde_oc->getPdeOcEnviados() as $pde_oc_enviado) { ?>
            <?php if ($pde_oc_enviado->getEstado()) { ?>
                <img src="imgs/email/icn_email_green.png" alt="icn-email" width="14" title="Enviado a '<?php echo $pde_oc_enviado->getDestinatario() ?>' el <?php echo Gral::getFechaHoraToWEB($pde_oc_enviado->getCreado()) ?>">
            <?php } else { ?>
                <img src="imgs/email/icn_email_red.png" alt="icn-email" width="14" title="No Enviado: '<?php echo $pde_oc_enviado->getCodigoEnvio() ?>'">
            <?php } ?>
        <?php } ?>
    </div>

</td>

<td align='left' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
    <div class="tipo-estado">
        <img src='imgs/pde_oc_estado/<?php Gral::_echo($pde_oc->getPdeOcTipoEstado()->getCodigo()) ?>.png' width='12' align='absmiddle' />
        <?php Gral::_echo($pde_oc->getPdeOcTipoEstado()->getDescripcion()) ?>
    </div>

    <?php if ($pde_oc->getPdeOcTipoEstado()->getCodigo() == PdeOcTipoEstado::TIPO_ESTADO_RETRASADO) { ?>
        <div class="vencimiento">
            <?php Gral::_echo(Gral::getFechaToWeb($pde_oc->getVencimiento())) ?>
        </div>
    <?php } ?>

</td>

<td align='left' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
    <div class="tipo-estado-recepcion">
        <img src='imgs/pde_oc_tipo_estado_recepcion/<?php Gral::_echo($pde_oc->getPdeOcTipoEstadoRecepcion()->getCodigo()) ?>.png' width='12' align='absmiddle' />
        <?php Gral::_echo($pde_oc->getPdeOcTipoEstadoRecepcion()->getDescripcion()) ?>
    </div>

    <div class="cantidad-recepcion <?php echo $css_cantidad_total_recibida ?>" title="Se recibieron <?php Gral::_echo($pde_oc->getCantidadTotalRecibida()) ?> de <?php Gral::_echo($pde_oc->getCantidad()) ?>">
        <?php Gral::_echo($cantidad_total_recibida) ?> / 
        <?php Gral::_echo($cantidad) ?>
    </div>
</td>

<td align='left' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
    <div class="tipo-estado-facturacion">
        <img src='imgs/pde_oc_tipo_estado_facturacion/<?php Gral::_echo($pde_oc->getPdeOcTipoEstadoFacturacion()->getCodigo()) ?>.png' width='12' align='absmiddle' />
        <?php Gral::_echo($pde_oc->getPdeOcTipoEstadoFacturacion()->getDescripcion()) ?>
    </div>

    <div class="cantidad-facturacion <?php echo $css_cantidad_total_facturada ?>" title="Se facturaron <?php Gral::_echo($pde_oc->getCantidadTotalFacturada()) ?> de <?php Gral::_echo($pde_oc->getCantidad()) ?>">
        <?php Gral::_echo($cantidad_total_facturada) ?> / 
        <?php Gral::_echo($cantidad) ?>
    </div>    
</td>

<td align='right' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>

    <div class="importe-estimado" title="Importe Estimado">
        <?php Gral::_echoImp($importe_unitario_estimado) ?>
    </div>
    
    <div class="texto-iva">
        <?php Gral::_echo($pde_oc->getIvaIncluido() ? 'IVA Incluido' : '+ IVA') ?>            
    </div>
    
    <?php if ($pde_factura_pde_oc && $importe_unitario_estimado != $importe_unitario_real) { ?>
        <div class="importe-real anomalia" title="Importe Real en Factura de Compra">
            <?php Gral::_echoImp($importe_unitario_real) ?>
        </div>
    <?php } ?>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
    <?php if (count($pde_oc->getPdeRecepcions()) > 0) { ?>
        <div class="centro-recepcion"><?php Gral::_echo($pde_oc->getPdeCentroRecepcion()->getDescripcion()) ?></div>
    <?php } ?>
    <div class="recepcions">
        <?php foreach ($pde_oc->getPdeRecepcions() as $pde_recepcion) { ?>
            <div class="recepcion" pde_recepcion_id="<?php echo $pde_recepcion->getId() ?>" title="<?php Gral::_echo($pde_recepcion->getNroComprobante()) ?>">
                &bull; <?php Gral::_echo($pde_recepcion->getCodigo()) ?>
                <?php if (UsCredencial::getEsAcreditado('PDE_OC_GESTION_ACCION_ETIQUETA')) { ?>
                    <img class="boton etiquetas-recepcion" src='imgs/icn_barcode.png' width='14' align='absmiddle' title="Imprimir Etiquetas de Recepcion" />
                <?php } ?>

            </div>
        <?php } ?>
    </div>
</td>

<td align='left' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
    <ul class="adm_botones_acciones">

        <?php if (UsCredencial::getEsAcreditado('PDE_OC_GESTION_ACCION_DESTACADO')) { ?>
            <li class='adm_botones_accion destacado' title="<?php Lang::_lang(($pde_oc->esPdeOcDestacado()) ? 'Destacado' : 'No Destacado') ?>">
                <img src='imgs/btn_destacado_<?php echo ($pde_oc->esPdeOcDestacado()) ? '1' : '0' ?>.png' width='18' align='absmiddle' />
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('PDE_OC_GESTION_ACCION_FICHA')) { ?>
            <li class='adm_botones_accion ficha' title="<?php Lang::_lang('Ver Ficha de') ?> <?php Lang::_lang('PdeOc') ?>">
                <img src='imgs/btn_ficha.png' width='13' align='absmiddle' />
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('PDE_OC_GESTION_ACCION_REFRESH')) { ?>
            <li class='adm_botones_accion refresh' title="<?php Lang::_lang('Actualizar') ?> <?php Lang::_lang('PdeOc') ?>">
                <img src='imgs/btn_refresh.png' width='18' align='absmiddle' />
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('PDE_OC_GESTION_ACCION_ENVIAR_POR_CORREO')) { ?>
            <li class='adm_botones_accion pde-oc-enviar-por-correo'>
                <img src='imgs/btn_email.png' width='20' align='absmiddle' border='0' title="Enviar Email" />
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('PDE_OC_GESTION_ACCION_COMPROBANTE')) { ?>
            <li class='adm_botones_accion comprobante' title="<?php Lang::_lang('Comprobante de') ?> <?php Lang::_lang('PdeOc') ?>">
                <a href="<?php echo Gral::getPath('path_http') ?>admin/ajax/modulos/pde_oc_gestion/pdf_oc_gestion_comprobante.php?pde_oc_id=<?php echo $pde_oc->getId() ?>" target="_blank">
                    <img src='imgs/btn_pdf.png' width='20' align='absmiddle' />
                </a>
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('PDE_OC_GESTION_ACCION_CONFIG')) { ?>
            <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/pde_oc_gestion/db_context_acciones.php?id=<?php Gral::_echo($pde_oc->getId()) ?>' modulo_metodo_init="setInitPdeOcs()">
                <img src='imgs/btn_ajustar.png' width='23' align='absmiddle' />    	
            </li>
        <?php } ?>

        <?php if (count($pde_oc->getPdeOcReclamos()) > 0) { ?>
            <li class='adm_botones_accion reclamos' title="<?php Lang::_lang('La OC tiene reclamos registrados') ?>">
                <img src='imgs/btn_reclamar.png' width='18' align='absmiddle' />    	
            </li>
        <?php } ?>

    </ul>		
</td>
