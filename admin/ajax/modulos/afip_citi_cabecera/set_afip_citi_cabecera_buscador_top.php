<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(AfipCitiCabecera::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
AfipCitiCabecera::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('afip_citi_cabecera.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('afip_citi_cabecera.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_cabecera.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_cabecera.inicial', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_cabecera.actual', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_cabecera.afip_citi_cuit_informante', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_cabecera.afip_citi_periodo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_cabecera.afip_citi_secuencia', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_cabecera.afip_citi_sin_movimiento', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_cabecera.afip_citi_prorratear_cf_computable', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_cabecera.afip_citi_cf_computable_o_comprobante', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_cabecera.afip_citi_importe_cf_computable_global', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_cabecera.afip_citi_importe_cf_computable_asignacion_directa', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_cabecera.afip_citi_importe_cf_computable_prorrateo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_cabecera.afip_citi_importe_cf_no_computable_global', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_cabecera.afip_citi_importe_cf_contribuyente_ss_y_oc', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_cabecera.afip_citi_importe_cf_computable_ss_y_oc', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_cabecera.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_prc.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_prc.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_prc.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('afip_citi_prc', 'afip_citi_prc.id', 'afip_citi_cabecera.afip_citi_prc_id', 'LEFT JOIN');
    
$criterio->addTabla('afip_citi_cabecera');
$criterio->setCriterios();

