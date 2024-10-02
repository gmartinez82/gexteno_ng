<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$prv_telefono_tipo = PrvTelefonoTipo::getOxId($id);

$estado = ($prv_telefono_tipo->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'prv_telefono_tipo_uno.php';
?>

