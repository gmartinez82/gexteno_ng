<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$nov_novedad_archivo = NovNovedadArchivo::getOxId($id);
//Gral::prr($nov_novedad_archivo);
?>

<div class="tabs ficha-nov_novedad_archivo" identificador="<?php echo $nov_novedad_archivo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par nov_novedad_archivo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad_archivo->getId()) ?>
            </div>
        </div>

	
        <div class="par nov_novedad_archivo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad_archivo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par nov_novedad_archivo nov_novedad_id">
            <div class="label"><?php Lang::_lang('NovNovedad') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad_archivo->getNovNovedad()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par nov_novedad_archivo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad_archivo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par nov_novedad_archivo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad_archivo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par nov_novedad_archivo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad_archivo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par nov_novedad_archivo estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad_archivo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par nov_novedad_archivo archivo">
            <div class="label"><?php Lang::_lang('Archivo') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad_archivo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par nov_novedad_archivo peso">
            <div class="label"><?php Lang::_lang('Peso') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad_archivo->getPeso()) ?>
            </div>
        </div>
		
        <div class="par nov_novedad_archivo tipo">
            <div class="label"><?php Lang::_lang('Tipo') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad_archivo->getTipo()) ?>
            </div>
        </div>
	
    </div>    

</div>

