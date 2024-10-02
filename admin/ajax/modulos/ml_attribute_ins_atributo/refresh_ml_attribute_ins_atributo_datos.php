<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
MlAttributeInsAtributo::setSesPag($pag);

$criterio = new Criterio(MlAttributeInsAtributo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
MlAttributeInsAtributo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ml_attribute_ins_atributo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(MlAttributeInsAtributo::getSesPagCantidad(), MlAttributeInsAtributo::getSesPag());
$ml_attribute_ins_atributos = MlAttributeInsAtributo::getMlAttributeInsAtributosDesdeBackend($paginador, $criterio);

include 'ml_attribute_ins_atributo_datos.php';
?>

