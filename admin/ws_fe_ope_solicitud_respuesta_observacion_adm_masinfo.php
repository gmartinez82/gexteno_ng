<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$ws_fe_ope_solicitud_respuesta_observacion_id = Gral::getVars(2, 'id');
$ws_fe_ope_solicitud_respuesta_observacion = WsFeOpeSolicitudRespuestaObservacion::getOxId($ws_fe_ope_solicitud_respuesta_observacion_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ws_fe_ope_solicitud_respuesta_observacion->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'WS_FE_OPE_SOLICITUD_RESPUESTA_OBSERVACION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ws_fe_ope_solicitud_respuesta_observacion->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ws_fe_ope_solicitud_respuesta_observacion->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'WS_FE_OPE_SOLICITUD_RESPUESTA_OBSERVACION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ws_fe_ope_solicitud_respuesta_observacion->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ws_fe_ope_solicitud_respuesta_observacion->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

