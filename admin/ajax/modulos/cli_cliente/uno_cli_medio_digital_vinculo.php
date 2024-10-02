
    <div class='list'>
	
	<label class='descripcion'><strong><?php Gral::_echo($cli_medio_digital->getDescripcion()) ?></strong></label>
	
	<div class='link'>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA_VINCULO_CLI_MEDIO_DIGITAL_ACCIONES_EDITAR')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/cli_medio_digital/cli_medio_digital_alta.php?id=<?php Gral::_echo($cli_medio_digital->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshVinculoUno(<?php Gral::_echo($cli_medio_digital->getId()) ?>, 'cli_cliente', 'cli_medio_digital', <?php Gral::_echo($o_padre->getId()) ?>)" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliMedioDigital') ?>">
                <img src='imgs/btn_modi.gif' width='20' border='0' />
            </div>
            <?php } ?>

            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA_VINCULO_CLI_MEDIO_DIGITAL_ACCIONES_ESTADO')){ ?>
            <div class='boton estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
                <img src='imgs/btn_estado_<?php Gral::_echo($cli_medio_digital->getEstado())  ?>.gif' width='18' border='0' />
            </div>
            <?php } ?>

	</div>
		
        <div class='segunda'>
        
		<label class='light'><?php Lang::_lang('CliTipoMedioDigital') ?>:</label> <label class='dato'><?php Gral::_echo($cli_medio_digital->getCliTipoMedioDigital()->getDescripcion()) ?></label><br />
        
        </div>
	
    </div>
<script>
setInit();
</script>

