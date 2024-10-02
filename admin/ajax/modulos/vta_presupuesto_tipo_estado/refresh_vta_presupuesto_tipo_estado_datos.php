<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaPresupuestoTipoEstado::setSesPag($pag);

$criterio = new Criterio(VtaPresupuestoTipoEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaPresupuestoTipoEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_presupuesto_tipo_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaPresupuestoTipoEstado::getSesPagCantidad(), VtaPresupuestoTipoEstado::getSesPag());
$vta_presupuesto_tipo_estados = VtaPresupuestoTipoEstado::getVtaPresupuestoTipoEstadosDesdeBackend($paginador, $criterio);

include 'vta_presupuesto_tipo_estado_datos.php';
?>

