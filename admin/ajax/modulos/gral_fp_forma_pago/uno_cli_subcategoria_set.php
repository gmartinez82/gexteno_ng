<?php
$sel = '';
$css_sel = '';
$cli_subcategoria_gral_fp_forma_pago_id = '';
if(in_array($cli_subcategoria_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'gral_fp_forma_pago_id', 'valor' => $o_padre->getId()),
        array('campo' => 'cli_subcategoria_id', 'valor' => $cli_subcategoria_relacionado->getId())
    );
    $cli_subcategoria_gral_fp_forma_pago = CliSubcategoriaGralFpFormaPago::getOxArray($array);
    $cli_subcategoria_gral_fp_forma_pago_id = $cli_subcategoria_gral_fp_forma_pago->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('GRAL_FP_FORMA_PAGO_ALTA_RELACION_CLI_SUBCATEGORIA_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_cli_subcategoria_id_<?php echo $cli_subcategoria_relacionado->getId() ?>' name='chk_cli_subcategoria[<?php echo $cli_subcategoria_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $cli_subcategoria_relacionado->getId() ?>' relacion_id='<?php echo $cli_subcategoria_gral_fp_forma_pago_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('GRAL_FP_FORMA_PAGO_ALTA_RELACION_CLI_SUBCATEGORIA_ACCIONES_EDITAR')){ ?>	
        <?php if($cli_subcategoria_gral_fp_forma_pago_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/cli_subcategoria_gral_fp_forma_pago/cli_subcategoria_gral_fp_forma_pago_alta.php?id=<?php Gral::_echo($cli_subcategoria_gral_fp_forma_pago_id) ?>" contenedor="div_modal" ancho="950" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($cli_subcategoria_relacionado->getId()) ?>, 'cli_subcategoria', 'gral_fp_forma_pago', <?php Gral::_echo($o_padre->getId()) ?>, 'GralFpFormaPago', 'CliSubcategoriaGralFpFormaPago')" title="Editar CliSubcategoriaGralFpFormaPago"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('CLI_SUBCATEGORIA_ALTA')){ ?>	
        <a class='boton' href='cli_subcategoria_alta.php?id=<?php echo $cli_subcategoria_relacionado->getId() ?>&hash=<?php echo $cli_subcategoria_relacionado->getHash() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($cli_subcategoria_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($cli_subcategoria_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($cli_subcategoria_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $cli_subcategoria_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($cli_subcategoria_gral_fp_forma_pago_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

