<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$not_relacionada = NotRelacionada::getOxId($id);
//Gral::prr($not_relacionada);
?>

<div class="tabs ficha-not_relacionada" identificador="<?php echo $not_relacionada->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par not_relacionada id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_relacionada->getId()) ?>
            </div>
        </div>

	
        <div class="par not_relacionada descripcion">
            <div class="label"><?php Lang::_lang('descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_relacionada->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par not_relacionada not_noticia_id">
            <div class="label"><?php Lang::_lang('NotNoticia') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_relacionada->getNotNoticia()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par not_relacionada not_noticia_relacionada">
            <div class="label"><?php Lang::_lang('NotNoticiaRelacionada') ?></div>
            <div class="dato">
                <?php Gral::_echo(($not_relacionada->getNotNoticiaRelacionada() != 'null') ? NotNoticia::getOxId($not_relacionada->getNotNoticiaRelacionada())->getDescripcion() : '') ?>
            </div>
        </div>
		
        <div class="par not_relacionada codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_relacionada->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par not_relacionada observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_relacionada->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par not_relacionada orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_relacionada->getOrden()) ?>
            </div>
        </div>
		
        <div class="par not_relacionada estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_relacionada->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

