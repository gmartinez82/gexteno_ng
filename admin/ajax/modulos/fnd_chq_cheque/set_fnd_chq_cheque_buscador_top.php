<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(FndChqCheque::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
FndChqCheque::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('fnd_chq_cheque.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('fnd_chq_cheque.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_chq_cheque.codigo_sucursal', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_chq_cheque.numero', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_chq_cheque.fecha_emision', Gral::getFechaToDB($txt_buscador), Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_chq_cheque.fecha_cobro', Gral::getFechaToDB($txt_buscador), Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_chq_cheque.fecha_acreditacion', Gral::getFechaToDB($txt_buscador), Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_chq_cheque.fecha_vencimiento', Gral::getFechaToDB($txt_buscador), Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_chq_cheque.firmante', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_chq_cheque.entregador', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_chq_cheque.importe', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_chq_cheque.cruzado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_chq_cheque.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_chq_cheque.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_chq_chequera.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_chq_chequera.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_chq_chequera.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_banco.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_banco.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_banco.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_chq_tipo_emisor.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_chq_tipo_emisor.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_chq_tipo_emisor.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_chq_tipo_emision.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_chq_tipo_emision.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_chq_tipo_emision.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_chq_tipo_pago.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_chq_tipo_pago.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_chq_tipo_pago.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_chq_tipo_estado.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_chq_tipo_estado.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_chq_tipo_estado.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_recibo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_recibo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_recibo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_recibo_item.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_recibo_item.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_recibo_item.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comision.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comision.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comision.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comision_gral_fp_forma_pago.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comision_gral_fp_forma_pago.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comision_gral_fp_forma_pago.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_orden_pago.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_orden_pago.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_orden_pago.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_orden_pago_gral_fp_forma_pago.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_orden_pago_gral_fp_forma_pago.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_orden_pago_gral_fp_forma_pago.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_recibo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_recibo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_recibo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_recibo_item.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_recibo_item.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_recibo_item.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_caja_movimiento.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_caja_movimiento.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_caja_movimiento.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_caja_movimiento_item.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_caja_movimiento_item.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_caja_movimiento_item.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_caja.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_caja.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_caja.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_caja.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_caja.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_caja.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_caja_ingreso.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_caja_ingreso.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_caja_ingreso.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_caja_egreso.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_caja_egreso.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_caja_egreso.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('fnd_chq_chequera', 'fnd_chq_chequera.id', 'fnd_chq_cheque.fnd_chq_chequera_id', 'LEFT JOIN');
$criterio->addRealJoin('gral_banco', 'gral_banco.id', 'fnd_chq_cheque.gral_banco_id', 'LEFT JOIN');
$criterio->addRealJoin('fnd_chq_tipo_emisor', 'fnd_chq_tipo_emisor.id', 'fnd_chq_cheque.fnd_chq_tipo_emisor_id', 'LEFT JOIN');
$criterio->addRealJoin('fnd_chq_tipo_emision', 'fnd_chq_tipo_emision.id', 'fnd_chq_cheque.fnd_chq_tipo_emision_id', 'LEFT JOIN');
$criterio->addRealJoin('fnd_chq_tipo_pago', 'fnd_chq_tipo_pago.id', 'fnd_chq_cheque.fnd_chq_tipo_pago_id', 'LEFT JOIN');
$criterio->addRealJoin('fnd_chq_tipo_estado', 'fnd_chq_tipo_estado.id', 'fnd_chq_cheque.fnd_chq_tipo_estado_id', 'LEFT JOIN');
$criterio->addRealJoin('vta_recibo', 'vta_recibo.id', 'fnd_chq_cheque.vta_recibo_id', 'LEFT JOIN');
$criterio->addRealJoin('vta_recibo_item', 'vta_recibo_item.id', 'fnd_chq_cheque.vta_recibo_item_id', 'LEFT JOIN');
$criterio->addRealJoin('vta_comision', 'vta_comision.id', 'fnd_chq_cheque.vta_comision_id', 'LEFT JOIN');
$criterio->addRealJoin('vta_comision_gral_fp_forma_pago', 'vta_comision_gral_fp_forma_pago.id', 'fnd_chq_cheque.vta_comision_gral_fp_forma_pago_id', 'LEFT JOIN');
$criterio->addRealJoin('pde_orden_pago', 'pde_orden_pago.id', 'fnd_chq_cheque.pde_orden_pago_id', 'LEFT JOIN');
$criterio->addRealJoin('pde_orden_pago_gral_fp_forma_pago', 'pde_orden_pago_gral_fp_forma_pago.id', 'fnd_chq_cheque.pde_orden_pago_gral_fp_forma_pago_id', 'LEFT JOIN');
$criterio->addRealJoin('pde_recibo', 'pde_recibo.id', 'fnd_chq_cheque.pde_recibo_id', 'LEFT JOIN');
$criterio->addRealJoin('pde_recibo_item', 'pde_recibo_item.id', 'fnd_chq_cheque.pde_recibo_item_id', 'LEFT JOIN');
$criterio->addRealJoin('fnd_caja_movimiento', 'fnd_caja_movimiento.id', 'fnd_chq_cheque.fnd_caja_movimiento_id', 'LEFT JOIN');
$criterio->addRealJoin('fnd_caja_movimiento_item', 'fnd_caja_movimiento_item.id', 'fnd_chq_cheque.fnd_caja_movimiento_item_id', 'LEFT JOIN');
$criterio->addRealJoin('fnd_caja', 'fnd_caja.id', 'fnd_chq_cheque.fnd_caja_id', 'LEFT JOIN');
$criterio->addRealJoin('gral_caja', 'gral_caja.id', 'fnd_chq_cheque.gral_caja_id', 'LEFT JOIN');
$criterio->addRealJoin('fnd_caja_ingreso', 'fnd_caja_ingreso.id', 'fnd_chq_cheque.fnd_caja_ingreso_id', 'LEFT JOIN');
$criterio->addRealJoin('fnd_caja_egreso', 'fnd_caja_egreso.id', 'fnd_chq_cheque.fnd_caja_egreso_id', 'LEFT JOIN');
    
$criterio->addTabla('fnd_chq_cheque');
$criterio->setCriterios();

