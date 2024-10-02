<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(PdeCentroRecepcionPanPanol::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
PdeCentroRecepcionPanPanol::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('pde_centro_recepcion_pan_panol.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('pde_centro_recepcion.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_centro_recepcion.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_centro_recepcion.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pan_panol.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pan_panol.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pan_panol.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('pde_centro_recepcion', 'pde_centro_recepcion.id', 'pde_centro_recepcion_pan_panol.pde_centro_recepcion_id', 'LEFT JOIN');
$criterio->addRealJoin('pan_panol', 'pan_panol.id', 'pde_centro_recepcion_pan_panol.pan_panol_id', 'LEFT JOIN');
    
$criterio->addTabla('pde_centro_recepcion_pan_panol');
$criterio->setCriterios();

