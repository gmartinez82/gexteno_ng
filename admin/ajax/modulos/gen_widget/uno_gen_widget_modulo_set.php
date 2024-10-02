<?php
$sel = '';
$css_sel = '';
$gen_widget_gen_widget_modulo_id = '';
if(in_array($gen_widget_modulo_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'gen_widget_id', 'valor' => $o_padre->getId()),
        array('campo' => 'gen_widget_modulo_id', 'valor' => $gen_widget_modulo_relacionado->getId())
    );
    $gen_widget_gen_widget_modulo = GenWidgetGenWidgetModulo::getOxArray($array);
    $gen_widget_gen_widget_modulo_id = $gen_widget_gen_widget_modulo->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('GEN_WIDGET_ALTA_RELACION_GEN_WIDGET_MODULO_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_gen_widget_modulo_id_<?php echo $gen_widget_modulo_relacionado->getId() ?>' name='chk_gen_widget_modulo[<?php echo $gen_widget_modulo_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $gen_widget_modulo_relacionado->getId() ?>' relacion_id='<?php echo $gen_widget_gen_widget_modulo_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('GEN_WIDGET_ALTA_RELACION_GEN_WIDGET_MODULO_ACCIONES_EDITAR')){ ?>	
        <?php if($gen_widget_gen_widget_modulo_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/gen_widget_gen_widget_modulo/gen_widget_gen_widget_modulo_alta.php?id=<?php Gral::_echo($gen_widget_gen_widget_modulo_id) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($gen_widget_modulo_relacionado->getId()) ?>, 'gen_widget_modulo', 'gen_widget', <?php Gral::_echo($o_padre->getId()) ?>, 'GenWidget', 'GenWidgetGenWidgetModulo')" title="Editar GenWidgetGenWidgetModulo"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('GEN_WIDGET_MODULO_ALTA')){ ?>	
        <a class='boton' href='gen_widget_modulo_alta.php?id=<?php echo $gen_widget_modulo_relacionado->getId() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($gen_widget_modulo_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($gen_widget_modulo_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($gen_widget_modulo_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $gen_widget_modulo_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($gen_widget_gen_widget_modulo_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

