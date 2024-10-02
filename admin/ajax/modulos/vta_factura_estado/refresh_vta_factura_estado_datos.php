<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaFacturaEstado::setSesPag($pag);

$criterio = new Criterio(VtaFacturaEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaFacturaEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_factura_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaFacturaEstado::getSesPagCantidad(), VtaFacturaEstado::getSesPag());
$vta_factura_estados = VtaFacturaEstado::getVtaFacturaEstadosDesdeBackend($paginador, $criterio);

include 'vta_factura_estado_datos.php';
?>

