<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');

$buscador_top_prd_orden_trabajo_ciclo_prd_orden_trabajo_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_prd_orden_trabajo_ciclo_prd_orden_trabajo_id', 0);
$buscador_top_prd_orden_trabajo_ciclo_prd_linea_produccion_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_prd_orden_trabajo_ciclo_prd_linea_produccion_id', 0);


$criterio = new Criterio(PrdOrdenTrabajoCiclo::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
PrdOrdenTrabajoCiclo::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


    if ($buscador_top_prd_orden_trabajo_ciclo_prd_orden_trabajo_id != 0) {
        $criterio->add('prd_orden_trabajo_ciclo.prd_orden_trabajo_id', $buscador_top_prd_orden_trabajo_ciclo_prd_orden_trabajo_id, Criterio::IGUAL);
    }
    if ($buscador_top_prd_orden_trabajo_ciclo_prd_linea_produccion_id != 0) {
        $criterio->add('prd_orden_trabajo_ciclo.prd_linea_produccion_id', $buscador_top_prd_orden_trabajo_ciclo_prd_linea_produccion_id, Criterio::IGUAL);
    }
$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('prd_orden_trabajo_ciclo.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('prd_orden_trabajo_ciclo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_orden_trabajo_ciclo.numero', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_orden_trabajo_ciclo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_orden_trabajo_ciclo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_orden_trabajo_ciclo.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_orden_trabajo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_orden_trabajo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_orden_trabajo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_linea_produccion.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_linea_produccion.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_linea_produccion.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('prd_orden_trabajo', 'prd_orden_trabajo.id', 'prd_orden_trabajo_ciclo.prd_orden_trabajo_id', 'LEFT JOIN');
$criterio->addRealJoin('prd_linea_produccion', 'prd_linea_produccion.id', 'prd_orden_trabajo_ciclo.prd_linea_produccion_id', 'LEFT JOIN');
    
$criterio->addTabla('prd_orden_trabajo_ciclo');
$criterio->setCriterios();

