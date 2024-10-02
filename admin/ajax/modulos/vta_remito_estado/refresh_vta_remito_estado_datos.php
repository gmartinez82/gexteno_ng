<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaRemitoEstado::setSesPag($pag);

$criterio = new Criterio(VtaRemitoEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaRemitoEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_remito_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaRemitoEstado::getSesPagCantidad(), VtaRemitoEstado::getSesPag());
$vta_remito_estados = VtaRemitoEstado::getVtaRemitoEstadosDesdeBackend($paginador, $criterio);

include 'vta_remito_estado_datos.php';
?>

