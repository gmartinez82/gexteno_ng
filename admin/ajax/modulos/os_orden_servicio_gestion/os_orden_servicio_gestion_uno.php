<?php
/**
 * @modificado_por Esteban Martinez
 * @modificado 26/10/2016
 * @modificado 15/11/2016
 */

if ($os_orden_servicio->getFechaLimiteResolucion()) {

    $arr_arr_dias_restantes = $os_orden_servicio->getArrDiasRestantes();

    $texto_completo_dias_faltantes = $arr_arr_dias_restantes["dias_restantes_en_texto"];
    $css_texto = $arr_arr_dias_restantes["css_a_usar"];
}

$os_prioridad = $os_orden_servicio->getOsPrioridad();
$os_prioridad_descripcion = $os_prioridad->getDescripcion();
$os_prioridad_codigo = $os_prioridad->getCodigo();

$tipo_estado = $os_orden_servicio->getOsTipoEstado()->getDescripcion();
$tipo_estado_codigo = $os_orden_servicio->getOsTipoEstado()->getCodigo();

if ($tipo_estado_codigo == OsTipoEstado::TIPO_RESUELTO || $tipo_estado_codigo == OsTipoEstado::TIPO_RESUELTO_NOTIFICADO) {
    $resolucion = $os_orden_servicio->getOsResolucion()->getOsTipoResolucion()->getDescripcion();
} else {
    $resolucion = "";
}

// -----------------------------------------------------------------------------
// se determina si la OS tiene imagenes o archivos
$os_orden_servicio_imagens = $os_orden_servicio->getOsOrdenServicioImagens();
$os_orden_servicio_archivos = $os_orden_servicio->getOsOrdenServicioArchivos();

?>

<td align="center" class="adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>">
    <div class="vermasinfo" identificador="<?php echo $os_orden_servicio->getId() ?>" modulo="os_orden_servicio">+</div>
</td>

<td align="center" class="adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>">
    <div class="os_codigo <?php echo $os_prioridad_codigo; ?>" title="Prioridad: <?php echo $os_prioridad_codigo; ?>">
        <?php Gral::_echo($os_orden_servicio->getCodigo()); ?>
    </div>
    <div class="os_fecha">
        <?php Gral::_echo(Gral::getFechaToWeb($os_orden_servicio->getFecha())); ?>
    </div>
    <div class="os_creado_por">
        <?php Gral::_echo($os_orden_servicio->getCreadoPorDescripcion()) ?>		
    </div>
</td>

<td align="left" class="adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>">
    <div class="os_tipo">
        <?php Gral::_echo(($os_orden_servicio->getOsTipo()->getDescripcion() != "null") ? $os_orden_servicio->getOsTipo()->getDescripcion() : "-") ?>		
    </div>
</td>

<td align="left" class="adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>">

    <div class="os_adjuntos">
        
        <?php if(count($os_orden_servicio_imagens) > 0){ ?>
        <img src="imgs/os_orden_servicio_gestion/icn_jpg.png" width="25" alt="icon-jpg" title="Tiene <?php echo count($os_orden_servicio_imagens) ?> imágenes" />
        <?php } ?>
        
        <?php if(count($os_orden_servicio_archivos) > 0){ ?>
        <img src="imgs/os_orden_servicio_gestion/icn_pdf.png" width="25" alt="icon-jpg" title="Tiene <?php echo count($os_orden_servicio_archivos) ?> archivos" />
        <?php } ?>
        
    </div>    
    <div class="os_persona">
        <div class="avatar">
            <a href="<?php Gral::_echo(($os_orden_servicio->getPerPersona()->getPathImagenPrincipal())); ?>">    
                <img src="<?php Gral::_echo(($os_orden_servicio->getPerPersona()->getPathImagenPrincipal(true))); ?>" />
            </a>
        </div>
        <div class="info-persona">
            <div class="descripcion"><?php Gral::_echo(($os_orden_servicio->getPerPersona()->getDescripcion())); ?></div>
            <div class="legajo">Legajo: <?php Gral::_echo(($os_orden_servicio->getPerPersona()->getLegajo())); ?></div>
            <div class="empresa">Emp: <?php Gral::_echo(($os_orden_servicio->getPerPersona()->getGralEmpresa()->getDescripcion())); ?></div>
            <div class="centro-operativo">CO: <?php //Gral::_echo(($os_orden_servicio->getPerPersona()->getCoSector()->getCoCentroOperativo()->getDescripcion())); ?></div>
        </div>
    </div>
    <div class="os_notificacion">	
        <?php Gral::_echo(substr($os_orden_servicio->getNotificacion(), 0, 180)) ?>...
    </div>
    
</td>

<td align="center" class="adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>">
    <div class="os_fecha_hecho">
        <?php Gral::_echo(Gral::getFechaToWeb($os_orden_servicio->getFechaHecho())); ?>
    </div>
</td>

<td align="center" class="adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>">
    <div class="os_fecha_hecho">
        <?php if ($os_orden_servicio->getFechaLimiteResolucion()): ?>
            <?php Gral::_echo(Gral::getFechaToWeb($os_orden_servicio->getFechaLimiteResolucion())); ?>

            <!-- para mostrar solo los que sean resolubles -->
            <?php if (!$os_orden_servicio->getOsTipoEstado()->getTerminal()): ?>
                <div class="os_fecha_limite_resolucion_dias <?php echo $css_texto; ?>">
                    (<?php echo $texto_completo_dias_faltantes; ?>)
                </div>
            <?php endif; ?>

        <?php endif; ?>
    </div>
</td>

<td align="left" class="adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>">
    <div class="os_estado">
        <img src="imgs/os_tipo_estado/<?php Gral::_echo($os_orden_servicio->getOsTipoEstado()->getCodigo()) ?>.png" width="15" alt="tipo-estado-actual" align="absmiddle">	
        &nbsp;
        <?php Gral::_echo($tipo_estado); ?>
    </div>

    <?php if ($resolucion) { ?>
        <div class="os_resolucion" >	
            <?php Gral::_echo($resolucion); ?>
        </div>
    <?php } ?>

</td>



<td align="center" class="adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>">
    <ul class="adm_botones_acciones">

        <?php if (UsCredencial::getEsAcreditado("OS_ORDEN_SERVICIO_GESTION_ACCION_MODIFICAR")): ?>
            <?php if ($os_orden_servicio->getOsTipoEstado()->getCodigo() == OsTipoEstado::TIPO_GENERADO): ?>
                <li class="adm_botones_accion os_editar">
                    <a href="#" title="<?php Lang::_lang("Modificar") ?>">
                        <img src="imgs/btn_modi.gif" width="20" border="0" />
                    </a>
                </li>
            <?php endif; ?>
        <?php endif; ?>

        <?php if (UsCredencial::getEsAcreditado("OS_ORDEN_SERVICIO_GESTION_ACCION_MODIFICAR_ADMIN")): ?>
            <li class="adm_botones_accion os_editar">
                <a href="#" title="<?php Lang::_lang("Modificar") ?>">
                    <img src="imgs/btn_modi.gif" width="20" border="0" />
                </a>
            </li>
        <?php endif; ?>

        <?php if (UsCredencial::getEsAcreditado("OS_ORDEN_SERVICIO_GESTION_ACCION_FICHA")): ?>
            <li class="adm_botones_accion ficha" title="<?php Lang::_lang("Ver Ficha de OS") ?>">
                <img src="imgs/btn_ficha.png" width="15" border="0" />
            </li>
        <?php endif; ?>

        <?php if (UsCredencial::getEsAcreditado("OS_ORDEN_SERVICIO_GESTION_ACCION_PDF")): ?>
            <li class="adm_botones_accion pdf" title="<?php Lang::_lang("Comprobante en PDF") ?>">
                <a href="<?php Gral::getPath('path_http') ?>ajax/modulos/os_orden_servicio_gestion/pdf_orden_servicio_gestion.php?os_id=<?php echo $os_orden_servicio->getId() ?>" target="_blank">
                    <img src="imgs/btn_pdf.png" width='20' border='0' />
                </a>
            </li>
        <?php endif; ?>

        <?php if (UsCredencial::getEsAcreditado("OS_ORDEN_SERVICIO_GESTION_ACCION_CONFIG")): ?>
            <li class="adm_botones_accion db_context" archivo="<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/os_orden_servicio_gestion/os_orden_servicio_gestion_acciones_db_context.php?id=<?php Gral::_echo($os_orden_servicio->getId()) ?>" modulo_metodo_init="setInitOsOrdenServicio()" title="<?php Lang::_lang("Ver Acciones") ?>">
                <img src="imgs/btn_config.png" width="20" border="0" />
            </li>
        <?php endif; ?>

        <?php if (UsCredencial::getEsAcreditado('OS_ORDEN_SERVICIO_GESTION_ACCION_GIMAGEN')) { ?>
            <li class='adm_botones_accion'>
                <a href='os_orden_servicio_imagen_gestor.php?id=<?php Gral::_echo($os_orden_servicio->getId()) ?>' title='<?php Lang::_lang('Ver Gestor de Imagenes') ?>'><img src='imgs/btn_album_imagenes.png' width='23' border='0' /></a>
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('OS_ORDEN_SERVICIO_GESTION_ACCION_GARCHIVO')) { ?>
            <li class='adm_botones_accion'>
                <a href='os_orden_servicio_archivo_gestor.php?id=<?php Gral::_echo($os_orden_servicio->getId()) ?>' title='<?php Lang::_lang('Ver Gestor de Archivos') ?>'><img src='imgs/btn_album_archivos.png' width='20' border='0' /></a>
            </li>
        <?php } ?>

    </ul>
</td>

<script>
    setInit();
    setInitOsOrdenServicio();
</script>