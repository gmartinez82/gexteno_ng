<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
CntbTipoSaldo::setSesPag($pag);

$criterio = new Criterio(CntbTipoSaldo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CntbTipoSaldo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('cntb_tipo_saldo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(CntbTipoSaldo::getSesPagCantidad(), CntbTipoSaldo::getSesPag());
$cntb_tipo_saldos = CntbTipoSaldo::getCntbTipoSaldosDesdeBackend($paginador, $criterio);

include 'cntb_tipo_saldo_datos.php';
?>

