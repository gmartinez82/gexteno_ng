<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VehMarca::setSesPag($pag);

$criterio = new Criterio(VehMarca::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VehMarca::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('veh_marca');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VehMarca::getSesPagCantidad(), VehMarca::getSesPag());
$veh_marcas = VehMarca::getVehMarcasDesdeBackend($paginador, $criterio);

include 'veh_marca_datos.php';
?>

