<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(AppMovDispositivo::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
AppMovDispositivo::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('app_mov_dispositivo.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('app_mov_dispositivo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('app_mov_dispositivo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('app_mov_dispositivo.so_descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('app_mov_dispositivo.so_version', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('app_mov_dispositivo.marca', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('app_mov_dispositivo.modelo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('app_mov_dispositivo.imei', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('app_mov_dispositivo.telefono_nro', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('app_mov_dispositivo.titular_apellido', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('app_mov_dispositivo.titular_nombre', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('app_mov_dispositivo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

    
$criterio->addTabla('app_mov_dispositivo');
$criterio->setCriterios();

