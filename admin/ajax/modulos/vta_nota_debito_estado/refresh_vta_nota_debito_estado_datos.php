<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaNotaDebitoEstado::setSesPag($pag);

$criterio = new Criterio(VtaNotaDebitoEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaNotaDebitoEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_nota_debito_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaNotaDebitoEstado::getSesPagCantidad(), VtaNotaDebitoEstado::getSesPag());
$vta_nota_debito_estados = VtaNotaDebitoEstado::getVtaNotaDebitoEstadosDesdeBackend($paginador, $criterio);

include 'vta_nota_debito_estado_datos.php';
?>

