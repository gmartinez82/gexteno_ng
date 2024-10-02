<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
CntbDiarioAsientoVtaRecibo::setSesPag($pag);

$criterio = new Criterio(CntbDiarioAsientoVtaRecibo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CntbDiarioAsientoVtaRecibo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('cntb_diario_asiento_vta_recibo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(CntbDiarioAsientoVtaRecibo::getSesPagCantidad(), CntbDiarioAsientoVtaRecibo::getSesPag());
$cntb_diario_asiento_vta_recibos = CntbDiarioAsientoVtaRecibo::getCntbDiarioAsientoVtaRecibosDesdeBackend($paginador, $criterio);

include 'cntb_diario_asiento_vta_recibo_datos.php';
?>

