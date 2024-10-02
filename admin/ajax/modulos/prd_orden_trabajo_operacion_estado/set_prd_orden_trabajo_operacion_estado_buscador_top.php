<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');

$buscador_top_prd_orden_trabajo_operacion_estado_prd_orden_trabajo_operacion_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_prd_orden_trabajo_operacion_estado_prd_orden_trabajo_operacion_id', 0);
$buscador_top_prd_orden_trabajo_operacion_estado_prd_orden_trabajo_operacion_tipo_estado_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_prd_orden_trabajo_operacion_estado_prd_orden_trabajo_operacion_tipo_estado_id', 0);


$criterio = new Criterio(PrdOrdenTrabajoOperacionEstado::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
PrdOrdenTrabajoOperacionEstado::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


    if ($buscador_top_prd_orden_trabajo_operacion_estado_prd_orden_trabajo_operacion_id != 0) {
        $criterio->add('prd_orden_trabajo_operacion_estado.prd_orden_trabajo_operacion_id', $buscador_top_prd_orden_trabajo_operacion_estado_prd_orden_trabajo_operacion_id, Criterio::IGUAL);
    }
    if ($buscador_top_prd_orden_trabajo_operacion_estado_prd_orden_trabajo_operacion_tipo_estado_id != 0) {
        $criterio->add('prd_orden_trabajo_operacion_estado.prd_orden_trabajo_operacion_tipo_estado_id', $buscador_top_prd_orden_trabajo_operacion_estado_prd_orden_trabajo_operacion_tipo_estado_id, Criterio::IGUAL);
    }
$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('prd_orden_trabajo_operacion_estado.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('prd_orden_trabajo_operacion_estado.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_orden_trabajo_operacion_estado.inicial', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_orden_trabajo_operacion_estado.actual', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_orden_trabajo_operacion_estado.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_orden_trabajo_operacion_estado.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_orden_trabajo_operacion_estado.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_orden_trabajo_operacion.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_orden_trabajo_operacion.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_orden_trabajo_operacion.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_orden_trabajo_operacion_tipo_estado.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_orden_trabajo_operacion_tipo_estado.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_orden_trabajo_operacion_tipo_estado.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('prd_orden_trabajo_operacion', 'prd_orden_trabajo_operacion.id', 'prd_orden_trabajo_operacion_estado.prd_orden_trabajo_operacion_id', 'LEFT JOIN');
$criterio->addRealJoin('prd_orden_trabajo_operacion_tipo_estado', 'prd_orden_trabajo_operacion_tipo_estado.id', 'prd_orden_trabajo_operacion_estado.prd_orden_trabajo_operacion_tipo_estado_id', 'LEFT JOIN');
    
$criterio->addTabla('prd_orden_trabajo_operacion_estado');
$criterio->setCriterios();

