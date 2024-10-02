<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(AppMovInstalacion::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
AppMovInstalacion::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('app_mov_instalacion.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('app_mov_instalacion.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('app_mov_instalacion.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('app_mov_instalacion.app_version', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('app_mov_instalacion.app_version_activa', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('app_mov_instalacion.fecha_ultima_actividad', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('app_mov_instalacion.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('app_mov_dispositivo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('app_mov_dispositivo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('app_mov_dispositivo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('app_mov_modulo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('app_mov_modulo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('app_mov_modulo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gen_api_token.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gen_api_token.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gen_api_token.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('app_mov_version.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('app_mov_version.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('app_mov_version.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario.apellido', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario.nombre', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('app_mov_dispositivo', 'app_mov_dispositivo.id', 'app_mov_instalacion.app_mov_dispositivo_id', 'LEFT JOIN');
$criterio->addRealJoin('app_mov_modulo', 'app_mov_modulo.id', 'app_mov_instalacion.app_mov_modulo_id', 'LEFT JOIN');
$criterio->addRealJoin('gen_api_token', 'gen_api_token.id', 'app_mov_instalacion.gen_api_token_id', 'LEFT JOIN');
$criterio->addRealJoin('app_mov_version', 'app_mov_version.id', 'app_mov_instalacion.app_mov_version_id', 'LEFT JOIN');
$criterio->addRealJoin('us_usuario', 'us_usuario.id', 'app_mov_instalacion.us_usuario_id', 'LEFT JOIN');
    
$criterio->addTabla('app_mov_instalacion');
$criterio->setCriterios();

