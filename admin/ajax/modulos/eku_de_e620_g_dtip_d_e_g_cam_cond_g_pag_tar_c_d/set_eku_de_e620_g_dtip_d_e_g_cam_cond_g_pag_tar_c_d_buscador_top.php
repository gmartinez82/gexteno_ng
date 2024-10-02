<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(EkuDeE620GDtipDEGCamCondGPagTarCD::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
EkuDeE620GDtipDEGCamCondGPagTarCD::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d.eku_e621_identarj', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d.eku_e622_ddesdentarj', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d.eku_e623_drsprotar', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d.eku_e624_drucprotar', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d.eku_e625_ddvprotar', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d.eku_e626_iforpropa', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d.eku_e627_dcodauope', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d.eku_e628_dnomtit', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d.eku_e629_dnumtarj', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('eku_de', 'eku_de.id', 'eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d.eku_de_id', 'LEFT JOIN');
    
$criterio->addTabla('eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d');
$criterio->setCriterios();

