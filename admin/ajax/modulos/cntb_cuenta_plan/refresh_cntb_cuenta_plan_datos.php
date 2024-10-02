<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
CntbCuentaPlan::setSesPag($pag);

$criterio = new Criterio(CntbCuentaPlan::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CntbCuentaPlan::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('cntb_cuenta_plan');
$criterio->setCriteriosInicial();

$paginador = new Paginador(CntbCuentaPlan::getSesPagCantidad(), CntbCuentaPlan::getSesPag());
$cntb_cuenta_plans = CntbCuentaPlan::getCntbCuentaPlansDesdeBackend($paginador, $criterio);

include 'cntb_cuenta_plan_datos.php';
?>

