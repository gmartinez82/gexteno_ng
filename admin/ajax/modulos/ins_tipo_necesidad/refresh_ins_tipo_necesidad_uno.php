<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$ins_tipo_necesidad = InsTipoNecesidad::getOxId($id);

$estado = ($ins_tipo_necesidad->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'ins_tipo_necesidad_uno.php';
?>

