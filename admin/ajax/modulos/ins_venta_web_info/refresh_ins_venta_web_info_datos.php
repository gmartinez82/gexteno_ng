<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
InsVentaWebInfo::setSesPag($pag);

$criterio = new Criterio(InsVentaWebInfo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
InsVentaWebInfo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ins_venta_web_info');
$criterio->setCriteriosInicial();

$paginador = new Paginador(InsVentaWebInfo::getSesPagCantidad(), InsVentaWebInfo::getSesPag());
$ins_venta_web_infos = InsVentaWebInfo::getInsVentaWebInfosDesdeBackend($paginador, $criterio);

include 'ins_venta_web_info_datos.php';
?>

