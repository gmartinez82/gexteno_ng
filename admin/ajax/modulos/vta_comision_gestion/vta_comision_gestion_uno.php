<?php
$vta_comision_vta_comprobantes = $vta_comision->getVtaComisionVtaComprobantes();
$vta_comision_gral_forma_pagos = $vta_comision->getVtaComisionGralFpFormaPagos();

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="vermasinfo" identificador="<?php echo $vta_comision->getId() ?>" modulo="vta_comision">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    
    <div class="codigo">
        <?php Gral::_echo($vta_comision->getCodigo()) ?>
    </div>
    <div class="fecha_emision">
        <?php Gral::_echo(Gral::getFechaToWeb($vta_comision->getFechaEmision())) ?>
    </div>
    
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>

    <div class="vta_comision_tipo_estado">
        <img src="imgs/vta_comision_tipo_estado/<?php Gral::_echo($vta_comision->getVtaComisionTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
        <?php Gral::_echo($vta_comision->getVtaComisionTipoEstado()->getDescripcion()) ?>
    </div>

</td>

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="persona_descripcion">
        <?php Gral::_echo($vta_comision->getPersonaDescripcion()) ?>
    </div>
    
    <div class="emails_enviados">
        <?php foreach ($vta_comision->getVtaComisionEnviados() as $vta_comision_enviado) { ?>
            <?php if ($vta_comision_enviado->getEstado()) { ?>
                <img src="imgs/email/icn_email_green.png" alt="icn-email" width="14" title="Enviado a '<?php echo $vta_comision_enviado->getDestinatario() ?>' el <?php echo Gral::getFechaHoraToWEB($vta_comision_enviado->getCreado()) ?>">
            <?php } else { ?>
                <img src="imgs/email/icn_email_red.png" alt="icn-email" width="14" title="No Enviado: '<?php echo $vta_comision_enviado->getCodigoEnvio() ?>'">
            <?php } ?>
        <?php } ?>
    </div> 
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="vta-comprobantes-vinculados">
        <?php
        foreach ($vta_comision_vta_comprobantes as $vta_comision_vta_comprobante) {
            $vta_comprobante = $vta_comision_vta_comprobante->getVtaComprobante();
            ?>
            <div class="vta-comprobante-vinculado"> -
                <?php Gral::_echo($vta_comprobante->getTipoComprobanteSiglas()) ?>
                <?php Gral::_echo($vta_comprobante->getTipoComprobanteMin()) ?> 
                <?php Gral::_echo($vta_comprobante->getNumeroComprobanteCompleto()) ?>
                - <?php Gral::_echoImp($vta_comision_vta_comprobante->getImporteAfectado()) ?> 
                - <?php Gral::_echo($vta_comision_vta_comprobante->getPorcentajeComision()) ?>%
                - <?php Gral::_echoImp($vta_comision_vta_comprobante->getImporteComision()) ?> 
            </div>
        <?php } ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="gral-fp-forma-pagos">
        <?php
        foreach ($vta_comision_gral_forma_pagos as $vta_comision_gral_forma_pago) {
            $gral_fp_forma_pago = $vta_comision_gral_forma_pago->getGralFpFormaPago();
            ?>
            <div class="gral-fp-forma-pago">
                <?php Gral::_echo($gral_fp_forma_pago->getDescripcion()) ?>
                (<?php Gral::_echoImp($vta_comision_gral_forma_pago->getImporteAfectado()) ?>)
            </div>
        <?php } ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="importe-total">
        <?php Gral::_echoImp($vta_comision->getVtaComisionTotal()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <ul class="adm_botones_acciones">

        <?php if (UsCredencial::getEsAcreditado('VTA_COMISION_GESTION_ACCION_FICHA')) { ?>
            <li class='adm_botones_accion vta_comision_gestion_ver_ficha'>
                <img src='imgs/btn_ficha.png' width='16' border='0' />
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_COMISION_GESTION_ACCION_COMPROBANTE')) { ?>
            <li class='adm_botones_accion vta_comision_comprobante'>
                <a href="ajax/modulos/vta_comision_gestion/pdf_comision.php?vta_comision_id=<?php echo $vta_comision->getId() ?>" target="_blank">
                    <img src='imgs/btn_pdf.png' width='20' border='0' title="Ver OrdenPago" />
                </a>
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_COMISION_GESTION_ACCION_ENVIAR_POR_CORREO')) { ?>
            <li class='adm_botones_accion vta_comision_enviar_por_correo'>
                <img src='imgs/btn_email.png' width='20' border='0' title="Enviar Email" />
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_COMISION_GESTION_ACCION_CONFIG')) { ?>
            <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/vta_comision_gestion/db_context_acciones.php?id=<?php Gral::_echo($vta_comision->getId()) ?>' modulo_metodo_init="setInitVtaComisionGestion()">
                <img src='imgs/btn_ajustar.png' width='20' />    	
            </li>
        <?php } ?>

    </ul>
</td>


