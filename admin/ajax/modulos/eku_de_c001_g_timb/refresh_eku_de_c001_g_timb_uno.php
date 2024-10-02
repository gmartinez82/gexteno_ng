<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$eku_de_c001_g_timb = EkuDeC001GTimb::getOxId($id);

$estado = ($eku_de_c001_g_timb->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'eku_de_c001_g_timb_uno.php';
?>

