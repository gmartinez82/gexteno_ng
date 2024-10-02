<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VehCocheImagen::setSesPag($pag);

$criterio = new Criterio(VehCocheImagen::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VehCocheImagen::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('veh_coche_imagen');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VehCocheImagen::getSesPagCantidad(), VehCocheImagen::getSesPag());
$veh_coche_imagens = VehCocheImagen::getVehCocheImagensDesdeBackend($paginador, $criterio);

include 'veh_coche_imagen_datos.php';
?>

