<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$eku_de_d010_g_dat_gral_ope_g_ope_com = EkuDeD010GDatGralOpeGOpeCom::getOxId($id);

$estado = ($eku_de_d010_g_dat_gral_ope_g_ope_com->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'eku_de_d010_g_dat_gral_ope_g_ope_com_uno.php';
?>

