<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$geo_zona = GeoZona::getOxId($id);
//Gral::prr($geo_zona);
?>

<div class="tabs ficha-geo_zona" identificador="<?php echo $geo_zona->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par geo_zona id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($geo_zona->getId()) ?>
            </div>
        </div>

	
        <div class="par geo_zona descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($geo_zona->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par geo_zona codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($geo_zona->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par geo_zona observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($geo_zona->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par geo_zona orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($geo_zona->getOrden()) ?>
            </div>
        </div>
		
        <div class="par geo_zona estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($geo_zona->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

