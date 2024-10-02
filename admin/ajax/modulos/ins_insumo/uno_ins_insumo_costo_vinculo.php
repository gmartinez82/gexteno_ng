
    <div class='list'>
	
	<label class='descripcion'><strong><?php Gral::_echo($ins_insumo_costo->getDescripcion()) ?></strong></label>
	
	<div class='link'>
            
            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ALTA_VINCULO_INS_INSUMO_COSTO_ACCIONES_EDITAR')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/ins_insumo_costo/ins_insumo_costo_alta.php?id=<?php Gral::_echo($ins_insumo_costo->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshVinculoUno(<?php Gral::_echo($ins_insumo_costo->getId()) ?>, 'ins_insumo', 'ins_insumo_costo', <?php Gral::_echo($o_padre->getId()) ?>)" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsInsumoCosto') ?>">
                <img src='imgs/btn_modi.gif' width='20' border='0' />
            </div>
            <?php } ?>

            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ALTA_VINCULO_INS_INSUMO_COSTO_ACCIONES_ESTADO')){ ?>
            <div class='boton estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
                <img src='imgs/btn_estado_<?php Gral::_echo($ins_insumo_costo->getEstado())  ?>.gif' width='18' border='0' />
            </div>
            <?php } ?>

	</div>
		
        <div class='segunda'>
        
		<label class='light'><?php Lang::_lang('Fecha') ?>:</label> <label class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_costo->getFecha())) ?></label><br />
        
		<label class='light'><?php Lang::_lang('Costo') ?>:</label> <label class='dato'><?php Gral::_echoImp($ins_insumo_costo->getCosto()) ?></label><br />
        
		<label class='light'><?php Lang::_lang('Observaciones') ?>:</label> <label class='dato'><?php Gral::_echo($ins_insumo_costo->getObservacion()) ?></label><br />
        
        </div>
	
    </div>
<script>
setInit();
</script>

