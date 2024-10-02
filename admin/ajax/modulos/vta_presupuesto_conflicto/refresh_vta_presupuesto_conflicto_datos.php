<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaPresupuestoConflicto::setSesPag($pag);

$criterio = new Criterio(VtaPresupuestoConflicto::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaPresupuestoConflicto::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_presupuesto_conflicto');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaPresupuestoConflicto::getSesPagCantidad(), VtaPresupuestoConflicto::getSesPag());
$vta_presupuesto_conflictos = VtaPresupuestoConflicto::getVtaPresupuestoConflictosDesdeBackend($paginador, $criterio);

include 'vta_presupuesto_conflicto_datos.php';
?>

