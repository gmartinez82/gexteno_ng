<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
NotVideo::setSesPag($pag);

$criterio = new Criterio(NotVideo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
NotVideo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('not_video');
$criterio->setCriteriosInicial();

$paginador = new Paginador(NotVideo::getSesPagCantidad(), NotVideo::getSesPag());
$not_videos = NotVideo::getNotVideosDesdeBackend($paginador, $criterio);

include 'not_video_datos.php';
?>

