<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$xml_lenguaje_codigo = XmlLenguajeCodigo::getOxId($id);

$estado = ($xml_lenguaje_codigo->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'xml_lenguaje_codigo_uno.php';
?>

