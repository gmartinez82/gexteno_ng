<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$ws_fe_ope_solicitud_respuesta = WsFeOpeSolicitudRespuesta::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('WsFeSolicitud') ?></div>
        <div class='dato'><?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getWsFeOpeSolicitud()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Cuit') ?></div>
        <div class='dato'><?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getWsFeAfipCuit()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Punto de Venta') ?></div>
        <div class='dato'><?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getWsFeAfipPuntoVenta()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Tipo de Comprobante') ?></div>
        <div class='dato'><?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getWsFeAfipTipoComprobante()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Fecha de Proceso') ?></div>
        <div class='dato'><?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getWsFeAfipFechaProceso()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Cantidad de Registros') ?></div>
        <div class='dato'><?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getWsFeAfipCantidadRegistro()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Resultado de la Cabecera') ?></div>
        <div class='dato'><?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getWsFeAfipResultadoCabecera()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Reproceso') ?></div>
        <div class='dato'><?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getWsFeAfipReproceso()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Tipo de Concepto') ?></div>
        <div class='dato'><?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getWsFeAfipTipoConcepto()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Tipo de Documento') ?></div>
        <div class='dato'><?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getWsFeAfipTipoDocumento()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Numero de Documento') ?></div>
        <div class='dato'><?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getWsFeAfipNumeroDocumento()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Comprobante Desde') ?></div>
        <div class='dato'><?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getWsFeAfipComprobanteDesde()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Comprobante Hasta') ?></div>
        <div class='dato'><?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getWsFeAfipComprobanteHasta()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Comprobante Fecha') ?></div>
        <div class='dato'><?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getWsFeAfipComprobanteFecha()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Resultado del Detalle') ?></div>
        <div class='dato'><?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getWsFeAfipResultadoDetalle()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Cae') ?></div>
        <div class='dato'><?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getWsFeAfipCae()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Fecha de Vencimiento del CAE') ?></div>
        <div class='dato'><?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getWsFeAfipCaeFechaVencimiento()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getObservacion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getOrden()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Estado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($ws_fe_ope_solicitud_respuesta->getEstado())->getDescripcion()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($ws_fe_ope_solicitud_respuesta->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($ws_fe_ope_solicitud_respuesta->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

