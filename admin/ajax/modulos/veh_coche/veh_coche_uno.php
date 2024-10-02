
<?php

$veh_coche_imagens_secundarias = $veh_coche->getVehCocheImagensSecundarias();
$veh_coche_imagen_principal = $veh_coche->getVehCocheImagenPrincipal();
    
?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $veh_coche->getId() ?>" modulo="veh_coche">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
   
    <?php if ($veh_coche_imagen_principal) { ?>
        <div class="avatar">
            <a href="<?php echo $veh_coche_imagen_principal->getPathImagen() ?>" rel="veh_coche_<?php echo $veh_coche->getId() ?>" title="<?php Gral::_echo($veh_coche_imagen_principal->getObservacion()) ?>">
                <img class="foto" src="<?php echo $veh_coche_imagen_principal->getPathImagen(true) ?>" alt="imagen-veh_coche" />
            </a>
        </div>

        <div class="fotos-min">
            <?php foreach ($veh_coche_imagens_secundarias as $veh_coche_imagen) { ?>
                <div class="foto avatar">
                    <a href="<?php echo $veh_coche_imagen->getPathImagen() ?>" rel="veh_coche_<?php echo $veh_coche->getId() ?>" title="<?php Gral::_echo($veh_coche_imagen->getObservacion()) ?>">
                        <img src="<?php echo $veh_coche_imagen->getPathImagen(true) ?>" alt="img-prd" />
                    </a>
                </div>
            <?php } ?>
        </div>
    <?php } else { ?>
        <img src="../imgs/no-imagen.jpg" width="60" alt="img-veh_coche" />
    <?php } ?>

</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="id">
            <?php Gral::_echo($veh_coche->getId()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="descripcion">
            <?php Gral::_echo($veh_coche->getDescripcion()) ?>
    </div>
    <?php if (count($veh_coche->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($veh_coche->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
    <div class="patente">
            <?php Gral::_echo($veh_coche->getPatente()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="anio">
            <?php Gral::_echo($veh_coche->getAnio()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('VEH_COCHE_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='veh_coche_alta.php?id=<?php Gral::_echo($veh_coche->getId()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VEH_COCHE_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($veh_coche->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('VEH_COCHE_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($veh_coche->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('VEH_COCHE_ADM_ACCION_GIMAGEN')){ ?>
	<li class='adm_botones_accion'><a href='veh_coche_imagen_gestor.php?id=<?php Gral::_echo($veh_coche->getId()) ?>' title='<?php Lang::_lang('Ver Gestor de Imagenes') ?>'><img src='imgs/btn_album_imagenes.png' width='22' border='0' /></a></li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VEH_COCHE_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/veh_coche/veh_coche_db_context_acciones.php?id=<?php Gral::_echo($veh_coche->getId()) ?>' modulo_metodo_init="setInitVehCoche()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


