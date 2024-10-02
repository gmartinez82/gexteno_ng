<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal = EkuDeE920GDtipDEGTranspGCamSal::getOxId($id);

$estado = ($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_uno.php';
?>

