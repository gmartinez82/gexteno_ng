<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
MlValue::setSesPag($pag);

$criterio = new Criterio(MlValue::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
MlValue::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ml_value');
$criterio->setCriteriosInicial();

$paginador = new Paginador(MlValue::getSesPagCantidad(), MlValue::getSesPag());
$ml_values = MlValue::getMlValuesDesdeBackend($paginador, $criterio);

include 'ml_value_datos.php';
?>

