<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$eku_de_e020_g_dtip_d_e_g_comp_pub = EkuDeE020GDtipDEGCompPub::getOxId($id);

$estado = ($eku_de_e020_g_dtip_d_e_g_comp_pub->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'eku_de_e020_g_dtip_d_e_g_comp_pub_uno.php';
?>

