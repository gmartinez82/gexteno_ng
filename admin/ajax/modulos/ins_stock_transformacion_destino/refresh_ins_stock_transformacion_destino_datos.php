<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
InsStockTransformacionDestino::setSesPag($pag);

$criterio = new Criterio(InsStockTransformacionDestino::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
InsStockTransformacionDestino::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ins_stock_transformacion_destino');
$criterio->setCriteriosInicial();

$paginador = new Paginador(InsStockTransformacionDestino::getSesPagCantidad(), InsStockTransformacionDestino::getSesPag());
$ins_stock_transformacion_destinos = InsStockTransformacionDestino::getInsStockTransformacionDestinosDesdeBackend($paginador, $criterio);

include 'ins_stock_transformacion_destino_datos.php';
?>

