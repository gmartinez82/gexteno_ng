<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(PerPersonaGralSucursal::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
PerPersonaGralSucursal::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('per_persona_gral_sucursal.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('per_persona_gral_sucursal.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('per_persona_gral_sucursal.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('per_persona.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('per_persona.apellido', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('per_persona.nombre', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('per_persona.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('per_persona.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('per_persona', 'per_persona.id', 'per_persona_gral_sucursal.per_persona_id', 'LEFT JOIN');
$criterio->addRealJoin('gral_sucursal', 'gral_sucursal.id', 'per_persona_gral_sucursal.gral_sucursal_id', 'LEFT JOIN');
    
$criterio->addTabla('per_persona_gral_sucursal');
$criterio->setCriterios();

