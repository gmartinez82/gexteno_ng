<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$not_noticia_imagen = NotNoticiaImagen::getOxId($id);
//Gral::prr($not_noticia_imagen);
?>

<div class="tabs ficha-not_noticia_imagen" identificador="<?php echo $not_noticia_imagen->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par not_noticia_imagen id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_noticia_imagen->getId()) ?>
            </div>
        </div>

	
        <div class="par not_noticia_imagen descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_noticia_imagen->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par not_noticia_imagen not_noticia_id">
            <div class="label"><?php Lang::_lang('NotNoticia') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_noticia_imagen->getNotNoticia()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par not_noticia_imagen not_tipo_imagen_id">
            <div class="label"><?php Lang::_lang('NotTipoImagen') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_noticia_imagen->getNotTipoImagen()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par not_noticia_imagen codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_noticia_imagen->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par not_noticia_imagen observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_noticia_imagen->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par not_noticia_imagen orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_noticia_imagen->getOrden()) ?>
            </div>
        </div>
		
        <div class="par not_noticia_imagen estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_noticia_imagen->getOrden()) ?>
            </div>
        </div>
		
        <div class="par not_noticia_imagen archivo">
            <div class="label"><?php Lang::_lang('Archivo') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_noticia_imagen->getArchivo()) ?>
            </div>
        </div>
		
        <div class="par not_noticia_imagen peso">
            <div class="label"><?php Lang::_lang('Peso') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_noticia_imagen->getPeso()) ?>
            </div>
        </div>
		
        <div class="par not_noticia_imagen tipo">
            <div class="label"><?php Lang::_lang('Tipo') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_noticia_imagen->getTipo()) ?>
            </div>
        </div>
		
        <div class="par not_noticia_imagen alto">
            <div class="label"><?php Lang::_lang('Alto') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_noticia_imagen->getAlto()) ?>
            </div>
        </div>
		
        <div class="par not_noticia_imagen ancho">
            <div class="label"><?php Lang::_lang('Ancho') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_noticia_imagen->getAncho()) ?>
            </div>
        </div>
	
    </div>    

</div>

