
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $gral_novedad->getId() ?>" modulo="gral_novedad">+</div>
</td>

        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" id">
        <?php Gral::_echo($gral_novedad->getId()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" descripcion">
        <?php Gral::_echo($gral_novedad->getDescripcion()) ?>
    </div>
    <?php if (count($gral_novedad->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($gral_novedad->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
    <div class=" descripcion_corta">
        <?php Gral::_echo($gral_novedad->getDescripcionCorta()) ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" codigo">
        <?php Gral::_echo($gral_novedad->getCodigo()) ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" laboral <?php Gral::_echo(GralSiNo::getOxId($gral_novedad->getLaboral())->getCodigo()) ?> ">	
    
        <?php if($gral_novedad->getLaboral()){ ?>
            <img src='imgs/tilde_<?php echo $gral_novedad->getLaboral() ?>.png' width='16' border='0' alt="<?php Gral::_echo($gral_novedad->getLaboral()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($gral_novedad->getLaboral())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        
        
    </div>
    
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" planificable <?php Gral::_echo(GralSiNo::getOxId($gral_novedad->getPlanificable())->getCodigo()) ?> ">	
    
        <?php if($gral_novedad->getPlanificable()){ ?>
            <img src='imgs/tilde_<?php echo $gral_novedad->getPlanificable() ?>.png' width='16' border='0' alt="<?php Gral::_echo($gral_novedad->getPlanificable()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($gral_novedad->getPlanificable())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        
        
    </div>
    
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" requiere_movimientos <?php Gral::_echo(GralSiNo::getOxId($gral_novedad->getRequiereMovimientos())->getCodigo()) ?> ">	
    
        <?php if($gral_novedad->getRequiereMovimientos()){ ?>
            <img src='imgs/tilde_<?php echo $gral_novedad->getRequiereMovimientos() ?>.png' width='16' border='0' alt="<?php Gral::_echo($gral_novedad->getRequiereMovimientos()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($gral_novedad->getRequiereMovimientos())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        
        
    </div>
    
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" permite_confirmacion <?php Gral::_echo(GralSiNo::getOxId($gral_novedad->getPermiteConfirmacion())->getCodigo()) ?> ">	
    
        <?php if($gral_novedad->getPermiteConfirmacion()){ ?>
            <img src='imgs/tilde_<?php echo $gral_novedad->getPermiteConfirmacion() ?>.png' width='16' border='0' alt="<?php Gral::_echo($gral_novedad->getPermiteConfirmacion()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($gral_novedad->getPermiteConfirmacion())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        
        
    </div>
    
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" horas">
        <?php Gral::_echo($gral_novedad->getHoras()) ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" codigo_color">
        <?php Gral::_echo($gral_novedad->getCodigoColor()) ?>
    </div>
        </td>	
        
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_NOVEDAD_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='gral_novedad_alta.php?id=<?php Gral::_echo($gral_novedad->getId()) ?>&hash=<?php Gral::_echo($gral_novedad->getHash()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_NOVEDAD_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($gral_novedad->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('GRAL_NOVEDAD_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($gral_novedad->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('GRAL_NOVEDAD_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/gral_novedad/gral_novedad_db_context_acciones.php?id=<?php Gral::_echo($gral_novedad->getId()) ?>' modulo_metodo_init="setInitGralNovedad()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


