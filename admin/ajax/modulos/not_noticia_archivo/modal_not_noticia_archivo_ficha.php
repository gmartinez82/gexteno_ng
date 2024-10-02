<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$not_noticia_archivo = NotNoticiaArchivo::getOxId($id);
//Gral::prr($not_noticia_archivo);
?>

<div class="tabs ficha-not_noticia_archivo" identificador="<?php echo $not_noticia_archivo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par not_noticia_archivo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_noticia_archivo->getId()) ?>
            </div>
        </div>

	
        <div class="par not_noticia_archivo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_noticia_archivo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par not_noticia_archivo not_noticia_id">
            <div class="label"><?php Lang::_lang('NotNoticia') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_noticia_archivo->getNotNoticia()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par not_noticia_archivo not_tipo_archivo_id">
            <div class="label"><?php Lang::_lang('NotTipoArchivo') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_noticia_archivo->getNotTipoArchivo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par not_noticia_archivo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_noticia_archivo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par not_noticia_archivo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_noticia_archivo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par not_noticia_archivo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_noticia_archivo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par not_noticia_archivo estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_noticia_archivo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par not_noticia_archivo archivo">
            <div class="label"><?php Lang::_lang('Archivo') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_noticia_archivo->getArchivo()) ?>
            </div>
        </div>
		
        <div class="par not_noticia_archivo peso">
            <div class="label"><?php Lang::_lang('Peso') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_noticia_archivo->getPeso()) ?>
            </div>
        </div>
		
        <div class="par not_noticia_archivo tipo">
            <div class="label"><?php Lang::_lang('Tipo') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_noticia_archivo->getTipo()) ?>
            </div>
        </div>
	
    </div>    

</div>

