<?php
$sel = '';
$css_sel = '';
$eku_param_unidad_medida_ins_unidad_medida_id = '';
if(in_array($ins_unidad_medida_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'eku_param_unidad_medida_id', 'valor' => $o_padre->getId()),
        array('campo' => 'ins_unidad_medida_id', 'valor' => $ins_unidad_medida_relacionado->getId())
    );
    $eku_param_unidad_medida_ins_unidad_medida = EkuParamUnidadMedidaInsUnidadMedida::getOxArray($array);
    $eku_param_unidad_medida_ins_unidad_medida_id = $eku_param_unidad_medida_ins_unidad_medida->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_UNIDAD_MEDIDA_ALTA_RELACION_INS_UNIDAD_MEDIDA_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_ins_unidad_medida_id_<?php echo $ins_unidad_medida_relacionado->getId() ?>' name='chk_ins_unidad_medida[<?php echo $ins_unidad_medida_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $ins_unidad_medida_relacionado->getId() ?>' relacion_id='<?php echo $eku_param_unidad_medida_ins_unidad_medida_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_UNIDAD_MEDIDA_ALTA_RELACION_INS_UNIDAD_MEDIDA_ACCIONES_EDITAR')){ ?>	
        <?php if($eku_param_unidad_medida_ins_unidad_medida_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/eku_param_unidad_medida_ins_unidad_medida/eku_param_unidad_medida_ins_unidad_medida_alta.php?id=<?php Gral::_echo($eku_param_unidad_medida_ins_unidad_medida_id) ?>" contenedor="div_modal" ancho="950" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($ins_unidad_medida_relacionado->getId()) ?>, 'ins_unidad_medida', 'eku_param_unidad_medida', <?php Gral::_echo($o_padre->getId()) ?>, 'EkuParamUnidadMedida', 'EkuParamUnidadMedidaInsUnidadMedida')" title="Editar EkuParamUnidadMedidaInsUnidadMedida"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('INS_UNIDAD_MEDIDA_ALTA')){ ?>	
        <a class='boton' href='ins_unidad_medida_alta.php?id=<?php echo $ins_unidad_medida_relacionado->getId() ?>&hash=<?php echo $ins_unidad_medida_relacionado->getHash() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($ins_unidad_medida_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($ins_unidad_medida_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($ins_unidad_medida_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $ins_unidad_medida_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($eku_param_unidad_medida_ins_unidad_medida_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

