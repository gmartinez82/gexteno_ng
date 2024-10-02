<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
MlCondition::setSesPag($pag);

$criterio = new Criterio(MlCondition::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
MlCondition::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ml_condition');
$criterio->setCriteriosInicial();

$paginador = new Paginador(MlCondition::getSesPagCantidad(), MlCondition::getSesPag());
$ml_conditions = MlCondition::getMlConditionsDesdeBackend($paginador, $criterio);

include 'ml_condition_datos.php';
?>

