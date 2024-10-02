<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeUrgencia::setSesPag($pag);

$criterio = new Criterio(PdeUrgencia::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeUrgencia::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_urgencia');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeUrgencia::getSesPagCantidad(), PdeUrgencia::getSesPag());
$pde_urgencias = PdeUrgencia::getPdeUrgenciasDesdeBackend($paginador, $criterio);

include 'pde_urgencia_datos.php';
?>

