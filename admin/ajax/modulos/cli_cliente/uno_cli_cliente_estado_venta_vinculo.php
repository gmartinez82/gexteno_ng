
    <div class='list'>
	
	<label class='descripcion'><strong><?php Gral::_echo($cli_cliente_estado_venta->getDescripcion()) ?></strong></label>
	
	<div class='link'>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA_VINCULO_CLI_CLIENTE_ESTADO_VENTA_ACCIONES_EDITAR')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/cli_cliente_estado_venta/cli_cliente_estado_venta_alta.php?id=<?php Gral::_echo($cli_cliente_estado_venta->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshVinculoUno(<?php Gral::_echo($cli_cliente_estado_venta->getId()) ?>, 'cli_cliente', 'cli_cliente_estado_venta', <?php Gral::_echo($o_padre->getId()) ?>)" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliClienteEstadoVenta') ?>">
                <img src='imgs/btn_modi.gif' width='20' border='0' />
            </div>
            <?php } ?>

            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA_VINCULO_CLI_CLIENTE_ESTADO_VENTA_ACCIONES_ESTADO')){ ?>
            <div class='boton estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
                <img src='imgs/btn_estado_<?php Gral::_echo($cli_cliente_estado_venta->getEstado())  ?>.gif' width='18' border='0' />
            </div>
            <?php } ?>

	</div>
		
        <div class='segunda'>
        
		<label class='light'><?php Lang::_lang('Inicial') ?>:</label> <label class='dato'><?php Gral::_echo(GralSiNo::getOxId($cli_cliente_estado_venta->getInicial())->getDescripcion()) ?></label><br />
        
		<label class='light'><?php Lang::_lang('Actual') ?>:</label> <label class='dato'><?php Gral::_echo(GralSiNo::getOxId($cli_cliente_estado_venta->getActual())->getDescripcion()) ?></label><br />
        
		<label class='light'><?php Lang::_lang('Obs') ?>:</label> <label class='dato'><?php Gral::_echo($cli_cliente_estado_venta->getObservacion()) ?></label><br />
        
        </div>
	
    </div>
<script>
setInit();
</script>

