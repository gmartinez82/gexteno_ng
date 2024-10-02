<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralEscenario::setSesPag($pag);

$criterio = new Criterio(GralEscenario::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralEscenario::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_escenario');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralEscenario::getSesPagCantidad(), GralEscenario::getSesPag());
$gral_escenarios = GralEscenario::getGralEscenariosDesdeBackend($paginador, $criterio);

include 'gral_escenario_datos.php';
?>

