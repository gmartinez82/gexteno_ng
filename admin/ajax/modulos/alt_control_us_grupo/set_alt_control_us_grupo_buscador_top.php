<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(AltControlUsGrupo::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
AltControlUsGrupo::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('alt_control_us_grupo.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('alt_control.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('alt_control.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('alt_control.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_grupo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_grupo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_grupo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('alt_control', 'alt_control.id', 'alt_control_us_grupo.alt_control_id', 'LEFT JOIN');
$criterio->addRealJoin('us_grupo', 'us_grupo.id', 'alt_control_us_grupo.us_grupo_id', 'LEFT JOIN');
    
$criterio->addTabla('alt_control_us_grupo');
$criterio->setCriterios();

