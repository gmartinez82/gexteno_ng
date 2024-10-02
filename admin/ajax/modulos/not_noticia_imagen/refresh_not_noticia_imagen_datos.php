<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
NotNoticiaImagen::setSesPag($pag);

$criterio = new Criterio(NotNoticiaImagen::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
NotNoticiaImagen::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('not_noticia_imagen');
$criterio->setCriteriosInicial();

$paginador = new Paginador(NotNoticiaImagen::getSesPagCantidad(), NotNoticiaImagen::getSesPag());
$not_noticia_imagens = NotNoticiaImagen::getNotNoticiaImagensDesdeBackend($paginador, $criterio);

include 'not_noticia_imagen_datos.php';
?>

