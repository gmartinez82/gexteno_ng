<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pan_panol_us_usuario = PanPanolUsUsuario::getOxId($id);
//Gral::prr($pan_panol_us_usuario);
?>

<div class="tabs ficha-pan_panol_us_usuario" identificador="<?php echo $pan_panol_us_usuario->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pan_panol_us_usuario id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pan_panol_us_usuario->getId()) ?>
            </div>
        </div>

	
        <div class="par pan_panol_us_usuario pan_panol_id">
            <div class="label"><?php Lang::_lang('PanPanol') ?></div>
            <div class="dato">
                <?php Gral::_echo($pan_panol_us_usuario->getPanPanol()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pan_panol_us_usuario us_usuario_id">
            <div class="label"><?php Lang::_lang('UsUsuario') ?></div>
            <div class="dato">
                <?php Gral::_echo($pan_panol_us_usuario->getUsUsuario()->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

