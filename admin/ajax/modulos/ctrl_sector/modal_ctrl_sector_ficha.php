<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ctrl_sector = CtrlSector::getOxId($id);
//Gral::prr($ctrl_sector);
?>

<div class="tabs ficha-ctrl_sector" identificador="<?php echo $ctrl_sector->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ctrl_sector id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ctrl_sector->getId()) ?>
            </div>
        </div>

	
        <div class="par ctrl_sector gral_sucursal_id">
            <div class="label"><?php Lang::_lang('GralSucursal') ?></div>
            <div class="dato">
                <?php Gral::_echo($ctrl_sector->getGralSucursal()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ctrl_sector descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ctrl_sector->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ctrl_sector codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ctrl_sector->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par ctrl_sector observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ctrl_sector->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ctrl_sector orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($ctrl_sector->getOrden()) ?>
            </div>
        </div>
		
        <div class="par ctrl_sector estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($ctrl_sector->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

