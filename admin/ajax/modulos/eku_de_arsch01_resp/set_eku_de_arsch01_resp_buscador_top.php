<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(EkuDeArsch01Resp::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
EkuDeArsch01Resp::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('eku_de_arsch01_resp.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('eku_de_arsch01_resp.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_arsch01_resp.eku_arsch01_pp02_id_cdc', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_arsch01_resp.eku_arsch01_pp03_ddecproc', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_arsch01_resp.eku_arsch01_pp04_ddigval', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_arsch01_resp.eku_arsch01_pp050_destres', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_arsch01_resp.eku_arsch01_pp051_dprotaut', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_arsch01_resp.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_arsch01_resp.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_arsch01_resp.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_asch01_req.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_asch01_req.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_asch01_req.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('eku_de', 'eku_de.id', 'eku_de_arsch01_resp.eku_de_id', 'LEFT JOIN');
$criterio->addRealJoin('eku_de_asch01_req', 'eku_de_asch01_req.id', 'eku_de_arsch01_resp.eku_de_asch01_req_id', 'LEFT JOIN');
    
$criterio->addTabla('eku_de_arsch01_resp');
$criterio->setCriterios();

