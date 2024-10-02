<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaPoliticaDescuento::setSesPag($pag);

$criterio = new Criterio(VtaPoliticaDescuento::SES_CRITERIOS);
$criterio->addTabla('vta_politica_descuento');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaPoliticaDescuento::getSesPagCantidad(), VtaPoliticaDescuento::getSesPag());
$vta_politica_descuentos = VtaPoliticaDescuento::getVtaPoliticaDescuentos($paginador, $criterio);

include 'vta_politica_descuento_gestion_datos.php';
?>

