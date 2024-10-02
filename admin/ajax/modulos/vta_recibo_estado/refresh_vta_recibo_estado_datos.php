<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaReciboEstado::setSesPag($pag);

$criterio = new Criterio(VtaReciboEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaReciboEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_recibo_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaReciboEstado::getSesPagCantidad(), VtaReciboEstado::getSesPag());
$vta_recibo_estados = VtaReciboEstado::getVtaReciboEstadosDesdeBackend($paginador, $criterio);

include 'vta_recibo_estado_datos.php';
?>

