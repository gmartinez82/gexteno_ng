<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaReciboTipoEstado::setSesPag($pag);

$criterio = new Criterio(VtaReciboTipoEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaReciboTipoEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_recibo_tipo_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaReciboTipoEstado::getSesPagCantidad(), VtaReciboTipoEstado::getSesPag());
$vta_recibo_tipo_estados = VtaReciboTipoEstado::getVtaReciboTipoEstadosDesdeBackend($paginador, $criterio);

include 'vta_recibo_tipo_estado_datos.php';
?>

