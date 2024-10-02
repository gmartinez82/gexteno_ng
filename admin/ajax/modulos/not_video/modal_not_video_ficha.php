<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$not_video = NotVideo::getOxId($id);
//Gral::prr($not_video);
?>

<div class="tabs ficha-not_video" identificador="<?php echo $not_video->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par not_video id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_video->getId()) ?>
            </div>
        </div>

	
        <div class="par not_video descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_video->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par not_video not_noticia_id">
            <div class="label"><?php Lang::_lang('NotNoticia') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_video->getNotNoticia()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par not_video not_tipo_video_id">
            <div class="label"><?php Lang::_lang('NotTipoVideo') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_video->getNotTipoVideo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par not_video codigo">
            <div class="label"><?php Lang::_lang('URL Externa') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_video->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par not_video observacion">
            <div class="label"><?php Lang::_lang('HMTL Externo') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_video->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par not_video orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_video->getOrden()) ?>
            </div>
        </div>
		
        <div class="par not_video estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_video->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

