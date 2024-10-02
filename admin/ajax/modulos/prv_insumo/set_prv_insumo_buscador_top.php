<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(PrvInsumo::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
PrvInsumo::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('prv_insumo.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('prv_insumo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_insumo.codigo_proveedor', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_insumo.codigo_marca', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_insumo.codigo_pieza', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_insumo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_insumo.fecha_actualizacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_insumo.claves', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_insumo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_proveedor.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_proveedor.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_proveedor.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_marca.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_marca.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_marca.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_matriz.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_matriz.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_matriz.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'prv_insumo.ins_insumo_id', 'LEFT JOIN');
$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'prv_insumo.prv_proveedor_id', 'LEFT JOIN');
$criterio->addRealJoin('ins_marca', 'ins_marca.id', 'prv_insumo.ins_marca_id', 'LEFT JOIN');
$criterio->addRealJoin('ins_matriz', 'ins_matriz.id', 'prv_insumo.ins_matriz_id', 'LEFT JOIN');
    
$criterio->addTabla('prv_insumo');
$criterio->setCriterios();

