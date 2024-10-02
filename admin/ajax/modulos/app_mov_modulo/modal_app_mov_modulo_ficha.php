<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$app_mov_modulo = AppMovModulo::getOxId($id);
//Gral::prr($app_mov_modulo);
?>

<div class="tabs ficha-app_mov_modulo" identificador="<?php echo $app_mov_modulo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par app_mov_modulo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($app_mov_modulo->getId()) ?>
            </div>
        </div>

	
        <div class="par app_mov_modulo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($app_mov_modulo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par app_mov_modulo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($app_mov_modulo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par app_mov_modulo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($app_mov_modulo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par app_mov_modulo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($app_mov_modulo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par app_mov_modulo estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($app_mov_modulo->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

