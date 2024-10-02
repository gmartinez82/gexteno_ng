
    <div class='list'>
	
	<label class='descripcion'><strong><?php Gral::_echo($prv_descuento_comercial->getDescripcion()) ?></strong></label>
	
	<div class='link'>
            
            <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_ALTA_VINCULO_PRV_DESCUENTO_COMERCIAL_ACCIONES_EDITAR')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/prv_descuento_comercial/prv_descuento_comercial_alta.php?id=<?php Gral::_echo($prv_descuento_comercial->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshVinculoUno(<?php Gral::_echo($prv_descuento_comercial->getId()) ?>, 'prv_proveedor', 'prv_descuento_comercial', <?php Gral::_echo($o_padre->getId()) ?>)" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrvDescuentoComercial') ?>">
                <img src='imgs/btn_modi.gif' width='20' border='0' />
            </div>
            <?php } ?>

            <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_ALTA_VINCULO_PRV_DESCUENTO_COMERCIAL_ACCIONES_ESTADO')){ ?>
            <div class='boton estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
                <img src='imgs/btn_estado_<?php Gral::_echo($prv_descuento_comercial->getEstado())  ?>.gif' width='18' border='0' />
            </div>
            <?php } ?>

	</div>
		
        <div class='segunda'>
        
		<label class='light'><?php Lang::_lang('Porc Desc') ?>:</label> <label class='dato'><?php Gral::_echo($prv_descuento_comercial->getPorcentajeDescuento()) ?></label><br />
        
        </div>
	
    </div>
<script>
setInit();
</script>

