
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $vta_punto_venta->getId() ?>" modulo="vta_punto_venta">+</div>
</td>

        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" id">
        <?php Gral::_echo($vta_punto_venta->getId()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" descripcion">
        <?php Gral::_echo($vta_punto_venta->getDescripcion()) ?>
    </div>
    <?php if (count($vta_punto_venta->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($vta_punto_venta->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
	
    <div class=" vta_tipo_punto_venta_id <?php Gral::_echo($vta_punto_venta->getVtaTipoPuntoVenta()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($vta_punto_venta->getVtaTipoPuntoVenta()->getDescripcion()) ?>
    </div>
    
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" gral_empresa_id <?php Gral::_echo($vta_punto_venta->getGralEmpresa()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($vta_punto_venta->getGralEmpresa()->getDescripcion()) ?>
    </div>
    
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" geo_localidad_id <?php Gral::_echo($vta_punto_venta->getGeoLocalidad()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($vta_punto_venta->getGeoLocalidad()->getDescripcion()) ?>
    </div>
    
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" codigo">
        <?php Gral::_echo($vta_punto_venta->getCodigo()) ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" numero">
        <?php Gral::_echo($vta_punto_venta->getNumero()) ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" fecha_inicio_timbrado">
        <?php Gral::_echo(Gral::getFechaToWeb($vta_punto_venta->getFechaInicioTimbrado())) ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" numero_actual">
        <?php Gral::_echo($vta_punto_venta->getNumeroActual()) ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" requiere_cae <?php Gral::_echo(GralSiNo::getOxId($vta_punto_venta->getRequiereCae())->getCodigo()) ?> ">	
    
        <?php if($vta_punto_venta->getRequiereCae()){ ?>
            <img src='imgs/tilde_<?php echo $vta_punto_venta->getRequiereCae() ?>.png' width='16' border='0' alt="<?php Gral::_echo($vta_punto_venta->getRequiereCae()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($vta_punto_venta->getRequiereCae())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        
        
    </div>
    
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" solicita_cae <?php Gral::_echo(GralSiNo::getOxId($vta_punto_venta->getSolicitaCae())->getCodigo()) ?> ">	
    
        <?php if($vta_punto_venta->getSolicitaCae()){ ?>
            <img src='imgs/tilde_<?php echo $vta_punto_venta->getSolicitaCae() ?>.png' width='16' border='0' alt="<?php Gral::_echo($vta_punto_venta->getSolicitaCae()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($vta_punto_venta->getSolicitaCae())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        
        
    </div>
    
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" autoincremental <?php Gral::_echo(GralSiNo::getOxId($vta_punto_venta->getAutoincremental())->getCodigo()) ?> ">	
    
        <?php if($vta_punto_venta->getAutoincremental()){ ?>
            <img src='imgs/tilde_<?php echo $vta_punto_venta->getAutoincremental() ?>.png' width='16' border='0' alt="<?php Gral::_echo($vta_punto_venta->getAutoincremental()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($vta_punto_venta->getAutoincremental())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        
        
    </div>
    
        </td>	
        
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='vta_punto_venta_alta.php?id=<?php Gral::_echo($vta_punto_venta->getId()) ?>&hash=<?php Gral::_echo($vta_punto_venta->getHash()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($vta_punto_venta->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($vta_punto_venta->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/vta_punto_venta/vta_punto_venta_db_context_acciones.php?id=<?php Gral::_echo($vta_punto_venta->getId()) ?>' modulo_metodo_init="setInitVtaPuntoVenta()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


