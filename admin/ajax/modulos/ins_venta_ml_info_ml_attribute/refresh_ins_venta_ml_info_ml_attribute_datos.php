<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
InsVentaMlInfoMlAttribute::setSesPag($pag);

$criterio = new Criterio(InsVentaMlInfoMlAttribute::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
InsVentaMlInfoMlAttribute::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ins_venta_ml_info_ml_attribute');
$criterio->setCriteriosInicial();

$paginador = new Paginador(InsVentaMlInfoMlAttribute::getSesPagCantidad(), InsVentaMlInfoMlAttribute::getSesPag());
$ins_venta_ml_info_ml_attributes = InsVentaMlInfoMlAttribute::getInsVentaMlInfoMlAttributesDesdeBackend($paginador, $criterio);

include 'ins_venta_ml_info_ml_attribute_datos.php';
?>

