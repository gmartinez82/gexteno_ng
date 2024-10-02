<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(OpeOperarioUsUsuario::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
OpeOperarioUsUsuario::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('ope_operario_us_usuario.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('ope_operario_us_usuario.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ope_operario_us_usuario.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ope_operario_us_usuario.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ope_operario_us_usuario.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ope_operario.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ope_operario.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ope_operario.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario.apellido', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario.nombre', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('ope_operario', 'ope_operario.id', 'ope_operario_us_usuario.ope_operario_id', 'LEFT JOIN');
$criterio->addRealJoin('us_usuario', 'us_usuario.id', 'ope_operario_us_usuario.us_usuario_id', 'LEFT JOIN');
    
$criterio->addTabla('ope_operario_us_usuario');
$criterio->setCriterios();

