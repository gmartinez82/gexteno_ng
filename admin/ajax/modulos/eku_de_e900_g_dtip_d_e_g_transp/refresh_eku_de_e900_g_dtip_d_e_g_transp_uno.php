<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$eku_de_e900_g_dtip_d_e_g_transp = EkuDeE900GDtipDEGTransp::getOxId($id);

$estado = ($eku_de_e900_g_dtip_d_e_g_transp->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'eku_de_e900_g_dtip_d_e_g_transp_uno.php';
?>

