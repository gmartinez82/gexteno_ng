<?php
$sel = '';
$css_sel = '';
$prd_param_operacion_ope_operario_id = '';
if(in_array($ope_operario_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'prd_param_operacion_id', 'valor' => $o_padre->getId()),
        array('campo' => 'ope_operario_id', 'valor' => $ope_operario_relacionado->getId())
    );
    $prd_param_operacion_ope_operario = PrdParamOperacionOpeOperario::getOxArray($array);
    $prd_param_operacion_ope_operario_id = $prd_param_operacion_ope_operario->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('PRD_PARAM_OPERACION_ALTA_RELACION_OPE_OPERARIO_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_ope_operario_id_<?php echo $ope_operario_relacionado->getId() ?>' name='chk_ope_operario[<?php echo $ope_operario_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $ope_operario_relacionado->getId() ?>' relacion_id='<?php echo $prd_param_operacion_ope_operario_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('PRD_PARAM_OPERACION_ALTA_RELACION_OPE_OPERARIO_ACCIONES_EDITAR')){ ?>	
        <?php if($prd_param_operacion_ope_operario_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/prd_param_operacion_ope_operario/prd_param_operacion_ope_operario_alta.php?id=<?php Gral::_echo($prd_param_operacion_ope_operario_id) ?>" contenedor="div_modal" ancho="950" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($ope_operario_relacionado->getId()) ?>, 'ope_operario', 'prd_param_operacion', <?php Gral::_echo($o_padre->getId()) ?>, 'PrdParamOperacion', 'PrdParamOperacionOpeOperario')" title="Editar PrdParamOperacionOpeOperario"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('OPE_OPERARIO_ALTA')){ ?>	
        <a class='boton' href='ope_operario_alta.php?id=<?php echo $ope_operario_relacionado->getId() ?>&hash=<?php echo $ope_operario_relacionado->getHash() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($ope_operario_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($ope_operario_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($ope_operario_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $ope_operario_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($prd_param_operacion_ope_operario_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

