<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$fnd_cajero_us_usuario = FndCajeroUsUsuario::getOxId($id);
//Gral::prr($fnd_cajero_us_usuario);
?>

<div class="tabs ficha-fnd_cajero_us_usuario" identificador="<?php echo $fnd_cajero_us_usuario->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par fnd_cajero_us_usuario id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_cajero_us_usuario->getId()) ?>
            </div>
        </div>

	
        <div class="par fnd_cajero_us_usuario fnd_cajero_id">
            <div class="label"><?php Lang::_lang('FndCajero') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_cajero_us_usuario->getFndCajero()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_cajero_us_usuario us_usuario_id">
            <div class="label"><?php Lang::_lang('UsUsuario') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_cajero_us_usuario->getUsUsuario()->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

