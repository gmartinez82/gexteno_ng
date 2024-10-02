<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(GralFpCuota::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
GralFpCuota::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('gral_fp_cuota.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('gral_fp_cuota.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_fp_cuota.cantidad', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_fp_cuota.por_default', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_fp_cuota.dias_vencimiento', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_fp_cuota.recargo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_fp_cuota.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_fp_cuota.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_fp_cuota.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_fp_medio_pago.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_fp_medio_pago.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_fp_medio_pago.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('gral_fp_medio_pago', 'gral_fp_medio_pago.id', 'gral_fp_cuota.gral_fp_medio_pago_id', 'LEFT JOIN');
    
$criterio->addTabla('gral_fp_cuota');
$criterio->setCriterios();

