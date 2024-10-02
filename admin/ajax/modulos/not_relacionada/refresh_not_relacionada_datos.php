<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
NotRelacionada::setSesPag($pag);

$criterio = new Criterio(NotRelacionada::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
NotRelacionada::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('not_relacionada');
$criterio->setCriteriosInicial();

$paginador = new Paginador(NotRelacionada::getSesPagCantidad(), NotRelacionada::getSesPag());
$not_relacionadas = NotRelacionada::getNotRelacionadasDesdeBackend($paginador, $criterio);

include 'not_relacionada_datos.php';
?>

