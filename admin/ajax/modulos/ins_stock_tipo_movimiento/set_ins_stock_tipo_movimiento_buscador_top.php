<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(InsStockTipoMovimiento::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
InsStockTipoMovimiento::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('ins_stock_tipo_movimiento.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('ins_stock_tipo_movimiento.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_stock_tipo_movimiento.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_stock_tipo_movimiento.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

    
$criterio->addTabla('ins_stock_tipo_movimiento');
$criterio->setCriterios();

