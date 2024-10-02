<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
InsInsumoVehModelo::setSesPag($pag);

$criterio = new Criterio(InsInsumoVehModelo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
InsInsumoVehModelo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ins_insumo_veh_modelo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(InsInsumoVehModelo::getSesPagCantidad(), InsInsumoVehModelo::getSesPag());
$ins_insumo_veh_modelos = InsInsumoVehModelo::getInsInsumoVehModelosDesdeBackend($paginador, $criterio);

include 'ins_insumo_veh_modelo_datos.php';
?>

