<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(MlAutorization::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
MlAutorization::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('ml_autorization.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('ml_autorization.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ml_autorization.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ml_autorization.ml_access_token', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ml_autorization.ml_refresh_code', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ml_autorization.inicial', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ml_autorization.actual', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ml_autorization.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

    
$criterio->addTabla('ml_autorization');
$criterio->setCriterios();

