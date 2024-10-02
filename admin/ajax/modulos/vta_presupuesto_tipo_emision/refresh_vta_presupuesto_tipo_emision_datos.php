<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaPresupuestoTipoEmision::setSesPag($pag);

$criterio = new Criterio(VtaPresupuestoTipoEmision::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaPresupuestoTipoEmision::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_presupuesto_tipo_emision');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaPresupuestoTipoEmision::getSesPagCantidad(), VtaPresupuestoTipoEmision::getSesPag());
$vta_presupuesto_tipo_emisions = VtaPresupuestoTipoEmision::getVtaPresupuestoTipoEmisionsDesdeBackend($paginador, $criterio);

include 'vta_presupuesto_tipo_emision_datos.php';
?>

