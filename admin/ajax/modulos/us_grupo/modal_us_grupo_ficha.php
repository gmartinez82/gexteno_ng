<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$us_grupo = UsGrupo::getOxId($id);
//Gral::prr($us_grupo);
?>

<div class="tabs ficha-us_grupo" identificador="<?php echo $us_grupo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par us_grupo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_grupo->getId()) ?>
            </div>
        </div>

	
        <div class="par us_grupo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_grupo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par us_grupo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_grupo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par us_grupo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_grupo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par us_grupo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_grupo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par us_grupo estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($us_grupo->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

