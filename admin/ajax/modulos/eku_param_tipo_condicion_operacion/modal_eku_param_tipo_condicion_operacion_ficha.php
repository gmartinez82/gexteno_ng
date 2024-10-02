<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_param_tipo_condicion_operacion = EkuParamTipoCondicionOperacion::getOxId($id);
//Gral::prr($eku_param_tipo_condicion_operacion);
?>

<div class="tabs ficha-eku_param_tipo_condicion_operacion" identificador="<?php echo $eku_param_tipo_condicion_operacion->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_param_tipo_condicion_operacion id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_condicion_operacion->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_param_tipo_condicion_operacion descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_condicion_operacion->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_condicion_operacion codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_condicion_operacion->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_condicion_operacion codigo_eku">
            <div class="label"><?php Lang::_lang('Cod Eku') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_condicion_operacion->getCodigoEku()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_condicion_operacion observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_condicion_operacion->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_condicion_operacion orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_condicion_operacion->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_condicion_operacion estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_param_tipo_condicion_operacion->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

