<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$app_mov_version = AppMovVersion::getOxId($id);
//Gral::prr($app_mov_version);
?>

<div class="tabs ficha-app_mov_version" identificador="<?php echo $app_mov_version->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par app_mov_version id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($app_mov_version->getId()) ?>
            </div>
        </div>

	
        <div class="par app_mov_version descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($app_mov_version->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par app_mov_version app_mov_modulo_id">
            <div class="label"><?php Lang::_lang('AppMovModulo') ?></div>
            <div class="dato">
                <?php Gral::_echo($app_mov_version->getAppMovModulo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par app_mov_version codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($app_mov_version->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par app_mov_version version">
            <div class="label"><?php Lang::_lang('Version') ?></div>
            <div class="dato">
                <?php Gral::_echo($app_mov_version->getVersion()) ?>
            </div>
        </div>
		
        <div class="par app_mov_version version_minima">
            <div class="label"><?php Lang::_lang('Version Min') ?></div>
            <div class="dato">
                <?php Gral::_echo($app_mov_version->getVersionMinima()) ?>
            </div>
        </div>
		
        <div class="par app_mov_version fecha">
            <div class="label"><?php Lang::_lang('Fecha') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($app_mov_version->getFecha())) ?>
            </div>
        </div>
		
        <div class="par app_mov_version actual">
            <div class="label"><?php Lang::_lang('Actual') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($app_mov_version->getActual())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par app_mov_version observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($app_mov_version->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par app_mov_version orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($app_mov_version->getOrden()) ?>
            </div>
        </div>
		
        <div class="par app_mov_version estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($app_mov_version->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

