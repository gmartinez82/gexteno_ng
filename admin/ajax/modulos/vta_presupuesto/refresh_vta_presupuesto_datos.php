<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaPresupuesto::setSesPag($pag);

$criterio = new Criterio(VtaPresupuesto::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaPresupuesto::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_presupuesto');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaPresupuesto::getSesPagCantidad(), VtaPresupuesto::getSesPag());
$vta_presupuestos = VtaPresupuesto::getVtaPresupuestosDesdeBackend($paginador, $criterio);

include 'vta_presupuesto_datos.php';
?>

