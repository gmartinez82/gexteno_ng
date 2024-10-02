<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');

$cmb_filtro_gral_moneda_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_gral_moneda_id', 0);


$criterio = new Criterio(GralMoneda::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
GralMoneda::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
$criterio->add(GralMoneda::GEN_ATTR_MONEDA_BASE, 1, Criterio::IGUAL);
    $criterio->addTrueInicialEnWhere();

if ($cmb_filtro_gral_moneda_id != 0) {
    $criterio->add('gral_moneda.id', $cmb_filtro_gral_moneda_id, Criterio::IGUAL);
}

$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('gral_moneda.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('gral_moneda.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_moneda.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_moneda.codigo_iso', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_moneda.numero_iso', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_moneda.simbolo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_moneda.moneda_base', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_moneda.por_default', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_moneda.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_moneda.orden', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

    
$criterio->addTabla('gral_moneda');
$criterio->setCriterios();

