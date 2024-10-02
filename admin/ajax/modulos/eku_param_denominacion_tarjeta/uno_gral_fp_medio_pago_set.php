<?php
$sel = '';
$css_sel = '';
$eku_param_denominacion_tarjeta_gral_fp_medio_pago_id = '';
if(in_array($gral_fp_medio_pago_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'eku_param_denominacion_tarjeta_id', 'valor' => $o_padre->getId()),
        array('campo' => 'gral_fp_medio_pago_id', 'valor' => $gral_fp_medio_pago_relacionado->getId())
    );
    $eku_param_denominacion_tarjeta_gral_fp_medio_pago = EkuParamDenominacionTarjetaGralFpMedioPago::getOxArray($array);
    $eku_param_denominacion_tarjeta_gral_fp_medio_pago_id = $eku_param_denominacion_tarjeta_gral_fp_medio_pago->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_DENOMINACION_TARJETA_ALTA_RELACION_GRAL_FP_MEDIO_PAGO_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_gral_fp_medio_pago_id_<?php echo $gral_fp_medio_pago_relacionado->getId() ?>' name='chk_gral_fp_medio_pago[<?php echo $gral_fp_medio_pago_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $gral_fp_medio_pago_relacionado->getId() ?>' relacion_id='<?php echo $eku_param_denominacion_tarjeta_gral_fp_medio_pago_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_DENOMINACION_TARJETA_ALTA_RELACION_GRAL_FP_MEDIO_PAGO_ACCIONES_EDITAR')){ ?>	
        <?php if($eku_param_denominacion_tarjeta_gral_fp_medio_pago_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/eku_param_denominacion_tarjeta_gral_fp_medio_pago/eku_param_denominacion_tarjeta_gral_fp_medio_pago_alta.php?id=<?php Gral::_echo($eku_param_denominacion_tarjeta_gral_fp_medio_pago_id) ?>" contenedor="div_modal" ancho="950" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($gral_fp_medio_pago_relacionado->getId()) ?>, 'gral_fp_medio_pago', 'eku_param_denominacion_tarjeta', <?php Gral::_echo($o_padre->getId()) ?>, 'EkuParamDenominacionTarjeta', 'EkuParamDenominacionTarjetaGralFpMedioPago')" title="Editar EkuParamDenominacionTarjetaGralFpMedioPago"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('GRAL_FP_MEDIO_PAGO_ALTA')){ ?>	
        <a class='boton' href='gral_fp_medio_pago_alta.php?id=<?php echo $gral_fp_medio_pago_relacionado->getId() ?>&hash=<?php echo $gral_fp_medio_pago_relacionado->getHash() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($gral_fp_medio_pago_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($gral_fp_medio_pago_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($gral_fp_medio_pago_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $gral_fp_medio_pago_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($eku_param_denominacion_tarjeta_gral_fp_medio_pago_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

