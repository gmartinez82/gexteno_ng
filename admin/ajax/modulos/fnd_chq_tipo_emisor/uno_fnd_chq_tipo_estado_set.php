<?php
$sel = '';
$css_sel = '';
$fnd_chq_tipo_emisor_fnd_chq_tipo_estado_id = '';
if(in_array($fnd_chq_tipo_estado_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'fnd_chq_tipo_emisor_id', 'valor' => $o_padre->getId()),
        array('campo' => 'fnd_chq_tipo_estado_id', 'valor' => $fnd_chq_tipo_estado_relacionado->getId())
    );
    $fnd_chq_tipo_emisor_fnd_chq_tipo_estado = FndChqTipoEmisorFndChqTipoEstado::getOxArray($array);
    $fnd_chq_tipo_emisor_fnd_chq_tipo_estado_id = $fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('FND_CHQ_TIPO_EMISOR_ALTA_RELACION_FND_CHQ_TIPO_ESTADO_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_fnd_chq_tipo_estado_id_<?php echo $fnd_chq_tipo_estado_relacionado->getId() ?>' name='chk_fnd_chq_tipo_estado[<?php echo $fnd_chq_tipo_estado_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $fnd_chq_tipo_estado_relacionado->getId() ?>' relacion_id='<?php echo $fnd_chq_tipo_emisor_fnd_chq_tipo_estado_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('FND_CHQ_TIPO_EMISOR_ALTA_RELACION_FND_CHQ_TIPO_ESTADO_ACCIONES_EDITAR')){ ?>	
        <?php if($fnd_chq_tipo_emisor_fnd_chq_tipo_estado_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/fnd_chq_tipo_emisor_fnd_chq_tipo_estado/fnd_chq_tipo_emisor_fnd_chq_tipo_estado_alta.php?id=<?php Gral::_echo($fnd_chq_tipo_emisor_fnd_chq_tipo_estado_id) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($fnd_chq_tipo_estado_relacionado->getId()) ?>, 'fnd_chq_tipo_estado', 'fnd_chq_tipo_emisor', <?php Gral::_echo($o_padre->getId()) ?>, 'FndChqTipoEmisor', 'FndChqTipoEmisorFndChqTipoEstado')" title="Editar FndChqTipoEmisorFndChqTipoEstado"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('FND_CHQ_TIPO_ESTADO_ALTA')){ ?>	
        <a class='boton' href='fnd_chq_tipo_estado_alta.php?id=<?php echo $fnd_chq_tipo_estado_relacionado->getId() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($fnd_chq_tipo_estado_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($fnd_chq_tipo_estado_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($fnd_chq_tipo_estado_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $fnd_chq_tipo_estado_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($fnd_chq_tipo_emisor_fnd_chq_tipo_estado_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

