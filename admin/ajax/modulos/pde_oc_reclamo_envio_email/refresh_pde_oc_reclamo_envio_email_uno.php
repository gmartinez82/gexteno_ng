<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$pde_oc_reclamo_envio_email = PdeOcReclamoEnvioEmail::getOxId($id);

$estado = ($pde_oc_reclamo_envio_email->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'pde_oc_reclamo_envio_email_uno.php';
?>

