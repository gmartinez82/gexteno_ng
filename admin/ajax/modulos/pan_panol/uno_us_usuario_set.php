<?php
$sel = '';
$css_sel = '';
$pan_panol_us_usuario_id = '';
if(in_array($us_usuario_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'pan_panol_id', 'valor' => $o_padre->getId()),
        array('campo' => 'us_usuario_id', 'valor' => $us_usuario_relacionado->getId())
    );
    $pan_panol_us_usuario = PanPanolUsUsuario::getOxArray($array);
    $pan_panol_us_usuario_id = $pan_panol_us_usuario->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('PAN_PANOL_ALTA_RELACION_US_USUARIO_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_us_usuario_id_<?php echo $us_usuario_relacionado->getId() ?>' name='chk_us_usuario[<?php echo $us_usuario_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $us_usuario_relacionado->getId() ?>' relacion_id='<?php echo $pan_panol_us_usuario_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('PAN_PANOL_ALTA_RELACION_US_USUARIO_ACCIONES_EDITAR')){ ?>	
        <?php if($pan_panol_us_usuario_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/pan_panol_us_usuario/pan_panol_us_usuario_alta.php?id=<?php Gral::_echo($pan_panol_us_usuario_id) ?>" contenedor="div_modal" ancho="950" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($us_usuario_relacionado->getId()) ?>, 'us_usuario', 'pan_panol', <?php Gral::_echo($o_padre->getId()) ?>, 'PanPanol', 'PanPanolUsUsuario')" title="Editar PanPanolUsUsuario"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('US_USUARIO_ALTA')){ ?>	
        <a class='boton' href='us_usuario_alta.php?id=<?php echo $us_usuario_relacionado->getId() ?>&hash=<?php echo $us_usuario_relacionado->getHash() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($us_usuario_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($us_usuario_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($us_usuario_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $us_usuario_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($pan_panol_us_usuario_id != ''){ ?>
    <div class='segunda'>
        
		<label class='light'><?php Lang::_lang('UsUsuario') ?>:</label> <label class='dato'><?php echo $pan_panol_us_usuario->getUsUsuario()->getDescripcion() ?></label><br />
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

