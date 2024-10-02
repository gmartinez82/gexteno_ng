<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');

$buscador_top_prd_proceso_productivo_ins_insumo_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_prd_proceso_productivo_ins_insumo_id', 0);


$criterio = new Criterio(PrdProcesoProductivo::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
PrdProcesoProductivo::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


    if ($buscador_top_prd_proceso_productivo_ins_insumo_id != 0) {
        $criterio->add('prd_proceso_productivo.ins_insumo_id', $buscador_top_prd_proceso_productivo_ins_insumo_id, Criterio::IGUAL);
    }
$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('prd_proceso_productivo.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('prd_proceso_productivo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_proceso_productivo.descripcion_corta', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_proceso_productivo.cantidad', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_proceso_productivo.configurado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_proceso_productivo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_proceso_productivo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_proceso_productivo.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'prd_proceso_productivo.ins_insumo_id', 'LEFT JOIN');
    
$criterio->addTabla('prd_proceso_productivo');
$criterio->setCriterios();

