
<div class='list'>
	
	<label class='descripcion'><strong><?php Gral::_echo($ins_insumo_destino_transformacion->getDescripcion()) ?></strong></label>
	
	<div class='link'>
            
            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ALTA_VINCULO_INS_INSUMO_DESTINO_TRANSFORMACION_ACCIONES_EDITAR')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/ins_insumo_destino_transformacion/ins_insumo_destino_transformacion_alta.php?id=<?php Gral::_echo($ins_insumo_destino_transformacion->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshVinculoUno(<?php Gral::_echo($ins_insumo_destino_transformacion->getId()) ?>, 'ins_insumo', 'ins_insumo_destino_transformacion', <?php Gral::_echo($o_padre->getId()) ?>)" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsInsumoDestinoTransformacion') ?>">
                <img src='imgs/btn_modi.gif' width='20' border='0' />
            </div>
            <?php } ?>

            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ALTA_VINCULO_INS_INSUMO_DESTINO_TRANSFORMACION_ACCIONES_ESTADO')){ ?>
            <div class='boton estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
                <img src='imgs/btn_estado_<?php Gral::_echo($ins_insumo_destino_transformacion->getEstado())  ?>.gif' width='18' border='0' />
            </div>
            <?php } ?>

	</div>
		
    <div class='segunda'>
        
		<label class='light'><?php Lang::_lang('Obs') ?>:</label> <label class='dato'><?php Gral::_echo($ins_insumo_destino_transformacion->getObservacion()) ?></label><br />
        
    </div>
	
</div>
<script>
setInit();
</script>

