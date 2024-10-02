<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ws_fe_param_tipo_tributo = WsFeParamTipoTributo::getOxId($id);
//Gral::prr($ws_fe_param_tipo_tributo);
?>

<div class="tabs ficha-ws_fe_param_tipo_tributo" identificador="<?php echo $ws_fe_param_tipo_tributo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ws_fe_param_tipo_tributo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_tributo->getId()) ?>
            </div>
        </div>

	
        <div class="par ws_fe_param_tipo_tributo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_tributo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_param_tipo_tributo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_tributo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_param_tipo_tributo codigo_afip">
            <div class="label"><?php Lang::_lang('Codigo Afip') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_tributo->getCodigoAfip()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_param_tipo_tributo fecha_desde">
            <div class="label"><?php Lang::_lang('Fecha Desde') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_tributo->getFechaDesde()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_param_tipo_tributo fecha_hasta">
            <div class="label"><?php Lang::_lang('Fecha Hasta') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_tributo->getFechaHasta()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_param_tipo_tributo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_tributo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_param_tipo_tributo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_tributo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_param_tipo_tributo estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_tributo->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

