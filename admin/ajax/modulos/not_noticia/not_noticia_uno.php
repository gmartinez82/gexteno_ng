
<?php

$not_noticia_imagens_secundarias = $not_noticia->getNotNoticiaImagensSecundarias();
$not_noticia_imagen_principal = $not_noticia->getNotNoticiaImagenPrincipal();
    
?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $not_noticia->getId() ?>" modulo="not_noticia">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
   
    <?php if ($not_noticia_imagen_principal) { ?>
        <div class="avatar">
            <a href="<?php echo $not_noticia_imagen_principal->getPathImagen() ?>" rel="not_noticia_<?php echo $not_noticia->getId() ?>" title="<?php Gral::_echo($not_noticia_imagen_principal->getObservacion()) ?>">
                <img class="foto" src="<?php echo $not_noticia_imagen_principal->getPathImagen(true) ?>" alt="imagen-not_noticia" />
            </a>
        </div>

        <div class="fotos-min">
            <?php foreach ($not_noticia_imagens_secundarias as $not_noticia_imagen) { ?>
                <div class="foto avatar">
                    <a href="<?php echo $not_noticia_imagen->getPathImagen() ?>" rel="not_noticia_<?php echo $not_noticia->getId() ?>" title="<?php Gral::_echo($not_noticia_imagen->getObservacion()) ?>">
                        <img src="<?php echo $not_noticia_imagen->getPathImagen(true) ?>" alt="img-prd" />
                    </a>
                </div>
            <?php } ?>
        </div>
    <?php } else { ?>
        <img src="../imgs/no-imagen.jpg" width="60" alt="img-not_noticia" />
    <?php } ?>

</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="id">
            <?php Gral::_echo($not_noticia->getId()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="descripcion">
            <?php Gral::_echo($not_noticia->getDescripcion()) ?>
    </div>
    <?php if (count($not_noticia->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($not_noticia->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
	
    <div class="not_categoria_id <?php Gral::_echo($not_noticia->getNotCategoria()->getCodigo()) ?> ">	

        <?php Gral::_echo($not_noticia->getNotCategoria()->getDescripcion()) ?>
    </div>

</td>
<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="fecha">
            <?php Gral::_echo(Gral::getFechaToWeb($not_noticia->getFecha())) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="destacado <?php Gral::_echo(GralSiNo::getOxId($not_noticia->getDestacado())->getCodigo()) ?> ">	

        <?php if($not_noticia->getDestacado()){ ?>
        <img src='imgs/tilde_<?php echo $not_noticia->getDestacado() ?>.png' width='16' border='0' alt="<?php Gral::_echo($not_noticia->getDestacado()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($not_noticia->getDestacado())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        

    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('NOT_NOTICIA_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='not_noticia_alta.php?id=<?php Gral::_echo($not_noticia->getId()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('NOT_NOTICIA_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($not_noticia->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('NOT_NOTICIA_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($not_noticia->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('NOT_NOTICIA_ADM_ACCION_DESTACADO')){ ?>
	<li class='adm_botones_accion destacado' title='<?php Lang::_lang('Destacar/No Destacar') ?>'>
            <img src='imgs/btn_destacado_<?php Gral::_echo($not_noticia->getDestacado())  ?>.png' width='20' border='0' />
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('NOT_NOTICIA_ADM_ACCION_GIMAGEN')){ ?>
	<li class='adm_botones_accion'><a href='not_noticia_imagen_gestor.php?id=<?php Gral::_echo($not_noticia->getId()) ?>' title='<?php Lang::_lang('Ver Gestor de Imagenes') ?>'><img src='imgs/btn_album_imagenes.png' width='22' border='0' /></a></li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('NOT_NOTICIA_ADM_ACCION_GARCHIVO')){ ?>
	<li class='adm_botones_accion'><a href='not_noticia_archivo_gestor.php?id=<?php Gral::_echo($not_noticia->getId()) ?>' title='<?php Lang::_lang('Ver Gestor de Archivos') ?>'><img src='imgs/btn_album_archivos.png' width='19' border='0' /></a></li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('NOT_NOTICIA_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/not_noticia/not_noticia_db_context_acciones.php?id=<?php Gral::_echo($not_noticia->getId()) ?>' modulo_metodo_init="setInitNotNoticia()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


