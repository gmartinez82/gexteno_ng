
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $per_persona_gral_sucursal->getId() ?>" modulo="per_persona_gral_sucursal">+</div>
</td>

        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" id">
        <?php Gral::_echo($per_persona_gral_sucursal->getId()) ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" per_persona_id <?php Gral::_echo($per_persona_gral_sucursal->getPerPersona()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($per_persona_gral_sucursal->getPerPersona()->getDescripcion()) ?>
    </div>
    
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" gral_sucursal_id <?php Gral::_echo($per_persona_gral_sucursal->getGralSucursal()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($per_persona_gral_sucursal->getGralSucursal()->getDescripcion()) ?>
    </div>
    
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" codigo">
        <?php Gral::_echo($per_persona_gral_sucursal->getCodigo()) ?>
    </div>
        </td>	
        
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('PER_PERSONA_GRAL_SUCURSAL_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='per_persona_gral_sucursal_alta.php?id=<?php Gral::_echo($per_persona_gral_sucursal->getId()) ?>&hash=<?php Gral::_echo($per_persona_gral_sucursal->getHash()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PER_PERSONA_GRAL_SUCURSAL_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($per_persona_gral_sucursal->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('PER_PERSONA_GRAL_SUCURSAL_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($per_persona_gral_sucursal->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('PER_PERSONA_GRAL_SUCURSAL_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/per_persona_gral_sucursal/per_persona_gral_sucursal_db_context_acciones.php?id=<?php Gral::_echo($per_persona_gral_sucursal->getId()) ?>' modulo_metodo_init="setInitPerPersonaGralSucursal()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


