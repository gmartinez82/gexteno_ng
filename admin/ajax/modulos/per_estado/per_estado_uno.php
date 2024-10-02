
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $per_estado->getId() ?>" modulo="per_estado">+</div>
</td>

        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" id">
        <?php Gral::_echo($per_estado->getId()) ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" per_persona_id <?php Gral::_echo($per_estado->getPerPersona()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($per_estado->getPerPersona()->getDescripcion()) ?>
    </div>
    
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" per_tipo_estado_id <?php Gral::_echo($per_estado->getPerTipoEstado()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($per_estado->getPerTipoEstado()->getDescripcion()) ?>
    </div>
    
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" inicial <?php Gral::_echo(GralSiNo::getOxId($per_estado->getInicial())->getCodigo()) ?> ">	
    
        <?php if($per_estado->getInicial()){ ?>
            <img src='imgs/tilde_<?php echo $per_estado->getInicial() ?>.png' width='16' border='0' alt="<?php Gral::_echo($per_estado->getInicial()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($per_estado->getInicial())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        
        
    </div>
    
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" actual <?php Gral::_echo(GralSiNo::getOxId($per_estado->getActual())->getCodigo()) ?> ">	
    
        <?php if($per_estado->getActual()){ ?>
            <img src='imgs/tilde_<?php echo $per_estado->getActual() ?>.png' width='16' border='0' alt="<?php Gral::_echo($per_estado->getActual()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($per_estado->getActual())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        
        
    </div>
    
        </td>	
        
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('PER_ESTADO_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='per_estado_alta.php?id=<?php Gral::_echo($per_estado->getId()) ?>&hash=<?php Gral::_echo($per_estado->getHash()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PER_ESTADO_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($per_estado->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('PER_ESTADO_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/per_estado/per_estado_db_context_acciones.php?id=<?php Gral::_echo($per_estado->getId()) ?>' modulo_metodo_init="setInitPerEstado()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


