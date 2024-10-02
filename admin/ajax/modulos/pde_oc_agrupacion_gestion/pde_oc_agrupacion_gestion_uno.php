<?php
$pde_oc_agrupacion_items = $pde_oc_agrupacion->getPdeOcAgrupacionItems();
$pde_ocs = $pde_oc_agrupacion->getPdeOcs();
$pde_oc_agrupacion_items = $pde_oc_agrupacion->getPdeOcAgrupacionItems();

$pde_oc_agrupacion_tipo_estado = $pde_oc_agrupacion->getPdeOcAgrupacionTipoEstado();
?>
<td align='center' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
    <div class="vermasinfo" identificador="<?php echo $pde_oc_agrupacion->getId() ?>" modulo="pde_oc_agrupacion">+</div>        
</td>

<td align='center' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
    <div class="codigo" title="<?php Gral::_echo($pde_oc_agrupacion->getId()) ?>">
        <?php Gral::_echo($pde_oc_agrupacion->getCodigo()) ?>
    </div>
    <div class="creado">
        <?php Gral::_echo(Gral::getFechaToWeb($pde_oc_agrupacion->getCreado())) ?>
    </div>
    <div class="creado-por">
        <?php Gral::_echo($pde_oc_agrupacion->getCreadoPorDescripcion()) ?>
    </div>
</td>

<td align='left' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
    <div class="proveedor">
        <?php Gral::_echo($pde_oc_agrupacion->getPrvProveedor()->getDescripcion()) ?>
    </div>

    <div class="observacion">
        <?php Gral::_echo($pde_oc_agrupacion->getObservacion()) ?>
    </div>

    <div class="emails_enviados">
        <?php foreach ($pde_oc_agrupacion->getPdeOcAgrupacionEnviados() as $pde_oc_agrupacion_enviado) { ?>
            <?php if ($pde_oc_agrupacion_enviado->getEstado()) { ?>
                <img src="imgs/email/icn_email_green.png" alt="icn-email" width="14" title="Enviado a '<?php echo $pde_oc_agrupacion_enviado->getDestinatario() ?>' el <?php echo Gral::getFechaHoraToWEB($pde_oc_agrupacion_enviado->getCreado()) ?>">
            <?php } else { ?>
                <img src="imgs/email/icn_email_red.png" alt="icn-email" width="14" title="No Enviado: '<?php echo $pde_oc_agrupacion_enviado->getCodigoEnvio() ?>'">
            <?php } ?>
        <?php } ?>
    </div>    

    <?php if (count($pde_oc_agrupacion_items) > 0) { ?>
        <div class="insumos-en-item-temporal">
            <?php 
            foreach ($pde_oc_agrupacion_items as $pde_oc_agrupacion_item) { 
                $cantidad = $pde_oc_agrupacion_item->getCantidad();
                $pedido_descripcion_corta = $cantidad.' '.substr($pde_oc_agrupacion_item->getInsInsumo()->getDescripcion(), 0, 30);
                $pedido_descripcion = $cantidad.' '.$pde_oc_agrupacion_item->getInsInsumo()->getDescripcion().' (Temporal)';                
                ?>
                <label class="insumo" title="<?php Gral::_echo($pedido_descripcion) ?>">
                    <?php Gral::_echo($pedido_descripcion_corta) ?>
                </label>
            <?php } ?>
        </div>
    <?php } else { ?>
        <div class="insumos-en-oc">
            <?php
            foreach ($pde_ocs as $pde_oc) {
                $pde_oc_tipo_estado = $pde_oc->getPdeOcTipoEstado();
                
                $cantidad = $pde_oc->getCantidad();
                $pedido_descripcion_corta = $cantidad.' '.substr($pde_oc->getInsInsumo()->getDescripcion(), 0, 30);
                $pedido_descripcion = $cantidad.' '.$pde_oc->getInsInsumo()->getDescripcion().' ('.$pde_oc_tipo_estado->getDescripcion().')';
                ?>
                <label class="insumo" title="<?php Gral::_echo($pedido_descripcion) ?>">
                    <img src='imgs/pde_oc_estado/<?php Gral::_echo($pde_oc_tipo_estado->getCodigo()) ?>.png' width='8' align='absmiddle' title="<?php Gral::_echo($pde_oc_tipo_estado->getDescripcion()) ?>" />
                    <?php Gral::_echo($pedido_descripcion_corta) ?>
                </label>
            <?php } ?>
        </div>
    <?php } ?>

</td>

<td align='left' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
    <img src='imgs/pde_oc_agrupacion_estado/<?php Gral::_echo($pde_oc_agrupacion->getPdeOcAgrupacionTipoEstado()->getCodigo()) ?>.png' width='12' align='absmiddle' />
    <?php Gral::_echo($pde_oc_agrupacion->getPdeOcAgrupacionTipoEstado()->getDescripcion()) ?>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>

    <?php if (count($pde_ocs) > 0) { ?>
        <div class="cantidad-items">
            <?php Gral::_echo(count($pde_ocs)) ?>
            <div class="label">OCs</div>
        </div>
    <?php } elseif (count($pde_oc_agrupacion_items) > 0) { ?>
        <div class="cantidad-items-temporales">
            <?php Gral::_echo(count($pde_oc_agrupacion_items)) ?> 
            <div class="label">Items</div>
        </div>
    <?php } ?>

</td>

<td align='right' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
    <div class="importe-total">
        <?php if($pde_oc_agrupacion->getIvaIncluido()){ ?>
            <?php Gral::_echoImp($pde_oc_agrupacion->getImporteTotalConIva()) ?>
        <?php }else{ ?>
            <?php Gral::_echoImp($pde_oc_agrupacion->getImporteSubtotal()) ?>
        <?php } ?>
    </div>
    
    <?php if($pde_oc_agrupacion->getIvaIncluido()){ ?>
        <div class="texto-iva texto-iva-incluido">
            IVA Incluido
        </div>
    <?php }else{ ?>
        <div class="texto-iva texto-mas-iva">
            + IVA
        </div>
    <?php } ?>
</td>

<td align='left' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
    <ul class="adm_botones_acciones">

        <?php if (UsCredencial::getEsAcreditado('PDE_OC_AGRUPACION_GESTION_ACCION_FICHA')) { ?>
            <li class='adm_botones_accion ficha' title="<?php Lang::_lang('Ver Ficha de') ?> <?php Lang::_lang('PdeOcAgrupacion') ?>">
                <img src='imgs/btn_ficha.png' width='13' align='absmiddle' />
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('PDE_OC_AGRUPACION_GESTION_ACCION_REFRESH')) { ?>
            <li class='adm_botones_accion refresh' title="<?php Lang::_lang('Actualizar') ?> <?php Lang::_lang('PdeOcAgrupacion') ?>">
                <img src='imgs/btn_refresh.png' width='18' align='absmiddle' />
            </li>
        <?php } ?>

        <?php if ($pde_oc_agrupacion_tipo_estado->getCodigo() == PdeOcAgrupacionTipoEstado::TIPO_ESTADO_APROBADO) { ?>
            <?php if (UsCredencial::getEsAcreditado('PDE_OC_AGRUPACION_GESTION_ACCION_ENVIAR_POR_CORREO')) { ?>
                <li class='adm_botones_accion pde-oc-agrupacion-enviar-por-correo'>
                    <img src='imgs/btn_email.png' width='20' align='absmiddle' border='0' title="Enviar Email" />
                </li>
            <?php } ?>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('PDE_OC_AGRUPACION_GESTION_ACCION_COMPROBANTE')) { ?>
            <li class='adm_botones_accion comprobante' title="<?php Lang::_lang('Comprobante de') ?> <?php Lang::_lang('PdeOcAgrupacion') ?>">
                <a href="<?php echo Gral::getPath('path_http') ?>admin/ajax/modulos/pde_oc_agrupacion_gestion/pdf_oc_gestion_comprobante.php?pde_oc_agrupacion_id=<?php echo $pde_oc_agrupacion->getId() ?>" target="_blank">
                    <img src='imgs/btn_pdf.png' width='20' align='absmiddle' />
                </a>
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('PDE_OC_AGRUPACION_GESTION_ACCION_CONFIG')) { ?>
            <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/pde_oc_agrupacion_gestion/db_context_acciones.php?id=<?php Gral::_echo($pde_oc_agrupacion->getId()) ?>' modulo_metodo_init="setInitPdeOcAgrupacions()">
                <img src='imgs/btn_ajustar.png' width='23' align='absmiddle' />    	
            </li>
        <?php } ?>

    </ul>		
</td>
