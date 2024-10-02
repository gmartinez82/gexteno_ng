<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(PdeReciboItemCheque::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
PdeReciboItemCheque::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('pde_recibo_item_cheque.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('pde_recibo_item_cheque.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_recibo_item_cheque.numero_cheque', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_recibo_item_cheque.fecha_emision', Gral::getFechaToDB($txt_buscador), Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_recibo_item_cheque.fecha_cobro', Gral::getFechaToDB($txt_buscador), Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_recibo_item_cheque.firmante', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_recibo_item_cheque.entregador', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_recibo_item_cheque.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_recibo_item_cheque.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_recibo_item_cheque.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_recibo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_recibo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_recibo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_recibo_item.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_recibo_item.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_recibo_item.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_banco.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_banco.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_banco.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('pde_recibo', 'pde_recibo.id', 'pde_recibo_item_cheque.pde_recibo_id', 'LEFT JOIN');
$criterio->addRealJoin('pde_recibo_item', 'pde_recibo_item.id', 'pde_recibo_item_cheque.pde_recibo_item_id', 'LEFT JOIN');
$criterio->addRealJoin('gral_banco', 'gral_banco.id', 'pde_recibo_item_cheque.gral_banco_id', 'LEFT JOIN');
    
$criterio->addTabla('pde_recibo_item_cheque');
$criterio->setCriterios();

