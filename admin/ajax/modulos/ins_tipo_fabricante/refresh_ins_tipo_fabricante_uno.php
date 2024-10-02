<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$ins_tipo_fabricante = InsTipoFabricante::getOxId($id);

$estado = ($ins_tipo_fabricante->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'ins_tipo_fabricante_uno.php';
?>

