<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
ConfVariable::setSesPag($pag);

$criterio = new Criterio(ConfVariable::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
ConfVariable::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('conf_variable');
$criterio->setCriteriosInicial();

$paginador = new Paginador(ConfVariable::getSesPagCantidad(), ConfVariable::getSesPag());
$conf_variables = ConfVariable::getConfVariablesDesdeBackend($paginador, $criterio);

include 'conf_variable_datos.php';
?>

