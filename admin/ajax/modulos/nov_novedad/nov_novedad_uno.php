
<?php

$nov_novedad_imagens_secundarias = $nov_novedad->getNovNovedadImagensSecundarias();
$nov_novedad_imagen_principal = $nov_novedad->getNovNovedadImagenPrincipal();
    
?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $nov_novedad->getId() ?>" modulo="nov_novedad">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
   
    <?php if ($nov_novedad_imagen_principal) { ?>
        <div class="avatar">
            <a href="<?php echo $nov_novedad_imagen_principal->getPathImagen() ?>" rel="nov_novedad_<?php echo $nov_novedad->getId() ?>" title="<?php Gral::_echo($nov_novedad_imagen_principal->getObservacion()) ?>">
                <img class="foto" src="<?php echo $nov_novedad_imagen_principal->getPathImagen(true) ?>" alt="imagen-nov_novedad" />
            </a>
        </div>

        <div class="fotos-min">
            <?php foreach ($nov_novedad_imagens_secundarias as $nov_novedad_imagen) { ?>
                <div class="foto avatar">
                    <a href="<?php echo $nov_novedad_imagen->getPathImagen() ?>" rel="nov_novedad_<?php echo $nov_novedad->getId() ?>" title="<?php Gral::_echo($nov_novedad_imagen->getObservacion()) ?>">
                        <img src="<?php echo $nov_novedad_imagen->getPathImagen(true) ?>" alt="img-prd" />
                    </a>
                </div>
            <?php } ?>
        </div>
    <?php } else { ?>
        <img src="../imgs/no-imagen.jpg" width="60" alt="img-nov_novedad" />
    <?php } ?>

</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="id">
            <?php Gral::_echo($nov_novedad->getId()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="descripcion">
            <?php Gral::_echo($nov_novedad->getDescripcion()) ?>
    </div>
    <?php if (count($nov_novedad->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($nov_novedad->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="descripcion_breve">
            <?php Gral::_echo($nov_novedad->getDescripcionBreve()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('NOV_NOVEDAD_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='nov_novedad_alta.php?id=<?php Gral::_echo($nov_novedad->getId()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('NOV_NOVEDAD_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($nov_novedad->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('NOV_NOVEDAD_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($nov_novedad->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('NOV_NOVEDAD_ADM_ACCION_GIMAGEN')){ ?>
	<li class='adm_botones_accion'><a href='nov_novedad_imagen_gestor.php?id=<?php Gral::_echo($nov_novedad->getId()) ?>' title='<?php Lang::_lang('Ver Gestor de Imagenes') ?>'><img src='imgs/btn_album_imagenes.png' width='22' border='0' /></a></li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('NOV_NOVEDAD_ADM_ACCION_GARCHIVO')){ ?>
	<li class='adm_botones_accion'><a href='nov_novedad_archivo_gestor.php?id=<?php Gral::_echo($nov_novedad->getId()) ?>' title='<?php Lang::_lang('Ver Gestor de Archivos') ?>'><img src='imgs/btn_album_archivos.png' width='19' border='0' /></a></li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('NOV_NOVEDAD_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/nov_novedad/nov_novedad_db_context_acciones.php?id=<?php Gral::_echo($nov_novedad->getId()) ?>' modulo_metodo_init="setInitNovNovedad()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


