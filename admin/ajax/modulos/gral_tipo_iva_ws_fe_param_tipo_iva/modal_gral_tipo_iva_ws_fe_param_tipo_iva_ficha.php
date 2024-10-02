<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$gral_tipo_iva_ws_fe_param_tipo_iva = GralTipoIvaWsFeParamTipoIva::getOxId($id);
//Gral::prr($gral_tipo_iva_ws_fe_param_tipo_iva);
?>

<div class="tabs ficha-gral_tipo_iva_ws_fe_param_tipo_iva" identificador="<?php echo $gral_tipo_iva_ws_fe_param_tipo_iva->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par gral_tipo_iva_ws_fe_param_tipo_iva id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_tipo_iva_ws_fe_param_tipo_iva->getId()) ?>
            </div>
        </div>

	
        <div class="par gral_tipo_iva_ws_fe_param_tipo_iva descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_tipo_iva_ws_fe_param_tipo_iva->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_tipo_iva_ws_fe_param_tipo_iva gral_tipo_iva_id">
            <div class="label"><?php Lang::_lang('GralTipoIva') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_tipo_iva_ws_fe_param_tipo_iva->getGralTipoIva()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_tipo_iva_ws_fe_param_tipo_iva ws_fe_param_tipo_iva_id">
            <div class="label"><?php Lang::_lang('WsFeParamTipoIva') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_tipo_iva_ws_fe_param_tipo_iva->getWsFeParamTipoIva()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_tipo_iva_ws_fe_param_tipo_iva codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_tipo_iva_ws_fe_param_tipo_iva->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par gral_tipo_iva_ws_fe_param_tipo_iva observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_tipo_iva_ws_fe_param_tipo_iva->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par gral_tipo_iva_ws_fe_param_tipo_iva orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_tipo_iva_ws_fe_param_tipo_iva->getOrden()) ?>
            </div>
        </div>
		
        <div class="par gral_tipo_iva_ws_fe_param_tipo_iva estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gral_tipo_iva_ws_fe_param_tipo_iva->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

