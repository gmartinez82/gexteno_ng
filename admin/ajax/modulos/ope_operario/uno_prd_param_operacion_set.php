<?php
$sel = '';
$css_sel = '';
$prd_param_operacion_ope_operario_id = '';
if(in_array($prd_param_operacion_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'ope_operario_id', 'valor' => $o_padre->getId()),
        array('campo' => 'prd_param_operacion_id', 'valor' => $prd_param_operacion_relacionado->getId())
    );
    $prd_param_operacion_ope_operario = PrdParamOperacionOpeOperario::getOxArray($array);
    $prd_param_operacion_ope_operario_id = $prd_param_operacion_ope_operario->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('OPE_OPERARIO_ALTA_RELACION_PRD_PARAM_OPERACION_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_prd_param_operacion_id_<?php echo $prd_param_operacion_relacionado->getId() ?>' name='chk_prd_param_operacion[<?php echo $prd_param_operacion_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $prd_param_operacion_relacionado->getId() ?>' relacion_id='<?php echo $prd_param_operacion_ope_operario_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('OPE_OPERARIO_ALTA_RELACION_PRD_PARAM_OPERACION_ACCIONES_EDITAR')){ ?>	
        <?php if($prd_param_operacion_ope_operario_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/prd_param_operacion_ope_operario/prd_param_operacion_ope_operario_alta.php?id=<?php Gral::_echo($prd_param_operacion_ope_operario_id) ?>" contenedor="div_modal" ancho="950" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($prd_param_operacion_relacionado->getId()) ?>, 'prd_param_operacion', 'ope_operario', <?php Gral::_echo($o_padre->getId()) ?>, 'OpeOperario', 'PrdParamOperacionOpeOperario')" title="Editar PrdParamOperacionOpeOperario"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('PRD_PARAM_OPERACION_ALTA')){ ?>	
        <a class='boton' href='prd_param_operacion_alta.php?id=<?php echo $prd_param_operacion_relacionado->getId() ?>&hash=<?php echo $prd_param_operacion_relacionado->getHash() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($prd_param_operacion_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($prd_param_operacion_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($prd_param_operacion_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $prd_param_operacion_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($prd_param_operacion_ope_operario_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

