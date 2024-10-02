<?php
$sel = '';
$css_sel = '';
$us_agrupado_id = '';
if(in_array($us_grupo_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'us_usuario_id', 'valor' => $o_padre->getId()),
        array('campo' => 'us_grupo_id', 'valor' => $us_grupo_relacionado->getId())
    );
    $us_agrupado = UsAgrupado::getOxArray($array);
    $us_agrupado_id = $us_agrupado->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_ALTA_RELACION_US_GRUPO_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_us_grupo_id_<?php echo $us_grupo_relacionado->getId() ?>' name='chk_us_grupo[<?php echo $us_grupo_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $us_grupo_relacionado->getId() ?>' relacion_id='<?php echo $us_agrupado_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('US_USUARIO_ALTA_RELACION_US_GRUPO_ACCIONES_EDITAR')){ ?>	
        <?php if($us_agrupado_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/us_agrupado/us_agrupado_alta.php?id=<?php Gral::_echo($us_agrupado_id) ?>" contenedor="div_modal" ancho="950" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($us_grupo_relacionado->getId()) ?>, 'us_grupo', 'us_usuario', <?php Gral::_echo($o_padre->getId()) ?>, 'UsUsuario', 'UsAgrupado')" title="Editar UsAgrupado"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('US_GRUPO_ALTA')){ ?>	
        <a class='boton' href='us_grupo_alta.php?id=<?php echo $us_grupo_relacionado->getId() ?>&hash=<?php echo $us_grupo_relacionado->getHash() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($us_grupo_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($us_grupo_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($us_grupo_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $us_grupo_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($us_agrupado_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

