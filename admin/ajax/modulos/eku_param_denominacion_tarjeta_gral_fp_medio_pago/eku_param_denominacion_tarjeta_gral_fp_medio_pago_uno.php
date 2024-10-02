
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $eku_param_denominacion_tarjeta_gral_fp_medio_pago->getId() ?>" modulo="eku_param_denominacion_tarjeta_gral_fp_medio_pago">+</div>
</td>

        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" id">
        <?php Gral::_echo($eku_param_denominacion_tarjeta_gral_fp_medio_pago->getId()) ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" eku_param_denominacion_tarjeta_id <?php Gral::_echo($eku_param_denominacion_tarjeta_gral_fp_medio_pago->getEkuParamDenominacionTarjeta()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($eku_param_denominacion_tarjeta_gral_fp_medio_pago->getEkuParamDenominacionTarjeta()->getDescripcion()) ?>
    </div>
    
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" gral_fp_medio_pago_id <?php Gral::_echo($eku_param_denominacion_tarjeta_gral_fp_medio_pago->getGralFpMedioPago()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($eku_param_denominacion_tarjeta_gral_fp_medio_pago->getGralFpMedioPago()->getDescripcion()) ?>
    </div>
    
        </td>	
        
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('EKU_PARAM_DENOMINACION_TARJETA_GRAL_FP_MEDIO_PAGO_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='eku_param_denominacion_tarjeta_gral_fp_medio_pago_alta.php?id=<?php Gral::_echo($eku_param_denominacion_tarjeta_gral_fp_medio_pago->getId()) ?>&hash=<?php Gral::_echo($eku_param_denominacion_tarjeta_gral_fp_medio_pago->getHash()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_PARAM_DENOMINACION_TARJETA_GRAL_FP_MEDIO_PAGO_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($eku_param_denominacion_tarjeta_gral_fp_medio_pago->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('EKU_PARAM_DENOMINACION_TARJETA_GRAL_FP_MEDIO_PAGO_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/eku_param_denominacion_tarjeta_gral_fp_medio_pago/eku_param_denominacion_tarjeta_gral_fp_medio_pago_db_context_acciones.php?id=<?php Gral::_echo($eku_param_denominacion_tarjeta_gral_fp_medio_pago->getId()) ?>' modulo_metodo_init="setInitEkuParamDenominacionTarjetaGralFpMedioPago()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


