<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(AltAlerta::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
AltAlerta::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('alt_alerta.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('alt_alerta.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('alt_alerta.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('alt_alerta.referencia', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('alt_alerta.url_redireccion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('alt_alerta.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('alt_modulo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('alt_modulo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('alt_modulo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('alt_tipo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('alt_tipo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('alt_tipo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('alt_nivel.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('alt_nivel.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('alt_nivel.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('alt_origen.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('alt_origen.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('alt_origen.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('alt_control.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('alt_control.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('alt_control.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('alt_modulo', 'alt_modulo.id', 'alt_alerta.alt_modulo_id', 'LEFT JOIN');
$criterio->addRealJoin('alt_tipo', 'alt_tipo.id', 'alt_alerta.alt_tipo_id', 'LEFT JOIN');
$criterio->addRealJoin('alt_nivel', 'alt_nivel.id', 'alt_alerta.alt_nivel_id', 'LEFT JOIN');
$criterio->addRealJoin('alt_origen', 'alt_origen.id', 'alt_alerta.alt_origen_id', 'LEFT JOIN');
$criterio->addRealJoin('alt_control', 'alt_control.id', 'alt_alerta.alt_control_id', 'LEFT JOIN');
    
$criterio->addTabla('alt_alerta');
$criterio->setCriterios();

