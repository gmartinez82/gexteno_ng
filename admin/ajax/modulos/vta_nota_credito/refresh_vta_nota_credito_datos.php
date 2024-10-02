<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaNotaCredito::setSesPag($pag);

$criterio = new Criterio(VtaNotaCredito::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaNotaCredito::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_nota_credito');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaNotaCredito::getSesPagCantidad(), VtaNotaCredito::getSesPag());
$vta_nota_creditos = VtaNotaCredito::getVtaNotaCreditosDesdeBackend($paginador, $criterio);

include 'vta_nota_credito_datos.php';
?>

