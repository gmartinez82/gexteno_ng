<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdiEstado::setSesPag($pag);

$criterio = new Criterio(PdiEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdiEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pdi_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdiEstado::getSesPagCantidad(), PdiEstado::getSesPag());
$pdi_estados = PdiEstado::getPdiEstadosDesdeBackend($paginador, $criterio);

include 'pdi_estado_datos.php';
?>

