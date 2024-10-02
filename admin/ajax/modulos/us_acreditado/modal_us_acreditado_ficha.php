<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$us_acreditado = UsAcreditado::getOxId($id);
//Gral::prr($us_acreditado);
?>

<div class="tabs ficha-us_acreditado" identificador="<?php echo $us_acreditado->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par us_acreditado id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_acreditado->getId()) ?>
            </div>
        </div>

	
        <div class="par us_acreditado us_credencial_id">
            <div class="label"><?php Lang::_lang('Credencial') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_acreditado->getUsCredencial()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par us_acreditado us_usuario_id">
            <div class="label"><?php Lang::_lang('Usuario') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_acreditado->getUsUsuario()->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

