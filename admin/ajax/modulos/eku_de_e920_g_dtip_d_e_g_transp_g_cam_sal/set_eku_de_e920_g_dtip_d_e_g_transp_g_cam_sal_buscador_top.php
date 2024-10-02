<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(EkuDeE920GDtipDEGTranspGCamSal::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
EkuDeE920GDtipDEGTranspGCamSal::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal.eku_e921_ddirlocsal', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal.eku_e922_dnumcassal', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal.eku_e923_dcomp1sal', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal.eku_e924_dcomp2sal', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal.eku_e925_cdepsal', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal.eku_e926_ddesdepsal', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal.eku_e927_cdissal', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal.eku_e928_ddesdissal', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal.eku_e929_cciusal', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal.eku_e930_ddesciusal', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal.eku_e931_dtelsal', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('eku_de', 'eku_de.id', 'eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal.eku_de_id', 'LEFT JOIN');
    
$criterio->addTabla('eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal');
$criterio->setCriterios();

