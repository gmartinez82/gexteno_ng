<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(UsMensaje::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
UsMensaje::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('us_mensaje.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('us_mensaje.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_mensaje.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_mensaje.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_mensaje.leido', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_mensaje.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_mensaje.creado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_mensaje.modificado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario.apellido', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario.nombre', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('us_usuario', 'us_usuario.id', 'us_mensaje.us_usuario_id', 'LEFT JOIN');
    
$criterio->addTabla('us_mensaje');
$criterio->setCriterios();

