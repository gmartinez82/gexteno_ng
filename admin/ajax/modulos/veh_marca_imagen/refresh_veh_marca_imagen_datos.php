<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VehMarcaImagen::setSesPag($pag);

$criterio = new Criterio(VehMarcaImagen::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VehMarcaImagen::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('veh_marca_imagen');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VehMarcaImagen::getSesPagCantidad(), VehMarcaImagen::getSesPag());
$veh_marca_imagens = VehMarcaImagen::getVehMarcaImagensDesdeBackend($paginador, $criterio);

include 'veh_marca_imagen_datos.php';
?>

