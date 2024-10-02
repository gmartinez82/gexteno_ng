<?php
$sel = '';
$css_sel = '';
$ml_attribute_ml_value_id = '';
if(in_array($ml_attribute_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'ml_value_id', 'valor' => $o_padre->getId()),
        array('campo' => 'ml_attribute_id', 'valor' => $ml_attribute_relacionado->getId())
    );
    $ml_attribute_ml_value = MlAttributeMlValue::getOxArray($array);
    $ml_attribute_ml_value_id = $ml_attribute_ml_value->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('ML_VALUE_ALTA_RELACION_ML_ATTRIBUTE_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_ml_attribute_id_<?php echo $ml_attribute_relacionado->getId() ?>' name='chk_ml_attribute[<?php echo $ml_attribute_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $ml_attribute_relacionado->getId() ?>' relacion_id='<?php echo $ml_attribute_ml_value_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('ML_VALUE_ALTA_RELACION_ML_ATTRIBUTE_ACCIONES_EDITAR')){ ?>	
        <?php if($ml_attribute_ml_value_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/ml_attribute_ml_value/ml_attribute_ml_value_alta.php?id=<?php Gral::_echo($ml_attribute_ml_value_id) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($ml_attribute_relacionado->getId()) ?>, 'ml_attribute', 'ml_value', <?php Gral::_echo($o_padre->getId()) ?>, 'MlValue', 'MlAttributeMlValue')" title="Editar MlAttributeMlValue"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('ML_ATTRIBUTE_ALTA')){ ?>	
        <a class='boton' href='ml_attribute_alta.php?id=<?php echo $ml_attribute_relacionado->getId() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($ml_attribute_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($ml_attribute_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($ml_attribute_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $ml_attribute_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($ml_attribute_ml_value_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

