<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralCentroCosto::setSesPag($pag);

$criterio = new Criterio(GralCentroCosto::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralCentroCosto::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_centro_costo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralCentroCosto::getSesPagCantidad(), GralCentroCosto::getSesPag());
$gral_centro_costos = GralCentroCosto::getGralCentroCostosDesdeBackend($paginador, $criterio);

include 'gral_centro_costo_datos.php';
?>

