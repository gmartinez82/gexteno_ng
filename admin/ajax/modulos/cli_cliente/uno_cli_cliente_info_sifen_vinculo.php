
    <div class='list'>
	
	<label class='descripcion'><strong><?php Gral::_echo($cli_cliente_info_sifen->getDescripcion()) ?></strong></label>
	
	<div class='link'>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA_VINCULO_CLI_CLIENTE_INFO_SIFEN_ACCIONES_EDITAR')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/cli_cliente_info_sifen/cli_cliente_info_sifen_alta.php?id=<?php Gral::_echo($cli_cliente_info_sifen->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshVinculoUno(<?php Gral::_echo($cli_cliente_info_sifen->getId()) ?>, 'cli_cliente', 'cli_cliente_info_sifen', <?php Gral::_echo($o_padre->getId()) ?>)" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliClienteInfoSifen') ?>">
                <img src='imgs/btn_modi.gif' width='20' border='0' />
            </div>
            <?php } ?>

            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA_VINCULO_CLI_CLIENTE_INFO_SIFEN_ACCIONES_ESTADO')){ ?>
            <div class='boton estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
                <img src='imgs/btn_estado_<?php Gral::_echo($cli_cliente_info_sifen->getEstado())  ?>.gif' width='18' border='0' />
            </div>
            <?php } ?>

	</div>
		
        <div class='segunda'>
        
		<label class='light'><?php Lang::_lang('sifen_dcodres') ?>:</label> <label class='dato'><?php Gral::_echo($cli_cliente_info_sifen->getSifenDcodres()) ?></label><br />
        
		<label class='light'><?php Lang::_lang('sifen_dmsgres') ?>:</label> <label class='dato'><?php Gral::_echo($cli_cliente_info_sifen->getSifenDmsgres()) ?></label><br />
        
		<label class='light'><?php Lang::_lang('sifen_xcontruc_druccons') ?>:</label> <label class='dato'><?php Gral::_echo($cli_cliente_info_sifen->getSifenXcontrucDruccons()) ?></label><br />
        
		<label class='light'><?php Lang::_lang('sifen_xcontruc_drazcons') ?>:</label> <label class='dato'><?php Gral::_echo($cli_cliente_info_sifen->getSifenXcontrucDrazcons()) ?></label><br />
        
		<label class='light'><?php Lang::_lang('sifen_xcontruc_dcodestcons') ?>:</label> <label class='dato'><?php Gral::_echo($cli_cliente_info_sifen->getSifenXcontrucDcodestcons()) ?></label><br />
        
		<label class='light'><?php Lang::_lang('sifen_xcontruc_ddesestcons') ?>:</label> <label class='dato'><?php Gral::_echo($cli_cliente_info_sifen->getSifenXcontrucDdesestcons()) ?></label><br />
        
		<label class='light'><?php Lang::_lang('sifen_xcontruc_drucfactelec') ?>:</label> <label class='dato'><?php Gral::_echo($cli_cliente_info_sifen->getSifenXcontrucDrucfactelec()) ?></label><br />
        
		<label class='light'><?php Lang::_lang('Obs') ?>:</label> <label class='dato'><?php Gral::_echo($cli_cliente_info_sifen->getObservacion()) ?></label><br />
        
        </div>
	
    </div>
<script>
setInit();
</script>

