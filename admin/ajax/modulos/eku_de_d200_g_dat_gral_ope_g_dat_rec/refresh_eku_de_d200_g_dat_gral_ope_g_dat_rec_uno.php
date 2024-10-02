<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$eku_de_d200_g_dat_gral_ope_g_dat_rec = EkuDeD200GDatGralOpeGDatRec::getOxId($id);

$estado = ($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'eku_de_d200_g_dat_gral_ope_g_dat_rec_uno.php';
?>

