<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeOrdenPagoPdeNotaDebito::setSesPag($pag);

$criterio = new Criterio(PdeOrdenPagoPdeNotaDebito::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeOrdenPagoPdeNotaDebito::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_orden_pago_pde_nota_debito');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeOrdenPagoPdeNotaDebito::getSesPagCantidad(), PdeOrdenPagoPdeNotaDebito::getSesPag());
$pde_orden_pago_pde_nota_debitos = PdeOrdenPagoPdeNotaDebito::getPdeOrdenPagoPdeNotaDebitosDesdeBackend($paginador, $criterio);

include 'pde_orden_pago_pde_nota_debito_datos.php';
?>

