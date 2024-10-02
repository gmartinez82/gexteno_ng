<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$gral_ruta_geo_localidad = GralRutaGeoLocalidad::getOxId($id);
//Gral::prr($gral_ruta_geo_localidad);
?>

<div class="tabs ficha-gral_ruta_geo_localidad" identificador="<?php echo $gral_ruta_geo_localidad->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par gral_ruta_geo_localidad id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_ruta_geo_localidad->getId()) ?>
            </div>
        </div>

	
        <div class="par gral_ruta_geo_localidad descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_ruta_geo_localidad->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_ruta_geo_localidad gral_ruta_id">
            <div class="label"><?php Lang::_lang('GralRuta') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_ruta_geo_localidad->getGralRuta()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_ruta_geo_localidad geo_localidad_id">
            <div class="label"><?php Lang::_lang('GeoLocalidad') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_ruta_geo_localidad->getGeoLocalidad()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_ruta_geo_localidad codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_ruta_geo_localidad->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par gral_ruta_geo_localidad observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_ruta_geo_localidad->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par gral_ruta_geo_localidad orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_ruta_geo_localidad->getOrden()) ?>
            </div>
        </div>
		
        <div class="par gral_ruta_geo_localidad estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gral_ruta_geo_localidad->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

