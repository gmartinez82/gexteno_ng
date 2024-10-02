<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
MlAttribute::setSesPag($pag);

$criterio = new Criterio(MlAttribute::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
MlAttribute::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ml_attribute');
$criterio->setCriteriosInicial();

$paginador = new Paginador(MlAttribute::getSesPagCantidad(), MlAttribute::getSesPag());
$ml_attributes = MlAttribute::getMlAttributesDesdeBackend($paginador, $criterio);

include 'ml_attribute_datos.php';
?>

