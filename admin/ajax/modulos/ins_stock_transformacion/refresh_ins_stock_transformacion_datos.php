<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
InsStockTransformacion::setSesPag($pag);

$criterio = new Criterio(InsStockTransformacion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
InsStockTransformacion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ins_stock_transformacion');
$criterio->setCriteriosInicial();

$paginador = new Paginador(InsStockTransformacion::getSesPagCantidad(), InsStockTransformacion::getSesPag());
$ins_stock_transformacions = InsStockTransformacion::getInsStockTransformacionsDesdeBackend($paginador, $criterio);

include 'ins_stock_transformacion_datos.php';
?>

