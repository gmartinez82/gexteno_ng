<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$us_agrupador = UsAgrupador::getOxId($id);
//Gral::prr($us_agrupador);
?>

<div class="tabs ficha-us_agrupador" identificador="<?php echo $us_agrupador->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par us_agrupador id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_agrupador->getId()) ?>
            </div>
        </div>

	
        <div class="par us_agrupador us_credencial_id">
            <div class="label"><?php Lang::_lang('Credencial') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_agrupador->getUsCredencial()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par us_agrupador us_grupo_id">
            <div class="label"><?php Lang::_lang('Grupo') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_agrupador->getUsGrupo()->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

