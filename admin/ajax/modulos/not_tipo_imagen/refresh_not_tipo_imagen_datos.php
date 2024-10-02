<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
NotTipoImagen::setSesPag($pag);

$criterio = new Criterio(NotTipoImagen::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
NotTipoImagen::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('not_tipo_imagen');
$criterio->setCriteriosInicial();

$paginador = new Paginador(NotTipoImagen::getSesPagCantidad(), NotTipoImagen::getSesPag());
$not_tipo_imagens = NotTipoImagen::getNotTipoImagensDesdeBackend($paginador, $criterio);

include 'not_tipo_imagen_datos.php';
?>

