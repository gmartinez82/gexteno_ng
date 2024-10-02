<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pln_jornada_us_usuario = PlnJornadaUsUsuario::getOxId($id);
//Gral::prr($pln_jornada_us_usuario);
?>

<div class="tabs ficha-pln_jornada_us_usuario" identificador="<?php echo $pln_jornada_us_usuario->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pln_jornada_us_usuario id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pln_jornada_us_usuario->getId()) ?>
            </div>
        </div>

	
        <div class="par pln_jornada_us_usuario pln_jornada_id">
            <div class="label"><?php Lang::_lang('PlnJornada') ?></div>
            <div class="dato">
                <?php Gral::_echo($pln_jornada_us_usuario->getPlnJornada()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pln_jornada_us_usuario us_usuario_id">
            <div class="label"><?php Lang::_lang('Usuario') ?></div>
            <div class="dato">
                <?php Gral::_echo($pln_jornada_us_usuario->getUsUsuario()->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

