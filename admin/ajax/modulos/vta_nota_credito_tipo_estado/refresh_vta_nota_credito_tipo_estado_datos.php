<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaNotaCreditoTipoEstado::setSesPag($pag);

$criterio = new Criterio(VtaNotaCreditoTipoEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaNotaCreditoTipoEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_nota_credito_tipo_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaNotaCreditoTipoEstado::getSesPagCantidad(), VtaNotaCreditoTipoEstado::getSesPag());
$vta_nota_credito_tipo_estados = VtaNotaCreditoTipoEstado::getVtaNotaCreditoTipoEstadosDesdeBackend($paginador, $criterio);

include 'vta_nota_credito_tipo_estado_datos.php';
?>

