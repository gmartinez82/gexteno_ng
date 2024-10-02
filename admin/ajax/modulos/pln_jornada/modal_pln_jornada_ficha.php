<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pln_jornada = PlnJornada::getOxId($id);
//Gral::prr($pln_jornada);
?>

<div class="tabs ficha-pln_jornada" identificador="<?php echo $pln_jornada->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pln_jornada id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pln_jornada->getId()) ?>
            </div>
        </div>

	
        <div class="par pln_jornada descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pln_jornada->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pln_jornada gral_novedad_id">
            <div class="label"><?php Lang::_lang('GralNovedad') ?></div>
            <div class="dato">
                <?php Gral::_echo($pln_jornada->getGralNovedad()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pln_jornada codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pln_jornada->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pln_jornada horas">
            <div class="label"><?php Lang::_lang('Horas') ?></div>
            <div class="dato">
                <?php Gral::_echo($pln_jornada->getHoras()) ?>
            </div>
        </div>
		
        <div class="par pln_jornada jornada_completa">
            <div class="label"><?php Lang::_lang('Jornada Completa') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pln_jornada->getJornadaCompleta())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pln_jornada observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pln_jornada->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pln_jornada orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pln_jornada->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pln_jornada estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pln_jornada->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

