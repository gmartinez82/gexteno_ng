<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(OpeChoferUsUsuario::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
OpeChoferUsUsuario::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('ope_chofer_us_usuario.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('ope_chofer_us_usuario.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ope_chofer_us_usuario.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ope_chofer_us_usuario.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ope_chofer_us_usuario.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ope_chofer.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ope_chofer.apellido', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ope_chofer.nombre', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ope_chofer.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ope_chofer.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario.apellido', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario.nombre', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('ope_chofer', 'ope_chofer.id', 'ope_chofer_us_usuario.ope_chofer_id', 'LEFT JOIN');
$criterio->addRealJoin('us_usuario', 'us_usuario.id', 'ope_chofer_us_usuario.us_usuario_id', 'LEFT JOIN');
    
$criterio->addTabla('ope_chofer_us_usuario');
$criterio->setCriterios();

