<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaReciboImagen::setSesPag($pag);

$criterio = new Criterio(VtaReciboImagen::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaReciboImagen::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_recibo_imagen');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaReciboImagen::getSesPagCantidad(), VtaReciboImagen::getSesPag());
$vta_recibo_imagens = VtaReciboImagen::getVtaReciboImagensDesdeBackend($paginador, $criterio);

include 'vta_recibo_imagen_datos.php';
?>

