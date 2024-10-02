<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');

$buscador_top_vta_recibo_item_conciliado = Gral::getVars(Gral::VARS_POST, 'buscador_top_vta_recibo_item_conciliado', -1);


$criterio = new Criterio(VtaReciboItem::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
VtaReciboItem::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


    if ($buscador_top_vta_recibo_item_conciliado != -1) {
        $criterio->add('vta_recibo_item.conciliado', $buscador_top_vta_recibo_item_conciliado, Criterio::IGUAL);
    }
$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('vta_recibo_item.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('vta_recibo_item.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_recibo_item.importe_unitario', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_recibo_item.cantidad', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_recibo_item.conciliado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_recibo_item.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_recibo_item.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_recibo_item.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_recibo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_recibo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_recibo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_fp_forma_pago.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_fp_forma_pago.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_fp_forma_pago.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_tipo_iva.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_tipo_iva.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_tipo_iva.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_recibo_concepto.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_recibo_concepto.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_recibo_concepto.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('vta_recibo', 'vta_recibo.id', 'vta_recibo_item.vta_recibo_id', 'LEFT JOIN');
$criterio->addRealJoin('gral_fp_forma_pago', 'gral_fp_forma_pago.id', 'vta_recibo_item.gral_fp_forma_pago_id', 'LEFT JOIN');
$criterio->addRealJoin('gral_tipo_iva', 'gral_tipo_iva.id', 'vta_recibo_item.gral_tipo_iva_id', 'LEFT JOIN');
$criterio->addRealJoin('vta_recibo_concepto', 'vta_recibo_concepto.id', 'vta_recibo_item.vta_recibo_concepto_id', 'LEFT JOIN');
    
$criterio->addTabla('vta_recibo_item');
$criterio->setCriterios();

