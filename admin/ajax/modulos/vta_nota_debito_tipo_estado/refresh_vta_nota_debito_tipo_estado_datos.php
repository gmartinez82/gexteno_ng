<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaNotaDebitoTipoEstado::setSesPag($pag);

$criterio = new Criterio(VtaNotaDebitoTipoEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaNotaDebitoTipoEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_nota_debito_tipo_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaNotaDebitoTipoEstado::getSesPagCantidad(), VtaNotaDebitoTipoEstado::getSesPag());
$vta_nota_debito_tipo_estados = VtaNotaDebitoTipoEstado::getVtaNotaDebitoTipoEstadosDesdeBackend($paginador, $criterio);

include 'vta_nota_debito_tipo_estado_datos.php';
?>

