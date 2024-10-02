<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
CntbDiarioAsientoPdeNotaCredito::setSesPag($pag);

$criterio = new Criterio(CntbDiarioAsientoPdeNotaCredito::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CntbDiarioAsientoPdeNotaCredito::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('cntb_diario_asiento_pde_nota_credito');
$criterio->setCriteriosInicial();

$paginador = new Paginador(CntbDiarioAsientoPdeNotaCredito::getSesPagCantidad(), CntbDiarioAsientoPdeNotaCredito::getSesPag());
$cntb_diario_asiento_pde_nota_creditos = CntbDiarioAsientoPdeNotaCredito::getCntbDiarioAsientoPdeNotaCreditosDesdeBackend($paginador, $criterio);

include 'cntb_diario_asiento_pde_nota_credito_datos.php';
?>

