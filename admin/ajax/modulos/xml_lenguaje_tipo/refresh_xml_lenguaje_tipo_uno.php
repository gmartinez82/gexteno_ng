<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$xml_lenguaje_tipo = XmlLenguajeTipo::getOxId($id);

$estado = ($xml_lenguaje_tipo->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'xml_lenguaje_tipo_uno.php';
?>

