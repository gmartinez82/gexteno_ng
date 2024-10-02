<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(VtaNotaDebitoEstado::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
VtaNotaDebitoEstado::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('vta_nota_debito_estado.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('vta_nota_debito_estado.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_nota_debito_estado.inicial', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_nota_debito_estado.actual', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_nota_debito_estado.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_nota_debito_estado.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_nota_debito_estado.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_nota_debito.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_nota_debito.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_nota_debito.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_nota_debito_tipo_estado.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_nota_debito_tipo_estado.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_nota_debito_tipo_estado.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('vta_nota_debito', 'vta_nota_debito.id', 'vta_nota_debito_estado.vta_nota_debito_id', 'LEFT JOIN');
$criterio->addRealJoin('vta_nota_debito_tipo_estado', 'vta_nota_debito_tipo_estado.id', 'vta_nota_debito_estado.vta_nota_debito_tipo_estado_id', 'LEFT JOIN');
    
$criterio->addTabla('vta_nota_debito_estado');
$criterio->setCriterios();

