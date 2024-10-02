<?php
$sel = '';
$css_sel = '';
$us_agrupador_id = '';
if(in_array($us_credencial_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'us_grupo_id', 'valor' => $o_padre->getId()),
        array('campo' => 'us_credencial_id', 'valor' => $us_credencial_relacionado->getId())
    );
    $us_agrupador = UsAgrupador::getOxArray($array);
    $us_agrupador_id = $us_agrupador->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('US_GRUPO_ALTA_RELACION_US_CREDENCIAL_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_us_credencial_id_<?php echo $us_credencial_relacionado->getId() ?>' name='chk_us_credencial[<?php echo $us_credencial_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $us_credencial_relacionado->getId() ?>' relacion_id='<?php echo $us_agrupador_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('US_GRUPO_ALTA_RELACION_US_CREDENCIAL_ACCIONES_EDITAR')){ ?>	
        <?php if($us_agrupador_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/us_agrupador/us_agrupador_alta.php?id=<?php Gral::_echo($us_agrupador_id) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($us_credencial_relacionado->getId()) ?>, 'us_credencial', 'us_grupo', <?php Gral::_echo($o_padre->getId()) ?>, 'UsGrupo', 'UsAgrupador')" title="Editar UsAgrupador"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('US_CREDENCIAL_ALTA')){ ?>	
        <a class='boton' href='us_credencial_alta.php?id=<?php echo $us_credencial_relacionado->getId() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($us_credencial_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($us_credencial_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($us_credencial_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $us_credencial_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($us_agrupador_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

