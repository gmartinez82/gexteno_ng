
<?php

$per_persona_imagens_secundarias = $per_persona->getPerPersonaImagensSecundarias();
$per_persona_imagen_principal = $per_persona->getPerPersonaImagenPrincipal();
    
?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $per_persona->getId() ?>" modulo="per_persona">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
   
    <?php if ($per_persona_imagen_principal) { ?>
        <div class="avatar">
            <a href="<?php echo $per_persona_imagen_principal->getPathImagen() ?>" rel="per_persona_<?php echo $per_persona->getId() ?>" title="<?php Gral::_echo($per_persona_imagen_principal->getObservacion()) ?>">
                <img class="foto" src="<?php echo $per_persona_imagen_principal->getPathImagen(true) ?>" alt="imagen-per_persona" />
            </a>
        </div>

        <div class="fotos-min">
            <?php foreach ($per_persona_imagens_secundarias as $per_persona_imagen) { ?>
                <div class="foto avatar">
                    <a href="<?php echo $per_persona_imagen->getPathImagen() ?>" rel="per_persona_<?php echo $per_persona->getId() ?>" title="<?php Gral::_echo($per_persona_imagen->getObservacion()) ?>">
                        <img src="<?php echo $per_persona_imagen->getPathImagen(true) ?>" alt="img-prd" />
                    </a>
                </div>
            <?php } ?>
        </div>
    <?php } else { ?>
        <img src="<?php echo $per_persona->getPathImagenNoImagen() ?>" width="120" alt="img-per_persona" />
    <?php } ?>

</td>

        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" legajo">
        <?php Gral::_echo($per_persona->getLegajo()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" descripcion">
        <?php Gral::_echo($per_persona->getDescripcion()) ?>
    </div>
    <?php if (count($per_persona->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($per_persona->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
	
    <div class=" gral_empresa_id <?php Gral::_echo($per_persona->getGralEmpresa()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($per_persona->getGralEmpresa()->getDescripcion()) ?>
    </div>
    
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" gral_sucursal_id <?php Gral::_echo($per_persona->getGralSucursal()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($per_persona->getGralSucursal()->getDescripcion()) ?>
    </div>
    
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" documento">
        <?php Gral::_echo($per_persona->getDocumento()) ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" codigo_credencial">
        <?php Gral::_echo($per_persona->getCodigoCredencial()) ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" per_tipo_estado_id <?php Gral::_echo($per_persona->getPerTipoEstado()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($per_persona->getPerTipoEstado()->getDescripcion()) ?>
    </div>
    
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" control_horario <?php Gral::_echo(GralSiNo::getOxId($per_persona->getControlHorario())->getCodigo()) ?> ">	
    
        <?php if($per_persona->getControlHorario()){ ?>
            <img src='imgs/tilde_<?php echo $per_persona->getControlHorario() ?>.png' width='16' border='0' alt="<?php Gral::_echo($per_persona->getControlHorario()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($per_persona->getControlHorario())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        
        
    </div>
    
        </td>	
        
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('PER_PERSONA_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='per_persona_alta.php?id=<?php Gral::_echo($per_persona->getId()) ?>&hash=<?php Gral::_echo($per_persona->getHash()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PER_PERSONA_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($per_persona->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('PER_PERSONA_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($per_persona->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('PER_PERSONA_ADM_ACCION_GIMAGEN')){ ?>
	<li class='adm_botones_accion'><a href='per_persona_imagen_gestor.php?id=<?php Gral::_echo($per_persona->getId()) ?>' title='<?php Lang::_lang('Ver Gestor de Imagenes') ?>'><img src='imgs/btn_album_imagenes.png' width='22' border='0' /></a></li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('PER_PERSONA_ADM_ACCION_GARCHIVO')){ ?>
	<li class='adm_botones_accion'><a href='per_persona_archivo_gestor.php?id=<?php Gral::_echo($per_persona->getId()) ?>' title='<?php Lang::_lang('Ver Gestor de Archivos') ?>'><img src='imgs/btn_album_archivos.png' width='19' border='0' /></a></li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('PER_PERSONA_ADM_ACCION_CREDENCIAL')){ ?>
	<li class='adm_botones_accion'>
            <a href='per_persona_credencial.php?id=<?php Gral::_echo($per_persona->getId()) ?>&hash=<?php Gral::_echo($per_persona->getHash()) ?>' title='<?php Lang::_lang('Ver Credencial') ?>' target='_blank'>
                <img src='imgs/btn_credencial.jpg' width='25' height='18' border='0' />
            </a>
        </li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('PER_PERSONA_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/per_persona/per_persona_db_context_acciones.php?id=<?php Gral::_echo($per_persona->getId()) ?>' modulo_metodo_init="setInitPerPersona()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


