<?php
$sel = '';
$css_sel = '';
$gral_zona_us_usuario_id = '';
if(in_array($gral_zona_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'us_usuario_id', 'valor' => $o_padre->getId()),
        array('campo' => 'gral_zona_id', 'valor' => $gral_zona_relacionado->getId())
    );
    $gral_zona_us_usuario = GralZonaUsUsuario::getOxArray($array);
    $gral_zona_us_usuario_id = $gral_zona_us_usuario->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_ALTA_RELACION_GRAL_ZONA_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_gral_zona_id_<?php echo $gral_zona_relacionado->getId() ?>' name='chk_gral_zona[<?php echo $gral_zona_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $gral_zona_relacionado->getId() ?>' relacion_id='<?php echo $gral_zona_us_usuario_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('US_USUARIO_ALTA_RELACION_GRAL_ZONA_ACCIONES_EDITAR')){ ?>	
        <?php if($gral_zona_us_usuario_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/gral_zona_us_usuario/gral_zona_us_usuario_alta.php?id=<?php Gral::_echo($gral_zona_us_usuario_id) ?>" contenedor="div_modal" ancho="950" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($gral_zona_relacionado->getId()) ?>, 'gral_zona', 'us_usuario', <?php Gral::_echo($o_padre->getId()) ?>, 'UsUsuario', 'GralZonaUsUsuario')" title="Editar GralZonaUsUsuario"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('GRAL_ZONA_ALTA')){ ?>	
        <a class='boton' href='gral_zona_alta.php?id=<?php echo $gral_zona_relacionado->getId() ?>&hash=<?php echo $gral_zona_relacionado->getHash() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($gral_zona_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($gral_zona_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($gral_zona_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $gral_zona_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($gral_zona_us_usuario_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

