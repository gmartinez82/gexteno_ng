<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(VtaComisionGralFpFormaPagoCheque::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
VtaComisionGralFpFormaPagoCheque::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('vta_comision_gral_fp_forma_pago_cheque.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('vta_comision_gral_fp_forma_pago_cheque.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comision_gral_fp_forma_pago_cheque.numero_cheque', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comision_gral_fp_forma_pago_cheque.fecha_emision', Gral::getFechaToDB($txt_buscador), Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comision_gral_fp_forma_pago_cheque.fecha_cobro', Gral::getFechaToDB($txt_buscador), Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comision_gral_fp_forma_pago_cheque.firmante', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comision_gral_fp_forma_pago_cheque.entregador', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comision_gral_fp_forma_pago_cheque.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comision_gral_fp_forma_pago_cheque.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comision_gral_fp_forma_pago_cheque.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comision.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comision.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comision.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comision_gral_fp_forma_pago.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comision_gral_fp_forma_pago.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comision_gral_fp_forma_pago.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_banco.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_banco.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_banco.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('vta_comision', 'vta_comision.id', 'vta_comision_gral_fp_forma_pago_cheque.vta_comision_id', 'LEFT JOIN');
$criterio->addRealJoin('vta_comision_gral_fp_forma_pago', 'vta_comision_gral_fp_forma_pago.id', 'vta_comision_gral_fp_forma_pago_cheque.vta_comision_gral_fp_forma_pago_id', 'LEFT JOIN');
$criterio->addRealJoin('gral_banco', 'gral_banco.id', 'vta_comision_gral_fp_forma_pago_cheque.gral_banco_id', 'LEFT JOIN');
    
$criterio->addTabla('vta_comision_gral_fp_forma_pago_cheque');
$criterio->setCriterios();

