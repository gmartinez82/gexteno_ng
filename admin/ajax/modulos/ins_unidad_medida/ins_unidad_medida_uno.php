
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $ins_unidad_medida->getId() ?>" modulo="ins_unidad_medida">+</div>
</td>

        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" id">
        <?php Gral::_echo($ins_unidad_medida->getId()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" descripcion">
        <?php Gral::_echo($ins_unidad_medida->getDescripcion()) ?>
    </div>
    <?php if (count($ins_unidad_medida->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($ins_unidad_medida->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
	
    <div class=" fraccionable <?php Gral::_echo(GralSiNo::getOxId($ins_unidad_medida->getFraccionable())->getCodigo()) ?> ">	
    
        <?php if($ins_unidad_medida->getFraccionable()){ ?>
            <img src='imgs/tilde_<?php echo $ins_unidad_medida->getFraccionable() ?>.png' width='16' border='0' alt="<?php Gral::_echo($ins_unidad_medida->getFraccionable()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($ins_unidad_medida->getFraccionable())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        
        
    </div>
    
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" codigo">
        <?php Gral::_echo($ins_unidad_medida->getCodigo()) ?>
    </div>
        </td>	
        
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('INS_UNIDAD_MEDIDA_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='ins_unidad_medida_alta.php?id=<?php Gral::_echo($ins_unidad_medida->getId()) ?>&hash=<?php Gral::_echo($ins_unidad_medida->getHash()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('INS_UNIDAD_MEDIDA_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($ins_unidad_medida->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('INS_UNIDAD_MEDIDA_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($ins_unidad_medida->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('INS_UNIDAD_MEDIDA_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/ins_unidad_medida/ins_unidad_medida_db_context_acciones.php?id=<?php Gral::_echo($ins_unidad_medida->getId()) ?>' modulo_metodo_init="setInitInsUnidadMedida()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


