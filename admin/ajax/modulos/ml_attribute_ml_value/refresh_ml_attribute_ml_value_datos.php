<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
MlAttributeMlValue::setSesPag($pag);

$criterio = new Criterio(MlAttributeMlValue::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
MlAttributeMlValue::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ml_attribute_ml_value');
$criterio->setCriteriosInicial();

$paginador = new Paginador(MlAttributeMlValue::getSesPagCantidad(), MlAttributeMlValue::getSesPag());
$ml_attribute_ml_values = MlAttributeMlValue::getMlAttributeMlValuesDesdeBackend($paginador, $criterio);

include 'ml_attribute_ml_value_datos.php';
?>

