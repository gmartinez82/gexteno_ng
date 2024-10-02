<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$alt_nivel = AltNivel::getOxId($id);
//Gral::prr($alt_nivel);
?>

<div class="tabs ficha-alt_nivel" identificador="<?php echo $alt_nivel->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par alt_nivel id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_nivel->getId()) ?>
            </div>
        </div>

	
        <div class="par alt_nivel descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_nivel->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par alt_nivel codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_nivel->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par alt_nivel observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_nivel->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par alt_nivel orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_nivel->getOrden()) ?>
            </div>
        </div>
		
        <div class="par alt_nivel estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_nivel->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

