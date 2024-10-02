<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_param_geo_ciudad_geo_localidad = EkuParamGeoCiudadGeoLocalidad::getOxId($id);
//Gral::prr($eku_param_geo_ciudad_geo_localidad);
?>

<div class="tabs ficha-eku_param_geo_ciudad_geo_localidad" identificador="<?php echo $eku_param_geo_ciudad_geo_localidad->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_param_geo_ciudad_geo_localidad id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_geo_ciudad_geo_localidad->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_param_geo_ciudad_geo_localidad eku_param_geo_ciudad_id">
            <div class="label"><?php Lang::_lang('EkuParamGeoCiudad') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_geo_ciudad_geo_localidad->getEkuParamGeoCiudad()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_geo_ciudad_geo_localidad geo_localidad_id">
            <div class="label"><?php Lang::_lang('GeoLocalidad') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_geo_ciudad_geo_localidad->getGeoLocalidad()->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

