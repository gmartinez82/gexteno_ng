<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$pde_cotizacion_envio_email = PdeCotizacionEnvioEmail::getOxId($id);

$estado = ($pde_cotizacion_envio_email->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'pde_cotizacion_envio_email_uno.php';
?>

