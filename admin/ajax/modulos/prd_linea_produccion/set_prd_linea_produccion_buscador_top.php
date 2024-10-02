<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');

$buscador_top_prd_linea_produccion_prd_proceso_productivo_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_prd_linea_produccion_prd_proceso_productivo_id', 0);


$criterio = new Criterio(PrdLineaProduccion::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
PrdLineaProduccion::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


    if ($buscador_top_prd_linea_produccion_prd_proceso_productivo_id != 0) {
        $criterio->add('prd_linea_produccion.prd_proceso_productivo_id', $buscador_top_prd_linea_produccion_prd_proceso_productivo_id, Criterio::IGUAL);
    }
$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('prd_linea_produccion.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('prd_linea_produccion.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_linea_produccion.descripcion_corta', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_linea_produccion.numero', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_linea_produccion.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_linea_produccion.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_linea_produccion.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_proceso_productivo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_proceso_productivo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_proceso_productivo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('prd_proceso_productivo', 'prd_proceso_productivo.id', 'prd_linea_produccion.prd_proceso_productivo_id', 'LEFT JOIN');
    
$criterio->addTabla('prd_linea_produccion');
$criterio->setCriterios();

