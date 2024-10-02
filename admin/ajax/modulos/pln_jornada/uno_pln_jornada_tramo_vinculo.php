
    <div class='list'>
	
	<label class='descripcion'><strong><?php Gral::_echo($pln_jornada_tramo->getDescripcion()) ?></strong></label>
	
	<div class='link'>
            
            <?php if(UsCredencial::getEsAcreditado('PLN_JORNADA_ALTA_VINCULO_PLN_JORNADA_TRAMO_ACCIONES_EDITAR')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/pln_jornada_tramo/pln_jornada_tramo_alta.php?id=<?php Gral::_echo($pln_jornada_tramo->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshVinculoUno(<?php Gral::_echo($pln_jornada_tramo->getId()) ?>, 'pln_jornada', 'pln_jornada_tramo', <?php Gral::_echo($o_padre->getId()) ?>)" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PlnJornadaTramo') ?>">
                <img src='imgs/btn_modi.gif' width='20' border='0' />
            </div>
            <?php } ?>

            <?php if(UsCredencial::getEsAcreditado('PLN_JORNADA_ALTA_VINCULO_PLN_JORNADA_TRAMO_ACCIONES_ESTADO')){ ?>
            <div class='boton estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
                <img src='imgs/btn_estado_<?php Gral::_echo($pln_jornada_tramo->getEstado())  ?>.gif' width='18' border='0' />
            </div>
            <?php } ?>

	</div>
		
        <div class='segunda'>
        
		<label class='light'><?php Lang::_lang('Tramo Desde') ?>:</label> <label class='dato'><?php Gral::_echo($pln_jornada_tramo->getTramoDesde()) ?></label><br />
        
		<label class='light'><?php Lang::_lang('Tramo Hasta') ?>:</label> <label class='dato'><?php Gral::_echo($pln_jornada_tramo->getTramoHasta()) ?></label><br />
        
		<label class='light'><?php Lang::_lang('Horas Tramo') ?>:</label> <label class='dato'><?php Gral::_echo($pln_jornada_tramo->getHorasTramo()) ?></label><br />
        
		<label class='light'><?php Lang::_lang('Orden') ?>:</label> <label class='dato'><?php Gral::_echo($pln_jornada_tramo->getOrden()) ?></label><br />
        
        </div>
	
    </div>
<script>
setInit();
</script>

