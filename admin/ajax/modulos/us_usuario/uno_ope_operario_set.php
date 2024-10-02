<?php
$sel = '';
$css_sel = '';
$ope_operario_us_usuario_id = '';
if(in_array($ope_operario_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'us_usuario_id', 'valor' => $o_padre->getId()),
        array('campo' => 'ope_operario_id', 'valor' => $ope_operario_relacionado->getId())
    );
    $ope_operario_us_usuario = OpeOperarioUsUsuario::getOxArray($array);
    $ope_operario_us_usuario_id = $ope_operario_us_usuario->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_ALTA_RELACION_OPE_OPERARIO_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_ope_operario_id_<?php echo $ope_operario_relacionado->getId() ?>' name='chk_ope_operario[<?php echo $ope_operario_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $ope_operario_relacionado->getId() ?>' relacion_id='<?php echo $ope_operario_us_usuario_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('US_USUARIO_ALTA_RELACION_OPE_OPERARIO_ACCIONES_EDITAR')){ ?>	
        <?php if($ope_operario_us_usuario_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/ope_operario_us_usuario/ope_operario_us_usuario_alta.php?id=<?php Gral::_echo($ope_operario_us_usuario_id) ?>" contenedor="div_modal" ancho="950" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($ope_operario_relacionado->getId()) ?>, 'ope_operario', 'us_usuario', <?php Gral::_echo($o_padre->getId()) ?>, 'UsUsuario', 'OpeOperarioUsUsuario')" title="Editar OpeOperarioUsUsuario"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('OPE_OPERARIO_ALTA')){ ?>	
        <a class='boton' href='ope_operario_alta.php?id=<?php echo $ope_operario_relacionado->getId() ?>&hash=<?php echo $ope_operario_relacionado->getHash() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($ope_operario_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($ope_operario_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($ope_operario_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $ope_operario_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($ope_operario_us_usuario_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

