<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$alt_control_us_usuario = AltControlUsUsuario::getOxId($id);
//Gral::prr($alt_control_us_usuario);
?>

<div class="tabs ficha-alt_control_us_usuario" identificador="<?php echo $alt_control_us_usuario->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par alt_control_us_usuario id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_control_us_usuario->getId()) ?>
            </div>
        </div>

	
        <div class="par alt_control_us_usuario alt_control_id">
            <div class="label"><?php Lang::_lang('Control') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_control_us_usuario->getAltControl()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par alt_control_us_usuario us_usuario_id">
            <div class="label"><?php Lang::_lang('Usuario') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_control_us_usuario->getUsUsuario()->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

