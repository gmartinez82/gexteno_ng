<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_param_geo_distrito = EkuParamGeoDistrito::getOxId($id);
//Gral::prr($eku_param_geo_distrito);
?>

<div class="tabs ficha-eku_param_geo_distrito" identificador="<?php echo $eku_param_geo_distrito->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_param_geo_distrito id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_geo_distrito->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_param_geo_distrito descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_geo_distrito->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_geo_distrito codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_geo_distrito->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_param_geo_distrito codigo_eku">
            <div class="label"><?php Lang::_lang('Cod Eku') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_geo_distrito->getCodigoEku()) ?>
            </div>
        </div>
		
        <div class="par eku_param_geo_distrito observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_geo_distrito->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_geo_distrito orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_geo_distrito->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_param_geo_distrito estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_param_geo_distrito->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

