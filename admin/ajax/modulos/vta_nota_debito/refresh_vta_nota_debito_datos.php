<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaNotaDebito::setSesPag($pag);

$criterio = new Criterio(VtaNotaDebito::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaNotaDebito::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_nota_debito');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaNotaDebito::getSesPagCantidad(), VtaNotaDebito::getSesPag());
$vta_nota_debitos = VtaNotaDebito::getVtaNotaDebitosDesdeBackend($paginador, $criterio);

include 'vta_nota_debito_datos.php';
?>

