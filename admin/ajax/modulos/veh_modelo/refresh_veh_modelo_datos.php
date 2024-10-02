<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VehModelo::setSesPag($pag);

$criterio = new Criterio(VehModelo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VehModelo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('veh_modelo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VehModelo::getSesPagCantidad(), VehModelo::getSesPag());
$veh_modelos = VehModelo::getVehModelosDesdeBackend($paginador, $criterio);

include 'veh_modelo_datos.php';
?>

