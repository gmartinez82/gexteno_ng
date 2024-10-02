<?php
$cli_cliente = $vta_remito->getCliCliente();

$email = '';
if ($cli_cliente) {
    $email = $cli_cliente->getEmail();
}

$vta_presupuesto = $vta_remito->getVtaPresupuesto();
$vta_hoja_ruta = $vta_remito->getVtaHojaRutaActiva();
?>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="vermasinfo" identificador="<?php echo $vta_remito->getId() ?>" modulo="vta_remito">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="nro-remito">
        <?php Gral::_echo($vta_remito->getNumeroRemitoCompleto()) ?>
    </div>
    <div class="codigo-vta-remito">
        <?php Gral::_echo($vta_remito->getCodigo()) ?>
    </div>
    <div class="fecha-vta-remito">
        <?php Gral::_echo(Gral::getFechaToWEB($vta_remito->getFecha())) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="cliente">
        <?php Gral::_echo($vta_remito->getPersonaDescripcion()) ?>
    </div>
    <div class="email">
        <?php Gral::_echo($email) ?> 
    </div>

    <?php if(trim($vta_remito->getObservacion()) != ''){ ?>
    <div class="nota-interna">
        NI: <?php Gral::_echo($vta_remito->getObservacion()) ?>
    </div>
    <?php } ?>

    <?php if(trim($vta_remito->getNotaPublica()) != ''){ ?>
    <div class="nota-publica">
        NP: <?php Gral::_echo($vta_remito->getNotaPublica()) ?>
    </div>
    <?php } ?>
    
    <?php if($vta_remito->getGralSucursalRetiro() != 'null'){ ?>
    <div class="sucursal-retiro">
        Retira en <?php Gral::_echo($vta_remito->getGralSucursalRetiroObj()->getDescripcion()) ?>
    </div>
    <?php } ?>

    <?php if($vta_remito->getCliCentroRecepcionId() != 'null'){ ?>
    <div class="centro-recepcion-descripcion">
        Entregar en <?php Gral::_echo($vta_remito->getCliCentroRecepcion()->getDomicilio()); ?>
    </div>
    <div class="centro-recepcion-localidad">
        <?php Gral::_echo($vta_remito->getCliCentroRecepcion()->getGeoLocalidad()->getDescripcionFull()); ?>
    </div>
    <?php } ?>
    
    <div class="emails_enviados">
        <?php foreach ($vta_remito->getVtaRemitoEnviados() as $vta_remito_enviado) { ?>
            <?php if ($vta_remito_enviado->getEstado()) { ?>
                <img src="imgs/email/icn_email_green.png" alt="icn-email" width="14" title="Enviado a '<?php echo $vta_remito_enviado->getDestinatario() ?>' el <?php echo Gral::getFechaHoraToWEB($vta_remito_enviado->getCreado()) ?>">
            <?php } else { ?>
                <img src="imgs/email/icn_email_red.png" alt="icn-email" width="14" title="No Enviado: '<?php echo $vta_remito_enviado->getCodigoEnvio() ?>'">
            <?php } ?>
        <?php } ?>
    </div>
    
    <?php if($vta_hoja_ruta): ?>
        <div class="vta-hoja-ruta">
            <img src='imgs/btn_roadmap.png' width='16' title="Hoja de Ruta Asignada" />            
            <?php Gral::_echo($vta_hoja_ruta->getDescripcion()); ?>
        </div>
    <?php endif; ?>
</td>

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="vta_remito_tipo_estado_id">
        <img src="imgs/vta_remito_tipo_estado/<?php Gral::_echo($vta_remito->getVtaRemitoTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
        <?php Gral::_echo($vta_remito->getVtaRemitoTipoEstado()->getDescripcion()) ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="tipo">
        <?php Gral::_echo($vta_remito->getVtaTipoRemito()->getCodigoMin()) ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="items">
        <?php Gral::_echo($vta_remito->getCantidadItemsRemito()) ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="pan-panol">
        <?php Gral::_echo($vta_remito->getPanPanol()->getDescripcion()) ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="creado">
        <?php Gral::_echo(Gral::getFechaHoraToWEB($vta_remito->getCreado())) ?>
    </div>
    <div class="creado_por">
        <?php Gral::_echo($vta_remito->getVtaVendedor()->getDescripcion()) ?>
    </div>
</td>


<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <ul class="adm_botones_acciones" vta_remito_id="<?php echo $vta_remito->getId() ?>">
        <?php if (UsCredencial::getEsAcreditado('VTA_REMITO_GESTION_ACCION_FICHA')) { ?>
            <li class='adm_botones_accion vta_remito_gestion_ver_ficha'>
                <img src='imgs/btn_ficha.png' width='16' border='0' />
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_REMITO_GESTION_ACCION_AUTORIZAR_REMITO')) { ?>
            <?php if ($vta_remito->getControlEstado(VtaRemitoTipoEstado::TIPO_GENERADO)) { ?>
                <li class='adm_botones_accion vta_remito_gestion_autorizar_remito'>
                    <img src='imgs/tilde_0.png' width='20' border='0' title="Preparar Remito"/>
                </li>
            <?php } ?>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_REMITO_GESTION_ACCION_DESPACHO_AUTORIZADO')) { ?>
            <?php if ($vta_presupuesto->getId() != 'null' && $vta_remito->getControlEstado(VtaRemitoTipoEstado::TIPO_PREPARADO)) { ?>
                <li class='adm_botones_accion vta_remito_gestion_entregar'>
                    <img src='imgs/btn_entregar.png' width='20' border='0' title="Entregar a Cliente" />
                </li>
            <?php } ?>
            <?php if ($vta_presupuesto->getId() == 'null' && $vta_remito->getControlEstado(VtaRemitoTipoEstado::TIPO_PREPARADO)) { ?>
                <li class='adm_botones_accion vta_remito_gestion_despacho_autorizado'>
                    <img src='imgs/tilde_1.png' width='20' border='0' title="Despacho Autorizado"/>
                </li>
            <?php } ?>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_REMITO_GESTION_ACCION_DESPACHAR')) { ?>
            <?php if ($vta_remito->getControlEstado(VtaRemitoTipoEstado::TIPO_AUTORIZADO_DESPACHO)) { ?>
                <li class='adm_botones_accion vta_remito_gestion_despachar'>
                    <img src='imgs/btn_despachar.png' width='20' border='0' title="Despachar"/>
                </li>
            <?php } ?>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_REMITO_GESTION_ACCION_ENTREGAR')) { ?>
            <?php if ($vta_remito->getControlEstado(VtaRemitoTipoEstado::TIPO_DESPACHADO)) { ?>
                <li class='adm_botones_accion vta_remito_gestion_entregar'>
                    <img src='imgs/btn_entregar.png' width='20' border='0' title="Entregar a Cliente" />
                </li>
            <?php } ?>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_REMITO_GESTION_ACCION_COMPROBANTE')) { ?>
            <li class='adm_botones_accion vta-remito-comprobante'>
                <a href="ajax/modulos/vta_remito_gestion/pdf_remito.php?vta_remito_id=<?php echo $vta_remito->getId() ?>" target="_blank">
                    <img src='imgs/btn_pdf.png' width='20' border='0' title="Ver Remito" />
                </a>
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_REMITO_GESTION_ACCION_ENVIAR_POR_CORREO')) { ?>
            <li class='adm_botones_accion vta-remito-enviar-por-correo'>
                <img src='imgs/btn_email.png' width='20' border='0' title="Enviar Email" />
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_REMITO_GESTION_ACCION_ETIQUETA')) { ?>
            <li class='adm_botones_accion etiquetas-remision'>
                <img src='imgs/icn_barcode.png' width='18' title="Imprimir Etiquetas de Remision" />
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_REMITO_GESTION_ACCION_ASIGNAR_HOJA_RUTA')) { ?>
            <li class='adm_botones_accion hoja-ruta'>
                <img src='imgs/btn_roadmap.png' width='18' title="Hoja de Ruta" class='gen-modal-open' gen-modal-file="ajax/modulos/vta_remito_gestion/modal_hoja_ruta.php?identificador=<?php echo $vta_remito->getId() ?>" gen-modal-content=".div_modal" gen-modal-width="70%" gen-modal-height="600" gen-modal-titulo="Vincular remito a hoja de ruta" gen-modal-callback="setInit()"/>
            </li>
        <?php } ?>
            
        <?php if (UsCredencial::getEsAcreditado('VTA_REMITO_GESTION_ACCION_EDITAR_REMITO')) { ?>
            <li class='adm_botones_accion remito-editar-info'>
                <img src='imgs/btn_modi.gif' width='18' title="Editar Remito" class='gen-modal-open' gen-modal-file="ajax/modulos/vta_remito_gestion/modal_editar_remito.php?identificador=<?php echo $vta_remito->getId() ?>" gen-modal-content=".div_modal" gen-modal-width="70%" gen-modal-height="450" gen-modal-titulo="Editar Remito" gen-modal-callback="setInit()"/>
            </li>
        <?php } ?>
            
            <?php if (UsCredencial::getEsAcreditado('VTA_REMITO_GESTION_ACCION_CONFIG')) { ?>
            <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/vta_remito_gestion/db_context_acciones.php?id=<?php Gral::_echo($vta_remito->getId()) ?>' modulo_metodo_init="setInitVtaRemitoGestion()">
                <img src='imgs/btn_ajustar.png' width='20' />    	
            </li>
        <?php } ?>    
    </ul>
</td>
