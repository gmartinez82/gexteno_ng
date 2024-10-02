<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_param_geo_departamento = EkuParamGeoDepartamento::getOxId($id);
//Gral::prr($eku_param_geo_departamento);
?>

<div class="tabs ficha-eku_param_geo_departamento" identificador="<?php echo $eku_param_geo_departamento->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_param_geo_departamento id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_geo_departamento->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_param_geo_departamento descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_geo_departamento->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_geo_departamento codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_geo_departamento->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_param_geo_departamento codigo_eku">
            <div class="label"><?php Lang::_lang('Cod Eku') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_geo_departamento->getCodigoEku()) ?>
            </div>
        </div>
		
        <div class="par eku_param_geo_departamento observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_geo_departamento->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_geo_departamento orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_geo_departamento->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_param_geo_departamento estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_param_geo_departamento->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

