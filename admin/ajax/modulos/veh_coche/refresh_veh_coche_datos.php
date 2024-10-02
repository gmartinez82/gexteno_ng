<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VehCoche::setSesPag($pag);

$criterio = new Criterio(VehCoche::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VehCoche::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('veh_coche');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VehCoche::getSesPagCantidad(), VehCoche::getSesPag());
$veh_coches = VehCoche::getVehCochesDesdeBackend($paginador, $criterio);

include 'veh_coche_datos.php';
?>

