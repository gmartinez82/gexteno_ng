
    <div class='list'>
	
	<label class='descripcion'><strong><?php Gral::_echo($ctrl_equipo_estado->getDescripcion()) ?></strong></label>
	
	<div class='link'>
            
            <?php if(UsCredencial::getEsAcreditado('CTRL_EQUIPO_ALTA_VINCULO_CTRL_EQUIPO_ESTADO_ACCIONES_EDITAR')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/ctrl_equipo_estado/ctrl_equipo_estado_alta.php?id=<?php Gral::_echo($ctrl_equipo_estado->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshVinculoUno(<?php Gral::_echo($ctrl_equipo_estado->getId()) ?>, 'ctrl_equipo', 'ctrl_equipo_estado', <?php Gral::_echo($o_padre->getId()) ?>)" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CtrlEquipoEstado') ?>">
                <img src='imgs/btn_modi.gif' width='20' border='0' />
            </div>
            <?php } ?>

            <?php if(UsCredencial::getEsAcreditado('CTRL_EQUIPO_ALTA_VINCULO_CTRL_EQUIPO_ESTADO_ACCIONES_ESTADO')){ ?>
            <div class='boton estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
                <img src='imgs/btn_estado_<?php Gral::_echo($ctrl_equipo_estado->getEstado())  ?>.gif' width='18' border='0' />
            </div>
            <?php } ?>

	</div>
		
        <div class='segunda'>
        
		<label class='light'><?php Lang::_lang('Inicial') ?>:</label> <label class='dato'><?php Gral::_echo(GralSiNo::getOxId($ctrl_equipo_estado->getInicial())->getDescripcion()) ?></label><br />
        
		<label class='light'><?php Lang::_lang('Actual') ?>:</label> <label class='dato'><?php Gral::_echo(GralSiNo::getOxId($ctrl_equipo_estado->getActual())->getDescripcion()) ?></label><br />
        
		<label class='light'><?php Lang::_lang('Creado') ?>:</label> <label class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($ctrl_equipo_estado->getCreado())) ?></label><br />
        
        </div>
	
    </div>
<script>
setInit();
</script>

