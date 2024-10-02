
    <div class='list'>
	
	<label class='descripcion'><strong><?php Gral::_echo($prv_convenio_descuento->getDescripcion()) ?></strong></label>
	
	<div class='link'>
            
            <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_ALTA_VINCULO_PRV_CONVENIO_DESCUENTO_ACCIONES_EDITAR')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/prv_convenio_descuento/prv_convenio_descuento_alta.php?id=<?php Gral::_echo($prv_convenio_descuento->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshVinculoUno(<?php Gral::_echo($prv_convenio_descuento->getId()) ?>, 'prv_proveedor', 'prv_convenio_descuento', <?php Gral::_echo($o_padre->getId()) ?>)" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrvConvenioDescuento') ?>">
                <img src='imgs/btn_modi.gif' width='20' border='0' />
            </div>
            <?php } ?>

            <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_ALTA_VINCULO_PRV_CONVENIO_DESCUENTO_ACCIONES_ESTADO')){ ?>
            <div class='boton estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
                <img src='imgs/btn_estado_<?php Gral::_echo($prv_convenio_descuento->getEstado())  ?>.gif' width='18' border='0' />
            </div>
            <?php } ?>

	</div>
		
        <div class='segunda'>
        
		<label class='light'><?php Lang::_lang('Porc Desc') ?>:</label> <label class='dato'><?php Gral::_echo($prv_convenio_descuento->getPorcentajeDescuento()) ?></label><br />
        
        </div>
	
    </div>
<script>
setInit();
</script>

