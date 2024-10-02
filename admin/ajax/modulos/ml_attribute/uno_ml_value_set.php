<?php
$sel = '';
$css_sel = '';
$ml_attribute_ml_value_id = '';
if(in_array($ml_value_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'ml_attribute_id', 'valor' => $o_padre->getId()),
        array('campo' => 'ml_value_id', 'valor' => $ml_value_relacionado->getId())
    );
    $ml_attribute_ml_value = MlAttributeMlValue::getOxArray($array);
    $ml_attribute_ml_value_id = $ml_attribute_ml_value->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('ML_ATTRIBUTE_ALTA_RELACION_ML_VALUE_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_ml_value_id_<?php echo $ml_value_relacionado->getId() ?>' name='chk_ml_value[<?php echo $ml_value_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $ml_value_relacionado->getId() ?>' relacion_id='<?php echo $ml_attribute_ml_value_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('ML_ATTRIBUTE_ALTA_RELACION_ML_VALUE_ACCIONES_EDITAR')){ ?>	
        <?php if($ml_attribute_ml_value_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/ml_attribute_ml_value/ml_attribute_ml_value_alta.php?id=<?php Gral::_echo($ml_attribute_ml_value_id) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($ml_value_relacionado->getId()) ?>, 'ml_value', 'ml_attribute', <?php Gral::_echo($o_padre->getId()) ?>, 'MlAttribute', 'MlAttributeMlValue')" title="Editar MlAttributeMlValue"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('ML_VALUE_ALTA')){ ?>	
        <a class='boton' href='ml_value_alta.php?id=<?php echo $ml_value_relacionado->getId() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($ml_value_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($ml_value_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($ml_value_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $ml_value_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($ml_attribute_ml_value_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

