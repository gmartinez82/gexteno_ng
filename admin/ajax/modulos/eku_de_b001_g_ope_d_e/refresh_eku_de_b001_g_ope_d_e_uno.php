<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$eku_de_b001_g_ope_d_e = EkuDeB001GOpeDE::getOxId($id);

$estado = ($eku_de_b001_g_ope_d_e->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'eku_de_b001_g_ope_d_e_uno.php';
?>

