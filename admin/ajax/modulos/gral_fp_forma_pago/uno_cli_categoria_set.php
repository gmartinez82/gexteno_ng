<?php
$sel = '';
$css_sel = '';
$cli_categoria_gral_fp_forma_pago_id = '';
if(in_array($cli_categoria_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'gral_fp_forma_pago_id', 'valor' => $o_padre->getId()),
        array('campo' => 'cli_categoria_id', 'valor' => $cli_categoria_relacionado->getId())
    );
    $cli_categoria_gral_fp_forma_pago = CliCategoriaGralFpFormaPago::getOxArray($array);
    $cli_categoria_gral_fp_forma_pago_id = $cli_categoria_gral_fp_forma_pago->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('GRAL_FP_FORMA_PAGO_ALTA_RELACION_CLI_CATEGORIA_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_cli_categoria_id_<?php echo $cli_categoria_relacionado->getId() ?>' name='chk_cli_categoria[<?php echo $cli_categoria_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $cli_categoria_relacionado->getId() ?>' relacion_id='<?php echo $cli_categoria_gral_fp_forma_pago_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('GRAL_FP_FORMA_PAGO_ALTA_RELACION_CLI_CATEGORIA_ACCIONES_EDITAR')){ ?>	
        <?php if($cli_categoria_gral_fp_forma_pago_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/cli_categoria_gral_fp_forma_pago/cli_categoria_gral_fp_forma_pago_alta.php?id=<?php Gral::_echo($cli_categoria_gral_fp_forma_pago_id) ?>" contenedor="div_modal" ancho="950" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($cli_categoria_relacionado->getId()) ?>, 'cli_categoria', 'gral_fp_forma_pago', <?php Gral::_echo($o_padre->getId()) ?>, 'GralFpFormaPago', 'CliCategoriaGralFpFormaPago')" title="Editar CliCategoriaGralFpFormaPago"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('CLI_CATEGORIA_ALTA')){ ?>	
        <a class='boton' href='cli_categoria_alta.php?id=<?php echo $cli_categoria_relacionado->getId() ?>&hash=<?php echo $cli_categoria_relacionado->getHash() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($cli_categoria_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($cli_categoria_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($cli_categoria_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $cli_categoria_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($cli_categoria_gral_fp_forma_pago_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

