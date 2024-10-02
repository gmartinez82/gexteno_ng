<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(FndChqChequera::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
FndChqChequera::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('fnd_chq_chequera.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('fnd_chq_chequera.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_chq_chequera.codigo_sucursal', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_chq_chequera.titular', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_chq_chequera.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_chq_chequera.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_banco.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_banco.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_banco.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('gral_banco', 'gral_banco.id', 'fnd_chq_chequera.gral_banco_id', 'LEFT JOIN');
    
$criterio->addTabla('fnd_chq_chequera');
$criterio->setCriterios();

