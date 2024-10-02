<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(VtaComisionEnviado::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
VtaComisionEnviado::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('vta_comision_enviado.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('vta_comision_enviado.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comision_enviado.asunto', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comision_enviado.destinatario', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comision_enviado.cuerpo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comision_enviado.adjunto', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comision_enviado.codigo_envio', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comision_enviado.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comision_enviado.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comision_enviado.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comision.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comision.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comision.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('vta_comision', 'vta_comision.id', 'vta_comision_enviado.vta_comision_id', 'LEFT JOIN');
    
$criterio->addTabla('vta_comision_enviado');
$criterio->setCriterios();

