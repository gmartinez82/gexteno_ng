<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$not_noticia = NotNoticia::getOxId($id);
//Gral::prr($not_noticia);
?>

<div class="tabs ficha-not_noticia" identificador="<?php echo $not_noticia->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par not_noticia id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_noticia->getId()) ?>
            </div>
        </div>

	
        <div class="par not_noticia descripcion">
            <div class="label"><?php Lang::_lang('Titulo') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_noticia->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par not_noticia not_categoria_id">
            <div class="label"><?php Lang::_lang('NotCategoria') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_noticia->getNotCategoria()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par not_noticia codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_noticia->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par not_noticia copete">
            <div class="label"><?php Lang::_lang('Copete') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_noticia->getCopete()) ?>
            </div>
        </div>
		
        <div class="par not_noticia cuerpo">
            <div class="label"><?php Lang::_lang('Cuerpo') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_noticia->getCopete()) ?>
            </div>
        </div>
		
        <div class="par not_noticia fecha">
            <div class="label"><?php Lang::_lang('Fecha') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($not_noticia->getFecha())) ?>
            </div>
        </div>
		
        <div class="par not_noticia destacado">
            <div class="label"><?php Lang::_lang('Destacado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($not_noticia->getDestacado())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par not_noticia observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_noticia->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par not_noticia orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_noticia->getOrden()) ?>
            </div>
        </div>
		
        <div class="par not_noticia estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_noticia->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

