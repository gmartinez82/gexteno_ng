<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
AppMovModulo::setSesPag($pag);

$criterio = new Criterio(AppMovModulo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
AppMovModulo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('app_mov_modulo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(AppMovModulo::getSesPagCantidad(), AppMovModulo::getSesPag());
$app_mov_modulos = AppMovModulo::getAppMovModulosDesdeBackend($paginador, $criterio);

include 'app_mov_modulo_datos.php';
?>

