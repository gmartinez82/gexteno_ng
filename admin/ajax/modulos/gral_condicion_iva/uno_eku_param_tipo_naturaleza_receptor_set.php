<?php
$sel = '';
$css_sel = '';
$eku_param_tipo_naturaleza_receptor_gral_condicion_iva_id = '';
if(in_array($eku_param_tipo_naturaleza_receptor_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'gral_condicion_iva_id', 'valor' => $o_padre->getId()),
        array('campo' => 'eku_param_tipo_naturaleza_receptor_id', 'valor' => $eku_param_tipo_naturaleza_receptor_relacionado->getId())
    );
    $eku_param_tipo_naturaleza_receptor_gral_condicion_iva = EkuParamTipoNaturalezaReceptorGralCondicionIva::getOxArray($array);
    $eku_param_tipo_naturaleza_receptor_gral_condicion_iva_id = $eku_param_tipo_naturaleza_receptor_gral_condicion_iva->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_ALTA_RELACION_EKU_PARAM_TIPO_NATURALEZA_RECEPTOR_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_eku_param_tipo_naturaleza_receptor_id_<?php echo $eku_param_tipo_naturaleza_receptor_relacionado->getId() ?>' name='chk_eku_param_tipo_naturaleza_receptor[<?php echo $eku_param_tipo_naturaleza_receptor_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $eku_param_tipo_naturaleza_receptor_relacionado->getId() ?>' relacion_id='<?php echo $eku_param_tipo_naturaleza_receptor_gral_condicion_iva_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_ALTA_RELACION_EKU_PARAM_TIPO_NATURALEZA_RECEPTOR_ACCIONES_EDITAR')){ ?>	
        <?php if($eku_param_tipo_naturaleza_receptor_gral_condicion_iva_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/eku_param_tipo_naturaleza_receptor_gral_condicion_iva/eku_param_tipo_naturaleza_receptor_gral_condicion_iva_alta.php?id=<?php Gral::_echo($eku_param_tipo_naturaleza_receptor_gral_condicion_iva_id) ?>" contenedor="div_modal" ancho="950" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($eku_param_tipo_naturaleza_receptor_relacionado->getId()) ?>, 'eku_param_tipo_naturaleza_receptor', 'gral_condicion_iva', <?php Gral::_echo($o_padre->getId()) ?>, 'GralCondicionIva', 'EkuParamTipoNaturalezaReceptorGralCondicionIva')" title="Editar EkuParamTipoNaturalezaReceptorGralCondicionIva"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_NATURALEZA_RECEPTOR_ALTA')){ ?>	
        <a class='boton' href='eku_param_tipo_naturaleza_receptor_alta.php?id=<?php echo $eku_param_tipo_naturaleza_receptor_relacionado->getId() ?>&hash=<?php echo $eku_param_tipo_naturaleza_receptor_relacionado->getHash() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($eku_param_tipo_naturaleza_receptor_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($eku_param_tipo_naturaleza_receptor_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($eku_param_tipo_naturaleza_receptor_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $eku_param_tipo_naturaleza_receptor_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($eku_param_tipo_naturaleza_receptor_gral_condicion_iva_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

