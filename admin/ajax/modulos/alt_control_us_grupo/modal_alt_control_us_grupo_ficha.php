<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$alt_control_us_grupo = AltControlUsGrupo::getOxId($id);
//Gral::prr($alt_control_us_grupo);
?>

<div class="tabs ficha-alt_control_us_grupo" identificador="<?php echo $alt_control_us_grupo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par alt_control_us_grupo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_control_us_grupo->getId()) ?>
            </div>
        </div>

	
        <div class="par alt_control_us_grupo alt_control_id">
            <div class="label"><?php Lang::_lang('Control') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_control_us_grupo->getAltControl()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par alt_control_us_grupo us_grupo_id">
            <div class="label"><?php Lang::_lang('Grupo de Usuarios') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_control_us_grupo->getUsGrupo()->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

