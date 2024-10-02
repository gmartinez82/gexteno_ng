<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuParamGeoPaisGeoPais::setSesPag($pag);

$criterio = new Criterio(EkuParamGeoPaisGeoPais::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamGeoPaisGeoPais::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_param_geo_pais_geo_pais');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuParamGeoPaisGeoPais::getSesPagCantidad(), EkuParamGeoPaisGeoPais::getSesPag());
$eku_param_geo_pais_geo_paiss = EkuParamGeoPaisGeoPais::getEkuParamGeoPaisGeoPaissDesdeBackend($paginador, $criterio);

include 'eku_param_geo_pais_geo_pais_datos.php';
?>

