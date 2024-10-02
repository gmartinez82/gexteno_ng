<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(EkuDeE750GDtipDEGCamItemGRasMerc::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
EkuDeE750GDtipDEGCamItemGRasMerc::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc.eku_e751_dnumlote', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc.eku_e752_dvencmerc', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc.eku_e753_dnserie', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc.eku_e754_dnumpedi', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc.eku_e755_dnumsegui', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc.eku_e756_dnomimp', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc.eku_e757_ddirimp', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc.eku_e758_dnumfir', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc.eku_e759_dnumreg', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc.eku_e760_dnumregentcom', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('eku_de', 'eku_de.id', 'eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc.eku_de_id', 'LEFT JOIN');
$criterio->addRealJoin('eku_de_e700_g_dtip_d_e_g_cam_item', 'eku_de_e700_g_dtip_d_e_g_cam_item.id', 'eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc.eku_de_e700_g_dtip_d_e_g_cam_item_id', 'LEFT JOIN');
    
$criterio->addTabla('eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc');
$criterio->setCriterios();

