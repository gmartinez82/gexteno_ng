<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(EkuDeG050GCamGenGCamCarg::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
EkuDeG050GCamGenGCamCarg::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('eku_de_g050_g_cam_gen_g_cam_carg.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('eku_de_g050_g_cam_gen_g_cam_carg.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_g050_g_cam_gen_g_cam_carg.eku_g051_cunimedtotvol', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_g050_g_cam_gen_g_cam_carg.eku_g052_ddesunimedtotvol', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_g050_g_cam_gen_g_cam_carg.eku_g053_dtotvolmerc', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_g050_g_cam_gen_g_cam_carg.eku_g054_cunimedtotpes', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_g050_g_cam_gen_g_cam_carg.eku_g055_ddesunimedtotpes', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_g050_g_cam_gen_g_cam_carg.eku_g056_dtotpesmerc', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_g050_g_cam_gen_g_cam_carg.eku_g057_icarcarga', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_g050_g_cam_gen_g_cam_carg.eku_g058_ddescarcarga', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_g050_g_cam_gen_g_cam_carg.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_g050_g_cam_gen_g_cam_carg.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_g050_g_cam_gen_g_cam_carg.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('eku_de', 'eku_de.id', 'eku_de_g050_g_cam_gen_g_cam_carg.eku_de_id', 'LEFT JOIN');
    
$criterio->addTabla('eku_de_g050_g_cam_gen_g_cam_carg');
$criterio->setCriterios();

