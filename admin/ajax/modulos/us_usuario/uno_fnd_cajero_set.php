<?php
$sel = '';
$css_sel = '';
$fnd_cajero_us_usuario_id = '';
if(in_array($fnd_cajero_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'us_usuario_id', 'valor' => $o_padre->getId()),
        array('campo' => 'fnd_cajero_id', 'valor' => $fnd_cajero_relacionado->getId())
    );
    $fnd_cajero_us_usuario = FndCajeroUsUsuario::getOxArray($array);
    $fnd_cajero_us_usuario_id = $fnd_cajero_us_usuario->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_ALTA_RELACION_FND_CAJERO_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_fnd_cajero_id_<?php echo $fnd_cajero_relacionado->getId() ?>' name='chk_fnd_cajero[<?php echo $fnd_cajero_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $fnd_cajero_relacionado->getId() ?>' relacion_id='<?php echo $fnd_cajero_us_usuario_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('US_USUARIO_ALTA_RELACION_FND_CAJERO_ACCIONES_EDITAR')){ ?>	
        <?php if($fnd_cajero_us_usuario_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/fnd_cajero_us_usuario/fnd_cajero_us_usuario_alta.php?id=<?php Gral::_echo($fnd_cajero_us_usuario_id) ?>" contenedor="div_modal" ancho="950" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($fnd_cajero_relacionado->getId()) ?>, 'fnd_cajero', 'us_usuario', <?php Gral::_echo($o_padre->getId()) ?>, 'UsUsuario', 'FndCajeroUsUsuario')" title="Editar FndCajeroUsUsuario"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('FND_CAJERO_ALTA')){ ?>	
        <a class='boton' href='fnd_cajero_alta.php?id=<?php echo $fnd_cajero_relacionado->getId() ?>&hash=<?php echo $fnd_cajero_relacionado->getHash() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($fnd_cajero_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($fnd_cajero_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($fnd_cajero_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $fnd_cajero_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($fnd_cajero_us_usuario_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

