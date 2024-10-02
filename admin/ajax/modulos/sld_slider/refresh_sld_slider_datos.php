<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
SldSlider::setSesPag($pag);

$criterio = new Criterio(SldSlider::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
SldSlider::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('sld_slider');
$criterio->setCriteriosInicial();

$paginador = new Paginador(SldSlider::getSesPagCantidad(), SldSlider::getSesPag());
$sld_sliders = SldSlider::getSldSlidersDesdeBackend($paginador, $criterio);

include 'sld_slider_datos.php';
?>

