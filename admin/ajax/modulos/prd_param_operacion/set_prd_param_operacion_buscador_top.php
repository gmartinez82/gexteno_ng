<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');

$buscador_top_prd_param_operacion_prd_param_tipo_operacion_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_prd_param_operacion_prd_param_tipo_operacion_id', 0);
$buscador_top_prd_param_operacion_prd_proceso_productivo_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_prd_param_operacion_prd_proceso_productivo_id', 0);
$buscador_top_prd_param_operacion_prd_linea_produccion_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_prd_param_operacion_prd_linea_produccion_id', 0);
$buscador_top_prd_param_operacion_prd_equipo_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_prd_param_operacion_prd_equipo_id', 0);


$criterio = new Criterio(PrdParamOperacion::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
PrdParamOperacion::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


    if ($buscador_top_prd_param_operacion_prd_param_tipo_operacion_id != 0) {
        $criterio->add('prd_param_operacion.prd_param_tipo_operacion_id', $buscador_top_prd_param_operacion_prd_param_tipo_operacion_id, Criterio::IGUAL);
    }
    if ($buscador_top_prd_param_operacion_prd_proceso_productivo_id != 0) {
        $criterio->add('prd_param_operacion.prd_proceso_productivo_id', $buscador_top_prd_param_operacion_prd_proceso_productivo_id, Criterio::IGUAL);
    }
    if ($buscador_top_prd_param_operacion_prd_linea_produccion_id != 0) {
        $criterio->add('prd_param_operacion.prd_linea_produccion_id', $buscador_top_prd_param_operacion_prd_linea_produccion_id, Criterio::IGUAL);
    }
    if ($buscador_top_prd_param_operacion_prd_equipo_id != 0) {
        $criterio->add('prd_param_operacion.prd_equipo_id', $buscador_top_prd_param_operacion_prd_equipo_id, Criterio::IGUAL);
    }
$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('prd_param_operacion.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('prd_param_operacion.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_param_operacion.descripcion_corta', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_param_operacion.numero', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_param_operacion.cantidad_operarios', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_param_operacion.cantidad_equipos', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_param_operacion.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_param_operacion.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_param_operacion.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_param_tipo_operacion.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_param_tipo_operacion.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_param_tipo_operacion.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_proceso_productivo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_proceso_productivo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_proceso_productivo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_linea_produccion.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_linea_produccion.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_linea_produccion.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_equipo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_equipo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_equipo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('prd_param_tipo_operacion', 'prd_param_tipo_operacion.id', 'prd_param_operacion.prd_param_tipo_operacion_id', 'LEFT JOIN');
$criterio->addRealJoin('prd_proceso_productivo', 'prd_proceso_productivo.id', 'prd_param_operacion.prd_proceso_productivo_id', 'LEFT JOIN');
$criterio->addRealJoin('prd_linea_produccion', 'prd_linea_produccion.id', 'prd_param_operacion.prd_linea_produccion_id', 'LEFT JOIN');
$criterio->addRealJoin('prd_equipo', 'prd_equipo.id', 'prd_param_operacion.prd_equipo_id', 'LEFT JOIN');
    
$criterio->addTabla('prd_param_operacion');
$criterio->setCriterios();

