<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$per_persona_us_usuario = PerPersonaUsUsuario::getOxId($id);
//Gral::prr($per_persona_us_usuario);
?>

<div class="tabs ficha-per_persona_us_usuario" identificador="<?php echo $per_persona_us_usuario->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par per_persona_us_usuario id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_persona_us_usuario->getId()) ?>
            </div>
        </div>

	
        <div class="par per_persona_us_usuario per_persona_id">
            <div class="label"><?php Lang::_lang('PerPersona') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_persona_us_usuario->getPerPersona()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par per_persona_us_usuario us_usuario_id">
            <div class="label"><?php Lang::_lang('UsUsuario') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_persona_us_usuario->getUsUsuario()->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

