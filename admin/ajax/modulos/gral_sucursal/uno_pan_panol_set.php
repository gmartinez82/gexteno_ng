<?php
$sel = '';
$css_sel = '';
$gral_sucursal_pan_panol_id = '';
if(in_array($pan_panol_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'gral_sucursal_id', 'valor' => $o_padre->getId()),
        array('campo' => 'pan_panol_id', 'valor' => $pan_panol_relacionado->getId())
    );
    $gral_sucursal_pan_panol = GralSucursalPanPanol::getOxArray($array);
    $gral_sucursal_pan_panol_id = $gral_sucursal_pan_panol->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('GRAL_SUCURSAL_ALTA_RELACION_PAN_PANOL_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_pan_panol_id_<?php echo $pan_panol_relacionado->getId() ?>' name='chk_pan_panol[<?php echo $pan_panol_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $pan_panol_relacionado->getId() ?>' relacion_id='<?php echo $gral_sucursal_pan_panol_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('GRAL_SUCURSAL_ALTA_RELACION_PAN_PANOL_ACCIONES_EDITAR')){ ?>	
        <?php if($gral_sucursal_pan_panol_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/gral_sucursal_pan_panol/gral_sucursal_pan_panol_alta.php?id=<?php Gral::_echo($gral_sucursal_pan_panol_id) ?>" contenedor="div_modal" ancho="950" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($pan_panol_relacionado->getId()) ?>, 'pan_panol', 'gral_sucursal', <?php Gral::_echo($o_padre->getId()) ?>, 'GralSucursal', 'GralSucursalPanPanol')" title="Editar GralSucursalPanPanol"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('PAN_PANOL_ALTA')){ ?>	
        <a class='boton' href='pan_panol_alta.php?id=<?php echo $pan_panol_relacionado->getId() ?>&hash=<?php echo $pan_panol_relacionado->getHash() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($pan_panol_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($pan_panol_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($pan_panol_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $pan_panol_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($gral_sucursal_pan_panol_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

