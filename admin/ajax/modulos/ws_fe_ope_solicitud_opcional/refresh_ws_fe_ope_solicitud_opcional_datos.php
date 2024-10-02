<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
WsFeOpeSolicitudOpcional::setSesPag($pag);

$criterio = new Criterio(WsFeOpeSolicitudOpcional::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
WsFeOpeSolicitudOpcional::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ws_fe_ope_solicitud_opcional');
$criterio->setCriteriosInicial();

$paginador = new Paginador(WsFeOpeSolicitudOpcional::getSesPagCantidad(), WsFeOpeSolicitudOpcional::getSesPag());
$ws_fe_ope_solicitud_opcionals = WsFeOpeSolicitudOpcional::getWsFeOpeSolicitudOpcionalsDesdeBackend($paginador, $criterio);

include 'ws_fe_ope_solicitud_opcional_datos.php';
?>

