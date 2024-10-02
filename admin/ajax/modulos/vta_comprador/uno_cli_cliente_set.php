<?php
$sel = '';
$css_sel = '';
$cli_cliente_vta_comprador_id = '';
if(in_array($cli_cliente_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'vta_comprador_id', 'valor' => $o_padre->getId()),
        array('campo' => 'cli_cliente_id', 'valor' => $cli_cliente_relacionado->getId())
    );
    $cli_cliente_vta_comprador = CliClienteVtaComprador::getOxArray($array);
    $cli_cliente_vta_comprador_id = $cli_cliente_vta_comprador->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('VTA_COMPRADOR_ALTA_RELACION_CLI_CLIENTE_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_cli_cliente_id_<?php echo $cli_cliente_relacionado->getId() ?>' name='chk_cli_cliente[<?php echo $cli_cliente_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $cli_cliente_relacionado->getId() ?>' relacion_id='<?php echo $cli_cliente_vta_comprador_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('VTA_COMPRADOR_ALTA_RELACION_CLI_CLIENTE_ACCIONES_EDITAR')){ ?>	
        <?php if($cli_cliente_vta_comprador_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/cli_cliente_vta_comprador/cli_cliente_vta_comprador_alta.php?id=<?php Gral::_echo($cli_cliente_vta_comprador_id) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($cli_cliente_relacionado->getId()) ?>, 'cli_cliente', 'vta_comprador', <?php Gral::_echo($o_padre->getId()) ?>, 'VtaComprador', 'CliClienteVtaComprador')" title="Editar CliClienteVtaComprador"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA')){ ?>	
        <a class='boton' href='cli_cliente_alta.php?id=<?php echo $cli_cliente_relacionado->getId() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($cli_cliente_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($cli_cliente_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($cli_cliente_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $cli_cliente_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($cli_cliente_vta_comprador_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

