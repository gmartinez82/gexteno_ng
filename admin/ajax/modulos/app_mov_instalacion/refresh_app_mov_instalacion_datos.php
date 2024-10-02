<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
AppMovInstalacion::setSesPag($pag);

$criterio = new Criterio(AppMovInstalacion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
AppMovInstalacion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('app_mov_instalacion');
$criterio->setCriteriosInicial();

$paginador = new Paginador(AppMovInstalacion::getSesPagCantidad(), AppMovInstalacion::getSesPag());
$app_mov_instalacions = AppMovInstalacion::getAppMovInstalacionsDesdeBackend($paginador, $criterio);

include 'app_mov_instalacion_datos.php';
?>

