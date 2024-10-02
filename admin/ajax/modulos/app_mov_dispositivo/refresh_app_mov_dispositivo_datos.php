<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
AppMovDispositivo::setSesPag($pag);

$criterio = new Criterio(AppMovDispositivo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
AppMovDispositivo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('app_mov_dispositivo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(AppMovDispositivo::getSesPagCantidad(), AppMovDispositivo::getSesPag());
$app_mov_dispositivos = AppMovDispositivo::getAppMovDispositivosDesdeBackend($paginador, $criterio);

include 'app_mov_dispositivo_datos.php';
?>

