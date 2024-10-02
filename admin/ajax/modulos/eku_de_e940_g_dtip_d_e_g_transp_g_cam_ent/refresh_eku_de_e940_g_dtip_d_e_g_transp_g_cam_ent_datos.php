<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuDeE940GDtipDEGTranspGCamEnt::setSesPag($pag);

$criterio = new Criterio(EkuDeE940GDtipDEGTranspGCamEnt::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuDeE940GDtipDEGTranspGCamEnt::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuDeE940GDtipDEGTranspGCamEnt::getSesPagCantidad(), EkuDeE940GDtipDEGTranspGCamEnt::getSesPag());
$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ents = EkuDeE940GDtipDEGTranspGCamEnt::getEkuDeE940GDtipDEGTranspGCamEntsDesdeBackend($paginador, $criterio);

include 'eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_datos.php';
?>

