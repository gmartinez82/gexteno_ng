<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pln_turno = PlnTurno::getOxId($id);
//Gral::prr($pln_turno);
?>

<div class="tabs ficha-pln_turno" identificador="<?php echo $pln_turno->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pln_turno id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pln_turno->getId()) ?>
            </div>
        </div>

	
        <div class="par pln_turno descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pln_turno->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pln_turno codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pln_turno->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pln_turno observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pln_turno->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pln_turno orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pln_turno->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pln_turno estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pln_turno->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

