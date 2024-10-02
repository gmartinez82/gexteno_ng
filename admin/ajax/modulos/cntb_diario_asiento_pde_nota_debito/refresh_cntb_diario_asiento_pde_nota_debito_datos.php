<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
CntbDiarioAsientoPdeNotaDebito::setSesPag($pag);

$criterio = new Criterio(CntbDiarioAsientoPdeNotaDebito::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CntbDiarioAsientoPdeNotaDebito::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('cntb_diario_asiento_pde_nota_debito');
$criterio->setCriteriosInicial();

$paginador = new Paginador(CntbDiarioAsientoPdeNotaDebito::getSesPagCantidad(), CntbDiarioAsientoPdeNotaDebito::getSesPag());
$cntb_diario_asiento_pde_nota_debitos = CntbDiarioAsientoPdeNotaDebito::getCntbDiarioAsientoPdeNotaDebitosDesdeBackend($paginador, $criterio);

include 'cntb_diario_asiento_pde_nota_debito_datos.php';
?>

