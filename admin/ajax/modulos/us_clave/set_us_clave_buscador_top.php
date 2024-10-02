<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(UsClave::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
UsClave::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('us_clave.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('us_clave.clave', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_clave.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_clave.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_clave.creado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_clave.modificado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario.apellido', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario.nombre', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('us_usuario', 'us_usuario.id', 'us_clave.us_usuario_id', 'LEFT JOIN');
    
$criterio->addTabla('us_clave');
$criterio->setCriterios();

