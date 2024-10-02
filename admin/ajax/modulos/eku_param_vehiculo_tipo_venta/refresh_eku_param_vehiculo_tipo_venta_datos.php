<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuParamVehiculoTipoVenta::setSesPag($pag);

$criterio = new Criterio(EkuParamVehiculoTipoVenta::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamVehiculoTipoVenta::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_param_vehiculo_tipo_venta');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuParamVehiculoTipoVenta::getSesPagCantidad(), EkuParamVehiculoTipoVenta::getSesPag());
$eku_param_vehiculo_tipo_ventas = EkuParamVehiculoTipoVenta::getEkuParamVehiculoTipoVentasDesdeBackend($paginador, $criterio);

include 'eku_param_vehiculo_tipo_venta_datos.php';
?>

