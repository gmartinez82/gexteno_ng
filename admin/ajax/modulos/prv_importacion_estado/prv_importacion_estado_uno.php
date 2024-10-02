
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $prv_importacion_estado->getId() ?>" modulo="prv_importacion_estado">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="id">
            <?php Gral::_echo($prv_importacion_estado->getId()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="descripcion">
            <?php Gral::_echo($prv_importacion_estado->getDescripcion()) ?>
    </div>
    <?php if (count($prv_importacion_estado->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($prv_importacion_estado->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
	
    <div class="prv_importacion_id <?php Gral::_echo($prv_importacion_estado->getPrvImportacion()->getCodigo()) ?> ">	

        <?php Gral::_echo($prv_importacion_estado->getPrvImportacion()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="prv_importacion_tipo_estado_id <?php Gral::_echo($prv_importacion_estado->getPrvImportacionTipoEstado()->getCodigo()) ?> ">	

        <?php Gral::_echo($prv_importacion_estado->getPrvImportacionTipoEstado()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="inicial <?php Gral::_echo(GralSiNo::getOxId($prv_importacion_estado->getInicial())->getCodigo()) ?> ">	

        <?php if($prv_importacion_estado->getInicial()){ ?>
        <img src='imgs/tilde_<?php echo $prv_importacion_estado->getInicial() ?>.png' width='16' border='0' alt="<?php Gral::_echo($prv_importacion_estado->getInicial()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($prv_importacion_estado->getInicial())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        

    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="actual <?php Gral::_echo(GralSiNo::getOxId($prv_importacion_estado->getActual())->getCodigo()) ?> ">	

        <?php if($prv_importacion_estado->getActual()){ ?>
        <img src='imgs/tilde_<?php echo $prv_importacion_estado->getActual() ?>.png' width='16' border='0' alt="<?php Gral::_echo($prv_importacion_estado->getActual()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($prv_importacion_estado->getActual())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        

    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="codigo">
            <?php Gral::_echo($prv_importacion_estado->getCodigo()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('PRV_IMPORTACION_ESTADO_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='prv_importacion_estado_alta.php?id=<?php Gral::_echo($prv_importacion_estado->getId()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PRV_IMPORTACION_ESTADO_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($prv_importacion_estado->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('PRV_IMPORTACION_ESTADO_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($prv_importacion_estado->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('PRV_IMPORTACION_ESTADO_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/prv_importacion_estado/prv_importacion_estado_db_context_acciones.php?id=<?php Gral::_echo($prv_importacion_estado->getId()) ?>' modulo_metodo_init="setInitPrvImportacionEstado()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


