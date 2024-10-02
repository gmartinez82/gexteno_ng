<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ctrl_equipo_ctrl_sector = CtrlEquipoCtrlSector::getOxId($id);
//Gral::prr($ctrl_equipo_ctrl_sector);
?>

<div class="tabs ficha-ctrl_equipo_ctrl_sector" identificador="<?php echo $ctrl_equipo_ctrl_sector->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ctrl_equipo_ctrl_sector id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ctrl_equipo_ctrl_sector->getId()) ?>
            </div>
        </div>

	
        <div class="par ctrl_equipo_ctrl_sector ctrl_equipo_id">
            <div class="label"><?php Lang::_lang('CtrlEquipo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ctrl_equipo_ctrl_sector->getCtrlEquipo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ctrl_equipo_ctrl_sector ctrl_sector_id">
            <div class="label"><?php Lang::_lang('CtrlSector') ?></div>
            <div class="dato">
                <?php Gral::_echo($ctrl_equipo_ctrl_sector->getCtrlSector()->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

