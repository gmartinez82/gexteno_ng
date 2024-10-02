<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(PrvImportacionTipoEstado::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
PrvImportacionTipoEstado::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('prv_importacion_tipo_estado.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('prv_importacion_tipo_estado.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_importacion_tipo_estado.activo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_importacion_tipo_estado.permite_restablecer', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_importacion_tipo_estado.terminal', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_importacion_tipo_estado.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_importacion_tipo_estado.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

    
$criterio->addTabla('prv_importacion_tipo_estado');
$criterio->setCriterios();

