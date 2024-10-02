<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_tributo_ws_fe_param_tipo_tributo = VtaTributoWsFeParamTipoTributo::getOxId($id);
//Gral::prr($vta_tributo_ws_fe_param_tipo_tributo);
?>

<div class="tabs ficha-vta_tributo_ws_fe_param_tipo_tributo" identificador="<?php echo $vta_tributo_ws_fe_param_tipo_tributo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_tributo_ws_fe_param_tipo_tributo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_tributo_ws_fe_param_tipo_tributo->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_tributo_ws_fe_param_tipo_tributo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_tributo_ws_fe_param_tipo_tributo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_tributo_ws_fe_param_tipo_tributo vta_tributo_id">
            <div class="label"><?php Lang::_lang('VtaTributo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_tributo_ws_fe_param_tipo_tributo->getVtaTributo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_tributo_ws_fe_param_tipo_tributo ws_fe_param_tipo_tributo_id">
            <div class="label"><?php Lang::_lang('WsFeParamTipoTributo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_tributo_ws_fe_param_tipo_tributo->getWsFeParamTipoTributo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_tributo_ws_fe_param_tipo_tributo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_tributo_ws_fe_param_tipo_tributo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_tributo_ws_fe_param_tipo_tributo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_tributo_ws_fe_param_tipo_tributo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_tributo_ws_fe_param_tipo_tributo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_tributo_ws_fe_param_tipo_tributo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_tributo_ws_fe_param_tipo_tributo estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_tributo_ws_fe_param_tipo_tributo->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

