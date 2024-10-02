<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$gen_widget_sector = GenWidgetSector::getOxId($id);
//Gral::prr($gen_widget_sector);
?>

<div class="tabs ficha-gen_widget_sector" identificador="<?php echo $gen_widget_sector->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par gen_widget_sector id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_widget_sector->getId()) ?>
            </div>
        </div>

	
        <div class="par gen_widget_sector descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_widget_sector->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gen_widget_sector codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_widget_sector->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par gen_widget_sector observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_widget_sector->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par gen_widget_sector orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_widget_sector->getOrden()) ?>
            </div>
        </div>
		
        <div class="par gen_widget_sector estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gen_widget_sector->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

