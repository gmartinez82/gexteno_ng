<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$us_agrupado = UsAgrupado::getOxId($id);
//Gral::prr($us_agrupado);
?>

<div class="tabs ficha-us_agrupado" identificador="<?php echo $us_agrupado->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par us_agrupado id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_agrupado->getId()) ?>
            </div>
        </div>

	
        <div class="par us_agrupado us_grupo_id">
            <div class="label"><?php Lang::_lang('Grupo') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_agrupado->getUsGrupo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par us_agrupado us_usuario_id">
            <div class="label"><?php Lang::_lang('Usuario') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_agrupado->getUsUsuario()->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

