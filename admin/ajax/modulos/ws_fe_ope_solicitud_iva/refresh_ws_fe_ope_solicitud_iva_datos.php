<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
WsFeOpeSolicitudIva::setSesPag($pag);

$criterio = new Criterio(WsFeOpeSolicitudIva::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
WsFeOpeSolicitudIva::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ws_fe_ope_solicitud_iva');
$criterio->setCriteriosInicial();

$paginador = new Paginador(WsFeOpeSolicitudIva::getSesPagCantidad(), WsFeOpeSolicitudIva::getSesPag());
$ws_fe_ope_solicitud_ivas = WsFeOpeSolicitudIva::getWsFeOpeSolicitudIvasDesdeBackend($paginador, $criterio);

include 'ws_fe_ope_solicitud_iva_datos.php';
?>

