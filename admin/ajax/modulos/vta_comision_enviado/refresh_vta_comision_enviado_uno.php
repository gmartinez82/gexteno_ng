<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$vta_comision_enviado = VtaComisionEnviado::getOxId($id);

$estado = ($vta_comision_enviado->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'vta_comision_enviado_uno.php';
?>

