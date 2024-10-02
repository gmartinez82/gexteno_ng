<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
CntbDiarioAsientoCuenta::setSesPag($pag);

$criterio = new Criterio(CntbDiarioAsientoCuenta::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CntbDiarioAsientoCuenta::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('cntb_diario_asiento_cuenta');
$criterio->setCriteriosInicial();

$paginador = new Paginador(CntbDiarioAsientoCuenta::getSesPagCantidad(), CntbDiarioAsientoCuenta::getSesPag());
$cntb_diario_asiento_cuentas = CntbDiarioAsientoCuenta::getCntbDiarioAsientoCuentasDesdeBackend($paginador, $criterio);

include 'cntb_diario_asiento_cuenta_datos.php';
?>

