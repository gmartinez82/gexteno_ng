<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco = EkuDeD130GDatGralOpeGEmisGActEco::getOxId($id);

$estado = ($eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco_uno.php';
?>

