<?php
include_once '_autoload.php';

$pag = Gral::getVars(2, 'pag', 1);
VtaPresupuestoConflicto::setSesPag($pag);

$criterio = new Criterio(VtaPresupuestoConflicto::SES_CRITERIOS);
$criterio->addTabla('vta_presupuesto_conflicto');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaPresupuestoConflicto::getSesPagCantidad(), VtaPresupuestoConflicto::getSesPag());
$vta_presupuesto_conflictos = VtaPresupuestoConflicto::getVtaPresupuestoConflictos($paginador, $criterio);

include 'vta_presupuesto_conflicto_gestion_datos.php';
?>

