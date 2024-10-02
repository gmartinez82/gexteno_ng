<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeNotaDebitoPdeNotaCredito::setSesPag($pag);

$criterio = new Criterio(PdeNotaDebitoPdeNotaCredito::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeNotaDebitoPdeNotaCredito::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_nota_debito_pde_nota_credito');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeNotaDebitoPdeNotaCredito::getSesPagCantidad(), PdeNotaDebitoPdeNotaCredito::getSesPag());
$pde_nota_debito_pde_nota_creditos = PdeNotaDebitoPdeNotaCredito::getPdeNotaDebitoPdeNotaCreditosDesdeBackend($paginador, $criterio);

include 'pde_nota_debito_pde_nota_credito_datos.php';
?>

