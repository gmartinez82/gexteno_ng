<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuParamGeoDistrito::setSesPag($pag);

$criterio = new Criterio(EkuParamGeoDistrito::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamGeoDistrito::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_param_geo_distrito');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuParamGeoDistrito::getSesPagCantidad(), EkuParamGeoDistrito::getSesPag());
$eku_param_geo_distritos = EkuParamGeoDistrito::getEkuParamGeoDistritosDesdeBackend($paginador, $criterio);

include 'eku_param_geo_distrito_datos.php';
?>

