<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
NotTipoVideo::setSesPag($pag);

$criterio = new Criterio(NotTipoVideo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
NotTipoVideo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('not_tipo_video');
$criterio->setCriteriosInicial();

$paginador = new Paginador(NotTipoVideo::getSesPagCantidad(), NotTipoVideo::getSesPag());
$not_tipo_videos = NotTipoVideo::getNotTipoVideosDesdeBackend($paginador, $criterio);

include 'not_tipo_video_datos.php';
?>

