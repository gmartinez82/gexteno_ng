<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pln_turno_novedad = PlnTurnoNovedad::getOxId($id);
//Gral::prr($pln_turno_novedad);
?>

<div class="tabs ficha-pln_turno_novedad" identificador="<?php echo $pln_turno_novedad->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pln_turno_novedad id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pln_turno_novedad->getId()) ?>
            </div>
        </div>

	
        <div class="par pln_turno_novedad descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pln_turno_novedad->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pln_turno_novedad pln_turno_id">
            <div class="label"><?php Lang::_lang('PlnTurno') ?></div>
            <div class="dato">
                <?php Gral::_echo($pln_turno_novedad->getPlnTurno()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pln_turno_novedad gral_novedad_id">
            <div class="label"><?php Lang::_lang('GralNovedad') ?></div>
            <div class="dato">
                <?php Gral::_echo($pln_turno_novedad->getGralNovedad()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pln_turno_novedad pln_jornada_id">
            <div class="label"><?php Lang::_lang('PlnJornada') ?></div>
            <div class="dato">
                <?php Gral::_echo($pln_turno_novedad->getPlnJornada()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pln_turno_novedad horas">
            <div class="label"><?php Lang::_lang('Horas') ?></div>
            <div class="dato">
                <?php Gral::_echo($pln_turno_novedad->getHoras()) ?>
            </div>
        </div>
		
        <div class="par pln_turno_novedad codigo">
            <div class="label"><?php Lang::_lang('Credencial') ?></div>
            <div class="dato">
                <?php Gral::_echo($pln_turno_novedad->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pln_turno_novedad observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pln_turno_novedad->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pln_turno_novedad orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pln_turno_novedad->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pln_turno_novedad estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pln_turno_novedad->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

