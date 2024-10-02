<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaRemitoTipoEstado::setSesPag($pag);

$criterio = new Criterio(VtaRemitoTipoEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaRemitoTipoEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_remito_tipo_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaRemitoTipoEstado::getSesPagCantidad(), VtaRemitoTipoEstado::getSesPag());
$vta_remito_tipo_estados = VtaRemitoTipoEstado::getVtaRemitoTipoEstadosDesdeBackend($paginador, $criterio);

include 'vta_remito_tipo_estado_datos.php';
?>

