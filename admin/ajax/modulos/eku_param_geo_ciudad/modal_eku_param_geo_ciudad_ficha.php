<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_param_geo_ciudad = EkuParamGeoCiudad::getOxId($id);
//Gral::prr($eku_param_geo_ciudad);
?>

<div class="tabs ficha-eku_param_geo_ciudad" identificador="<?php echo $eku_param_geo_ciudad->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_param_geo_ciudad id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_geo_ciudad->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_param_geo_ciudad descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_geo_ciudad->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_geo_ciudad codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_geo_ciudad->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_param_geo_ciudad codigo_eku">
            <div class="label"><?php Lang::_lang('Cod Eku') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_geo_ciudad->getCodigoEku()) ?>
            </div>
        </div>
		
        <div class="par eku_param_geo_ciudad observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_geo_ciudad->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_geo_ciudad orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_geo_ciudad->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_param_geo_ciudad estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_param_geo_ciudad->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

