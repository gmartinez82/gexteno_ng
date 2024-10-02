<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
InsInsumoInsMarca::setSesPag($pag);

$criterio = new Criterio(InsInsumoInsMarca::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
InsInsumoInsMarca::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ins_insumo_ins_marca');
$criterio->setCriteriosInicial();

$paginador = new Paginador(InsInsumoInsMarca::getSesPagCantidad(), InsInsumoInsMarca::getSesPag());
$ins_insumo_ins_marcas = InsInsumoInsMarca::getInsInsumoInsMarcasDesdeBackend($paginador, $criterio);

include 'ins_insumo_ins_marca_datos.php';
?>

