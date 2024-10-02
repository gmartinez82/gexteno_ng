<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuParamTrasladoTipoIdentificacionVehiculo::setSesPag($pag);

$criterio = new Criterio(EkuParamTrasladoTipoIdentificacionVehiculo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamTrasladoTipoIdentificacionVehiculo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_param_traslado_tipo_identificacion_vehiculo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuParamTrasladoTipoIdentificacionVehiculo::getSesPagCantidad(), EkuParamTrasladoTipoIdentificacionVehiculo::getSesPag());
$eku_param_traslado_tipo_identificacion_vehiculos = EkuParamTrasladoTipoIdentificacionVehiculo::getEkuParamTrasladoTipoIdentificacionVehiculosDesdeBackend($paginador, $criterio);

include 'eku_param_traslado_tipo_identificacion_vehiculo_datos.php';
?>

