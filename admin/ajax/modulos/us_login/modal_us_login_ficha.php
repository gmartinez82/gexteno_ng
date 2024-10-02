<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$us_login = UsLogin::getOxId($id);
//Gral::prr($us_login);
?>

<div class="tabs ficha-us_login" identificador="<?php echo $us_login->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par us_login id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_login->getId()) ?>
            </div>
        </div>

	
        <div class="par us_login us_usuario_id">
            <div class="label"><?php Lang::_lang('Usuario') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_login->getUsUsuario()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par us_login session">
            <div class="label"><?php Lang::_lang('Session') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_login->getSession()) ?>
            </div>
        </div>
		
        <div class="par us_login ip">
            <div class="label"><?php Lang::_lang('IP') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_login->getIp()) ?>
            </div>
        </div>
		
        <div class="par us_login exito">
            <div class="label"><?php Lang::_lang('Exito') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_login->getExito()) ?>
            </div>
        </div>
		
        <div class="par us_login login">
            <div class="label"><?php Lang::_lang('Login') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($us_login->getLogin())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par us_login navegador">
            <div class="label"><?php Lang::_lang('Navegador') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_login->getNavegador()) ?>
            </div>
        </div>
		
        <div class="par us_login observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_login->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par us_login orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_login->getOrden()) ?>
            </div>
        </div>
		
        <div class="par us_login estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_login->getEst()->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

