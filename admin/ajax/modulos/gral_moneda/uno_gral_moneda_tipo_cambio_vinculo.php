
    <div class='list'>
	
	<label class='descripcion'><strong><?php Gral::_echo($gral_moneda_tipo_cambio->getDescripcion()) ?></strong></label>
	
	<div class='link'>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_MONEDA_ALTA_VINCULO_GRAL_MONEDA_TIPO_CAMBIO_ACCIONES_EDITAR')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/gral_moneda_tipo_cambio/gral_moneda_tipo_cambio_alta.php?id=<?php Gral::_echo($gral_moneda_tipo_cambio->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshVinculoUno(<?php Gral::_echo($gral_moneda_tipo_cambio->getId()) ?>, 'gral_moneda', 'gral_moneda_tipo_cambio', <?php Gral::_echo($o_padre->getId()) ?>)" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralMonedaTipoCambio') ?>">
                <img src='imgs/btn_modi.gif' width='20' border='0' />
            </div>
            <?php } ?>

            <?php if(UsCredencial::getEsAcreditado('GRAL_MONEDA_ALTA_VINCULO_GRAL_MONEDA_TIPO_CAMBIO_ACCIONES_ESTADO')){ ?>
            <div class='boton estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
                <img src='imgs/btn_estado_<?php Gral::_echo($gral_moneda_tipo_cambio->getEstado())  ?>.gif' width='18' border='0' />
            </div>
            <?php } ?>

	</div>
		
        <div class='segunda'>
        
		<label class='light'><?php Lang::_lang('Fecha') ?>:</label> <label class='dato'><?php Gral::_echo(Gral::getFechaToWeb($gral_moneda_tipo_cambio->getFecha())) ?></label><br />
        
		<label class='light'><?php Lang::_lang('GralMoneda') ?>:</label> <label class='dato'><?php Gral::_echo($gral_moneda_tipo_cambio->getGralMoneda()->getDescripcion()) ?></label><br />
        
		<label class='light'><?php Lang::_lang('Moneda Comparada') ?>:</label> <label class='dato'><?php Gral::_echo(GralMoneda::getOxId($gral_moneda_tipo_cambio->getGralMonedaComparada())->getDescripcion()) ?></label><br />
        
		<label class='light'><?php Lang::_lang('Tipo Cambio') ?>:</label> <label class='dato'><?php Gral::_echo($gral_moneda_tipo_cambio->getTipoCambio()) ?></label><br />
        
		<label class='light'><?php Lang::_lang('Coeficiente Ajuste') ?>:</label> <label class='dato'><?php Gral::_echo($gral_moneda_tipo_cambio->getCoeficienteAjuste()) ?></label><br />
        
		<label class='light'><?php Lang::_lang('Tipo Cambio Real') ?>:</label> <label class='dato'><?php Gral::_echo($gral_moneda_tipo_cambio->getTipoCambioReal()) ?></label><br />
        
		<label class='light'><?php Lang::_lang('Obs') ?>:</label> <label class='dato'><?php Gral::_echo($gral_moneda_tipo_cambio->getObservacion()) ?></label><br />
        
        </div>
	
    </div>
<script>
setInit();
</script>

