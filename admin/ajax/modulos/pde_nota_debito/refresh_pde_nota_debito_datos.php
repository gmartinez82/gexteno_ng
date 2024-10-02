<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeNotaDebito::setSesPag($pag);

$criterio = new Criterio(PdeNotaDebito::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeNotaDebito::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_nota_debito');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeNotaDebito::getSesPagCantidad(), PdeNotaDebito::getSesPag());
$pde_nota_debitos = PdeNotaDebito::getPdeNotaDebitosDesdeBackend($paginador, $criterio);

include 'pde_nota_debito_datos.php';
?>

