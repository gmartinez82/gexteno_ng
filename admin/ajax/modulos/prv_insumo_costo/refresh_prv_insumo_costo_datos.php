<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PrvInsumoCosto::setSesPag($pag);

$criterio = new Criterio(PrvInsumoCosto::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PrvInsumoCosto::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('prv_insumo_costo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PrvInsumoCosto::getSesPagCantidad(), PrvInsumoCosto::getSesPag());
$prv_insumo_costos = PrvInsumoCosto::getPrvInsumoCostosDesdeBackend($paginador, $criterio);

include 'prv_insumo_costo_datos.php';
?>

