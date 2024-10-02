<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
NotNoticiaArchivo::setSesPag($pag);

$criterio = new Criterio(NotNoticiaArchivo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
NotNoticiaArchivo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('not_noticia_archivo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(NotNoticiaArchivo::getSesPagCantidad(), NotNoticiaArchivo::getSesPag());
$not_noticia_archivos = NotNoticiaArchivo::getNotNoticiaArchivosDesdeBackend($paginador, $criterio);

include 'not_noticia_archivo_datos.php';
?>

