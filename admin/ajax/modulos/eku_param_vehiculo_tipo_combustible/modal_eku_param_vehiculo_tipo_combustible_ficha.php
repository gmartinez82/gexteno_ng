<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_param_vehiculo_tipo_combustible = EkuParamVehiculoTipoCombustible::getOxId($id);
//Gral::prr($eku_param_vehiculo_tipo_combustible);
?>

<div class="tabs ficha-eku_param_vehiculo_tipo_combustible" identificador="<?php echo $eku_param_vehiculo_tipo_combustible->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_param_vehiculo_tipo_combustible id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_vehiculo_tipo_combustible->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_param_vehiculo_tipo_combustible descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_vehiculo_tipo_combustible->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_vehiculo_tipo_combustible codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_vehiculo_tipo_combustible->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_param_vehiculo_tipo_combustible codigo_eku">
            <div class="label"><?php Lang::_lang('Cod Eku') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_vehiculo_tipo_combustible->getCodigoEku()) ?>
            </div>
        </div>
		
        <div class="par eku_param_vehiculo_tipo_combustible observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_vehiculo_tipo_combustible->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_vehiculo_tipo_combustible orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_vehiculo_tipo_combustible->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_param_vehiculo_tipo_combustible estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_param_vehiculo_tipo_combustible->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

