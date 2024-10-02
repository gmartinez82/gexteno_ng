<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(OsOrdenServicio::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
OsOrdenServicio::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('os_orden_servicio.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('os_orden_servicio.notificacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_orden_servicio.fecha', Gral::getFechaToDB($txt_buscador), Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_orden_servicio.fecha_hecho', Gral::getFechaToDB($txt_buscador), Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_orden_servicio.fecha_notificacion', Gral::getFechaToDB($txt_buscador), Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_orden_servicio.dias_para_descargo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_orden_servicio.fecha_limite_descargo', Gral::getFechaToDB($txt_buscador), Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_orden_servicio.fecha_descargo', Gral::getFechaToDB($txt_buscador), Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_orden_servicio.fecha_notificado_sin_descargo', Gral::getFechaToDB($txt_buscador), Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_orden_servicio.fecha_limite_resolucion', Gral::getFechaToDB($txt_buscador), Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_orden_servicio.fecha_resolucion', Gral::getFechaToDB($txt_buscador), Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_orden_servicio.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_orden_servicio.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_orden_servicio.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_orden_servicio.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_tipo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_tipo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_tipo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('per_persona.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('per_persona.apellido', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('per_persona.nombre', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('per_persona.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('per_persona.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_prioridad.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_prioridad.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_prioridad.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_tipo_estado.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_tipo_estado.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_tipo_estado.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('os_tipo', 'os_tipo.id', 'os_orden_servicio.os_tipo_id', 'LEFT JOIN');
$criterio->addRealJoin('per_persona', 'per_persona.id', 'os_orden_servicio.per_persona_id', 'LEFT JOIN');
$criterio->addRealJoin('os_prioridad', 'os_prioridad.id', 'os_orden_servicio.os_prioridad_id', 'LEFT JOIN');
$criterio->addRealJoin('os_tipo_estado', 'os_tipo_estado.id', 'os_orden_servicio.os_tipo_estado_id', 'LEFT JOIN');
    
$criterio->addTabla('os_orden_servicio');
$criterio->setCriterios();

