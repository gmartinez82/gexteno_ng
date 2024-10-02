<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$eku_de_i001_signature = EkuDeI001Signature::getOxId($id);

$estado = ($eku_de_i001_signature->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'eku_de_i001_signature_uno.php';
?>

