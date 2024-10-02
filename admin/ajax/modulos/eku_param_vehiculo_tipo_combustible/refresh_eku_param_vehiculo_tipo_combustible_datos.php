<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuParamVehiculoTipoCombustible::setSesPag($pag);

$criterio = new Criterio(EkuParamVehiculoTipoCombustible::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamVehiculoTipoCombustible::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_param_vehiculo_tipo_combustible');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuParamVehiculoTipoCombustible::getSesPagCantidad(), EkuParamVehiculoTipoCombustible::getSesPag());
$eku_param_vehiculo_tipo_combustibles = EkuParamVehiculoTipoCombustible::getEkuParamVehiculoTipoCombustiblesDesdeBackend($paginador, $criterio);

include 'eku_param_vehiculo_tipo_combustible_datos.php';
?>

