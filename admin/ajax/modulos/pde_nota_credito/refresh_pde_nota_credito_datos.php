<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeNotaCredito::setSesPag($pag);

$criterio = new Criterio(PdeNotaCredito::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeNotaCredito::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_nota_credito');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeNotaCredito::getSesPagCantidad(), PdeNotaCredito::getSesPag());
$pde_nota_creditos = PdeNotaCredito::getPdeNotaCreditosDesdeBackend($paginador, $criterio);

include 'pde_nota_credito_datos.php';
?>

