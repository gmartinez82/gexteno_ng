
<?php

$os_orden_servicio_imagens_secundarias = $os_orden_servicio->getOsOrdenServicioImagensSecundarias();
$os_orden_servicio_imagen_principal = $os_orden_servicio->getOsOrdenServicioImagenPrincipal();
    
?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $os_orden_servicio->getId() ?>" modulo="os_orden_servicio">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
   
    <?php if ($os_orden_servicio_imagen_principal) { ?>
        <div class="avatar">
            <a href="<?php echo $os_orden_servicio_imagen_principal->getPathImagen() ?>" rel="os_orden_servicio_<?php echo $os_orden_servicio->getId() ?>" title="<?php Gral::_echo($os_orden_servicio_imagen_principal->getObservacion()) ?>">
                <img class="foto" src="<?php echo $os_orden_servicio_imagen_principal->getPathImagen(true) ?>" alt="imagen-os_orden_servicio" />
            </a>
        </div>

        <div class="fotos-min">
            <?php foreach ($os_orden_servicio_imagens_secundarias as $os_orden_servicio_imagen) { ?>
                <div class="foto avatar">
                    <a href="<?php echo $os_orden_servicio_imagen->getPathImagen() ?>" rel="os_orden_servicio_<?php echo $os_orden_servicio->getId() ?>" title="<?php Gral::_echo($os_orden_servicio_imagen->getObservacion()) ?>">
                        <img src="<?php echo $os_orden_servicio_imagen->getPathImagen(true) ?>" alt="img-prd" />
                    </a>
                </div>
            <?php } ?>
        </div>
    <?php } else { ?>
        <img src="<?php echo $os_orden_servicio->getPathImagenNoImagen() ?>" width="120" alt="img-os_orden_servicio" />
    <?php } ?>

</td>

        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" id">
        <?php Gral::_echo($os_orden_servicio->getId()) ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" notificacion_mecano <?php Gral::_echo(GralSiNo::getOxId($os_orden_servicio->getNotificacionMecano())->getCodigo()) ?> ">	
    
        <?php if($os_orden_servicio->getNotificacionMecano()){ ?>
            <img src='imgs/tilde_<?php echo $os_orden_servicio->getNotificacionMecano() ?>.png' width='16' border='0' alt="<?php Gral::_echo($os_orden_servicio->getNotificacionMecano()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($os_orden_servicio->getNotificacionMecano())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        
        
    </div>
    
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" fecha">
        <?php Gral::_echo(Gral::getFechaToWeb($os_orden_servicio->getFecha())) ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" fecha_hecho">
        <?php Gral::_echo(Gral::getFechaToWeb($os_orden_servicio->getFechaHecho())) ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" fecha_notificacion">
        <?php Gral::_echo(Gral::getFechaToWeb($os_orden_servicio->getFechaNotificacion())) ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" dias_para_descargo">
        <?php Gral::_echo($os_orden_servicio->getDiasParaDescargo()) ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" fecha_limite_descargo">
        <?php Gral::_echo(Gral::getFechaToWeb($os_orden_servicio->getFechaLimiteDescargo())) ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" fecha_descargo">
        <?php Gral::_echo(Gral::getFechaToWeb($os_orden_servicio->getFechaDescargo())) ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" fecha_notificado_sin_descargo">
        <?php Gral::_echo(Gral::getFechaToWeb($os_orden_servicio->getFechaNotificadoSinDescargo())) ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" fecha_limite_resolucion">
        <?php Gral::_echo(Gral::getFechaToWeb($os_orden_servicio->getFechaLimiteResolucion())) ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" fecha_resolucion">
        <?php Gral::_echo(Gral::getFechaToWeb($os_orden_servicio->getFechaResolucion())) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" descripcion">
        <?php Gral::_echo($os_orden_servicio->getDescripcion()) ?>
    </div>
    <?php if (count($os_orden_servicio->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($os_orden_servicio->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
                <?php if (trim($arr_descripcion_extendida['dato']) != '') { ?>
                    <div class="descripcion-extendida-uno <?php echo $i ?> ">
                        <div class="par">
                            <div class="label">
                                <?php Gral::_echo($arr_descripcion_extendida['label']) ?>            
                            </div>
                            <div class="dato">
                                <?php Gral::_echo($arr_descripcion_extendida['dato']) ?>            
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    <?php } ?>                

        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" codigo">
        <?php Gral::_echo($os_orden_servicio->getCodigo()) ?>
    </div>
        </td>	
        
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('OS_ORDEN_SERVICIO_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='os_orden_servicio_alta.php?id=<?php Gral::_echo($os_orden_servicio->getId()) ?>&hash=<?php Gral::_echo($os_orden_servicio->getHash()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('OS_ORDEN_SERVICIO_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($os_orden_servicio->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('OS_ORDEN_SERVICIO_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($os_orden_servicio->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('OS_ORDEN_SERVICIO_ADM_ACCION_GIMAGEN')){ ?>
	<li class='adm_botones_accion'><a href='os_orden_servicio_imagen_gestor.php?id=<?php Gral::_echo($os_orden_servicio->getId()) ?>' title='<?php Lang::_lang('Ver Gestor de Imagenes') ?>'><img src='imgs/btn_album_imagenes.png' width='22' border='0' /></a></li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('OS_ORDEN_SERVICIO_ADM_ACCION_GARCHIVO')){ ?>
	<li class='adm_botones_accion'><a href='os_orden_servicio_archivo_gestor.php?id=<?php Gral::_echo($os_orden_servicio->getId()) ?>' title='<?php Lang::_lang('Ver Gestor de Archivos') ?>'><img src='imgs/btn_album_archivos.png' width='19' border='0' /></a></li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('OS_ORDEN_SERVICIO_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/os_orden_servicio/os_orden_servicio_db_context_acciones.php?id=<?php Gral::_echo($os_orden_servicio->getId()) ?>' modulo_metodo_init="setInitOsOrdenServicio()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


