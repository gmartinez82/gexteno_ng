<?php
include_once '_autoload.php';

$pag = Gral::getVars(2, 'pag', 1);
InsStockTransformacion::setSesPag($pag);

$criterio = new Criterio(InsStockTransformacion::SES_CRITERIOS);
$criterio->addTabla('ins_stock_transformacion');
$criterio->setCriteriosInicial();

$paginador = new Paginador(InsStockTransformacion::getSesPagCantidad(), InsStockTransformacion::getSesPag());
$ins_stock_transformacions = InsStockTransformacion::getInsStockTransformacions($paginador, $criterio);

include 'ins_stock_transformacion_gestion_datos.php';
?>

