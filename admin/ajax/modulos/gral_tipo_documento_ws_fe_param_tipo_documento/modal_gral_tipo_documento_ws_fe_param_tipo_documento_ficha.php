<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$gral_tipo_documento_ws_fe_param_tipo_documento = GralTipoDocumentoWsFeParamTipoDocumento::getOxId($id);
//Gral::prr($gral_tipo_documento_ws_fe_param_tipo_documento);
?>

<div class="tabs ficha-gral_tipo_documento_ws_fe_param_tipo_documento" identificador="<?php echo $gral_tipo_documento_ws_fe_param_tipo_documento->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par gral_tipo_documento_ws_fe_param_tipo_documento id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_tipo_documento_ws_fe_param_tipo_documento->getId()) ?>
            </div>
        </div>

	
        <div class="par gral_tipo_documento_ws_fe_param_tipo_documento descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_tipo_documento_ws_fe_param_tipo_documento->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_tipo_documento_ws_fe_param_tipo_documento gral_tipo_documento_id">
            <div class="label"><?php Lang::_lang('GralTipoDocumento') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_tipo_documento_ws_fe_param_tipo_documento->getGralTipoDocumento()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_tipo_documento_ws_fe_param_tipo_documento ws_fe_param_tipo_documento_id">
            <div class="label"><?php Lang::_lang('WsFeParamTipoDocumento') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_tipo_documento_ws_fe_param_tipo_documento->getWsFeParamTipoDocumento()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_tipo_documento_ws_fe_param_tipo_documento codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_tipo_documento_ws_fe_param_tipo_documento->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par gral_tipo_documento_ws_fe_param_tipo_documento observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_tipo_documento_ws_fe_param_tipo_documento->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par gral_tipo_documento_ws_fe_param_tipo_documento orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_tipo_documento_ws_fe_param_tipo_documento->getOrden()) ?>
            </div>
        </div>
		
        <div class="par gral_tipo_documento_ws_fe_param_tipo_documento estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gral_tipo_documento_ws_fe_param_tipo_documento->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

