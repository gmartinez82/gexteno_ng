<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(PanTipoPanol::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
PanTipoPanol::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('pan_tipo_panol.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('pan_tipo_panol.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pan_tipo_panol.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pan_tipo_panol.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

    
$criterio->addTabla('pan_tipo_panol');
$criterio->setCriterios();

