<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
CntbDiarioAsientoPdeRecibo::setSesPag($pag);

$criterio = new Criterio(CntbDiarioAsientoPdeRecibo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CntbDiarioAsientoPdeRecibo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('cntb_diario_asiento_pde_recibo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(CntbDiarioAsientoPdeRecibo::getSesPagCantidad(), CntbDiarioAsientoPdeRecibo::getSesPag());
$cntb_diario_asiento_pde_recibos = CntbDiarioAsientoPdeRecibo::getCntbDiarioAsientoPdeRecibosDesdeBackend($paginador, $criterio);

include 'cntb_diario_asiento_pde_recibo_datos.php';
?>

