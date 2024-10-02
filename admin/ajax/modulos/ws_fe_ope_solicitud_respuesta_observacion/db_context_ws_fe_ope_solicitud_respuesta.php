<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$ws_fe_ope_solicitud_respuesta_observacion_id = Gral::getVars(2, 'ws_fe_ope_solicitud_respuesta_observacion_id');
$ws_fe_ope_solicitud_respuesta_observacion = WsFeOpeSolicitudRespuestaObservacion::getOxId($ws_fe_ope_solicitud_respuesta_observacion_id);
$ws_fe_ope_solicitud_respuesta = $ws_fe_ope_solicitud_respuesta_observacion->getWsFeOpeSolicitudRespuesta();

?>
<div class="datos" id="<?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('WsFeOpeSolicitudRespuesta') ?>: 
        <strong><?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getId()) ?> - <?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="ws_fe_ope_solicitud_respuesta_alta.php?id=<?php echo($ws_fe_ope_solicitud_respuesta->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('WsFeOpeSolicitudRespuesta') ?>: <strong><?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo WsFeOpeSolicitudRespuestaObservacion::getFiltrosArrGral() ?>&arr=<?php echo $ws_fe_ope_solicitud_respuesta_observacion->getFiltrosArrXCampo('WsFeOpeSolicitudRespuesta', 'ws_fe_ope_solicitud_respuesta_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('WsFeOpeSolicitudRespuestaObservacions') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

