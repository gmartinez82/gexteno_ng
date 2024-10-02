<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
MlCategoryMlAttribute::setSesPag($pag);

$criterio = new Criterio(MlCategoryMlAttribute::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
MlCategoryMlAttribute::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ml_category_ml_attribute');
$criterio->setCriteriosInicial();

$paginador = new Paginador(MlCategoryMlAttribute::getSesPagCantidad(), MlCategoryMlAttribute::getSesPag());
$ml_category_ml_attributes = MlCategoryMlAttribute::getMlCategoryMlAttributesDesdeBackend($paginador, $criterio);

include 'ml_category_ml_attribute_datos.php';
?>

