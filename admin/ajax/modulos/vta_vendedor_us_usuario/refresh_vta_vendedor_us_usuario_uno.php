<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$vta_vendedor_us_usuario = VtaVendedorUsUsuario::getOxId($id);

$estado = ($vta_vendedor_us_usuario->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'vta_vendedor_us_usuario_uno.php';
?>

