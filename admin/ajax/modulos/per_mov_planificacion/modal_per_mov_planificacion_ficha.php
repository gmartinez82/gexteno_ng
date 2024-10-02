<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$per_mov_planificacion = PerMovPlanificacion::getOxId($id);
//Gral::prr($per_mov_planificacion);
?>

<div class="tabs ficha-per_mov_planificacion" identificador="<?php echo $per_mov_planificacion->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par per_mov_planificacion id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_mov_planificacion->getId()) ?>
            </div>
        </div>

	
        <div class="par per_mov_planificacion descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_mov_planificacion->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par per_mov_planificacion per_persona_id">
            <div class="label"><?php Lang::_lang('PerPersona') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_mov_planificacion->getPerPersona()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par per_mov_planificacion gral_novedad_id">
            <div class="label"><?php Lang::_lang('GralNovedad') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_mov_planificacion->getGralNovedad()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par per_mov_planificacion pln_jornada_id">
            <div class="label"><?php Lang::_lang('PlnJornada') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_mov_planificacion->getPlnJornada()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par per_mov_planificacion pln_turno_novedad_id">
            <div class="label"><?php Lang::_lang('PlnTurnoNovedad') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_mov_planificacion->getPlnTurnoNovedad()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par per_mov_planificacion gral_novedad_motivo_id">
            <div class="label"><?php Lang::_lang('GralNovedadMotivo') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_mov_planificacion->getGralNovedadMotivo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par per_mov_planificacion gral_novedad_motivo_extendido_id">
            <div class="label"><?php Lang::_lang('GralNovedadMotivoExtendido') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_mov_planificacion->getGralNovedadMotivoExtendido()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par per_mov_planificacion fecha">
            <div class="label"><?php Lang::_lang('Fecha') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($per_mov_planificacion->getFecha())) ?>
            </div>
        </div>
		
        <div class="par per_mov_planificacion horas">
            <div class="label"><?php Lang::_lang('Horas') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_mov_planificacion->getHoras()) ?>
            </div>
        </div>
		
        <div class="par per_mov_planificacion inicial">
            <div class="label"><?php Lang::_lang('Inicial') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($per_mov_planificacion->getInicial())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par per_mov_planificacion actual">
            <div class="label"><?php Lang::_lang('Actual') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($per_mov_planificacion->getActual())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par per_mov_planificacion jornada_editada">
            <div class="label"><?php Lang::_lang('Jornada Editada') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_mov_planificacion->getJornadaEditada()) ?>
            </div>
        </div>
		
        <div class="par per_mov_planificacion gral_dia_id">
            <div class="label"><?php Lang::_lang('Dia') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_mov_planificacion->getGralDiaId()) ?>
            </div>
        </div>
		
        <div class="par per_mov_planificacion codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_mov_planificacion->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par per_mov_planificacion observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_mov_planificacion->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par per_mov_planificacion confirmado">
            <div class="label"><?php Lang::_lang('Confirmado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($per_mov_planificacion->getConfirmado())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par per_mov_planificacion confirmado_observacion">
            <div class="label"><?php Lang::_lang('Conf Obs') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_mov_planificacion->getConfirmadoObservacion()) ?>
            </div>
        </div>
		
        <div class="par per_mov_planificacion orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_mov_planificacion->getOrden()) ?>
            </div>
        </div>
		
        <div class="par per_mov_planificacion estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($per_mov_planificacion->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

