<?php
$sel = '';
$css_sel = '';
$fnd_cajero_gral_caja_id = '';
if(in_array($gral_caja_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'fnd_cajero_id', 'valor' => $o_padre->getId()),
        array('campo' => 'gral_caja_id', 'valor' => $gral_caja_relacionado->getId())
    );
    $fnd_cajero_gral_caja = FndCajeroGralCaja::getOxArray($array);
    $fnd_cajero_gral_caja_id = $fnd_cajero_gral_caja->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('FND_CAJERO_ALTA_RELACION_GRAL_CAJA_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_gral_caja_id_<?php echo $gral_caja_relacionado->getId() ?>' name='chk_gral_caja[<?php echo $gral_caja_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $gral_caja_relacionado->getId() ?>' relacion_id='<?php echo $fnd_cajero_gral_caja_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('FND_CAJERO_ALTA_RELACION_GRAL_CAJA_ACCIONES_EDITAR')){ ?>	
        <?php if($fnd_cajero_gral_caja_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/fnd_cajero_gral_caja/fnd_cajero_gral_caja_alta.php?id=<?php Gral::_echo($fnd_cajero_gral_caja_id) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($gral_caja_relacionado->getId()) ?>, 'gral_caja', 'fnd_cajero', <?php Gral::_echo($o_padre->getId()) ?>, 'FndCajero', 'FndCajeroGralCaja')" title="Editar FndCajeroGralCaja"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('GRAL_CAJA_ALTA')){ ?>	
        <a class='boton' href='gral_caja_alta.php?id=<?php echo $gral_caja_relacionado->getId() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($gral_caja_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($gral_caja_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($gral_caja_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $gral_caja_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($fnd_cajero_gral_caja_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

