<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(GenApiConsumer::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
GenApiConsumer::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('gen_api_consumer.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('gen_api_consumer.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gen_api_consumer.consumer', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gen_api_consumer.secret_code', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gen_api_consumer.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gen_api_consumer.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gen_api_proyecto.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gen_api_proyecto.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gen_api_proyecto.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('gen_api_proyecto', 'gen_api_proyecto.id', 'gen_api_consumer.gen_api_proyecto_id', 'LEFT JOIN');
    
$criterio->addTabla('gen_api_consumer');
$criterio->setCriterios();

