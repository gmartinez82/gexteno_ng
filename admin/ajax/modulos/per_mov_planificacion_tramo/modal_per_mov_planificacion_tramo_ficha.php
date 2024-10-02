<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$per_mov_planificacion_tramo = PerMovPlanificacionTramo::getOxId($id);
//Gral::prr($per_mov_planificacion_tramo);
?>

<div class="tabs ficha-per_mov_planificacion_tramo" identificador="<?php echo $per_mov_planificacion_tramo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par per_mov_planificacion_tramo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_mov_planificacion_tramo->getId()) ?>
            </div>
        </div>

	
        <div class="par per_mov_planificacion_tramo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_mov_planificacion_tramo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par per_mov_planificacion_tramo per_mov_planificacion_id">
            <div class="label"><?php Lang::_lang('PerMovPlanificacion') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_mov_planificacion_tramo->getPerMovPlanificacion()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par per_mov_planificacion_tramo pln_jornada_tramo_id">
            <div class="label"><?php Lang::_lang('PlnJornadaTramo') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_mov_planificacion_tramo->getPlnJornadaTramo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par per_mov_planificacion_tramo tramo_desde">
            <div class="label"><?php Lang::_lang('Tramo Desde') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_mov_planificacion_tramo->getTramoDesde()) ?>
            </div>
        </div>
		
        <div class="par per_mov_planificacion_tramo tramo_hasta">
            <div class="label"><?php Lang::_lang('Tramo Hasta') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_mov_planificacion_tramo->getTramoHasta()) ?>
            </div>
        </div>
		
        <div class="par per_mov_planificacion_tramo horas_tramo">
            <div class="label"><?php Lang::_lang('Horas') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_mov_planificacion_tramo->getHorasTramo()) ?>
            </div>
        </div>
		
        <div class="par per_mov_planificacion_tramo codigo">
            <div class="label"><?php Lang::_lang('Credencial') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_mov_planificacion_tramo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par per_mov_planificacion_tramo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_mov_planificacion_tramo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par per_mov_planificacion_tramo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_mov_planificacion_tramo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par per_mov_planificacion_tramo estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($per_mov_planificacion_tramo->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

