<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ws_fe_ope_solicitud_tributo = WsFeOpeSolicitudTributo::getOxId($id);
//Gral::prr($ws_fe_ope_solicitud_tributo);
?>

<div class="tabs ficha-ws_fe_ope_solicitud_tributo" identificador="<?php echo $ws_fe_ope_solicitud_tributo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ws_fe_ope_solicitud_tributo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_tributo->getId()) ?>
            </div>
        </div>

	
        <div class="par ws_fe_ope_solicitud_tributo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_tributo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud_tributo ws_fe_ope_solicitud_id">
            <div class="label"><?php Lang::_lang('WsFeOpeSolicitud') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_tributo->getWsFeOpeSolicitud()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud_tributo ws_fe_param_tipo_tributo_id">
            <div class="label"><?php Lang::_lang('WsFeParamTipoTributo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_tributo->getWsFeParamTipoTributo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud_tributo ws_fe_afip_codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_tributo->getWsFeAfipCodigo()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud_tributo ws_fe_afip_descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_tributo->getWsFeAfipDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud_tributo ws_fe_afip_base_imponible">
            <div class="label"><?php Lang::_lang('Base Imponible') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_tributo->getWsFeAfipBaseImponible()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud_tributo ws_fe_afip_alicuota">
            <div class="label"><?php Lang::_lang('Alicuota') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_tributo->getWsFeAfipAlicuota()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud_tributo ws_fe_afip_importe">
            <div class="label"><?php Lang::_lang('Importe') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_tributo->getWsFeAfipImporte()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud_tributo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_tributo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud_tributo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_tributo->getObservacion()) ?>
            </div>
        </div>
	
    </div>    

</div>

