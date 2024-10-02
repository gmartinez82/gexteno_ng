<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
NovNovedadImagen::setSesPag($pag);

$criterio = new Criterio(NovNovedadImagen::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
NovNovedadImagen::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('nov_novedad_imagen');
$criterio->setCriteriosInicial();

$paginador = new Paginador(NovNovedadImagen::getSesPagCantidad(), NovNovedadImagen::getSesPag());
$nov_novedad_imagens = NovNovedadImagen::getNovNovedadImagensDesdeBackend($paginador, $criterio);

include 'nov_novedad_imagen_datos.php';
?>

