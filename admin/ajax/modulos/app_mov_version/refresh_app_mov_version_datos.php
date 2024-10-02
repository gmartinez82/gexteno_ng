<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
AppMovVersion::setSesPag($pag);

$criterio = new Criterio(AppMovVersion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
AppMovVersion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('app_mov_version');
$criterio->setCriteriosInicial();

$paginador = new Paginador(AppMovVersion::getSesPagCantidad(), AppMovVersion::getSesPag());
$app_mov_versions = AppMovVersion::getAppMovVersionsDesdeBackend($paginador, $criterio);

include 'app_mov_version_datos.php';
?>

