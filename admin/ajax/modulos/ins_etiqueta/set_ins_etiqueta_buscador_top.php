<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(InsEtiqueta::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
InsEtiqueta::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('ins_etiqueta.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('ins_etiqueta.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_etiqueta.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_etiqueta.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

    
$criterio->addTabla('ins_etiqueta');
$criterio->setCriterios();

