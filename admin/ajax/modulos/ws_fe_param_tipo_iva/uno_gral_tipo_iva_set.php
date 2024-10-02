<?php
$sel = '';
$css_sel = '';
$gral_tipo_iva_ws_fe_param_tipo_iva_id = '';
if(in_array($gral_tipo_iva_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'ws_fe_param_tipo_iva_id', 'valor' => $o_padre->getId()),
        array('campo' => 'gral_tipo_iva_id', 'valor' => $gral_tipo_iva_relacionado->getId())
    );
    $gral_tipo_iva_ws_fe_param_tipo_iva = GralTipoIvaWsFeParamTipoIva::getOxArray($array);
    $gral_tipo_iva_ws_fe_param_tipo_iva_id = $gral_tipo_iva_ws_fe_param_tipo_iva->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_IVA_ALTA_RELACION_GRAL_TIPO_IVA_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_gral_tipo_iva_id_<?php echo $gral_tipo_iva_relacionado->getId() ?>' name='chk_gral_tipo_iva[<?php echo $gral_tipo_iva_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $gral_tipo_iva_relacionado->getId() ?>' relacion_id='<?php echo $gral_tipo_iva_ws_fe_param_tipo_iva_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_IVA_ALTA_RELACION_GRAL_TIPO_IVA_ACCIONES_EDITAR')){ ?>	
        <?php if($gral_tipo_iva_ws_fe_param_tipo_iva_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/gral_tipo_iva_ws_fe_param_tipo_iva/gral_tipo_iva_ws_fe_param_tipo_iva_alta.php?id=<?php Gral::_echo($gral_tipo_iva_ws_fe_param_tipo_iva_id) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($gral_tipo_iva_relacionado->getId()) ?>, 'gral_tipo_iva', 'ws_fe_param_tipo_iva', <?php Gral::_echo($o_padre->getId()) ?>, 'WsFeParamTipoIva', 'GralTipoIvaWsFeParamTipoIva')" title="Editar GralTipoIvaWsFeParamTipoIva"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_ALTA')){ ?>	
        <a class='boton' href='gral_tipo_iva_alta.php?id=<?php echo $gral_tipo_iva_relacionado->getId() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($gral_tipo_iva_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($gral_tipo_iva_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($gral_tipo_iva_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $gral_tipo_iva_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($gral_tipo_iva_ws_fe_param_tipo_iva_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

