<?php
$sel = '';
$css_sel = '';
$alt_control_us_grupo_id = '';
if(in_array($us_grupo_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'alt_control_id', 'valor' => $o_padre->getId()),
        array('campo' => 'us_grupo_id', 'valor' => $us_grupo_relacionado->getId())
    );
    $alt_control_us_grupo = AltControlUsGrupo::getOxArray($array);
    $alt_control_us_grupo_id = $alt_control_us_grupo->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('ALT_CONTROL_ALTA_RELACION_US_GRUPO_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_us_grupo_id_<?php echo $us_grupo_relacionado->getId() ?>' name='chk_us_grupo[<?php echo $us_grupo_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $us_grupo_relacionado->getId() ?>' relacion_id='<?php echo $alt_control_us_grupo_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('ALT_CONTROL_ALTA_RELACION_US_GRUPO_ACCIONES_EDITAR')){ ?>	
        <?php if($alt_control_us_grupo_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/alt_control_us_grupo/alt_control_us_grupo_alta.php?id=<?php Gral::_echo($alt_control_us_grupo_id) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($us_grupo_relacionado->getId()) ?>, 'us_grupo', 'alt_control', <?php Gral::_echo($o_padre->getId()) ?>, 'AltControl', 'AltControlUsGrupo')" title="Editar AltControlUsGrupo"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('US_GRUPO_ALTA')){ ?>	
        <a class='boton' href='us_grupo_alta.php?id=<?php echo $us_grupo_relacionado->getId() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($us_grupo_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($us_grupo_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($us_grupo_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $us_grupo_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($alt_control_us_grupo_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

