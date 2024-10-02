<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
InsInsumoCosto::setSesPag($pag);

$criterio = new Criterio(InsInsumoCosto::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
InsInsumoCosto::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ins_insumo_costo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(InsInsumoCosto::getSesPagCantidad(), InsInsumoCosto::getSesPag());
$ins_insumo_costos = InsInsumoCosto::getInsInsumoCostosDesdeBackend($paginador, $criterio);

include 'ins_insumo_costo_datos.php';
?>

