<?php
$cli_cliente = $vta_remito_ajuste->getCliCliente();

$email = '';
if ($cli_cliente) {
    $email = $cli_cliente->getEmail();
}

$vta_presupuesto = $vta_remito_ajuste->getVtaPresupuesto();
$vta_hoja_ruta = $vta_remito_ajuste->getVtaHojaRutaActiva();
?>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="vermasinfo" identificador="<?php echo $vta_remito_ajuste->getId() ?>" modulo="vta_remito_ajuste">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="nro-remito-ajuste">
        <?php Gral::_echo($vta_remito_ajuste->getNumeroRemitoAjusteCompleto()) ?>
    </div>
    <div class="codigo-vta-remito-ajuste">
        <?php Gral::_echo($vta_remito_ajuste->getCodigo()) ?>
    </div>
    <div class="fecha-vta-remito-ajuste">
        <?php Gral::_echo(Gral::getFechaToWEB($vta_remito_ajuste->getFecha())) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="cliente">
        <?php Gral::_echo($vta_remito_ajuste->getPersonaDescripcion()) ?>
    </div>
    <div class="email">
        <?php Gral::_echo($email) ?> 
    </div>

    <?php if(trim($vta_remito_ajuste->getObservacion()) != ''){ ?>
    <div class="nota-interna">
        NI: <?php Gral::_echo($vta_remito_ajuste->getObservacion()) ?>
    </div>
    <?php } ?>

    <?php if(trim($vta_remito_ajuste->getNotaPublica()) != ''){ ?>
    <div class="nota-publica">
        NP: <?php Gral::_echo($vta_remito_ajuste->getNotaPublica()) ?>
    </div>
    <?php } ?>
    
    <?php if($vta_remito_ajuste->getGralSucursalRetiro() != 'null'){ ?>
    <div class="sucursal-retiro">
        Retira en <?php Gral::_echo($vta_remito_ajuste->getGralSucursalRetiroObj()->getDescripcion()) ?>
    </div>
    <?php } ?>

    <?php if($vta_remito_ajuste->getCliCentroRecepcionId() != 'null'){ ?>
    <div class="centro-recepcion-descripcion">
        Entregar en <?php Gral::_echo($vta_remito_ajuste->getCliCentroRecepcion()->getDomicilio()); ?>
    </div>
    <div class="centro-recepcion-localidad">
        <?php Gral::_echo($vta_remito_ajuste->getCliCentroRecepcion()->getGeoLocalidad()->getDescripcionFull()); ?>
    </div>
    <?php } ?>
    
    <div class="emails_enviados">
        <?php foreach ($vta_remito_ajuste->getVtaRemitoAjusteEnviados() as $vta_remito_ajuste_enviado) { ?>
            <?php if ($vta_remito_ajuste_enviado->getEstado()) { ?>
                <img src="imgs/email/icn_email_green.png" alt="icn-email" width="14" title="Enviado a '<?php echo $vta_remito_ajuste_enviado->getDestinatario() ?>' el <?php echo Gral::getFechaHoraToWEB($vta_remito_ajuste_enviado->getCreado()) ?>">
            <?php } else { ?>
                <img src="imgs/email/icn_email_red.png" alt="icn-email" width="14" title="No Enviado: '<?php echo $vta_remito_ajuste_enviado->getCodigoEnvio() ?>'">
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
    <div class="vta_remito_ajuste_tipo_estado_id">
        <img src="imgs/vta_remito_ajuste_tipo_estado/<?php Gral::_echo($vta_remito_ajuste->getVtaRemitoAjusteTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
        <?php Gral::_echo($vta_remito_ajuste->getVtaRemitoAjusteTipoEstado()->getDescripcion()) ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="tipo">
        <?php Gral::_echo($vta_remito_ajuste->getVtaTipoRemitoAjuste()->getCodigoMin()) ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="items">
        <?php Gral::_echo($vta_remito_ajuste->getCantidadItemsRemitoAjuste()) ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="pan-panol">
        <?php Gral::_echo($vta_remito_ajuste->getPanPanol()->getDescripcion()) ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="creado">
        <?php Gral::_echo(Gral::getFechaHoraToWEB($vta_remito_ajuste->getCreado())) ?>
    </div>
    <div class="creado_por">
        <?php Gral::_echo($vta_remito_ajuste->getVtaVendedor()->getDescripcion()) ?>
    </div>
</td>


<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <ul class="adm_botones_acciones" vta_remito_ajuste_id="<?php echo $vta_remito_ajuste->getId() ?>">
        <?php if (UsCredencial::getEsAcreditado('VTA_REMITO_AJUSTE_GESTION_ACCION_FICHA')) { ?>
            <li class='adm_botones_accion vta_remito_ajuste_gestion_ver_ficha'>
                <img src='imgs/btn_ficha.png' width='16' border='0' />
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_REMITO_AJUSTE_GESTION_ACCION_AUTORIZAR_REMITO')) { ?>
            <?php if ($vta_remito_ajuste->getControlEstado(VtaRemitoAjusteTipoEstado::TIPO_GENERADO)) { ?>
                <li class='adm_botones_accion vta_remito_ajuste_gestion_autorizar_remito_ajuste'>
                    <img src='imgs/tilde_0.png' width='20' border='0' title="Preparar RemitoAjuste"/>
                </li>
            <?php } ?>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_REMITO_AJUSTE_GESTION_ACCION_DESPACHO_AUTORIZADO')) { ?>
            <?php if ($vta_presupuesto->getId() != 'null' && $vta_remito_ajuste->getControlEstado(VtaRemitoAjusteTipoEstado::TIPO_PREPARADO)) { ?>
                <li class='adm_botones_accion vta_remito_ajuste_gestion_entregar'>
                    <img src='imgs/btn_entregar.png' width='20' border='0' title="Entregar a Cliente" />
                </li>
            <?php } ?>
            <?php if ($vta_presupuesto->getId() == 'null' && $vta_remito_ajuste->getControlEstado(VtaRemitoAjusteTipoEstado::TIPO_PREPARADO)) { ?>
                <li class='adm_botones_accion vta_remito_ajuste_gestion_despacho_autorizado'>
                    <img src='imgs/tilde_1.png' width='20' border='0' title="Despacho Autorizado"/>
                </li>
            <?php } ?>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_REMITO_AJUSTE_GESTION_ACCION_DESPACHAR')) { ?>
            <?php if ($vta_remito_ajuste->getControlEstado(VtaRemitoAjusteTipoEstado::TIPO_AUTORIZADO_DESPACHO)) { ?>
                <li class='adm_botones_accion vta_remito_ajuste_gestion_despachar'>
                    <img src='imgs/btn_despachar.png' width='20' border='0' title="Despachar"/>
                </li>
            <?php }elseif ($vta_remito_ajuste->getControlEstado(VtaRemitoAjusteTipoEstado::TIPO_DESPACHADO)){ ?>
                <li class='adm_botones_accion gen-modal-open' gen-modal-file="ajax/modulos/vta_remito_ajuste_gestion/modal_vta_remito_ajuste_gestion_despachar_datos.php?vta_remito_ajuste_id=<?php echo $vta_remito_ajuste->getId() ?>" gen-modal-content=".div_modal" gen-modal-width="70%" gen-modal-height="500" gen-modal-titulo="Ingresar Datos de Transporte" gen-modal-callback="setInitVtaRemitoAjusteGestion()" >
                    <img src='imgs/btn_despachar.png' width='20' border='0' title="Agregar Datos del Despacho"/>
                </li>
            <?php } ?>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_REMITO_AJUSTE_GESTION_ACCION_ENTREGAR')) { ?>
            <?php if ($vta_remito_ajuste->getControlEstado(VtaRemitoAjusteTipoEstado::TIPO_DESPACHADO)) { ?>
                <li class='adm_botones_accion vta_remito_ajuste_gestion_entregar'>
                    <img src='imgs/btn_entregar.png' width='20' border='0' title="Entregar a Cliente" />
                </li>
            <?php } ?>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_REMITO_AJUSTE_GESTION_ACCION_COMPROBANTE')) { ?>
            <li class='adm_botones_accion vta-remito-ajuste-comprobante'>
                <a href="ajax/modulos/vta_remito_ajuste_gestion/pdf_remito_ajuste.php?vta_remito_ajuste_id=<?php echo $vta_remito_ajuste->getId() ?>" target="_blank">
                    <img src='imgs/btn_pdf.png' width='20' border='0' title="Ver RemitoAjuste" />
                </a>
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_REMITO_AJUSTE_GESTION_ACCION_ENVIAR_POR_CORREO')) { ?>
            <li class='adm_botones_accion vta-remito-ajuste-enviar-por-correo'>
                <img src='imgs/btn_email.png' width='20' border='0' title="Enviar Email" />
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_REMITO_AJUSTE_GESTION_ACCION_ETIQUETA')) { ?>
            <li class='adm_botones_accion etiquetas-remision'>
                <img src='imgs/icn_barcode.png' width='18' title="Imprimir Etiquetas de Remision" />
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_REMITO_AJUSTE_GESTION_ACCION_ASIGNAR_HOJA_RUTA')) { ?>
            <li class='adm_botones_accion hoja-ruta'>
                <img src='imgs/btn_roadmap.png' width='18' title="Hoja de Ruta" class='gen-modal-open' gen-modal-file="ajax/modulos/vta_remito_ajuste_gestion/modal_hoja_ruta.php?identificador=<?php echo $vta_remito_ajuste->getId() ?>" gen-modal-content=".div_modal" gen-modal-width="70%" gen-modal-height="600" gen-modal-titulo="Vincular remito ajuste a hoja de ruta" gen-modal-callback="setInit()"/>
            </li>
        <?php } ?>

    </ul>
</td>


