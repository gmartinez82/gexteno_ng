
    <div class='list'>
	
	<label class='descripcion'><strong><?php Gral::_echo($ins_insumo_bulto->getDescripcion()) ?></strong></label>
	
	<div class='link'>
            
            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ALTA_VINCULO_INS_INSUMO_BULTO_ACCIONES_EDITAR')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/ins_insumo_bulto/ins_insumo_bulto_alta.php?id=<?php Gral::_echo($ins_insumo_bulto->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshVinculoUno(<?php Gral::_echo($ins_insumo_bulto->getId()) ?>, 'ins_insumo', 'ins_insumo_bulto', <?php Gral::_echo($o_padre->getId()) ?>)" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsInsumoBulto') ?>">
                <img src='imgs/btn_modi.gif' width='20' border='0' />
            </div>
            <?php } ?>

            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ALTA_VINCULO_INS_INSUMO_BULTO_ACCIONES_ESTADO')){ ?>
            <div class='boton estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
                <img src='imgs/btn_estado_<?php Gral::_echo($ins_insumo_bulto->getEstado())  ?>.gif' width='18' border='0' />
            </div>
            <?php } ?>

	</div>
		
        <div class='segunda'>
        
		<label class='light'><?php Lang::_lang('Descripcion') ?>:</label> <label class='dato'><?php Gral::_echo($ins_insumo_bulto->getDescripcion()) ?></label><br />
        
		<label class='light'><?php Lang::_lang('Cantidad') ?>:</label> <label class='dato'><?php Gral::_echo($ins_insumo_bulto->getCantidad()) ?></label><br />
        
        </div>
	
    </div>
<script>
setInit();
</script>

