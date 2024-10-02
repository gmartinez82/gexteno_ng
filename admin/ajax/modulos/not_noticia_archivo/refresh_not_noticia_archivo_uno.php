<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$not_noticia_archivo = NotNoticiaArchivo::getOxId($id);

$estado = ($not_noticia_archivo->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'not_noticia_archivo_uno.php';
?>

