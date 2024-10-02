
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $prd_param_operacion_ope_operario->getId() ?>" modulo="prd_param_operacion_ope_operario">+</div>
</td>

        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" id">
        <?php Gral::_echo($prd_param_operacion_ope_operario->getId()) ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" prd_param_operacion_id <?php Gral::_echo($prd_param_operacion_ope_operario->getPrdParamOperacion()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($prd_param_operacion_ope_operario->getPrdParamOperacion()->getDescripcion()) ?>
    </div>
    
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" ope_operario_id <?php Gral::_echo($prd_param_operacion_ope_operario->getOpeOperario()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($prd_param_operacion_ope_operario->getOpeOperario()->getDescripcion()) ?>
    </div>
    
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" codigo">
        <?php Gral::_echo($prd_param_operacion_ope_operario->getCodigo()) ?>
    </div>
        </td>	
        
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('PRD_PARAM_OPERACION_OPE_OPERARIO_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='prd_param_operacion_ope_operario_alta.php?id=<?php Gral::_echo($prd_param_operacion_ope_operario->getId()) ?>&hash=<?php Gral::_echo($prd_param_operacion_ope_operario->getHash()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PRD_PARAM_OPERACION_OPE_OPERARIO_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($prd_param_operacion_ope_operario->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('PRD_PARAM_OPERACION_OPE_OPERARIO_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($prd_param_operacion_ope_operario->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('PRD_PARAM_OPERACION_OPE_OPERARIO_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/prd_param_operacion_ope_operario/prd_param_operacion_ope_operario_db_context_acciones.php?id=<?php Gral::_echo($prd_param_operacion_ope_operario->getId()) ?>' modulo_metodo_init="setInitPrdParamOperacionOpeOperario()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


