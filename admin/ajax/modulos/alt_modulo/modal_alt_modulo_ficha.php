<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$alt_modulo = AltModulo::getOxId($id);
//Gral::prr($alt_modulo);
?>

<div class="tabs ficha-alt_modulo" identificador="<?php echo $alt_modulo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par alt_modulo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_modulo->getId()) ?>
            </div>
        </div>

	
        <div class="par alt_modulo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_modulo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par alt_modulo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_modulo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par alt_modulo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_modulo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par alt_modulo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_modulo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par alt_modulo estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_modulo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par alt_modulo clase">
            <div class="label"><?php Lang::_lang('Clase') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_modulo->getClase()) ?>
            </div>
        </div>
		
        <div class="par alt_modulo tabla">
            <div class="label"><?php Lang::_lang('Tabla') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_modulo->getTabla()) ?>
            </div>
        </div>
	
    </div>    

</div>

