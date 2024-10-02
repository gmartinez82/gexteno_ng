<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
CntbCuenta::setSesPag($pag);

$criterio = new Criterio(CntbCuenta::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CntbCuenta::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('cntb_cuenta');
$criterio->setCriteriosInicial();

$paginador = new Paginador(CntbCuenta::getSesPagCantidad(), CntbCuenta::getSesPag());
$cntb_cuentas = CntbCuenta::getCntbCuentasDesdeBackend($paginador, $criterio);

include 'cntb_cuenta_datos.php';
?>

