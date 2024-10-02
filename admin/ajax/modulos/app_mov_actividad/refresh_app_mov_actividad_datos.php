<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
AppMovActividad::setSesPag($pag);

$criterio = new Criterio(AppMovActividad::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
AppMovActividad::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('app_mov_actividad');
$criterio->setCriteriosInicial();

$paginador = new Paginador(AppMovActividad::getSesPagCantidad(), AppMovActividad::getSesPag());
$app_mov_actividads = AppMovActividad::getAppMovActividadsDesdeBackend($paginador, $criterio);

include 'app_mov_actividad_datos.php';
?>

