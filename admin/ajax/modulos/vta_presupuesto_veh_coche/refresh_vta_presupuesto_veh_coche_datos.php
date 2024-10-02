<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaPresupuestoVehCoche::setSesPag($pag);

$criterio = new Criterio(VtaPresupuestoVehCoche::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaPresupuestoVehCoche::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_presupuesto_veh_coche');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaPresupuestoVehCoche::getSesPagCantidad(), VtaPresupuestoVehCoche::getSesPag());
$vta_presupuesto_veh_coches = VtaPresupuestoVehCoche::getVtaPresupuestoVehCochesDesdeBackend($paginador, $criterio);

include 'vta_presupuesto_veh_coche_datos.php';
?>

