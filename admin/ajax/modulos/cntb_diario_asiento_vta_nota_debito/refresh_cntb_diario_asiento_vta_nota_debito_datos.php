<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
CntbDiarioAsientoVtaNotaDebito::setSesPag($pag);

$criterio = new Criterio(CntbDiarioAsientoVtaNotaDebito::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CntbDiarioAsientoVtaNotaDebito::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('cntb_diario_asiento_vta_nota_debito');
$criterio->setCriteriosInicial();

$paginador = new Paginador(CntbDiarioAsientoVtaNotaDebito::getSesPagCantidad(), CntbDiarioAsientoVtaNotaDebito::getSesPag());
$cntb_diario_asiento_vta_nota_debitos = CntbDiarioAsientoVtaNotaDebito::getCntbDiarioAsientoVtaNotaDebitosDesdeBackend($paginador, $criterio);

include 'cntb_diario_asiento_vta_nota_debito_datos.php';
?>

