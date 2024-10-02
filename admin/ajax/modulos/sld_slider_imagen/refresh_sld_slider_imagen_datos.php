<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
SldSliderImagen::setSesPag($pag);

$criterio = new Criterio(SldSliderImagen::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
SldSliderImagen::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('sld_slider_imagen');
$criterio->setCriteriosInicial();

$paginador = new Paginador(SldSliderImagen::getSesPagCantidad(), SldSliderImagen::getSesPag());
$sld_slider_imagens = SldSliderImagen::getSldSliderImagensDesdeBackend($paginador, $criterio);

include 'sld_slider_imagen_datos.php';
?>

