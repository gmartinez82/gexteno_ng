<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$not_tipo_video = NotTipoVideo::getOxId($id);
//Gral::prr($not_tipo_video);
?>

<div class="tabs ficha-not_tipo_video" identificador="<?php echo $not_tipo_video->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par not_tipo_video id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_tipo_video->getId()) ?>
            </div>
        </div>

	
        <div class="par not_tipo_video descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_tipo_video->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par not_tipo_video codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_tipo_video->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par not_tipo_video observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_tipo_video->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par not_tipo_video orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_tipo_video->getOrden()) ?>
            </div>
        </div>
		
        <div class="par not_tipo_video estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_tipo_video->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

