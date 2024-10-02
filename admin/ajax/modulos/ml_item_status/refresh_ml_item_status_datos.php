<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
MlItemStatus::setSesPag($pag);

$criterio = new Criterio(MlItemStatus::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
MlItemStatus::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ml_item_status');
$criterio->setCriteriosInicial();

$paginador = new Paginador(MlItemStatus::getSesPagCantidad(), MlItemStatus::getSesPag());
$ml_item_statuss = MlItemStatus::getMlItemStatussDesdeBackend($paginador, $criterio);

include 'ml_item_status_datos.php';
?>

