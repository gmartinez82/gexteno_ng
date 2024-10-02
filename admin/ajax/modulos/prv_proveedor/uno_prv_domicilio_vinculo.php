
    <div class='list'>
	
	<label class='descripcion'><strong><?php Gral::_echo($prv_domicilio->getDescripcion()) ?></strong></label>
	
	<div class='link'>
            
            <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_ALTA_VINCULO_PRV_DOMICILIO_ACCIONES_EDITAR')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/prv_domicilio/prv_domicilio_alta.php?id=<?php Gral::_echo($prv_domicilio->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshVinculoUno(<?php Gral::_echo($prv_domicilio->getId()) ?>, 'prv_proveedor', 'prv_domicilio', <?php Gral::_echo($o_padre->getId()) ?>)" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrvDomicilio') ?>">
                <img src='imgs/btn_modi.gif' width='20' border='0' />
            </div>
            <?php } ?>

            <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_ALTA_VINCULO_PRV_DOMICILIO_ACCIONES_ESTADO')){ ?>
            <div class='boton estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
                <img src='imgs/btn_estado_<?php Gral::_echo($prv_domicilio->getEstado())  ?>.gif' width='18' border='0' />
            </div>
            <?php } ?>

	</div>
		
        <div class='segunda'>
        
		<label class='light'><?php Lang::_lang('Obs') ?>:</label> <label class='dato'><?php Gral::_echo($prv_domicilio->getObservacion()) ?></label><br />
        
        </div>
	
    </div>
<script>
setInit();
</script>

