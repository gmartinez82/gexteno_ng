<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ws_fe_ope_solicitud_iva = WsFeOpeSolicitudIva::getOxId($id);
//Gral::prr($ws_fe_ope_solicitud_iva);
?>

<div class="tabs ficha-ws_fe_ope_solicitud_iva" identificador="<?php echo $ws_fe_ope_solicitud_iva->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ws_fe_ope_solicitud_iva id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_iva->getId()) ?>
            </div>
        </div>

	
        <div class="par ws_fe_ope_solicitud_iva descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_iva->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud_iva ws_fe_ope_solicitud_id">
            <div class="label"><?php Lang::_lang('WsFeOpeSolicitud') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_iva->getWsFeOpeSolicitud()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud_iva ws_fe_param_tipo_iva_id">
            <div class="label"><?php Lang::_lang('WsFeParamTipoIva') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_iva->getWsFeParamTipoIva()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud_iva ws_fe_afip_codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_iva->getWsFeAfipCodigo()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud_iva ws_fe_afip_base_imponible">
            <div class="label"><?php Lang::_lang('Base Imponible') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_iva->getWsFeAfipBaseImponible()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud_iva ws_fe_afip_importe">
            <div class="label"><?php Lang::_lang('Importe') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_iva->getWsFeAfipImporte()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud_iva codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_iva->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud_iva observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_iva->getObservacion()) ?>
            </div>
        </div>
	
    </div>    

</div>

