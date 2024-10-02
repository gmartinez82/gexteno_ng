<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
MlAttributeType::setSesPag($pag);

$criterio = new Criterio(MlAttributeType::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
MlAttributeType::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ml_attribute_type');
$criterio->setCriteriosInicial();

$paginador = new Paginador(MlAttributeType::getSesPagCantidad(), MlAttributeType::getSesPag());
$ml_attribute_types = MlAttributeType::getMlAttributeTypesDesdeBackend($paginador, $criterio);

include 'ml_attribute_type_datos.php';
?>

