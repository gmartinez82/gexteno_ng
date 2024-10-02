<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(VtaNotaDebitoVtaNotaCredito::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
VtaNotaDebitoVtaNotaCredito::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('vta_nota_debito_vta_nota_credito.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('vta_nota_debito_vta_nota_credito.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_nota_debito_vta_nota_credito.importe_afectado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_nota_debito_vta_nota_credito.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_nota_debito_vta_nota_credito.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_nota_debito_vta_nota_credito.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_nota_debito.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_nota_debito.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_nota_debito.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_nota_credito.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_nota_credito.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_nota_credito.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('vta_nota_debito', 'vta_nota_debito.id', 'vta_nota_debito_vta_nota_credito.vta_nota_debito_id', 'LEFT JOIN');
$criterio->addRealJoin('vta_nota_credito', 'vta_nota_credito.id', 'vta_nota_debito_vta_nota_credito.vta_nota_credito_id', 'LEFT JOIN');
    
$criterio->addTabla('vta_nota_debito_vta_nota_credito');
$criterio->setCriterios();

