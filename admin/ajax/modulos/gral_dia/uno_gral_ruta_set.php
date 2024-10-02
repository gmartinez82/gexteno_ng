<?php
$sel = '';
$css_sel = '';
$gral_ruta_gral_dia_id = '';
if(in_array($gral_ruta_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'gral_dia_id', 'valor' => $o_padre->getId()),
        array('campo' => 'gral_ruta_id', 'valor' => $gral_ruta_relacionado->getId())
    );
    $gral_ruta_gral_dia = GralRutaGralDia::getOxArray($array);
    $gral_ruta_gral_dia_id = $gral_ruta_gral_dia->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('GRAL_DIA_ALTA_RELACION_GRAL_RUTA_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_gral_ruta_id_<?php echo $gral_ruta_relacionado->getId() ?>' name='chk_gral_ruta[<?php echo $gral_ruta_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $gral_ruta_relacionado->getId() ?>' relacion_id='<?php echo $gral_ruta_gral_dia_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('GRAL_DIA_ALTA_RELACION_GRAL_RUTA_ACCIONES_EDITAR')){ ?>	
        <?php if($gral_ruta_gral_dia_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/gral_ruta_gral_dia/gral_ruta_gral_dia_alta.php?id=<?php Gral::_echo($gral_ruta_gral_dia_id) ?>" contenedor="div_modal" ancho="950" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($gral_ruta_relacionado->getId()) ?>, 'gral_ruta', 'gral_dia', <?php Gral::_echo($o_padre->getId()) ?>, 'GralDia', 'GralRutaGralDia')" title="Editar GralRutaGralDia"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('GRAL_RUTA_ALTA')){ ?>	
        <a class='boton' href='gral_ruta_alta.php?id=<?php echo $gral_ruta_relacionado->getId() ?>&hash=<?php echo $gral_ruta_relacionado->getHash() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($gral_ruta_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($gral_ruta_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($gral_ruta_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $gral_ruta_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($gral_ruta_gral_dia_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

