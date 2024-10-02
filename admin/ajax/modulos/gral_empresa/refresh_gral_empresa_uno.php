<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$gral_empresa = GralEmpresa::getOxId($id);

$estado = ($gral_empresa->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'gral_empresa_uno.php';
?>

