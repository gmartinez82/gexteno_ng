<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$alt_control = AltControl::getOxId($id);
//Gral::prr($alt_control);
?>

<div class="tabs ficha-alt_control" identificador="<?php echo $alt_control->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par alt_control id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_control->getId()) ?>
            </div>
        </div>

	
        <div class="par alt_control descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_control->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par alt_control codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_control->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par alt_control observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_control->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par alt_control orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_control->getOrden()) ?>
            </div>
        </div>
		
        <div class="par alt_control estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_control->getOrden()) ?>
            </div>
        </div>
		
        <div class="par alt_control control">
            <div class="label"><?php Lang::_lang('Control') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_control->getControl()) ?>
            </div>
        </div>
	
    </div>    

</div>

