
    <div class='list'>
	
	<label class='descripcion'><strong><?php Gral::_echo($per_mov_planificacion_tramo->getDescripcion()) ?></strong></label>
	
	<div class='link'>
            
            <?php if(UsCredencial::getEsAcreditado('PER_MOV_PLANIFICACION_ALTA_VINCULO_PER_MOV_PLANIFICACION_TRAMO_ACCIONES_EDITAR')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/per_mov_planificacion_tramo/per_mov_planificacion_tramo_alta.php?id=<?php Gral::_echo($per_mov_planificacion_tramo->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshVinculoUno(<?php Gral::_echo($per_mov_planificacion_tramo->getId()) ?>, 'per_mov_planificacion', 'per_mov_planificacion_tramo', <?php Gral::_echo($o_padre->getId()) ?>)" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PerMovPlanificacionTramo') ?>">
                <img src='imgs/btn_modi.gif' width='20' border='0' />
            </div>
            <?php } ?>

            <?php if(UsCredencial::getEsAcreditado('PER_MOV_PLANIFICACION_ALTA_VINCULO_PER_MOV_PLANIFICACION_TRAMO_ACCIONES_ESTADO')){ ?>
            <div class='boton estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
                <img src='imgs/btn_estado_<?php Gral::_echo($per_mov_planificacion_tramo->getEstado())  ?>.gif' width='18' border='0' />
            </div>
            <?php } ?>

	</div>
		
        <div class='segunda'>
        
		<label class='light'><?php Lang::_lang('Jornada Tramo') ?>:</label> <label class='dato'><?php Gral::_echo($per_mov_planificacion_tramo->getPlnJornadaTramo()->getDescripcion()) ?></label><br />
        
		<label class='light'><?php Lang::_lang('Tramo Desde') ?>:</label> <label class='dato'><?php Gral::_echo($per_mov_planificacion_tramo->getTramoDesde()) ?></label><br />
        
		<label class='light'><?php Lang::_lang('Tramo Hasta') ?>:</label> <label class='dato'><?php Gral::_echo($per_mov_planificacion_tramo->getTramoHasta()) ?></label><br />
        
		<label class='light'><?php Lang::_lang('Horas Tramo') ?>:</label> <label class='dato'><?php Gral::_echo($per_mov_planificacion_tramo->getHorasTramo()) ?></label><br />
        
		<label class='light'><?php Lang::_lang('Codigo') ?>:</label> <label class='dato'><?php Gral::_echo($per_mov_planificacion_tramo->getCodigo()) ?></label><br />
        
        </div>
	
    </div>
<script>
setInit();
</script>

