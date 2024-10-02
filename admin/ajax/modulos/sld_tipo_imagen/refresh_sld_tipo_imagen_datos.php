<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
SldTipoImagen::setSesPag($pag);

$criterio = new Criterio(SldTipoImagen::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
SldTipoImagen::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('sld_tipo_imagen');
$criterio->setCriteriosInicial();

$paginador = new Paginador(SldTipoImagen::getSesPagCantidad(), SldTipoImagen::getSesPag());
$sld_tipo_imagens = SldTipoImagen::getSldTipoImagensDesdeBackend($paginador, $criterio);

include 'sld_tipo_imagen_datos.php';
?>

