
    <div class='list'>
	
	<label class='descripcion'><strong><?php Gral::_echo($vta_politica_descuento_rango->getDescripcion()) ?></strong></label>
	
	<div class='link'>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_POLITICA_DESCUENTO_ALTA_VINCULO_VTA_POLITICA_DESCUENTO_RANGO_ACCIONES_EDITAR')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/vta_politica_descuento_rango/vta_politica_descuento_rango_alta.php?id=<?php Gral::_echo($vta_politica_descuento_rango->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshVinculoUno(<?php Gral::_echo($vta_politica_descuento_rango->getId()) ?>, 'vta_politica_descuento', 'vta_politica_descuento_rango', <?php Gral::_echo($o_padre->getId()) ?>)" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaPoliticaDescuentoRango') ?>">
                <img src='imgs/btn_modi.gif' width='20' border='0' />
            </div>
            <?php } ?>

            <?php if(UsCredencial::getEsAcreditado('VTA_POLITICA_DESCUENTO_ALTA_VINCULO_VTA_POLITICA_DESCUENTO_RANGO_ACCIONES_ESTADO')){ ?>
            <div class='boton estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
                <img src='imgs/btn_estado_<?php Gral::_echo($vta_politica_descuento_rango->getEstado())  ?>.gif' width='18' border='0' />
            </div>
            <?php } ?>

	</div>
		
        <div class='segunda'>
        
		<label class='light'><?php Lang::_lang('Desde') ?>:</label> <label class='dato'><?php Gral::_echo($vta_politica_descuento_rango->getCantidadDesde()) ?></label><br />
        
		<label class='light'><?php Lang::_lang('Hasta') ?>:</label> <label class='dato'><?php Gral::_echo($vta_politica_descuento_rango->getCantidadHasta()) ?></label><br />
        
		<label class='light'><?php Lang::_lang('Desc') ?>:</label> <label class='dato'><?php Gral::_echo($vta_politica_descuento_rango->getPorcentajeDescuento()) ?></label><br />
        
		<label class='light'><?php Lang::_lang('Neg') ?>:</label> <label class='dato'><?php Gral::_echo($vta_politica_descuento_rango->getPorcentajeNegociacion()) ?></label><br />
        
        </div>
	
    </div>
<script>
setInit();
</script>

