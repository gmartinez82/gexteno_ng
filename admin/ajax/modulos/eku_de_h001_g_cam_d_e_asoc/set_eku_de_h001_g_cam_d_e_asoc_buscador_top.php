<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(EkuDeH001GCamDEAsoc::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
EkuDeH001GCamDEAsoc::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('eku_de_h001_g_cam_d_e_asoc.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('eku_de_h001_g_cam_d_e_asoc.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_h001_g_cam_d_e_asoc.eku_h002_itipdocaso', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_h001_g_cam_d_e_asoc.eku_h003_ddestipdocaso', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_h001_g_cam_d_e_asoc.eku_h004_dcdcderef', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_h001_g_cam_d_e_asoc.eku_h005_dntimdi', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_h001_g_cam_d_e_asoc.eku_h006_destdocaso', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_h001_g_cam_d_e_asoc.eku_h007_dpexpdocaso', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_h001_g_cam_d_e_asoc.eku_h008_dnumdocaso', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_h001_g_cam_d_e_asoc.eku_h009_itipodocaso', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_h001_g_cam_d_e_asoc.eku_h010_ddtipodocaso', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_h001_g_cam_d_e_asoc.eku_h011_dfecemidi', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_h001_g_cam_d_e_asoc.eku_h012_dnumcomret', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_h001_g_cam_d_e_asoc.eku_h013_dnumrescf', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_h001_g_cam_d_e_asoc.eku_h014_itipcons', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_h001_g_cam_d_e_asoc.eku_h015_ddestipcons', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_h001_g_cam_d_e_asoc.eku_h016_dnumcons', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_h001_g_cam_d_e_asoc.eku_h017_dnumcontrol', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_h001_g_cam_d_e_asoc.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_h001_g_cam_d_e_asoc.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_h001_g_cam_d_e_asoc.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('eku_de', 'eku_de.id', 'eku_de_h001_g_cam_d_e_asoc.eku_de_id', 'LEFT JOIN');
    
$criterio->addTabla('eku_de_h001_g_cam_d_e_asoc');
$criterio->setCriterios();

