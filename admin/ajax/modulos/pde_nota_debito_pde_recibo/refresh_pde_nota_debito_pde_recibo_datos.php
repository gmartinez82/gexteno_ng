<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeNotaDebitoPdeRecibo::setSesPag($pag);

$criterio = new Criterio(PdeNotaDebitoPdeRecibo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeNotaDebitoPdeRecibo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_nota_debito_pde_recibo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeNotaDebitoPdeRecibo::getSesPagCantidad(), PdeNotaDebitoPdeRecibo::getSesPag());
$pde_nota_debito_pde_recibos = PdeNotaDebitoPdeRecibo::getPdeNotaDebitoPdeRecibosDesdeBackend($paginador, $criterio);

include 'pde_nota_debito_pde_recibo_datos.php';
?>

