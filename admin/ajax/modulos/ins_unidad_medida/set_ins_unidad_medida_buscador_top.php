<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(InsUnidadMedida::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
InsUnidadMedida::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('ins_unidad_medida.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('ins_unidad_medida.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_unidad_medida.descripcion_corta', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_unidad_medida.fraccionable', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_unidad_medida.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_unidad_medida.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

    
$criterio->addTabla('ins_unidad_medida');
$criterio->setCriterios();

