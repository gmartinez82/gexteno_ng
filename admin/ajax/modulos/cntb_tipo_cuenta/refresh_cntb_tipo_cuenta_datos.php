<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
CntbTipoCuenta::setSesPag($pag);

$criterio = new Criterio(CntbTipoCuenta::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CntbTipoCuenta::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('cntb_tipo_cuenta');
$criterio->setCriteriosInicial();

$paginador = new Paginador(CntbTipoCuenta::getSesPagCantidad(), CntbTipoCuenta::getSesPag());
$cntb_tipo_cuentas = CntbTipoCuenta::getCntbTipoCuentasDesdeBackend($paginador, $criterio);

include 'cntb_tipo_cuenta_datos.php';
?>

