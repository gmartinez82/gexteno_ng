<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(InsInsumoEnviado::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
InsInsumoEnviado::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('ins_insumo_enviado.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('ins_insumo_enviado.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo_enviado.asunto', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo_enviado.destinatario', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo_enviado.cuerpo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo_enviado.adjunto', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo_enviado.codigo_envio', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo_enviado.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo_enviado.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo_enviado.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'ins_insumo_enviado.ins_insumo_id', 'LEFT JOIN');
    
$criterio->addTabla('ins_insumo_enviado');
$criterio->setCriterios();

