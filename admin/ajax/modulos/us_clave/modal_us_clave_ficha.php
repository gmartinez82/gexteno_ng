<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$us_clave = UsClave::getOxId($id);
//Gral::prr($us_clave);
?>

<div class="tabs ficha-us_clave" identificador="<?php echo $us_clave->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par us_clave id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_clave->getId()) ?>
            </div>
        </div>

	
        <div class="par us_clave us_usuario_id">
            <div class="label"><?php Lang::_lang('Usuario') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_clave->getUsUsuario()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par us_clave clave">
            <div class="label"><?php Lang::_lang('Clave') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_clave->getClave()) ?>
            </div>
        </div>
		
        <div class="par us_clave observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_clave->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par us_clave estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($us_clave->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

