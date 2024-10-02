<?php
$sel = '';
$css_sel = '';
$gral_sucursal_gral_caja_id = '';
if(in_array($gral_caja_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'gral_sucursal_id', 'valor' => $o_padre->getId()),
        array('campo' => 'gral_caja_id', 'valor' => $gral_caja_relacionado->getId())
    );
    $gral_sucursal_gral_caja = GralSucursalGralCaja::getOxArray($array);
    $gral_sucursal_gral_caja_id = $gral_sucursal_gral_caja->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('GRAL_SUCURSAL_ALTA_RELACION_GRAL_CAJA_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_gral_caja_id_<?php echo $gral_caja_relacionado->getId() ?>' name='chk_gral_caja[<?php echo $gral_caja_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $gral_caja_relacionado->getId() ?>' relacion_id='<?php echo $gral_sucursal_gral_caja_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('GRAL_SUCURSAL_ALTA_RELACION_GRAL_CAJA_ACCIONES_EDITAR')){ ?>	
        <?php if($gral_sucursal_gral_caja_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/gral_sucursal_gral_caja/gral_sucursal_gral_caja_alta.php?id=<?php Gral::_echo($gral_sucursal_gral_caja_id) ?>" contenedor="div_modal" ancho="950" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($gral_caja_relacionado->getId()) ?>, 'gral_caja', 'gral_sucursal', <?php Gral::_echo($o_padre->getId()) ?>, 'GralSucursal', 'GralSucursalGralCaja')" title="Editar GralSucursalGralCaja"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('GRAL_CAJA_ALTA')){ ?>	
        <a class='boton' href='gral_caja_alta.php?id=<?php echo $gral_caja_relacionado->getId() ?>&hash=<?php echo $gral_caja_relacionado->getHash() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($gral_caja_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($gral_caja_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($gral_caja_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $gral_caja_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($gral_sucursal_gral_caja_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

