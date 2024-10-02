<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeNotaDebitoPdeTributo::setSesPag($pag);

$criterio = new Criterio(PdeNotaDebitoPdeTributo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeNotaDebitoPdeTributo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_nota_debito_pde_tributo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeNotaDebitoPdeTributo::getSesPagCantidad(), PdeNotaDebitoPdeTributo::getSesPag());
$pde_nota_debito_pde_tributos = PdeNotaDebitoPdeTributo::getPdeNotaDebitoPdeTributosDesdeBackend($paginador, $criterio);

include 'pde_nota_debito_pde_tributo_datos.php';
?>

