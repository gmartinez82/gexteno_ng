<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$geo_localidad = GeoLocalidad::getOxId($id);
//Gral::prr($geo_localidad);
?>

<div class="tabs ficha-geo_localidad" identificador="<?php echo $geo_localidad->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par geo_localidad id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($geo_localidad->getId()) ?>
            </div>
        </div>

	
        <div class="par geo_localidad descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($geo_localidad->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par geo_localidad geo_provincia_id">
            <div class="label"><?php Lang::_lang('GeoProvincia') ?></div>
            <div class="dato">
                <?php Gral::_echo($geo_localidad->getGeoProvincia()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par geo_localidad codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($geo_localidad->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par geo_localidad codigo_eku">
            <div class="label"><?php Lang::_lang('Cod Eku') ?></div>
            <div class="dato">
                <?php Gral::_echo($geo_localidad->getCodigoEku()) ?>
            </div>
        </div>
		
        <div class="par geo_localidad codigo_distrito_eku">
            <div class="label"><?php Lang::_lang('Cod Dis Eku') ?></div>
            <div class="dato">
                <?php Gral::_echo($geo_localidad->getCodigoDistritoEku()) ?>
            </div>
        </div>
		
        <div class="par geo_localidad observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($geo_localidad->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par geo_localidad orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($geo_localidad->getOrden()) ?>
            </div>
        </div>
		
        <div class="par geo_localidad estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($geo_localidad->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

