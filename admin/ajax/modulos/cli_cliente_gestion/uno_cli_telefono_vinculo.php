
    <div class='list'>
	
	<label class='descripcion'><strong><?php Gral::_echo($cli_telefono->getDescripcion()) ?></strong></label>
	
	<div class='link'>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA_VINCULO_CLI_TELEFONO_ACCIONES_EDITAR')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/cli_telefono/cli_telefono_alta.php?id=<?php Gral::_echo($cli_telefono->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshVinculoUno(<?php Gral::_echo($cli_telefono->getId()) ?>, 'cli_cliente', 'cli_telefono', <?php Gral::_echo($o_padre->getId()) ?>)" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliTelefono') ?>">
                <img src='imgs/btn_modi.gif' width='20' border='0' />
            </div>
            <?php } ?>

            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA_VINCULO_CLI_TELEFONO_ACCIONES_ESTADO')){ ?>
            <div class='boton estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
                <img src='imgs/btn_estado_<?php Gral::_echo($cli_telefono->getEstado())  ?>.gif' width='18' border='0' />
            </div>
            <?php } ?>

	</div>
		
        <div class='segunda'>
        
		<label class='light'><?php Lang::_lang('CliTelefonoTipo') ?>:</label> <label class='dato'><?php Gral::_echo($cli_telefono->getCliTelefonoTipo()->getDescripcion()) ?></label><br />
        
		<label class='light'><?php Lang::_lang('GeoPais') ?>:</label> <label class='dato'><?php Gral::_echo($cli_telefono->getGeoPais()->getDescripcion()) ?></label><br />
        
		<label class='light'><?php Lang::_lang('Cod Area') ?>:</label> <label class='dato'><?php Gral::_echo($cli_telefono->getCodigo()) ?></label><br />
        
		<label class='light'><?php Lang::_lang('Telefono') ?>:</label> <label class='dato'><?php Gral::_echo($cli_telefono->getTelefono()) ?></label><br />
        
		<label class='light'><?php Lang::_lang('Obs') ?>:</label> <label class='dato'><?php Gral::_echo($cli_telefono->getObservacion()) ?></label><br />
        
        </div>
	
    </div>
<script>
setInit();
</script>

