<?php
$sel = '';
$css_sel = '';
$cli_cliente_cli_rubro_id = '';
if(in_array($cli_rubro_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'cli_cliente_id', 'valor' => $o_padre->getId()),
        array('campo' => 'cli_rubro_id', 'valor' => $cli_rubro_relacionado->getId())
    );
    $cli_cliente_cli_rubro = CliClienteCliRubro::getOxArray($array);
    $cli_cliente_cli_rubro_id = $cli_cliente_cli_rubro->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA_RELACION_CLI_RUBRO_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_cli_rubro_id_<?php echo $cli_rubro_relacionado->getId() ?>' name='chk_cli_rubro[<?php echo $cli_rubro_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $cli_rubro_relacionado->getId() ?>' relacion_id='<?php echo $cli_cliente_cli_rubro_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA_RELACION_CLI_RUBRO_ACCIONES_EDITAR')){ ?>	
        <?php if($cli_cliente_cli_rubro_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/cli_cliente_cli_rubro/cli_cliente_cli_rubro_alta.php?id=<?php Gral::_echo($cli_cliente_cli_rubro_id) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($cli_rubro_relacionado->getId()) ?>, 'cli_rubro', 'cli_cliente', <?php Gral::_echo($o_padre->getId()) ?>, 'CliCliente', 'CliClienteCliRubro')" title="Editar CliClienteCliRubro"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('CLI_RUBRO_ALTA')){ ?>	
        <a class='boton' href='cli_rubro_alta.php?id=<?php echo $cli_rubro_relacionado->getId() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($cli_rubro_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($cli_rubro_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($cli_rubro_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $cli_rubro_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($cli_cliente_cli_rubro_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

