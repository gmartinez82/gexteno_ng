<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
MlListingType::setSesPag($pag);

$criterio = new Criterio(MlListingType::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
MlListingType::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ml_listing_type');
$criterio->setCriteriosInicial();

$paginador = new Paginador(MlListingType::getSesPagCantidad(), MlListingType::getSesPag());
$ml_listing_types = MlListingType::getMlListingTypesDesdeBackend($paginador, $criterio);

include 'ml_listing_type_datos.php';
?>

