<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
MlCategoryMlShippingMode::setSesPag($pag);

$criterio = new Criterio(MlCategoryMlShippingMode::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
MlCategoryMlShippingMode::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ml_category_ml_shipping_mode');
$criterio->setCriteriosInicial();

$paginador = new Paginador(MlCategoryMlShippingMode::getSesPagCantidad(), MlCategoryMlShippingMode::getSesPag());
$ml_category_ml_shipping_modes = MlCategoryMlShippingMode::getMlCategoryMlShippingModesDesdeBackend($paginador, $criterio);

include 'ml_category_ml_shipping_mode_datos.php';
?>

