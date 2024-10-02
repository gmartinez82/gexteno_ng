<?php
include_once '_autoload.php';


$txt_buscador                       = Gral::getVars(Gral::VARS_POST, 'txt_buscador', '');
$txt_filtro_fecha_cobro_desde       = Gral::getVars(Gral::VARS_POST, 'txt_filtro_fecha_cobro_desde', '');
$txt_filtro_fecha_cobro_hasta       = Gral::getVars(Gral::VARS_POST, 'txt_filtro_fecha_cobro_hasta', '');
$txt_filtro_importe_desde           = Gral::getVars(Gral::VARS_POST, 'txt_filtro_importe_desde', '');
$txt_filtro_importe_hasta           = Gral::getVars(Gral::VARS_POST, 'txt_filtro_importe_hasta', '');
$cmb_filtro_fnd_chq_tipo_emisor_id  = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_fnd_chq_tipo_emisor_id', 0);
$cmb_filtro_fnd_chq_tipo_emision_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_fnd_chq_tipo_emision_id', 0);
$cmb_filtro_fnd_chq_tipo_pago_id    = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_fnd_chq_tipo_pago_id', 0);
$cmb_filtro_gral_banco_id           = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_gral_banco_id', 0);
$cmb_filtro_fnd_chq_tipo_estado_id  = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_fnd_chq_tipo_estado_id', 0);
$cmb_fnd_chq_en_cartera             = Gral::getVars(Gral::VARS_POST, 'cmb_fnd_chq_en_cartera', -1);
$cmb_gral_caja_id                   = Gral::getVars(Gral::VARS_POST, 'cmb_gral_caja_id', 0);


$criterio = new Criterio(FndChqCheque::SES_CRITERIOS);

$criterio->setAmbiguo(false);
$criterio->addDistinct(true);


$criterio->addInicioSubconsulta();

$criterio->add('', 'true', '', false, "");

if ($txt_filtro_fecha_cobro_desde != "") {
    $criterio->add(FndChqCheque::GEN_ATTR_FECHA_COBRO, Gral::getFechaToDB($txt_filtro_fecha_cobro_desde), Criterio::MAYORIGUAL);
}

if ($txt_filtro_fecha_cobro_hasta != "") {
    $criterio->add(FndChqCheque::GEN_ATTR_FECHA_COBRO, Gral::getFechaToDB($txt_filtro_fecha_cobro_hasta), Criterio::MENORIGUAL);
}

if ($txt_filtro_importe_desde != '')
{
    $criterio->add(FndChqCheque::GEN_ATTR_IMPORTE, $txt_filtro_importe_desde, Criterio::MAYORIGUAL);
}

if ($txt_filtro_importe_hasta != '') {
    $criterio->add(FndChqCheque::GEN_ATTR_IMPORTE, $txt_filtro_importe_hasta, Criterio::MENORIGUAL);
}

if ($cmb_filtro_fnd_chq_tipo_emisor_id != 0) {
    $criterio->add(FndChqCheque::GEN_ATTR_FND_CHQ_TIPO_EMISOR_ID, $cmb_filtro_fnd_chq_tipo_emisor_id, Criterio::IGUAL);
}

if ($cmb_filtro_fnd_chq_tipo_emision_id != 0) {
    $criterio->add(FndChqCheque::GEN_ATTR_FND_CHQ_TIPO_EMISION_ID, $cmb_filtro_fnd_chq_tipo_emision_id, Criterio::IGUAL);
}

if ($cmb_filtro_fnd_chq_tipo_pago_id != 0) {
    $criterio->add(FndChqCheque::GEN_ATTR_FND_CHQ_TIPO_PAGO_ID, $cmb_filtro_fnd_chq_tipo_pago_id, Criterio::IGUAL);
}

if ($cmb_filtro_fnd_chq_tipo_estado_id != 0) {
    $criterio->add(FndChqCheque::GEN_ATTR_FND_CHQ_TIPO_ESTADO_ID, $cmb_filtro_fnd_chq_tipo_estado_id, Criterio::IGUAL);
}

if ($cmb_filtro_gral_banco_id != 0) {
    $criterio->add(FndChqCheque::GEN_ATTR_GRAL_BANCO_ID, $cmb_filtro_gral_banco_id, Criterio::IGUAL);
}

if ($cmb_fnd_chq_en_cartera != -1){
    $criterio->add(FndChqTipoEstado::GEN_ATTR_EN_CARTERA, $cmb_fnd_chq_en_cartera, Criterio::IGUAL);
}

if ($cmb_gral_caja_id != 0){
    $criterio->add(FndChqCheque::GEN_ATTR_GRAL_CAJA_ID, $cmb_gral_caja_id, Criterio::IGUAL);
}

$criterio->addFinSubconsulta();

if ($txt_buscador != '')
{
    $criterio->addInicioSubconsulta();
    $criterio->add(FndChqChequera::GEN_ATTR_DESCRIPCION, $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
    $criterio->add(FndChqCheque::GEN_ATTR_NUMERO, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add(FndChqCheque::GEN_ATTR_CODIGO_SUCURSAL, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add(FndChqCheque::GEN_ATTR_FIRMANTE, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add(FndChqCheque::GEN_ATTR_ENTREGADOR, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add(GralBanco::GEN_ATTR_DESCRIPCION, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add(FndChqTipoEmision::GEN_ATTR_DESCRIPCION, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add(FndChqTipoEmisor::GEN_ATTR_DESCRIPCION, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add(FndChqTipoPago::GEN_ATTR_DESCRIPCION, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}

$criterio->addRealJoin(FndChqChequera::GEN_TABLA, FndChqChequera::GEN_ATTR_ID, FndChqCheque::GEN_ATTR_FND_CHQ_CHEQUERA_ID, 'LEFT JOIN');
$criterio->addRealJoin(GralBanco::GEN_TABLA, GralBanco::GEN_ATTR_ID, FndChqCheque::GEN_ATTR_GRAL_BANCO_ID, 'LEFT JOIN');
$criterio->addRealJoin(FndChqTipoEmisor::GEN_TABLA, FndChqTipoEmisor::GEN_ATTR_ID, FndChqCheque::GEN_ATTR_FND_CHQ_TIPO_EMISOR_ID, 'LEFT JOIN');
$criterio->addRealJoin(FndChqTipoEmision::GEN_TABLA, FndChqTipoEmision::GEN_ATTR_ID, FndChqCheque::GEN_ATTR_FND_CHQ_TIPO_EMISION_ID, 'LEFT JOIN');
$criterio->addRealJoin(FndChqTipoPago::GEN_TABLA, FndChqTipoPago::GEN_ATTR_ID, FndChqCheque::GEN_ATTR_FND_CHQ_TIPO_PAGO_ID, 'LEFT JOIN');
$criterio->addRealJoin(FndChqTipoEstado::GEN_TABLA, FndChqTipoEstado::GEN_ATTR_ID, FndChqCheque::GEN_ATTR_FND_CHQ_TIPO_ESTADO_ID, 'LEFT JOIN');
$criterio->addTabla(FndChqCheque::GEN_TABLA);

$criterio->setCriterios();
?>

