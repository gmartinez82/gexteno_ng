<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ws_fe_ope_solicitud_respuesta_observacion = WsFeOpeSolicitudRespuestaObservacion::getOxId($id);
//Gral::prr($ws_fe_ope_solicitud_respuesta_observacion);
?>

<div class="tabs ficha-ws_fe_ope_solicitud_respuesta_observacion" identificador="<?php echo $ws_fe_ope_solicitud_respuesta_observacion->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ws_fe_ope_solicitud_respuesta_observacion id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_respuesta_observacion->getId()) ?>
            </div>
        </div>

	
        <div class="par ws_fe_ope_solicitud_respuesta_observacion descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_respuesta_observacion->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud_respuesta_observacion ws_fe_ope_solicitud_respuesta_id">
            <div class="label"><?php Lang::_lang('WsFeOpeSolicitudRespuesta') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_respuesta_observacion->getWsFeOpeSolicitudRespuesta()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud_respuesta_observacion ws_fe_afip_codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_respuesta_observacion->getWsFeAfipCodigo()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud_respuesta_observacion ws_fe_afip_mensaje">
            <div class="label"><?php Lang::_lang('Mensaje') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_respuesta_observacion->getWsFeAfipMensaje()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud_respuesta_observacion codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_respuesta_observacion->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud_respuesta_observacion observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_respuesta_observacion->getObservacion()) ?>
            </div>
        </div>
	
    </div>    

</div>

