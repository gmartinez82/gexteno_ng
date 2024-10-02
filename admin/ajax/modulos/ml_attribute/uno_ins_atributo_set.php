<?php
$sel = '';
$css_sel = '';
$ml_attribute_ins_atributo_id = '';
if(in_array($ins_atributo_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'ml_attribute_id', 'valor' => $o_padre->getId()),
        array('campo' => 'ins_atributo_id', 'valor' => $ins_atributo_relacionado->getId())
    );
    $ml_attribute_ins_atributo = MlAttributeInsAtributo::getOxArray($array);
    $ml_attribute_ins_atributo_id = $ml_attribute_ins_atributo->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('ML_ATTRIBUTE_ALTA_RELACION_INS_ATRIBUTO_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_ins_atributo_id_<?php echo $ins_atributo_relacionado->getId() ?>' name='chk_ins_atributo[<?php echo $ins_atributo_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $ins_atributo_relacionado->getId() ?>' relacion_id='<?php echo $ml_attribute_ins_atributo_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('ML_ATTRIBUTE_ALTA_RELACION_INS_ATRIBUTO_ACCIONES_EDITAR')){ ?>	
        <?php if($ml_attribute_ins_atributo_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/ml_attribute_ins_atributo/ml_attribute_ins_atributo_alta.php?id=<?php Gral::_echo($ml_attribute_ins_atributo_id) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($ins_atributo_relacionado->getId()) ?>, 'ins_atributo', 'ml_attribute', <?php Gral::_echo($o_padre->getId()) ?>, 'MlAttribute', 'MlAttributeInsAtributo')" title="Editar MlAttributeInsAtributo"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('INS_ATRIBUTO_ALTA')){ ?>	
        <a class='boton' href='ins_atributo_alta.php?id=<?php echo $ins_atributo_relacionado->getId() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($ins_atributo_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($ins_atributo_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($ins_atributo_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $ins_atributo_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($ml_attribute_ins_atributo_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

