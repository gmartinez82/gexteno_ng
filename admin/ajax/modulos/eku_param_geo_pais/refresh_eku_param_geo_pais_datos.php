<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuParamGeoPais::setSesPag($pag);

$criterio = new Criterio(EkuParamGeoPais::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamGeoPais::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_param_geo_pais');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuParamGeoPais::getSesPagCantidad(), EkuParamGeoPais::getSesPag());
$eku_param_geo_paiss = EkuParamGeoPais::getEkuParamGeoPaissDesdeBackend($paginador, $criterio);

include 'eku_param_geo_pais_datos.php';
?>

