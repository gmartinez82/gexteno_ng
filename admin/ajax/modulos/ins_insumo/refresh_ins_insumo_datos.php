<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
InsInsumo::setSesPag($pag);

$criterio = new Criterio(InsInsumo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
InsInsumo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ins_insumo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(InsInsumo::getSesPagCantidad(), InsInsumo::getSesPag());
$ins_insumos = InsInsumo::getInsInsumosDesdeBackend($paginador, $criterio);

include 'ins_insumo_datos.php';
?>

