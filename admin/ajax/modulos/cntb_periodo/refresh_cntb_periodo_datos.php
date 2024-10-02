<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
CntbPeriodo::setSesPag($pag);

$criterio = new Criterio(CntbPeriodo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CntbPeriodo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('cntb_periodo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(CntbPeriodo::getSesPagCantidad(), CntbPeriodo::getSesPag());
$cntb_periodos = CntbPeriodo::getCntbPeriodosDesdeBackend($paginador, $criterio);

include 'cntb_periodo_datos.php';
?>

