<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(UsLogin::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
UsLogin::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('us_login.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('us_login.session', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_login.ip', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_login.exito', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_login.login', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_login.navegador', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_login.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_login.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_login.creado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_login.modificado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario.apellido', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario.nombre', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('us_usuario', 'us_usuario.id', 'us_login.us_usuario_id', 'LEFT JOIN');
    
$criterio->addTabla('us_login');
$criterio->setCriterios();

