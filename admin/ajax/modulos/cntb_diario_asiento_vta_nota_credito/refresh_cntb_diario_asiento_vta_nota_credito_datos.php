<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
CntbDiarioAsientoVtaNotaCredito::setSesPag($pag);

$criterio = new Criterio(CntbDiarioAsientoVtaNotaCredito::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CntbDiarioAsientoVtaNotaCredito::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('cntb_diario_asiento_vta_nota_credito');
$criterio->setCriteriosInicial();

$paginador = new Paginador(CntbDiarioAsientoVtaNotaCredito::getSesPagCantidad(), CntbDiarioAsientoVtaNotaCredito::getSesPag());
$cntb_diario_asiento_vta_nota_creditos = CntbDiarioAsientoVtaNotaCredito::getCntbDiarioAsientoVtaNotaCreditosDesdeBackend($paginador, $criterio);

include 'cntb_diario_asiento_vta_nota_credito_datos.php';
?>

