<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_param_geo_pais = EkuParamGeoPais::getOxId($id);
//Gral::prr($eku_param_geo_pais);
?>

<div class="tabs ficha-eku_param_geo_pais" identificador="<?php echo $eku_param_geo_pais->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_param_geo_pais id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_geo_pais->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_param_geo_pais descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_geo_pais->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_geo_pais codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_geo_pais->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_param_geo_pais codigo_eku">
            <div class="label"><?php Lang::_lang('Cod Eku') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_geo_pais->getCodigoEku()) ?>
            </div>
        </div>
		
        <div class="par eku_param_geo_pais observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_geo_pais->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_geo_pais orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_geo_pais->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_param_geo_pais estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_param_geo_pais->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

