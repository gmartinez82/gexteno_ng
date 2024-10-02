<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaTipoPuntoVenta::setSesPag($pag);

$criterio = new Criterio(VtaTipoPuntoVenta::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaTipoPuntoVenta::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_tipo_punto_venta');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaTipoPuntoVenta::getSesPagCantidad(), VtaTipoPuntoVenta::getSesPag());
$vta_tipo_punto_ventas = VtaTipoPuntoVenta::getVtaTipoPuntoVentasDesdeBackend($paginador, $criterio);

include 'vta_tipo_punto_venta_datos.php';
?>

