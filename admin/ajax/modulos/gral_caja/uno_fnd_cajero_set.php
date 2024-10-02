<?php
$sel = '';
$css_sel = '';
$fnd_cajero_gral_caja_id = '';
if(in_array($fnd_cajero_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'gral_caja_id', 'valor' => $o_padre->getId()),
        array('campo' => 'fnd_cajero_id', 'valor' => $fnd_cajero_relacionado->getId())
    );
    $fnd_cajero_gral_caja = FndCajeroGralCaja::getOxArray($array);
    $fnd_cajero_gral_caja_id = $fnd_cajero_gral_caja->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('GRAL_CAJA_ALTA_RELACION_FND_CAJERO_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_fnd_cajero_id_<?php echo $fnd_cajero_relacionado->getId() ?>' name='chk_fnd_cajero[<?php echo $fnd_cajero_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $fnd_cajero_relacionado->getId() ?>' relacion_id='<?php echo $fnd_cajero_gral_caja_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('GRAL_CAJA_ALTA_RELACION_FND_CAJERO_ACCIONES_EDITAR')){ ?>	
        <?php if($fnd_cajero_gral_caja_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/fnd_cajero_gral_caja/fnd_cajero_gral_caja_alta.php?id=<?php Gral::_echo($fnd_cajero_gral_caja_id) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($fnd_cajero_relacionado->getId()) ?>, 'fnd_cajero', 'gral_caja', <?php Gral::_echo($o_padre->getId()) ?>, 'GralCaja', 'FndCajeroGralCaja')" title="Editar FndCajeroGralCaja"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('FND_CAJERO_ALTA')){ ?>	
        <a class='boton' href='fnd_cajero_alta.php?id=<?php echo $fnd_cajero_relacionado->getId() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($fnd_cajero_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($fnd_cajero_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($fnd_cajero_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $fnd_cajero_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($fnd_cajero_gral_caja_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

