
    <div class='list'>
	
	<label class='descripcion'><strong><?php Gral::_echo($vta_punto_venta_actual->getDescripcion()) ?></strong></label>
	
	<div class='link'>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_ALTA_VINCULO_VTA_PUNTO_VENTA_ACTUAL_ACCIONES_EDITAR')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/vta_punto_venta_actual/vta_punto_venta_actual_alta.php?id=<?php Gral::_echo($vta_punto_venta_actual->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshVinculoUno(<?php Gral::_echo($vta_punto_venta_actual->getId()) ?>, 'vta_punto_venta', 'vta_punto_venta_actual', <?php Gral::_echo($o_padre->getId()) ?>)" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaPuntoVentaActual') ?>">
                <img src='imgs/btn_modi.gif' width='20' border='0' />
            </div>
            <?php } ?>

            <?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_ALTA_VINCULO_VTA_PUNTO_VENTA_ACTUAL_ACCIONES_ESTADO')){ ?>
            <div class='boton estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
                <img src='imgs/btn_estado_<?php Gral::_echo($vta_punto_venta_actual->getEstado())  ?>.gif' width='18' border='0' />
            </div>
            <?php } ?>

	</div>
		
        <div class='segunda'>
        
		<label class='light'><?php Lang::_lang('Tipo') ?>:</label> <label class='dato'><?php Gral::_echo($vta_punto_venta_actual->getVtaTipoPuntoVenta()->getDescripcion()) ?></label><br />
        
		<label class='light'><?php Lang::_lang('Serie') ?>:</label> <label class='dato'><?php Gral::_echo($vta_punto_venta_actual->getSerie()) ?></label><br />
        
		<label class='light'><?php Lang::_lang('Actual') ?>:</label> <label class='dato'><?php Gral::_echo($vta_punto_venta_actual->getNumeroActual()) ?></label><br />
        
		<label class='light'><?php Lang::_lang('Obs') ?>:</label> <label class='dato'><?php Gral::_echo($vta_punto_venta_actual->getObservacion()) ?></label><br />
        
        </div>
	
    </div>
<script>
setInit();
</script>

