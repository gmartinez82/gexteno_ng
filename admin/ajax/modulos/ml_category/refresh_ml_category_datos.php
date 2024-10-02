<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
MlCategory::setSesPag($pag);

$criterio = new Criterio(MlCategory::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
MlCategory::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ml_category');
$criterio->setCriteriosInicial();

$paginador = new Paginador(MlCategory::getSesPagCantidad(), MlCategory::getSesPag());
$ml_categorys = MlCategory::getMlCategorysDesdeBackend($paginador, $criterio);

include 'ml_category_datos.php';
?>

