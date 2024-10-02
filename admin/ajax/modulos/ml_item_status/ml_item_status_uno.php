
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $ml_item_status->getId() ?>" modulo="ml_item_status">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="id">
            <?php Gral::_echo($ml_item_status->getId()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="descripcion">
            <?php Gral::_echo($ml_item_status->getDescripcion()) ?>
    </div>
    <?php if (count($ml_item_status->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($ml_item_status->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
            <?php Gral::_echo($ml_item_status->getCodigo()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="codigo_ml">
            <?php Gral::_echo($ml_item_status->getCodigoMl()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="activo <?php Gral::_echo(GralSiNo::getOxId($ml_item_status->getActivo())->getCodigo()) ?> ">	

        <?php if($ml_item_status->getActivo()){ ?>
        <img src='imgs/tilde_<?php echo $ml_item_status->getActivo() ?>.png' width='16' border='0' alt="<?php Gral::_echo($ml_item_status->getActivo()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($ml_item_status->getActivo())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        

    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="inactivo <?php Gral::_echo(GralSiNo::getOxId($ml_item_status->getInactivo())->getCodigo()) ?> ">	

        <?php if($ml_item_status->getInactivo()){ ?>
        <img src='imgs/tilde_<?php echo $ml_item_status->getInactivo() ?>.png' width='16' border='0' alt="<?php Gral::_echo($ml_item_status->getInactivo()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($ml_item_status->getInactivo())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        

    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="requiere_atencion <?php Gral::_echo(GralSiNo::getOxId($ml_item_status->getRequiereAtencion())->getCodigo()) ?> ">	

        <?php if($ml_item_status->getRequiereAtencion()){ ?>
        <img src='imgs/tilde_<?php echo $ml_item_status->getRequiereAtencion() ?>.png' width='16' border='0' alt="<?php Gral::_echo($ml_item_status->getRequiereAtencion()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($ml_item_status->getRequiereAtencion())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        

    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('ML_ITEM_STATUS_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='ml_item_status_alta.php?id=<?php Gral::_echo($ml_item_status->getId()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('ML_ITEM_STATUS_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($ml_item_status->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('ML_ITEM_STATUS_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($ml_item_status->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('ML_ITEM_STATUS_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/ml_item_status/ml_item_status_db_context_acciones.php?id=<?php Gral::_echo($ml_item_status->getId()) ?>' modulo_metodo_init="setInitMlItemStatus()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


