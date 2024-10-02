<?php
$sel = '';
$css_sel = '';
$alt_control_us_usuario_id = '';
if(in_array($alt_control_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'us_usuario_id', 'valor' => $o_padre->getId()),
        array('campo' => 'alt_control_id', 'valor' => $alt_control_relacionado->getId())
    );
    $alt_control_us_usuario = AltControlUsUsuario::getOxArray($array);
    $alt_control_us_usuario_id = $alt_control_us_usuario->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_ALTA_RELACION_ALT_CONTROL_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_alt_control_id_<?php echo $alt_control_relacionado->getId() ?>' name='chk_alt_control[<?php echo $alt_control_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $alt_control_relacionado->getId() ?>' relacion_id='<?php echo $alt_control_us_usuario_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('US_USUARIO_ALTA_RELACION_ALT_CONTROL_ACCIONES_EDITAR')){ ?>	
        <?php if($alt_control_us_usuario_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/alt_control_us_usuario/alt_control_us_usuario_alta.php?id=<?php Gral::_echo($alt_control_us_usuario_id) ?>" contenedor="div_modal" ancho="950" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($alt_control_relacionado->getId()) ?>, 'alt_control', 'us_usuario', <?php Gral::_echo($o_padre->getId()) ?>, 'UsUsuario', 'AltControlUsUsuario')" title="Editar AltControlUsUsuario"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('ALT_CONTROL_ALTA')){ ?>	
        <a class='boton' href='alt_control_alta.php?id=<?php echo $alt_control_relacionado->getId() ?>&hash=<?php echo $alt_control_relacionado->getHash() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($alt_control_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($alt_control_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($alt_control_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $alt_control_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($alt_control_us_usuario_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

