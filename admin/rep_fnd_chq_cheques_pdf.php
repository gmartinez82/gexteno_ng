<?php

set_time_limit(0);

include_once 'control/seguridad.php';
include_once '_autoload.php';

//include Gral::getPathAbs() . 'comps/tcpdf/pdf_comprobante_cheques.php';
include Gral::getPathAbs() . 'comps/tcpdf/pdf_plantilla_base.php';


$criterio = new Criterio(FndChqCheque::SES_CRITERIOS);

$criterio->setAmbiguo(false);
$criterio->addDistinct(true);


$criterio->addInicioSubconsulta();

$criterio->add('', 'true', '', false, "");


if ($cmb_filtro_fnd_chq_tipo_emisor_id != 0) {
    $criterio->add(FndChqCheque::GEN_ATTR_FND_CHQ_TIPO_EMISOR_ID, $cmb_filtro_fnd_chq_tipo_emisor_id, Criterio::IGUAL);
}

if ($cmb_filtro_fnd_chq_tipo_emision_id != 0) {
    $criterio->add(FndChqCheque::GEN_ATTR_FND_CHQ_TIPO_EMISION_ID, $cmb_filtro_fnd_chq_tipo_emision_id, Criterio::IGUAL);
}

if ($cmb_filtro_fnd_chq_tipo_pago_id != 0) {
    $criterio->add(FndChqCheque::GEN_ATTR_FND_CHQ_TIPO_PAGO_ID, $cmb_filtro_fnd_chq_tipo_pago_id, Criterio::IGUAL);
}

if ($cmb_filtro_gral_banco_id != 0) {
    $criterio->add(FndChqCheque::GEN_ATTR_GRAL_BANCO_ID, $cmb_filtro_gral_banco_id, Criterio::IGUAL);
}

if ($cmb_fnd_chq_en_cartera != -1){
    $criterio->add(FndChqTipoEstado::GEN_ATTR_EN_CARTERA, $cmb_fnd_chq_en_cartera, Criterio::IGUAL);
}

if ($cmb_filtro_fnd_chq_tipo_estado_id != 0) {
    $criterio->add(FndChqCheque::GEN_ATTR_FND_CHQ_TIPO_ESTADO_ID, $cmb_filtro_fnd_chq_tipo_estado_id, Criterio::IGUAL);
}

if ($txt_filtro_fecha_cobro_desde != "") {
    $criterio->add(FndChqCheque::GEN_ATTR_FECHA_COBRO, Gral::getFechaToDB($txt_filtro_fecha_cobro_desde), Criterio::MAYORIGUAL);
}

if ($txt_filtro_fecha_cobro_hasta != "") {
    $criterio->add(FndChqCheque::GEN_ATTR_FECHA_COBRO, Gral::getFechaToDB($txt_filtro_fecha_cobro_hasta), Criterio::MENORIGUAL);
}

if ($txt_filtro_fecha_creado_desde != "") {
    $criterio->add(FndChqCheque::GEN_ATTR_CREADO, Gral::getFechaToDB($txt_filtro_fecha_creado_desde), Criterio::MAYORIGUAL);
}

if ($txt_filtro_fecha_creado_hasta != "") {
    $criterio->add(FndChqCheque::GEN_ATTR_CREADO, Gral::getFechaToDB($txt_filtro_fecha_creado_hasta), Criterio::MENORIGUAL);
}

$criterio->addFinSubconsulta();

$criterio->addTabla(FndChqCheque::GEN_TABLA);
$criterio->addRealJoin(FndChqChequera::GEN_TABLA, FndChqChequera::GEN_ATTR_ID, FndChqCheque::GEN_ATTR_FND_CHQ_CHEQUERA_ID, 'LEFT JOIN');
$criterio->addRealJoin(GralBanco::GEN_TABLA, GralBanco::GEN_ATTR_ID, FndChqCheque::GEN_ATTR_GRAL_BANCO_ID, 'LEFT JOIN');
$criterio->addRealJoin(FndChqTipoEmisor::GEN_TABLA, FndChqTipoEmisor::GEN_ATTR_ID, FndChqCheque::GEN_ATTR_FND_CHQ_TIPO_EMISOR_ID, 'LEFT JOIN');
$criterio->addRealJoin(FndChqTipoEmision::GEN_TABLA, FndChqTipoEmision::GEN_ATTR_ID, FndChqCheque::GEN_ATTR_FND_CHQ_TIPO_EMISION_ID, 'LEFT JOIN');
$criterio->addRealJoin(FndChqTipoPago::GEN_TABLA, FndChqTipoPago::GEN_ATTR_ID, FndChqCheque::GEN_ATTR_FND_CHQ_TIPO_PAGO_ID, 'LEFT JOIN');
$criterio->addRealJoin(FndChqTipoEstado::GEN_TABLA, FndChqTipoEstado::GEN_ATTR_ID, FndChqCheque::GEN_ATTR_FND_CHQ_TIPO_ESTADO_ID, 'LEFT JOIN');
$criterio->addOrden(FndChqCheque::GEN_ATTR_FECHA_COBRO, Criterio::_ASC);
$criterio->addOrden(FndChqCheque::GEN_ATTR_GRAL_BANCO_ID, Criterio::_ASC);
$criterio->addOrden(FndChqCheque::GEN_ATTR_IMPORTE, Criterio::_ASC);

$criterio->setCriterios();
$fnd_chq_cheques = FndChqCheque::getFndChqCheques(null, $criterio);
//Gral::prr($fnd_chq_cheques);

$tipo = "Listado de Cheques";
$pdf = new PDFPlantillaBase($orientation = 'P');
$pdf->SetTipo($tipo);
$pdf->SetFecha(date('d/m/Y H:i'));

$pdf->AddPage();
$pdf->SetFont('Helvetica', 'B', 12);
$pdf->setUsuario($user);

$pdf->setX(0);
$pdf->setY(21.5);

$pdf->SetMargins(10, 22, 10, true);
$pdf->SetAutoPageBreak(TRUE, 20);


// -----------------------------------------------------------------------------
// Cuerpo de Comprobante
// -----------------------------------------------------------------------------
$param = array(
    'fnd_chq_tipo_emisor_id'    => $fnd_chq_tipo_emisor_id,
    'fnd_chq_tipo_emision_id'   => $fnd_chq_tipo_emision_id,
    'fnd_chq_tipo_pago_id'      => $fnd_chq_tipo_pago_id,
    'gral_banco_id'             => $gral_banco_id,
    'fnd_chq_tipo_estado_id'    => $fnd_chq_tipo_estado_id,
    'fnd_chq_en_cartera'        => $fnd_chq_en_cartera,
    'fnd_chq_fecha_cobro_desde' => $txt_filtro_fecha_cobro_desde,
    'fnd_chq_fecha_cobro_hasta' => $txt_filtro_fecha_cobro_hasta,
    'fnd_chq_cheques'           => $fnd_chq_cheques
);

$archivo = Gral::getPathAbs() . "admin/rep_fnd_chq_cheques_pdf_tabla.php";
$html = Gral::get_include_contents($archivo, $param);

$pdf->writeHTML($html);

$pdf->Output(Gral::getConfig('conf_proyecto_min').' - Cheques', 'I');
exit;
?>
