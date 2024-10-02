<?php
$sel = '';
$css_sel = '';
$cli_cliente_vta_punto_venta_id = '';
if(in_array($vta_punto_venta_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'cli_cliente_id', 'valor' => $o_padre->getId()),
        array('campo' => 'vta_punto_venta_id', 'valor' => $vta_punto_venta_relacionado->getId())
    );
    $cli_cliente_vta_punto_venta = CliClienteVtaPuntoVenta::getOxArray($array);
    $cli_cliente_vta_punto_venta_id = $cli_cliente_vta_punto_venta->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA_RELACION_VTA_PUNTO_VENTA_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_vta_punto_venta_id_<?php echo $vta_punto_venta_relacionado->getId() ?>' name='chk_vta_punto_venta[<?php echo $vta_punto_venta_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $vta_punto_venta_relacionado->getId() ?>' relacion_id='<?php echo $cli_cliente_vta_punto_venta_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA_RELACION_VTA_PUNTO_VENTA_ACCIONES_EDITAR')){ ?>	
        <?php if($cli_cliente_vta_punto_venta_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/cli_cliente_vta_punto_venta/cli_cliente_vta_punto_venta_alta.php?id=<?php Gral::_echo($cli_cliente_vta_punto_venta_id) ?>" contenedor="div_modal" ancho="950" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($vta_punto_venta_relacionado->getId()) ?>, 'vta_punto_venta', 'cli_cliente', <?php Gral::_echo($o_padre->getId()) ?>, 'CliCliente', 'CliClienteVtaPuntoVenta')" title="Editar CliClienteVtaPuntoVenta"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_ALTA')){ ?>	
        <a class='boton' href='vta_punto_venta_alta.php?id=<?php echo $vta_punto_venta_relacionado->getId() ?>&hash=<?php echo $vta_punto_venta_relacionado->getHash() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($vta_punto_venta_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($vta_punto_venta_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($vta_punto_venta_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $vta_punto_venta_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($cli_cliente_vta_punto_venta_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

