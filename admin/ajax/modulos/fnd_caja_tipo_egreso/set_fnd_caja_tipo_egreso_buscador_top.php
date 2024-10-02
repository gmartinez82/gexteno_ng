<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(FndCajaTipoEgreso::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
FndCajaTipoEgreso::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('fnd_caja_tipo_egreso.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('fnd_caja_tipo_egreso.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_caja_tipo_egreso.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_caja_tipo_egreso.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_caja_tipo_egreso.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

    
$criterio->addTabla('fnd_caja_tipo_egreso');
$criterio->setCriterios();

