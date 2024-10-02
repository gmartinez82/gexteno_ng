<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$eku_de_arsch01_resp = EkuDeArsch01Resp::getOxId($id);

$estado = ($eku_de_arsch01_resp->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'eku_de_arsch01_resp_uno.php';
?>

