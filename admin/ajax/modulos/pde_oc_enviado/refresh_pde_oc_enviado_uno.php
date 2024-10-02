<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$pde_oc_enviado = PdeOcEnviado::getOxId($id);

$estado = ($pde_oc_enviado->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'pde_oc_enviado_uno.php';
?>

