<?php
$sel = '';
$css_sel = '';
$vta_tributo_ws_fe_param_tipo_tributo_id = '';
if(in_array($ws_fe_param_tipo_tributo_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'vta_tributo_id', 'valor' => $o_padre->getId()),
        array('campo' => 'ws_fe_param_tipo_tributo_id', 'valor' => $ws_fe_param_tipo_tributo_relacionado->getId())
    );
    $vta_tributo_ws_fe_param_tipo_tributo = VtaTributoWsFeParamTipoTributo::getOxArray($array);
    $vta_tributo_ws_fe_param_tipo_tributo_id = $vta_tributo_ws_fe_param_tipo_tributo->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('VTA_TRIBUTO_ALTA_RELACION_WS_FE_PARAM_TIPO_TRIBUTO_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_ws_fe_param_tipo_tributo_id_<?php echo $ws_fe_param_tipo_tributo_relacionado->getId() ?>' name='chk_ws_fe_param_tipo_tributo[<?php echo $ws_fe_param_tipo_tributo_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $ws_fe_param_tipo_tributo_relacionado->getId() ?>' relacion_id='<?php echo $vta_tributo_ws_fe_param_tipo_tributo_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('VTA_TRIBUTO_ALTA_RELACION_WS_FE_PARAM_TIPO_TRIBUTO_ACCIONES_EDITAR')){ ?>	
        <?php if($vta_tributo_ws_fe_param_tipo_tributo_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/vta_tributo_ws_fe_param_tipo_tributo/vta_tributo_ws_fe_param_tipo_tributo_alta.php?id=<?php Gral::_echo($vta_tributo_ws_fe_param_tipo_tributo_id) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($ws_fe_param_tipo_tributo_relacionado->getId()) ?>, 'ws_fe_param_tipo_tributo', 'vta_tributo', <?php Gral::_echo($o_padre->getId()) ?>, 'VtaTributo', 'VtaTributoWsFeParamTipoTributo')" title="Editar VtaTributoWsFeParamTipoTributo"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_TRIBUTO_ALTA')){ ?>	
        <a class='boton' href='ws_fe_param_tipo_tributo_alta.php?id=<?php echo $ws_fe_param_tipo_tributo_relacionado->getId() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($ws_fe_param_tipo_tributo_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($ws_fe_param_tipo_tributo_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($ws_fe_param_tipo_tributo_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $ws_fe_param_tipo_tributo_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($vta_tributo_ws_fe_param_tipo_tributo_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

