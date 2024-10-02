<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
MlValueInsMarca::setSesPag($pag);

$criterio = new Criterio(MlValueInsMarca::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
MlValueInsMarca::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ml_value_ins_marca');
$criterio->setCriteriosInicial();

$paginador = new Paginador(MlValueInsMarca::getSesPagCantidad(), MlValueInsMarca::getSesPag());
$ml_value_ins_marcas = MlValueInsMarca::getMlValueInsMarcasDesdeBackend($paginador, $criterio);

include 'ml_value_ins_marca_datos.php';
?>

