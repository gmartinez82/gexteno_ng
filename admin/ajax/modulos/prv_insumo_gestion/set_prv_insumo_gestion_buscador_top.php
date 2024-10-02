<?php
include_once '_autoload.php';

$txt_buscador                  = Gral::getVars(1, 'txt_buscador', '');
$cmb_filtro_ins_marca_id       = Gral::getVars(1, 'cmb_filtro_ins_marca_id', 0);
$cmb_filtro_ins_marca_pieza_id = Gral::getVars(1, 'cmb_filtro_ins_marca_pieza_id', 0);
$cmb_filtro_prv_proveedor_id   = Gral::getVars(1, 'cmb_filtro_prv_proveedor_id', 0);


$criterio = new Criterio(PrvInsumo::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);


$criterio->addInicioSubconsulta();

$criterio->add('', 'true', '', false, "");

if($cmb_filtro_ins_marca_id != 0){
    $criterio->add('prv_insumo.ins_marca_id', $cmb_filtro_ins_marca_id, Criterio::IGUAL);
}

if($cmb_filtro_ins_marca_pieza_id != 0){
    $criterio->add('prv_insumo.ins_marca_pieza', $cmb_filtro_ins_marca_pieza_id, Criterio::IGUAL);
}

if($cmb_filtro_prv_proveedor_id != 0){
    $criterio->add('prv_insumo.prv_proveedor_id', $cmb_filtro_prv_proveedor_id, Criterio::IGUAL);
}

$criterio->addFinSubconsulta();

if($txt_buscador != ''){
    $criterio->addInicioSubconsulta();
    //$criterio->add('prv_insumo.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
    $criterio->add('prv_insumo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
    $criterio->add('prv_insumo.codigo_proveedor', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('prv_insumo.codigo_marca', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('prv_insumo.ins_marca_pieza', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('prv_insumo.codigo_pieza', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('prv_insumo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}

$criterio->addTabla('prv_insumo');
$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'prv_insumo.ins_insumo_id', 'LEFT JOIN');
$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'prv_insumo.prv_proveedor_id', 'LEFT JOIN');
$criterio->addRealJoin('ins_marca', 'ins_marca.id', 'prv_insumo.ins_marca_id', 'LEFT JOIN');
$criterio->addRealJoin('ins_matriz', 'ins_matriz.id', 'prv_insumo.ins_matriz_id', 'LEFT JOIN');

$criterio->setCriterios();


?>