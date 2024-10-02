<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_param_traslado_tipo_identificacion_vehiculo = EkuParamTrasladoTipoIdentificacionVehiculo::getOxId($id);
//Gral::prr($eku_param_traslado_tipo_identificacion_vehiculo);
?>

<div class="tabs ficha-eku_param_traslado_tipo_identificacion_vehiculo" identificador="<?php echo $eku_param_traslado_tipo_identificacion_vehiculo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_param_traslado_tipo_identificacion_vehiculo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_traslado_tipo_identificacion_vehiculo->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_param_traslado_tipo_identificacion_vehiculo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_traslado_tipo_identificacion_vehiculo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_traslado_tipo_identificacion_vehiculo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_traslado_tipo_identificacion_vehiculo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_param_traslado_tipo_identificacion_vehiculo codigo_eku">
            <div class="label"><?php Lang::_lang('Cod Eku') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_traslado_tipo_identificacion_vehiculo->getCodigoEku()) ?>
            </div>
        </div>
		
        <div class="par eku_param_traslado_tipo_identificacion_vehiculo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_traslado_tipo_identificacion_vehiculo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_traslado_tipo_identificacion_vehiculo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_traslado_tipo_identificacion_vehiculo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_param_traslado_tipo_identificacion_vehiculo estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_param_traslado_tipo_identificacion_vehiculo->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

