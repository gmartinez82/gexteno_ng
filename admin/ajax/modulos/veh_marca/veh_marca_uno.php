
<?php

$veh_marca_imagens_secundarias = $veh_marca->getVehMarcaImagensSecundarias();
$veh_marca_imagen_principal = $veh_marca->getVehMarcaImagenPrincipal();
    
?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $veh_marca->getId() ?>" modulo="veh_marca">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
   
    <?php if ($veh_marca_imagen_principal) { ?>
        <div class="avatar">
            <a href="<?php echo $veh_marca_imagen_principal->getPathImagen() ?>" rel="veh_marca_<?php echo $veh_marca->getId() ?>" title="<?php Gral::_echo($veh_marca_imagen_principal->getObservacion()) ?>">
                <img class="foto" src="<?php echo $veh_marca_imagen_principal->getPathImagen(true) ?>" alt="imagen-veh_marca" />
            </a>
        </div>

        <div class="fotos-min">
            <?php foreach ($veh_marca_imagens_secundarias as $veh_marca_imagen) { ?>
                <div class="foto avatar">
                    <a href="<?php echo $veh_marca_imagen->getPathImagen() ?>" rel="veh_marca_<?php echo $veh_marca->getId() ?>" title="<?php Gral::_echo($veh_marca_imagen->getObservacion()) ?>">
                        <img src="<?php echo $veh_marca_imagen->getPathImagen(true) ?>" alt="img-prd" />
                    </a>
                </div>
            <?php } ?>
        </div>
    <?php } else { ?>
        <img src="../imgs/no-imagen.jpg" width="60" alt="img-veh_marca" />
    <?php } ?>

</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="id">
            <?php Gral::_echo($veh_marca->getId()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="descripcion">
            <?php Gral::_echo($veh_marca->getDescripcion()) ?>
    </div>
    <?php if (count($veh_marca->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($veh_marca->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
    <div class="codigo">
            <?php Gral::_echo($veh_marca->getCodigo()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('VEH_MARCA_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='veh_marca_alta.php?id=<?php Gral::_echo($veh_marca->getId()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VEH_MARCA_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($veh_marca->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('VEH_MARCA_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($veh_marca->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('VEH_MARCA_ADM_ACCION_GIMAGEN')){ ?>
	<li class='adm_botones_accion'><a href='veh_marca_imagen_gestor.php?id=<?php Gral::_echo($veh_marca->getId()) ?>' title='<?php Lang::_lang('Ver Gestor de Imagenes') ?>'><img src='imgs/btn_album_imagenes.png' width='22' border='0' /></a></li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VEH_MARCA_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/veh_marca/veh_marca_db_context_acciones.php?id=<?php Gral::_echo($veh_marca->getId()) ?>' modulo_metodo_init="setInitVehMarca()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


