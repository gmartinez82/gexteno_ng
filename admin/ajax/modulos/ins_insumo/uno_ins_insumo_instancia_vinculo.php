
<div class='list'>
	
	<label class='descripcion'><strong><?php Gral::_echo($ins_insumo_instancia->getDescripcion()) ?></strong></label>
	
	<div class='link'>
            
            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ALTA_VINCULO_INS_INSUMO_INSTANCIA_ACCIONES_EDITAR')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/ins_insumo_instancia/ins_insumo_instancia_alta.php?id=<?php Gral::_echo($ins_insumo_instancia->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshVinculoUno(<?php Gral::_echo($ins_insumo_instancia->getId()) ?>, 'ins_insumo', 'ins_insumo_instancia', <?php Gral::_echo($o_padre->getId()) ?>)" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsInsumoInstancia') ?>">
                <img src='imgs/btn_modi.gif' width='20' border='0' />
            </div>
            <?php } ?>

            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ALTA_VINCULO_INS_INSUMO_INSTANCIA_ACCIONES_ESTADO')){ ?>
            <div class='boton estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
                <img src='imgs/btn_estado_<?php Gral::_echo($ins_insumo_instancia->getEstado())  ?>.gif' width='18' border='0' />
            </div>
            <?php } ?>

	</div>
		
    <div class='segunda'>
        
		<label class='light'><?php Lang::_lang('Descripcion') ?>:</label> <label class='dato'><?php Gral::_echo($ins_insumo_instancia->getDescripcion()) ?></label><br />
        
		<label class='light'><?php Lang::_lang('Vida Util') ?>:</label> <label class='dato'><?php Gral::_echo($ins_insumo_instancia->getVidaUtil()) ?></label><br />
        
		<label class='light'><?php Lang::_lang('Margen') ?>:</label> <label class='dato'><?php Gral::_echo($ins_insumo_instancia->getMargen()) ?></label><br />
        
		<label class='light'><?php Lang::_lang('Orden') ?>:</label> <label class='dato'><?php Gral::_echo($ins_insumo_instancia->getOrden()) ?></label><br />
        
    </div>
	
</div>
<script>
setInit();
</script>

