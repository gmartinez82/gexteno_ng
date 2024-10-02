<?php
$sel = '';
$css_sel = '';
$eku_param_tipo_operacion_cli_tipo_cliente_id = '';
if(in_array($cli_tipo_cliente_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'eku_param_tipo_operacion_id', 'valor' => $o_padre->getId()),
        array('campo' => 'cli_tipo_cliente_id', 'valor' => $cli_tipo_cliente_relacionado->getId())
    );
    $eku_param_tipo_operacion_cli_tipo_cliente = EkuParamTipoOperacionCliTipoCliente::getOxArray($array);
    $eku_param_tipo_operacion_cli_tipo_cliente_id = $eku_param_tipo_operacion_cli_tipo_cliente->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_OPERACION_ALTA_RELACION_CLI_TIPO_CLIENTE_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_cli_tipo_cliente_id_<?php echo $cli_tipo_cliente_relacionado->getId() ?>' name='chk_cli_tipo_cliente[<?php echo $cli_tipo_cliente_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $cli_tipo_cliente_relacionado->getId() ?>' relacion_id='<?php echo $eku_param_tipo_operacion_cli_tipo_cliente_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_OPERACION_ALTA_RELACION_CLI_TIPO_CLIENTE_ACCIONES_EDITAR')){ ?>	
        <?php if($eku_param_tipo_operacion_cli_tipo_cliente_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/eku_param_tipo_operacion_cli_tipo_cliente/eku_param_tipo_operacion_cli_tipo_cliente_alta.php?id=<?php Gral::_echo($eku_param_tipo_operacion_cli_tipo_cliente_id) ?>" contenedor="div_modal" ancho="950" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($cli_tipo_cliente_relacionado->getId()) ?>, 'cli_tipo_cliente', 'eku_param_tipo_operacion', <?php Gral::_echo($o_padre->getId()) ?>, 'EkuParamTipoOperacion', 'EkuParamTipoOperacionCliTipoCliente')" title="Editar EkuParamTipoOperacionCliTipoCliente"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('CLI_TIPO_CLIENTE_ALTA')){ ?>	
        <a class='boton' href='cli_tipo_cliente_alta.php?id=<?php echo $cli_tipo_cliente_relacionado->getId() ?>&hash=<?php echo $cli_tipo_cliente_relacionado->getHash() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($cli_tipo_cliente_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($cli_tipo_cliente_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($cli_tipo_cliente_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $cli_tipo_cliente_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($eku_param_tipo_operacion_cli_tipo_cliente_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

