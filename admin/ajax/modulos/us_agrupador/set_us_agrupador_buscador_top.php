<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(UsAgrupador::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
UsAgrupador::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('us_agrupador.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('us_credencial.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_credencial.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_credencial.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_grupo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_grupo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_grupo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('us_credencial', 'us_credencial.id', 'us_agrupador.us_credencial_id', 'LEFT JOIN');
$criterio->addRealJoin('us_grupo', 'us_grupo.id', 'us_agrupador.us_grupo_id', 'LEFT JOIN');
    
$criterio->addTabla('us_agrupador');
$criterio->setCriterios();

