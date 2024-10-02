
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $vta_vendedor_valoracion_tipo_item_vta_vendedor->getId() ?>" modulo="vta_vendedor_valoracion_tipo_item_vta_vendedor">+</div>
</td>

        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" id">
        <?php Gral::_echo($vta_vendedor_valoracion_tipo_item_vta_vendedor->getId()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" descripcion">
        <?php Gral::_echo($vta_vendedor_valoracion_tipo_item_vta_vendedor->getDescripcion()) ?>
    </div>
    <?php if (count($vta_vendedor_valoracion_tipo_item_vta_vendedor->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($vta_vendedor_valoracion_tipo_item_vta_vendedor->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
	
    <div class=" vta_vendedor_valoracion_tipo_item_id <?php Gral::_echo($vta_vendedor_valoracion_tipo_item_vta_vendedor->getVtaVendedorValoracionTipoItem()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($vta_vendedor_valoracion_tipo_item_vta_vendedor->getVtaVendedorValoracionTipoItem()->getDescripcion()) ?>
    </div>
    
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" vta_vendedor_id <?php Gral::_echo($vta_vendedor_valoracion_tipo_item_vta_vendedor->getVtaVendedor()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($vta_vendedor_valoracion_tipo_item_vta_vendedor->getVtaVendedor()->getDescripcion()) ?>
    </div>
    
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" codigo">
        <?php Gral::_echo($vta_vendedor_valoracion_tipo_item_vta_vendedor->getCodigo()) ?>
    </div>
        </td>	
        
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_VALORACION_TIPO_ITEM_VTA_VENDEDOR_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='vta_vendedor_valoracion_tipo_item_vta_vendedor_alta.php?id=<?php Gral::_echo($vta_vendedor_valoracion_tipo_item_vta_vendedor->getId()) ?>&hash=<?php Gral::_echo($vta_vendedor_valoracion_tipo_item_vta_vendedor->getHash()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_VALORACION_TIPO_ITEM_VTA_VENDEDOR_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($vta_vendedor_valoracion_tipo_item_vta_vendedor->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_VALORACION_TIPO_ITEM_VTA_VENDEDOR_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($vta_vendedor_valoracion_tipo_item_vta_vendedor->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_VENDEDOR_VALORACION_TIPO_ITEM_VTA_VENDEDOR_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/vta_vendedor_valoracion_tipo_item_vta_vendedor/vta_vendedor_valoracion_tipo_item_vta_vendedor_db_context_acciones.php?id=<?php Gral::_echo($vta_vendedor_valoracion_tipo_item_vta_vendedor->getId()) ?>' modulo_metodo_init="setInitVtaVendedorValoracionTipoItemVtaVendedor()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


