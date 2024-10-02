<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
UsNavegacion::setSesPag($pag);

$criterio = new Criterio(UsNavegacion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
UsNavegacion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('us_navegacion');
$criterio->setCriteriosInicial();

$paginador = new Paginador(UsNavegacion::getSesPagCantidad(), UsNavegacion::getSesPag());
$us_navegacions = UsNavegacion::getUsNavegacionsDesdeBackend($paginador, $criterio);

include 'us_navegacion_datos.php';
?>

