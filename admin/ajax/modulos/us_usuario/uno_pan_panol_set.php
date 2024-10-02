<?php
$sel = '';
$css_sel = '';
$pan_panol_us_usuario_id = '';
if(in_array($pan_panol_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'us_usuario_id', 'valor' => $o_padre->getId()),
        array('campo' => 'pan_panol_id', 'valor' => $pan_panol_relacionado->getId())
    );
    $pan_panol_us_usuario = PanPanolUsUsuario::getOxArray($array);
    $pan_panol_us_usuario_id = $pan_panol_us_usuario->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_ALTA_RELACION_PAN_PANOL_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_pan_panol_id_<?php echo $pan_panol_relacionado->getId() ?>' name='chk_pan_panol[<?php echo $pan_panol_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $pan_panol_relacionado->getId() ?>' relacion_id='<?php echo $pan_panol_us_usuario_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('US_USUARIO_ALTA_RELACION_PAN_PANOL_ACCIONES_EDITAR')){ ?>	
        <?php if($pan_panol_us_usuario_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/pan_panol_us_usuario/pan_panol_us_usuario_alta.php?id=<?php Gral::_echo($pan_panol_us_usuario_id) ?>" contenedor="div_modal" ancho="950" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($pan_panol_relacionado->getId()) ?>, 'pan_panol', 'us_usuario', <?php Gral::_echo($o_padre->getId()) ?>, 'UsUsuario', 'PanPanolUsUsuario')" title="Editar PanPanolUsUsuario"><?php Lang::_lang('Editar') ?></div>
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
        	
    <?php if($pan_panol_us_usuario_id != ''){ ?>
    <div class='segunda'>
        
		<label class='light'><?php Lang::_lang('UsUsuario') ?>:</label> <label class='dato'><?php Gral::_echoConBr($pan_panol_us_usuario->getUsUsuario()->getDescripcion()) ?></label>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

