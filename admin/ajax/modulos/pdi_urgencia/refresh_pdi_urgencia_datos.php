<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdiUrgencia::setSesPag($pag);

$criterio = new Criterio(PdiUrgencia::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdiUrgencia::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pdi_urgencia');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdiUrgencia::getSesPagCantidad(), PdiUrgencia::getSesPag());
$pdi_urgencias = PdiUrgencia::getPdiUrgenciasDesdeBackend($paginador, $criterio);

include 'pdi_urgencia_datos.php';
?>

