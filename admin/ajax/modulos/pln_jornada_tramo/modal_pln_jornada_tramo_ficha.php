<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pln_jornada_tramo = PlnJornadaTramo::getOxId($id);
//Gral::prr($pln_jornada_tramo);
?>

<div class="tabs ficha-pln_jornada_tramo" identificador="<?php echo $pln_jornada_tramo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pln_jornada_tramo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pln_jornada_tramo->getId()) ?>
            </div>
        </div>

	
        <div class="par pln_jornada_tramo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pln_jornada_tramo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pln_jornada_tramo pln_jornada_id">
            <div class="label"><?php Lang::_lang('PlnJornada') ?></div>
            <div class="dato">
                <?php Gral::_echo($pln_jornada_tramo->getPlnJornada()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pln_jornada_tramo tramo_desde">
            <div class="label"><?php Lang::_lang('Tramo Desde') ?></div>
            <div class="dato">
                <?php Gral::_echo($pln_jornada_tramo->getTramoDesde()) ?>
            </div>
        </div>
		
        <div class="par pln_jornada_tramo tramo_hasta">
            <div class="label"><?php Lang::_lang('Tramo Hasta') ?></div>
            <div class="dato">
                <?php Gral::_echo($pln_jornada_tramo->getTramoHasta()) ?>
            </div>
        </div>
		
        <div class="par pln_jornada_tramo horas_tramo">
            <div class="label"><?php Lang::_lang('Horas') ?></div>
            <div class="dato">
                <?php Gral::_echo($pln_jornada_tramo->getHorasTramo()) ?>
            </div>
        </div>
		
        <div class="par pln_jornada_tramo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pln_jornada_tramo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pln_jornada_tramo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pln_jornada_tramo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pln_jornada_tramo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pln_jornada_tramo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pln_jornada_tramo estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pln_jornada_tramo->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

