<?php
$sel = '';
$css_sel = '';
$fnd_caja_gral_billete_id = '';
if(in_array($fnd_caja_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'gral_billete_id', 'valor' => $o_padre->getId()),
        array('campo' => 'fnd_caja_id', 'valor' => $fnd_caja_relacionado->getId())
    );
    $fnd_caja_gral_billete = FndCajaGralBillete::getOxArray($array);
    $fnd_caja_gral_billete_id = $fnd_caja_gral_billete->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('GRAL_BILLETE_ALTA_RELACION_FND_CAJA_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_fnd_caja_id_<?php echo $fnd_caja_relacionado->getId() ?>' name='chk_fnd_caja[<?php echo $fnd_caja_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $fnd_caja_relacionado->getId() ?>' relacion_id='<?php echo $fnd_caja_gral_billete_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('GRAL_BILLETE_ALTA_RELACION_FND_CAJA_ACCIONES_EDITAR')){ ?>	
        <?php if($fnd_caja_gral_billete_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/fnd_caja_gral_billete/fnd_caja_gral_billete_alta.php?id=<?php Gral::_echo($fnd_caja_gral_billete_id) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($fnd_caja_relacionado->getId()) ?>, 'fnd_caja', 'gral_billete', <?php Gral::_echo($o_padre->getId()) ?>, 'GralBillete', 'FndCajaGralBillete')" title="Editar FndCajaGralBillete"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('FND_CAJA_ALTA')){ ?>	
        <a class='boton' href='fnd_caja_alta.php?id=<?php echo $fnd_caja_relacionado->getId() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($fnd_caja_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($fnd_caja_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($fnd_caja_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $fnd_caja_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($fnd_caja_gral_billete_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

