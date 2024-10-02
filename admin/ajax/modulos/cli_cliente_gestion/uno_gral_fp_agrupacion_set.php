<?php
$sel = '';
$css_sel = '';
$cli_cliente_gral_fp_agrupacion_id = '';
if(in_array($gral_fp_agrupacion_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'cli_cliente_id', 'valor' => $o_padre->getId()),
        array('campo' => 'gral_fp_agrupacion_id', 'valor' => $gral_fp_agrupacion_relacionado->getId())
    );
    $cli_cliente_gral_fp_agrupacion = CliClienteGralFpAgrupacion::getOxArray($array);
    $cli_cliente_gral_fp_agrupacion_id = $cli_cliente_gral_fp_agrupacion->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA_RELACION_GRAL_FP_AGRUPACION_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_gral_fp_agrupacion_id_<?php echo $gral_fp_agrupacion_relacionado->getId() ?>' name='chk_gral_fp_agrupacion[<?php echo $gral_fp_agrupacion_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $gral_fp_agrupacion_relacionado->getId() ?>' relacion_id='<?php echo $cli_cliente_gral_fp_agrupacion_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA_RELACION_GRAL_FP_AGRUPACION_ACCIONES_EDITAR')){ ?>	
        <?php if($cli_cliente_gral_fp_agrupacion_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/cli_cliente_gral_fp_agrupacion/cli_cliente_gral_fp_agrupacion_alta.php?id=<?php Gral::_echo($cli_cliente_gral_fp_agrupacion_id) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($gral_fp_agrupacion_relacionado->getId()) ?>, 'gral_fp_agrupacion', 'cli_cliente', <?php Gral::_echo($o_padre->getId()) ?>, 'CliCliente', 'CliClienteGralFpAgrupacion')" title="Editar CliClienteGralFpAgrupacion"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('GRAL_FP_AGRUPACION_ALTA')){ ?>	
        <a class='boton' href='gral_fp_agrupacion_alta.php?id=<?php echo $gral_fp_agrupacion_relacionado->getId() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($gral_fp_agrupacion_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($gral_fp_agrupacion_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($gral_fp_agrupacion_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $gral_fp_agrupacion_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($cli_cliente_gral_fp_agrupacion_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

