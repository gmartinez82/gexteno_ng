<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$alt_alerta_envio_email = AltAlertaEnvioEmail::getOxId($id);

$estado = ($alt_alerta_envio_email->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'alt_alerta_envio_email_uno.php';
?>

