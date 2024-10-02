
    <div class='list'>
	
	<label class='descripcion'><strong><?php Gral::_echo($pln_turno_novedad->getDescripcion()) ?></strong></label>
	
	<div class='link'>
            
            <?php if(UsCredencial::getEsAcreditado('PLN_TURNO_ALTA_VINCULO_PLN_TURNO_NOVEDAD_ACCIONES_EDITAR')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/pln_turno_novedad/pln_turno_novedad_alta.php?id=<?php Gral::_echo($pln_turno_novedad->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshVinculoUno(<?php Gral::_echo($pln_turno_novedad->getId()) ?>, 'pln_turno', 'pln_turno_novedad', <?php Gral::_echo($o_padre->getId()) ?>)" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PlnTurnoNovedad') ?>">
                <img src='imgs/btn_modi.gif' width='20' border='0' />
            </div>
            <?php } ?>

            <?php if(UsCredencial::getEsAcreditado('PLN_TURNO_ALTA_VINCULO_PLN_TURNO_NOVEDAD_ACCIONES_ESTADO')){ ?>
            <div class='boton estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
                <img src='imgs/btn_estado_<?php Gral::_echo($pln_turno_novedad->getEstado())  ?>.gif' width='18' border='0' />
            </div>
            <?php } ?>

	</div>
		
        <div class='segunda'>
        
		<label class='light'><?php Lang::_lang('Novedad') ?>:</label> <label class='dato'><?php Gral::_echo($pln_turno_novedad->getGralNovedad()->getDescripcion()) ?></label><br />
        
		<label class='light'><?php Lang::_lang('Jornada') ?>:</label> <label class='dato'><?php Gral::_echo($pln_turno_novedad->getPlnJornada()->getDescripcion()) ?></label><br />
        
		<label class='light'><?php Lang::_lang('Horas') ?>:</label> <label class='dato'><?php Gral::_echo($pln_turno_novedad->getHoras()) ?></label><br />
        
		<label class='light'><?php Lang::_lang('Codigo') ?>:</label> <label class='dato'><?php Gral::_echo($pln_turno_novedad->getCodigo()) ?></label><br />
        
        </div>
	
    </div>
<script>
setInit();
</script>

