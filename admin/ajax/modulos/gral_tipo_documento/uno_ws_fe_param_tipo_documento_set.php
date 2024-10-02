<?php
$sel = '';
$css_sel = '';
$gral_tipo_documento_ws_fe_param_tipo_documento_id = '';
if(in_array($ws_fe_param_tipo_documento_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'gral_tipo_documento_id', 'valor' => $o_padre->getId()),
        array('campo' => 'ws_fe_param_tipo_documento_id', 'valor' => $ws_fe_param_tipo_documento_relacionado->getId())
    );
    $gral_tipo_documento_ws_fe_param_tipo_documento = GralTipoDocumentoWsFeParamTipoDocumento::getOxArray($array);
    $gral_tipo_documento_ws_fe_param_tipo_documento_id = $gral_tipo_documento_ws_fe_param_tipo_documento->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_DOCUMENTO_ALTA_RELACION_WS_FE_PARAM_TIPO_DOCUMENTO_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_ws_fe_param_tipo_documento_id_<?php echo $ws_fe_param_tipo_documento_relacionado->getId() ?>' name='chk_ws_fe_param_tipo_documento[<?php echo $ws_fe_param_tipo_documento_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $ws_fe_param_tipo_documento_relacionado->getId() ?>' relacion_id='<?php echo $gral_tipo_documento_ws_fe_param_tipo_documento_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_DOCUMENTO_ALTA_RELACION_WS_FE_PARAM_TIPO_DOCUMENTO_ACCIONES_EDITAR')){ ?>	
        <?php if($gral_tipo_documento_ws_fe_param_tipo_documento_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/gral_tipo_documento_ws_fe_param_tipo_documento/gral_tipo_documento_ws_fe_param_tipo_documento_alta.php?id=<?php Gral::_echo($gral_tipo_documento_ws_fe_param_tipo_documento_id) ?>" contenedor="div_modal" ancho="950" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($ws_fe_param_tipo_documento_relacionado->getId()) ?>, 'ws_fe_param_tipo_documento', 'gral_tipo_documento', <?php Gral::_echo($o_padre->getId()) ?>, 'GralTipoDocumento', 'GralTipoDocumentoWsFeParamTipoDocumento')" title="Editar GralTipoDocumentoWsFeParamTipoDocumento"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_DOCUMENTO_ALTA')){ ?>	
        <a class='boton' href='ws_fe_param_tipo_documento_alta.php?id=<?php echo $ws_fe_param_tipo_documento_relacionado->getId() ?>&hash=<?php echo $ws_fe_param_tipo_documento_relacionado->getHash() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($ws_fe_param_tipo_documento_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($ws_fe_param_tipo_documento_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($ws_fe_param_tipo_documento_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $ws_fe_param_tipo_documento_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($gral_tipo_documento_ws_fe_param_tipo_documento_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

