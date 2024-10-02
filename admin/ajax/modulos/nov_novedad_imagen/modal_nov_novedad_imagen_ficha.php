<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$nov_novedad_imagen = NovNovedadImagen::getOxId($id);
//Gral::prr($nov_novedad_imagen);
?>

<div class="tabs ficha-nov_novedad_imagen" identificador="<?php echo $nov_novedad_imagen->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par nov_novedad_imagen id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad_imagen->getId()) ?>
            </div>
        </div>

	
        <div class="par nov_novedad_imagen nov_novedad_id">
            <div class="label"><?php Lang::_lang('NovNovedad') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad_imagen->getNovNovedad()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par nov_novedad_imagen descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad_imagen->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par nov_novedad_imagen codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad_imagen->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par nov_novedad_imagen observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad_imagen->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par nov_novedad_imagen archivo">
            <div class="label"><?php Lang::_lang('Archivo') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad_imagen->getArchivo()) ?>
            </div>
        </div>
		
        <div class="par nov_novedad_imagen peso">
            <div class="label"><?php Lang::_lang('Peso') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad_imagen->getPeso()) ?>
            </div>
        </div>
		
        <div class="par nov_novedad_imagen tipo">
            <div class="label"><?php Lang::_lang('Tipo') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad_imagen->getTipo()) ?>
            </div>
        </div>
		
        <div class="par nov_novedad_imagen alto">
            <div class="label"><?php Lang::_lang('Alto') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad_imagen->getAlto()) ?>
            </div>
        </div>
		
        <div class="par nov_novedad_imagen ancho">
            <div class="label"><?php Lang::_lang('Ancho') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad_imagen->getAncho()) ?>
            </div>
        </div>
		
        <div class="par nov_novedad_imagen orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad_imagen->getOrden()) ?>
            </div>
        </div>
		
        <div class="par nov_novedad_imagen estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad_imagen->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

