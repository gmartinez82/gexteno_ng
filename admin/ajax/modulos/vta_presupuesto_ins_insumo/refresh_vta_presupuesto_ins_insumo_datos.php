<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaPresupuestoInsInsumo::setSesPag($pag);

$criterio = new Criterio(VtaPresupuestoInsInsumo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaPresupuestoInsInsumo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_presupuesto_ins_insumo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaPresupuestoInsInsumo::getSesPagCantidad(), VtaPresupuestoInsInsumo::getSesPag());
$vta_presupuesto_ins_insumos = VtaPresupuestoInsInsumo::getVtaPresupuestoInsInsumosDesdeBackend($paginador, $criterio);

include 'vta_presupuesto_ins_insumo_datos.php';
?>

