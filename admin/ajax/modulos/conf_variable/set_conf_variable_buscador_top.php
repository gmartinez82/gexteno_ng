<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(ConfVariable::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
ConfVariable::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('conf_variable.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('conf_variable.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('conf_variable.valor', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('conf_variable.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('conf_variable.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('conf_variable.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('conf_categoria.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('conf_categoria.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('conf_categoria.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('conf_categoria', 'conf_categoria.id', 'conf_variable.conf_categoria_id', 'LEFT JOIN');
    
$criterio->addTabla('conf_variable');
$criterio->setCriterios();

