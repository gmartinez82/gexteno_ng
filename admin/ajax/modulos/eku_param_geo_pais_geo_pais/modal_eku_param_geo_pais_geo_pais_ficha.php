<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_param_geo_pais_geo_pais = EkuParamGeoPaisGeoPais::getOxId($id);
//Gral::prr($eku_param_geo_pais_geo_pais);
?>

<div class="tabs ficha-eku_param_geo_pais_geo_pais" identificador="<?php echo $eku_param_geo_pais_geo_pais->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_param_geo_pais_geo_pais id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_geo_pais_geo_pais->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_param_geo_pais_geo_pais eku_param_geo_pais_id">
            <div class="label"><?php Lang::_lang('EkuParamGeoPais') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_geo_pais_geo_pais->getEkuParamGeoPais()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_geo_pais_geo_pais geo_pais_id">
            <div class="label"><?php Lang::_lang('GeoPais') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_geo_pais_geo_pais->getGeoPais()->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

