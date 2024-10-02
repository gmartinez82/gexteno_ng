<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
InsVentaMlInfo::setSesPag($pag);

$criterio = new Criterio(InsVentaMlInfo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
InsVentaMlInfo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ins_venta_ml_info');
$criterio->setCriteriosInicial();

$paginador = new Paginador(InsVentaMlInfo::getSesPagCantidad(), InsVentaMlInfo::getSesPag());
$ins_venta_ml_infos = InsVentaMlInfo::getInsVentaMlInfosDesdeBackend($paginador, $criterio);

include 'ins_venta_ml_info_datos.php';
?>

