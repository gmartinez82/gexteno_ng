<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$alt_alerta_us_usuario = AltAlertaUsUsuario::getOxId($id);
//Gral::prr($alt_alerta_us_usuario);
?>

<div class="tabs ficha-alt_alerta_us_usuario" identificador="<?php echo $alt_alerta_us_usuario->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par alt_alerta_us_usuario id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_alerta_us_usuario->getId()) ?>
            </div>
        </div>

	
        <div class="par alt_alerta_us_usuario alt_alerta_id">
            <div class="label"><?php Lang::_lang('Alerta') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_alerta_us_usuario->getAltAlerta()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par alt_alerta_us_usuario us_usuario_id">
            <div class="label"><?php Lang::_lang('Usuario') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_alerta_us_usuario->getUsUsuario()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par alt_alerta_us_usuario observado">
            <div class="label"><?php Lang::_lang('Observado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($alt_alerta_us_usuario->getObservado())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par alt_alerta_us_usuario leido">
            <div class="label"><?php Lang::_lang('Leido') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($alt_alerta_us_usuario->getLeido())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par alt_alerta_us_usuario destacado">
            <div class="label"><?php Lang::_lang('Destacado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($alt_alerta_us_usuario->getDestacado())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par alt_alerta_us_usuario aviso_email">
            <div class="label"><?php Lang::_lang('Aviso Email') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($alt_alerta_us_usuario->getAvisoEmail())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par alt_alerta_us_usuario aviso_sms">
            <div class="label"><?php Lang::_lang('Aviso Sms') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($alt_alerta_us_usuario->getAvisoSms())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

