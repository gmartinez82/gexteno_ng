<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$eku_de_d001_g_dat_gral_ope = EkuDeD001GDatGralOpe::getOxId($id);

$estado = ($eku_de_d001_g_dat_gral_ope->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'eku_de_d001_g_dat_gral_ope_uno.php';
?>

