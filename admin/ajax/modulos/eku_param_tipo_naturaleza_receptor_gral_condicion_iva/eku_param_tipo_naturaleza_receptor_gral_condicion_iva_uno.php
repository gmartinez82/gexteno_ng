
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $eku_param_tipo_naturaleza_receptor_gral_condicion_iva->getId() ?>" modulo="eku_param_tipo_naturaleza_receptor_gral_condicion_iva">+</div>
</td>

        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" id">
        <?php Gral::_echo($eku_param_tipo_naturaleza_receptor_gral_condicion_iva->getId()) ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" eku_param_tipo_naturaleza_receptor_id <?php Gral::_echo($eku_param_tipo_naturaleza_receptor_gral_condicion_iva->getEkuParamTipoNaturalezaReceptor()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($eku_param_tipo_naturaleza_receptor_gral_condicion_iva->getEkuParamTipoNaturalezaReceptor()->getDescripcion()) ?>
    </div>
    
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" gral_condicion_iva_id <?php Gral::_echo($eku_param_tipo_naturaleza_receptor_gral_condicion_iva->getGralCondicionIva()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($eku_param_tipo_naturaleza_receptor_gral_condicion_iva->getGralCondicionIva()->getDescripcion()) ?>
    </div>
    
        </td>	
        
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_NATURALEZA_RECEPTOR_GRAL_CONDICION_IVA_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='eku_param_tipo_naturaleza_receptor_gral_condicion_iva_alta.php?id=<?php Gral::_echo($eku_param_tipo_naturaleza_receptor_gral_condicion_iva->getId()) ?>&hash=<?php Gral::_echo($eku_param_tipo_naturaleza_receptor_gral_condicion_iva->getHash()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_NATURALEZA_RECEPTOR_GRAL_CONDICION_IVA_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($eku_param_tipo_naturaleza_receptor_gral_condicion_iva->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_NATURALEZA_RECEPTOR_GRAL_CONDICION_IVA_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/eku_param_tipo_naturaleza_receptor_gral_condicion_iva/eku_param_tipo_naturaleza_receptor_gral_condicion_iva_db_context_acciones.php?id=<?php Gral::_echo($eku_param_tipo_naturaleza_receptor_gral_condicion_iva->getId()) ?>' modulo_metodo_init="setInitEkuParamTipoNaturalezaReceptorGralCondicionIva()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


