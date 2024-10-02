<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ctrl_equipo = CtrlEquipo::getOxId($id);
//Gral::prr($ctrl_equipo);
?>

<div class="tabs ficha-ctrl_equipo" identificador="<?php echo $ctrl_equipo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ctrl_equipo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ctrl_equipo->getId()) ?>
            </div>
        </div>

	
        <div class="par ctrl_equipo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ctrl_equipo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ctrl_equipo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ctrl_equipo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par ctrl_equipo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ctrl_equipo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ctrl_equipo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($ctrl_equipo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par ctrl_equipo estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($ctrl_equipo->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

