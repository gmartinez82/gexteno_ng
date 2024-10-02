<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaPresupuestoEstado::setSesPag($pag);

$criterio = new Criterio(VtaPresupuestoEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaPresupuestoEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_presupuesto_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaPresupuestoEstado::getSesPagCantidad(), VtaPresupuestoEstado::getSesPag());
$vta_presupuesto_estados = VtaPresupuestoEstado::getVtaPresupuestoEstadosDesdeBackend($paginador, $criterio);

include 'vta_presupuesto_estado_datos.php';
?>

