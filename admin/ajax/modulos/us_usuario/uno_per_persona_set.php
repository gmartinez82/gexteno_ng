<?php
$sel = '';
$css_sel = '';
$per_persona_us_usuario_id = '';
if(in_array($per_persona_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'us_usuario_id', 'valor' => $o_padre->getId()),
        array('campo' => 'per_persona_id', 'valor' => $per_persona_relacionado->getId())
    );
    $per_persona_us_usuario = PerPersonaUsUsuario::getOxArray($array);
    $per_persona_us_usuario_id = $per_persona_us_usuario->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_ALTA_RELACION_PER_PERSONA_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_per_persona_id_<?php echo $per_persona_relacionado->getId() ?>' name='chk_per_persona[<?php echo $per_persona_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $per_persona_relacionado->getId() ?>' relacion_id='<?php echo $per_persona_us_usuario_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('US_USUARIO_ALTA_RELACION_PER_PERSONA_ACCIONES_EDITAR')){ ?>	
        <?php if($per_persona_us_usuario_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/per_persona_us_usuario/per_persona_us_usuario_alta.php?id=<?php Gral::_echo($per_persona_us_usuario_id) ?>" contenedor="div_modal" ancho="950" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($per_persona_relacionado->getId()) ?>, 'per_persona', 'us_usuario', <?php Gral::_echo($o_padre->getId()) ?>, 'UsUsuario', 'PerPersonaUsUsuario')" title="Editar PerPersonaUsUsuario"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('PER_PERSONA_ALTA')){ ?>	
        <a class='boton' href='per_persona_alta.php?id=<?php echo $per_persona_relacionado->getId() ?>&hash=<?php echo $per_persona_relacionado->getHash() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($per_persona_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    
    <label class="avatar">
        <a href="<?php echo $per_persona_relacionado->getPathImagenPrincipal() ?>" rel="imagen-per_persona-<?php echo $per_persona_relacionado->getId() ?>">
            <img src="<?php echo $per_persona_relacionado->getPathImagenPrincipal(true) ?>" width="22" title="Imagen del PerPersona" />
        </a>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($per_persona_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($per_persona_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $per_persona_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($per_persona_us_usuario_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

