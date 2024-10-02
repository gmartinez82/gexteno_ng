<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');

$buscador_top_prd_param_operacion_ope_operario_prd_param_operacion_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_prd_param_operacion_ope_operario_prd_param_operacion_id', 0);
$buscador_top_prd_param_operacion_ope_operario_ope_operario_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_prd_param_operacion_ope_operario_ope_operario_id', 0);


$criterio = new Criterio(PrdParamOperacionOpeOperario::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
PrdParamOperacionOpeOperario::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


    if ($buscador_top_prd_param_operacion_ope_operario_prd_param_operacion_id != 0) {
        $criterio->add('prd_param_operacion_ope_operario.prd_param_operacion_id', $buscador_top_prd_param_operacion_ope_operario_prd_param_operacion_id, Criterio::IGUAL);
    }
    if ($buscador_top_prd_param_operacion_ope_operario_ope_operario_id != 0) {
        $criterio->add('prd_param_operacion_ope_operario.ope_operario_id', $buscador_top_prd_param_operacion_ope_operario_ope_operario_id, Criterio::IGUAL);
    }
$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('prd_param_operacion_ope_operario.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('prd_param_operacion_ope_operario.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_param_operacion_ope_operario.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_param_operacion_ope_operario.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_param_operacion.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_param_operacion.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_param_operacion.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ope_operario.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ope_operario.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ope_operario.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('prd_param_operacion', 'prd_param_operacion.id', 'prd_param_operacion_ope_operario.prd_param_operacion_id', 'LEFT JOIN');
$criterio->addRealJoin('ope_operario', 'ope_operario.id', 'prd_param_operacion_ope_operario.ope_operario_id', 'LEFT JOIN');
    
$criterio->addTabla('prd_param_operacion_ope_operario');
$criterio->setCriterios();

